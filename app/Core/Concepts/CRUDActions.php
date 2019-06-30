<?php

namespace Matican\Core\Concepts;


use Matican\Core\Transaction\Request;

abstract class CRUDActions
{

    /**
     * @param $instance
     * @return \Matican\Core\Transaction\Response|string
     * @throws \ReflectionException
     */
    public static function new($instance)
    {
        $class = get_class($instance);
        $exploded = explode('\\', $class);
        $request = new Request($exploded[2], $exploded[3], 'new');
        $request->add_instance($instance);
        $response = $request->send();
        return $response;
    }


    /**
     * @param $modelName
     * @param $modelInstance
     * @return \Matican\Core\Transaction\Response|string
     * @throws \ReflectionException
     */
    public static function edit($modelName, $modelInstance)
    {
//        $class = get_class($className);
        $class = $modelName;
        $exploded = explode('\\', $class);
        $request = new Request($exploded[2], $exploded[3], 'edit');
        $request->add_instance($modelInstance);
        $response = $request->send();
        return $response;
    }

    /**
     * @param $modelName
     * @param $id
     * @return string
     */
    public static function delete($modelName, $id)
    {
//        $class = get_class($className);
        $class = $modelName;
        $exploded = explode('\\', $class);
        $request = new Request($exploded[2], $exploded[3], 'delete');
//        $request->add_instance($this);
        $request->add_query('id', $id);
        $response = $request->send();
        return $response;
    }


    /**
     * @param $modelName
     * @param $id
     * @return \Matican\Core\Transaction\Response|string
     */
    public static function fetch($modelName, $id)
    {
//        $class = self::class;
        $class = $modelName;
        $exploded = explode('\\', $class);
        $request = new Request($exploded[2], $exploded[3], 'fetch');
        $request->add_query('id', $id);
        $response = $request->send();
        return $response;
    }


    public static function all($modelName)
    {
        $class = $modelName;
        $exploded = explode('\\', $class);
        $request = new Request($exploded[2], $exploded[3], 'all');

        $response = $request->send();
        return $response;
    }
}