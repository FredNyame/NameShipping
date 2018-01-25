<?php
   //varaibles
   $firstname = $lastname = $email = $phone = $address = $city = $state = $zipcode = $list = '';

   //error messsges variable
   $firstnameErr = $lastnameErr = $emailErr = $listErr = $subjectErr = $phoneErr = $streetErr = $cityErr = $zipcodeErr = $dateErr = $success = $stateErr = '';

 //check if the form was submitted
 if(isset($_POST['submit'])){

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
    
    if(!empty($_POST['phone'])){
     //store variable
     $phone = inspectInput($_POST['phone']);
     //check if phone number id valid
     if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone) ){
      $phoneErr = "Please enter a valid 10 digits phone number with the format 123-322-1234";
     }
   } else {
     //give error msg if it empty
     $phoneErr = "Phone field is required";
   }

   if(!empty($_POST['street'])){
     //store variable
     $address = inspectInput($_POST['street']);
     //check if phone number id valid
     if(!preg_match("/^[a-zA-Z0-9 \_\-.,:']+$/", $address)){
      $streetErr = "Please enter a valid street address";
     }
   } else {
     //give error msg if it empty
     $streetErr = "Address field is required";
   }

   if(!empty($_POST['city'])){
     //store variable
     $city = inspectInput($_POST['city']);
     //check if phone number id valid
     if(!preg_match("/^[a-zA-Z ]*$/", $city)){
      $cityErr = "Please enter a valid city";
     }
   } else {
     //give error msg if it empty
     $cityErr = "City field is required";
   }

    if(!empty($_POST['state'])){
        $state = inspectInput($_POST['state']);
   } else {
        $stateErr = "State field is required";
   }

   if(!empty($_POST['zipcode'])){
     //store variable
     $zipcode = inspectInput($_POST['zipcode']);
     //check if phone number id valid
     if(!preg_match("/^[0-9]{5}$/", $zipcode)){
      $zipcodeErr = "Please enter a valid zipcode with 5 digits";
     }
   } else {
     //give error msg if it empty
     $zipcodeErr = "Zipcode field is required";
   }

   if(!empty($_POST['date'])){
        $date = inspectInput($_POST['date']);
   } else {
        $dateErr = "Date field is required";
   }

   if(!empty($_POST['list'])){
     //store variable
     $list = inspectInput($_POST['list']);
   } else {
     //give error msg if it empty
   $listErr = "List field is required";
   }

   //if there is no errors do this
   if($firstnameErr == '' && $lastnameErr == '' && $emailErr == '' && $listErr == '' && $subjectErr == '' && $phoneErr == '' && $streetErr == '' && $cityErr == '' && $zipcodeErr == '' && $dateErr == '' && $success == '' && $stateErr == '')
   {
     unset($_POST['submit']);

   //Posting to a url
   $key = '5d53931acd57d0de4f9ac2a6d6d93b92';
   $token = '4ac2e3161b10a9a0b9203b45021e38300b28d20488f703e62a45d2fec8be3da8';
   $idlist = '5a5c24472ad6e622c97fd404';
   $name = $firstname. ' '.$lastname;
   $content = 'Client name: '.$name."\r\n";
   $content .= 'Email address: '.$email."\r\n";
   $content .= 'Phone number: '.$phone."\r\n";
   $content .= 'Home address street: '.$address."\r\n";
   $content .= 'City: '.$city."\r\n";
   $content .= 'State: '.$state."\r\n";
   $content .= 'Zipcode: '.$zipcode."\r\n";
   $content .= 'Avaibility date: '.$date."\r\n";
   $content .= 'List of items: '.$list;

   $url = "https://api.trello.com/1/cards?idList=$idlist";
   
   $params = http_build_query(array(
     'key'  => $key,
     'token' => $token,
       'name'   => 'New Pickup Request from '.$name,
       'desc'   => $content,
       'pos' => 'top'
   ));

    //Basic cURL example
   //1. Initialize
   $ch = curl_init();

   //2. Set options

   //URL to send the requests to
   curl_setopt($ch, CURLOPT_URL, $url);

   //Return instead of outputting directly
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

   //ssl
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

   //Post option
   curl_setopt($ch, CURLOPT_POST, 1);

   //varaible to post to the url
   curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

   //3. Execute the request and fect the response. Check for errors
   $output = curl_exec($ch);

   if($output === FALSE) {
    echo "cURL Error: ". curl_error($ch);
   } 

   //Close and free the curl handle
   curl_close($ch);

    $mailTo = "do46867@gmail.com";
    $mailSubject = "New Pickup Submission added to Trello";
    $mailBody = "Check trello for a new pickup request from ".$name . "\r\n";
    $headers = 'From: '.$name . " " . $email . "\r\n";
    $headers .= 'Reply-To: '. $email;

      if(mail($mailTo, $mailSubject, $mailBody, $headers)){
        $success = "Message sent, thank you for contacting us";
        //reseting all fields back to empty
        $name = $email = $password = $confirmPass = $gender = $age= $message = "";
      } else{
        $success = "Your message was not sent";
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
