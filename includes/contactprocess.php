<?php
   //error messsges variable
   $firstnameErr = $lastnameErr = $emailErr = $messageErr = $subjectErr =  $success = $subject = '';

 //check if the form was submitted
 if(isset($_POST['submit'])){
   //variables
   $firstname = inspectInput($_POST['firstname']);
   $lastname = inspectInput($_POST['lastname']);
   $email = inspectInput($_POST['email']);
   $subject = inspectInput($_POST['subject']);
   $message = inspectInput($_POST['message']);

   //check if all fields are empty
   if(!empty($_POST['firstname'])){
     //store variable
     $firstname = inspectInput($_POST['firstname']);

     //check if there is only letter and whitespaces
     if(!preg_match("/^[a-zA-Z ]*$/",$firstname)){
       $firstnameErr = "Please enter only letters and whitespaces";
     }
     //check the length of the name
     if(strlen($firstname) <= 3){
     $firstnameErr = "Your firstname is too short";
     }
      } else {
     //give error msg if it empty
     $firstnameErr = "First name field is required";
   }

    if(!empty($_POST['lastname'])){
     //store variable
     $lastname = inspectInput($_POST['lastname']);

     //check if there is only letter and whitespaces
     if(!preg_match("/^[a-zA-Z ]*$/",$lastname)){
       $lastnameErr = "Please enter only letters and whitespaces";
     }
     //check the length of the name
     if(strlen($lastname) <= 3){
     $lastnameErr = "Your lastname is too short";
     }
      } else {
     //give error msg if it empty
     $lastnameErr = "Last name field is required";
   }

   if(!empty($_POST['email'])){
     //store variable
     $email = inspectInput($_POST['email']);
     //check if the email is valid one
     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $emailErr = "Please enter a valid email";
     }
   } else {
     //give error msg if it empty
     $emailErr = "Email field is required";
   }
    
    if(empty($_POST['subject'])){
        $subjectErr = "Subject field is required";
   }

   if(!empty($_POST['message'])){
     //store variable
     $message = inspectInput($_POST['message']);
   } else {
     //give error msg if it empty
   $messageErr = "Message field is required";
   }

   //if there is no errors do this
   if($firstnameErr == "" && $lastnameErr == "" && $emailErr == "" && $messageErr == "" && $subjectErr == ""){
     unset($_POST['submit']);
     //variables to send email
     $mailTo = 'example@gmail.com';
     $mailSubject = 'New Contact Form Message';
     $mailBody = 'A new contact form message from ' .$firstname." ".$lastname. ' and the subject is '.$subject. ' and the message reads' . "\r\n".$message;
     $headers = 'From: '. $firstname ." ".$email . "\r\n";
     $headers .= 'Reply-To: ' . $email;

     //if mail is sent do this
     if(mail($mailTo, $mailSubject, $mailBody, $headers)){
        $success = "Your message was sent, thank you for contacting us";
       //reset all input fields
       $firstname = $lastname = $subject = $email = $message = "";
     } else{
       $success = "Sorry your message was not sent, try again later";

     }
   }

   /*$error = ['name' => $nameErr, 'email' => $emailErr, 'message' => $messageErr, 'success'=> $success];
     echo json_encode($error);*/
 }

 //fucntion to check the data first
 function inspectInput($data){
   $data = trim($data); //trim unneccessary spaces
   $data = stripslashes($data); //takes out \ from the input
   $data = htmlspecialchars($data); //check for cross-site scripting
   $data = htmlentities($data, ENT_QUOTES, "UTF-8");
   return $data;
 }
?>
