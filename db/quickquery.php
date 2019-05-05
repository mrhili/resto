<?php


class QuickQuery extends InitDB{


    public static function first($table , $id , $rows ){

        $conn = self::init();

        if( is_array( $rows ) ){
            $rows = implode( ", ", $rows );
        }

        $sql = "SELECT ".$rows." FROM ".$table." WHERE id = ?";

        $query = $conn->prepare($sql);
        $query->execute([$id]);
        return $query->fetch()[0];

    }




}

$quick_query = new QuickQuery();