<?php

include_once( "init.php");

$tools::deepdebug(  );

$errMsg = '';

$price = 0.0;

$order_id = 100;

$around_ordering_id = 100;

$good = [False, False];



if($_SERVER["REQUEST_METHOD"] != "POST") {

    $utilities::back();


}else{




    if(count($_POST)>0) {

        $note = $_POST['note'];

        $costumer = $_POST['custumer'];

        $type = $_POST['type'];
        //first($table , $id , $rows , Array $variables )

        $price += floatval(  $quick_query::first('types', $type, 'price')  );
   
        $arounds = $_POST['arounds'];

        foreach( $arounds as $around ){

            $price += floatval(  $quick_query::first('arounds', $around, 'price')  );

        }

        $size = $_POST['size'];

        $quick_query::first('sizes', $type, 'taux');

        $price = floatval( $math::pourcentage($price, $quick_query::first('sizes', $type, 'taux') ) );

        $price = $money::limit( $price );


        if($errMsg == ''){

            try {
                
                $sql = "INSERT INTO orderings (note, costumer_id, size_id, type_id, user_id, price  ) VALUES(?,?,?,?,?,?)";
                $order_insert = $conn->prepare($sql)->execute([$note, $costumer, $size, $type, $_SESSION['id'], $price ]);

                $order_id  = $conn->lastInsertId();

                $good[0] = True;
      

            }
            catch(PDOException $e) {

                $errMsg .= $e->getMessage();
                echo $errMsg;
                

            }


            foreach( $arounds as $around ){

                try {
                
                    $sql = "INSERT INTO around_ordering (around_id, ordering_id  ) VALUES(?,?)";
                    $conn->prepare($sql)->execute([ $around, $order_id ]);

                    $around_ordering_id = $conn->lastInsertId();

                    $good[1] = True;
          
  
                }
                catch(PDOException $e) {
    
                    $errMsg .= $e->getMessage();
                    echo $errMsg;


                    $good[1] = False;
                    
    
                }
    
            }


            if( $good[0]  && $good[1]){


                //GO SEE THE ORDERING



            }





        }else{
            $utilities::back();
        }


        $alert::write( $errMsg );



        //$tools::debug( $_POST['arounds'] );





    }

}


$alert::write( $errMsg );
