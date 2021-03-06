<?php
/**
 * Created by PhpStorm.
 * User: sportak
 * Date: 11/12/2018
 * Time: 20:26
 */


class App
{
    private static $container=[];


    /**
     * @param string $key
     * @param $value
     */
    public static function bind(string $key,$value){
        static::$container[$key]=$value;
    }

    /**
     * @param string $key
     * @return mixed
     * @throws Exception
     */
    public static function get(string $key){
        if(!array_key_exists($key,static::$container)){
            throw new Exception("No se ha encontrado la clave en el contenedor");
        }else{
            return static::$container[$key];
        }
    }

    /**
     * @return PDO
     */
    public static function getConnection():PDO{
        if(!array_key_exists('connection',static::$container)){
            static::$container['connection']=Connection::make();

        }

        return static::$container['connection'];
    }
}