<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 09/08/19
 * Time: 16:27
 */

namespace Matican\Authentication;


use Matican\Core\Entities\Authentication;
use Matican\Core\Servers;
use Matican\Models\Authentication\UserModel;
use Matican\ModelSerializer;
use Matican\Settings;
use Symfony\Component\Filesystem\Filesystem;
use Matican\Core\Transaction\Request as Req;

class AuthUser
{
    public static function login($userModel)
    {
        @session_start();
        $_SESSION['user'] = ModelSerializer::reverse($userModel, true);
        return true;
    }

    /**
     * @return UserModel | mixed
     */
    public static function current_user()
    {
        if (isset($_SESSION['user'])) {
            return ModelSerializer::parse($_SESSION['user'], UserModel::class);
        } else {
            return false;
        }
    }

    /**
     * @param $action string
     * @return bool
     */
    public static function if_is_allowed($action)
    {

        return true;
        /**
         * @var $currentUser UserModel
         */
        $currentUser = self::current_user();
//        if (!$currentUser) {
//            $loginPageUrl = Params::loginPageUrl();
//            $location = "Location: http://" . $_SERVER['HTTP_HOST'] . $loginPageUrl;
////            dd($location);
//            header($location);
//            die();
//        }
        $permissions = json_decode(self::getPermissions(), true);
        $userRolePermission = $permissions[$currentUser->getRoleId()];
        if (in_array($action, $userRolePermission)) {
            return true;
        } else {
            return false;
        }
    }

    public static function getPermissions()
    {
        return file_get_contents(Params::get('PERMISSION_CACHE_FILE'));
    }

    public static function cachePermissions($permissionsJson)
    {
        $fileSystem = new Filesystem();


        $cacheFilePath = Settings::get('PERMISSIONS_CACHE_FILE');
//        $cacheFilePath = Params::get('PERMISSION_CACHE_FILE');
        $cacheFileDir = Settings::get('PERMISSION_CACHE_DIR');;
//        $cacheFileDir = Params::get('PERMISSION_CACHE_DIR');

        if (!$fileSystem->exists($cacheFilePath)) {
            $fileSystem->mkdir($cacheFileDir);
            $fileSystem->touch($cacheFilePath);
        } else {
            $fileSystem->remove($cacheFilePath);
        }
        $fileSystem->mkdir($cacheFileDir);
        $fileSystem->touch($cacheFilePath);
        $cacheContent = json_encode($permissionsJson);
        $fileSystem->appendToFile($cacheFilePath, $cacheContent);
        return true;

    }

    public static function logout()
    {
        @session_start();
        $_SESSION['user'] = null;
        return true;
    }

    public static function check_if_user_is_logged_in()
    {
        @session_start();
        $currentUser = AuthUser::current_user();
        if (!$currentUser) {
            if ($_SERVER) {
                if (isset($_SERVER['REQUEST_URI'])) {

                    if (strpos($_SERVER['REQUEST_URI'], Settings::get('LOGIN_PAGE_URL')) !== false) {
                        /*
                        * DO NOTHING
                        */
                    } else {
                        $redirectURL = Settings::get('APPLICATION_DOMAIN') .
                            Settings::get('LOGIN_PAGE_URL');

                        if (isset($_REQUEST['reseller_token'])) {
                            $redirectURL .= "?reseller_token=" . $_REQUEST['reseller_token'];
                        }

                        header(
                            'Location: ' . $redirectURL
                        );
                        die;
                    }
                }
            }
        }
    }

    public static function purge_role_permissions()
    {
        $rolePermissionRequest = new Req(Servers::Authentication, Authentication::Role, 'get_roles_permissions');
        $response = $rolePermissionRequest->send();
        AuthUser::cachePermissions($response->getContent());
    }
}