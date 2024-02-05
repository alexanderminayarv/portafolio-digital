<?php

        if($_POST){

            
            if(empty($_POST['name']) ||  empty($_POST['email']) ||empty($_POST['message']) )
            {
                $arrResponse = array('status' => false, 'msg' => 'No se ha enviado el mensaje' );
                
            }
            else
            {
                $nombre=$_POST['name'];
                $email=$_POST['email'];
                $asunto="Consultas o dudas";
                $mensaje=$_POST['message'];

                //datos para el correo
                $destinatario="hola@alexanderminaya.com";
        
                $header="From: " . $email . "\r\n";
                $header.="Reply-To: " . $email . "\r\n";
                $header.="X-Mailer: PHP/". phpversion();
        
                //enviar mensaje
                $mail=@mail($destinatario,$asunto,$nombre . ": " .$mensaje,$header);
                
                if($mail){
                    $arrResponse = array('status' => true, 'msg' => 'Se envió correctame el mensaje'); 
                }else{
                    $arrResponse = array('status' => false, 'msg' => 'No se ha enviado el mensaje');
                }
            }

            echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);

        }
        else
        {
            $arrResponse = array('status' => false, 'msg' => 'No se ha enviado el mensaje');
            echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
        }
        die();
?>