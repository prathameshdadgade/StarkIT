 <?php 

// print_r($_POST);


  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  //kyonjjpqtkurgbwc


  
  // $receiving_email_address = 'contact@example.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();



  
//   require_once('PHPMailer-master/class.phpmailer.php');
//   if(isset($_POST['submit']))
//   {
  
//       $from_email         = 'priyanka002.joshi@gmail.com'; //from mail, it is mandatory with some hosts
//       $recipient_email    = 'priyanka002.joshi@gmail.com'; //recipient email (most cases it is your personal email)
      
//       //Capture POST data from HTML form and Sanitize them, 
//       $sender_name    = filter_var($_POST["sender_name"], FILTER_SANITIZE_STRING); //sender name
//       $reply_to_email = filter_var($_POST["sender_email"], FILTER_SANITIZE_STRING); //sender email used in "reply-to" header
//       $subject        = filter_var($_POST["subject"], FILTER_SANITIZE_STRING); //get subject from HTML form
//       $message        = filter_var($_POST["message"], FILTER_SANITIZE_STRING); //message
      
//       /* //don't forget to validate empty fields 
//       if(strlen($sender_name)<1){
//           die('Name is too short or empty!');
//       } 
//       */
      
  
  
  
//           $boundary = md5("sanwebe");
//           //header
//           $headers = "MIME-Version: 1.0\r\n"; 
//           $headers .= "From:".$from_email."\r\n"; 
//           $headers .= "Reply-To: ".$reply_to_email."" . "\r\n";
//           $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
          
//           //plain text 
//           $body = "--$boundary\r\n";
//           $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
//           $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
//           $body .= chunk_split(base64_encode($message)); 
          
    
      
//       $sentMail = @mail($recipient_email, $subject, $body, $headers);
//       if($sentMail) //output success or failure messages
//       {       
//           die('Thank you for your email');
//       }else{
//           die('Could not send mail! Please check your PHP mail configuration.');  
//       }
  
//   }
  
  
  

?>
