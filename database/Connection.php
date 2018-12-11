<?php
/**
 * Created by PhpStorm.
 * User: sportak
 * Date: 11/12/2018
 * Time: 20:00
 */

class Connection
{
    /**
     * @return PDO
     * @throws Exception
     */
    public static function make(){
        try{
            $config=App::get('config')['database'];
            $connection=new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );

        }catch(PDOException $PDOException){
            die($PDOException->getMessage());
        }
        return $connection;
    }
}