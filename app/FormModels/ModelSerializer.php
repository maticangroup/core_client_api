<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 01/07/19
 * Time: 16:53
 */

namespace Matican\FormModels;


class ModelSerializer
{
    /**
     * @param $json
     * @param $class
     * @return mixed
     */
    public static function parse($json, $class)
    {
        $properties = (array)json_decode(json_encode($json));
        if (class_exists($class)) {
            $classInstance = new $class();
            foreach ($properties as $property => $value) {
                $setterName = "set" . $property;
                if (method_exists($classInstance, $setterName)) {
                    $classInstance->{$setterName}($value);
                }
            }
            return $classInstance;
        }
    }

    public static function reverse($model, $toJson = false)
    {
        $className = get_class($model);
        $reflection = new \ReflectionClass($className);
        $classProperties = $reflection->getProperties();
        $resultArray = [];
        foreach ($classProperties as $classProperty) {
            $getterName = "get" . ucfirst($classProperty->getName());
            if (method_exists($model, $getterName)) {
                $resultArray[$classProperty->getName()] = $model->{$getterName}();
            }
        }
        return ($toJson) ? json_encode($resultArray) : $resultArray;
    }
}