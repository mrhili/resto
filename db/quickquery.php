<?php


class QuickQuery extends InitDB{


    public static function first($table , $id , $rows ='*' ){

        $conn = self::init();

        if( is_array( $rows ) ){
            $rows = implode( ", ", $rows );
        }

        $sql = "SELECT ".$rows." FROM ".$table." WHERE id = ?";

        $query = $conn->prepare($sql);
        $query->execute([$id]);
        return $query->fetch()[0];

    }

    public static function first_row($table , $id , $rows ='*' ){

        $conn = self::init();

        if( is_array( $rows ) ){
            $rows = implode( ", ", $rows );
        }

        $sql = "SELECT ".$rows." FROM ".$table." WHERE id = ?";

        $query = $conn->prepare($sql);
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);

    }


    public static function rows($table , $columns='' , $rows ='*' ){

        

        

        $conn = self::init();

        $counter = 1;

        $string = '';

        if( is_array( $rows ) ){
            $rows = implode( ", ", $rows );
        }

        $sql = "SELECT ".$rows." FROM ".$table;

        if( is_array( $columns ) ){

            //self::debug( $columns );
            
           
            foreach($columns as $key => $column ){

                $string.= '('.$key.'= :'. $key.')';
    
                if($counter != 1 && $counter != count( $columns ) ){
    
                    $string.=' AND ';
    
                }
    
                
                $counter++;
    
            }

            $sql .= ' WHERE '.$string;

            
        }elseif( $columns != '' && !is_array( $columns)  ){

            $sql .= ' WHERE '.$columns;

        }

        


        try{


        $query = $conn->prepare($sql);

        //self::debug($string);
        //self::debug($sql);

        

        $counter = null;$string = null;

        if( is_array( $columns ) ){

            

            //self::debug($columns);

            $query->execute($columns);

        }else{

            $query->execute(  );

        }

        

        return $query->fetchAll(PDO::FETCH_OBJ);

        }catch(PDOException $e){

            

            echo $e;

        }

    }




}

$quick_query = new QuickQuery();