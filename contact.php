<?php 
// check if fields passed are empty 
 
 if(empty($_POST['name'])   ||    
    empty($_POST['phone'])  ||
    empty($_POST['email'])  ||
    empty($_POST['msg'])||   
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))    
  {     
       echo "No arguments Provided!";   return false;    
  } 
     
  $name = $_POST['name']; 
  $phone = $_POST['phone']; 
  $email_address = $_POST['email']; 
  $message = $_POST['msg'];      
 
 // create email body and send it    
$to  = 'mono.romero@gmail.com' . ', ';
$to .= 'mono.romero@gmail.com';
 // put your email 
 $email_subject = "Web:  $name"; $email_body = "Nuevo mensaje desde la Pagina Web \n\n".                 
                   " Detalles:\n \n Nombre: $name \n ".                  
                   "Email: $email_address\n \n Mensaje: \n $message"; 
 $headers = "From: info@augusta124.com\n"; 
 $headers .= "Reply-To: $email_address";     
 
 mail($to,$email_subject,$email_body,$headers); 
 return true;             
?>