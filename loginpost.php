<?php

include_once( "init.php");

$errMsg = '';



if($_SERVER["REQUEST_METHOD"] != "POST") {




    $utilities::back();


}else{




    if(count($_POST)>0) {

        $email = $_POST['email'];
        $pass = $_POST['pass'];


        if($email == ''){

            $errMsg .= 'Enter email';

        }
            
                
        if($pass == ''){

            $errMsg .= 'Enter password';

        }



        if($errMsg == ''){

            try {
                
                $stmt = $connect->prepare('SELECT id, email, name, pass FROM users WHERE email = :email');
                $stmt->execute(array(
                    ':email' => $email
                    ));

                $data = $stmt->fetch(PDO::FETCH_ASSOC);

                

                if($data == false){
                    $errMsg .= " END Email ".$email." not found.";

                }else {

                    if( md5( $pass ) == $data['pass']) {
                        $_SESSION['email'] = $data['email'];
                        $_SESSION['name'] = $data['name'];
                        $_SESSION['pass'] = $data['pass'];
                        $_SESSION['id'] = $data['id'];
                        $_SESSION['role'] = $data['role'];
                        $_SESSION['logged'] = True;

                        if($_SESSION['role'] == 1 ){
                            
                            header('Location: dashboard.php');
                            exit;
                        }elseif($_SESSION['role'] == 0 ){
                            header('Location: meal.php');
                            exit;
                        }
                        session_destroy();
                        header('Location: index.php');
                            
                        exit;
                    }
                    else{
                        $errMsg .= ' END Password not match.';

                    }
                        
                }
            }
            catch(PDOException $e) {

                $errMsg .= $e->getMessage();
                echo $errMsg;
                

            }
        }


        
            



    }else{


        $utilities::back();




    }

}


$alert::write( $errMsg );

