 <?php
by mr SNtripathi
         $to_mail = $_REQUEST['to'];

      

        

         $subject  = $_REQUEST['sub'];

         $content =	$_REQUEST['msg'];	 

          

              

         $retval = mail($to_mail,$subject,$content);

         

         if( $retval == true ) {

            echo "Message sent successfully...";

         }else {

            echo "Message could not be sent...";

         }

      ?>
