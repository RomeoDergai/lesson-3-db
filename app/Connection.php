<?php

namespace App;


abstract class Connection implements ModelInterface
{
    public static $pdo;

    /**
     * @param null $condition
     * @return array
     */
    public static function find($condition = null){
        $sql = "SELECT * FROM `".static::tableName()."`";

        if($condition){
            $sql .= " WHERE $condition";
        }

        $PDOResult = static::$pdo->query($sql);

        return $PDOResult->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * @param $condition
     * @return array
     */
    public static function findOne($condition){
        $result = static::find($condition);

        if(!empty($result)){
            return $result[0];
        }

        return $result;
    }

}
