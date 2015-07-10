<?php

session_start();

require_once 'phpMail/phpmailer/PHPMailerAutoload.php';

$fieldErrors = [];
$errors = [];

if(isset($_POST['name'], $_POST['email'], $_POST['number'], $_POST['message'])){
   $fields = [
      'userName' => $_POST['name'],
      'userEmail' => $_POST['email'],
      'Phone Number' => $_POST['number'],
      'Message' => $_POST['message']
   ];
   
   foreach($fields as $field => $data){
      if(empty($data)){
         $fieldErrors[] = 'The ' . $field . ' field is required.';
      }
   }
   
   if(empty($fieldErrors && $errors)){
     
      $m = new PHPMailer();
      
      $m->isSMTP();
      $m->SMTPAuth = true;
      
      $m->Host = 'smtp.gmail.com';
      $m->Username = 'monydey@gmail.com';
      $m->Password = '';
      $m->SMTPSecure = 'ssl';
      $m->Port = 465;
      
      $m->isHTML();
      
      $m->FromName = 'Contact';
      
      $m->AddAddress('monydey@gmail.com', 'John Micheal');
      
      if($m->send()){
         header('Location: thankYou.php');
         die();
      }else{
         $errors[] = 'Send Failed, Please try again.';
      }
      
     // $m->AddReplyTo($fields['email'], $fields['name']);
     
   }
   
}else{
   $errors[] = 'Something went wrong.';
}

$_SESSION['fieldErrors'] = $fieldErrors;
$_SESSION['errors'] = $errors;
$_SESSION['fields'] = $fields;

header('Location: index.php');