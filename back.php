<?php
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'PHPMailer/config.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

  $content = "";
   $cadmin = "";
   $usertemp = "";
   $usertemp11="";
   $cname = $_POST['user_name'];
   $cphone = $_POST['user_phone'];
   $countryphone = $_POST['phoneNumberCode'] . $_POST['user_phone'];
   $cemail = $_POST['user_email'];
   $ccdate = $_POST['deadline'];
   $csubject = $_POST['user_subject'];
   $cmessage = $_POST['user_msg'];
   $useradd = $_SERVER['REMOTE_ADDR'];
  




   
   // Define the starting value of the number
   $number = 0;
   // Check if the number is already saved in a file
   if (file_exists('number.txt')) {
      $number = intval(file_get_contents('number.txt'));
   }
   $number++;
   // Save the new number to the file
   file_put_contents('number.txt', strval($number));
   // end order id
   $secretKey = '6Lctg1UnAAAAALDVflDalPHnqUKfFGMFBHc5q2R_';
   $ip = $_SERVER['REMOTE_ADDR'];
 
   $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$ip";
   $fire = file_get_contents($url);
   $responseKeys = json_decode($fire, true);

      ob_start();
      include("template/side_mail.php");
      $content .= ob_get_clean();
      $mail = new PHPMailer(true);
      $mail->IsSMTP();
      $mail->SMTPDebug =3;
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = 'ssl';
      $mail->Host = "smtp.gmail.com";
      $mail->Port = 465;
      $mail->Username = $cmail;
      $mail->Password = $cpass;
   


      $targetDir = "uploads/";
      $fileNames = array();

      foreach ($_FILES['userfile']['name'] as $key => $val) {


         $rand = rand(0000, 9999);
         $targetFile = $targetDir . basename($rand . $_FILES['userfile']['name'][$key]);

         $fileNames[] = basename($rand . $_FILES['userfile']['name'][$key]);
         move_uploaded_file($_FILES['userfile']['tmp_name'][$key], $targetFile);
      }
  

      function printImagePath($imageArray)
      {
         $file_names = "<br/>";
         if (count($imageArray) > 0) {
            $file_names = "<p><strong>File Attachments :</strong><br/> ";
            foreach ($imageArray as $image_name) {
               $file_names.= "<a href='https://examhelp.online/uploads/$image_name'>" . $image_name . "</a><br/>";
            }
         }
         return $file_names;
      }

      $file_names = printImagePath($fileNames);

      $cdl_name = implode(',', $fileNames);

      

      $mail->setFrom($cmail, 'Exam Help Online');
      $mail->addReplyTo($cmail2, 'Exam Help Online');
   
      ob_start();
      include("template/side_mail.php");
      $cadmin .= ob_get_clean();
      $mail->AddAddress($ccmail);
      $mail->addAddress($cmail2);
      
     

      $mail->Subject = "New exam help request  EHO-$number";
      $mail->IsHTML(true);
      $mail->Body = $cadmin;
      $mail->send();
      $mail->ClearAddresses();
 
      ob_start();
      include("template/user.php");
      $usertemp .= ob_get_clean();
      $mail->AddAddress($cemail);
      $mail->Subject = "Your Order has been placed  EHO-$number";
      $mail->Body = $usertemp;
      $mail->send();
    
    
      $response = array('form' => 'submit succ', 'message' => 'done');

      
      header('Content-Type: application/json');
  
      echo json_encode($response);


