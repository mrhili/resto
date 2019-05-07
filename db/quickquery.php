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


    public static function rows($table , $columns , $rows ='*' ){

        

        

        $conn = self::init();

        $counter = 1;

        $string = '';

        if( is_array( $rows ) ){
            $rows = implode( ", ", $rows );
        }

        $sql = "SELECT ".$rows." FROM ".$table." WHERE ";

        if( is_array( $columns ) ){
            
           
            foreach($columns as $key => $column ){

                $string.= '('.$key.'= :'. $key.')';
    
                if($counter != 1 && $counter != count( $columns ) ){
    
                    $string.=' AND ';
    
                }
    
                
                $counter++;
    
            }

            $sql .= $string;

            echo $sql;
            
        }else{

            $sql .= $columns;

        }

        


        try{


        $query = $conn->prepare($sql);

        

        $counter = null;$string = null;

        $query->execute($columns);

        return $query->fetch(PDO::FETCH_OBJ);

        }catch(PDOException $e){

            

            echo $e;

        }

    }




}

$quick_query = new QuickQuery();