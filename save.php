<?php

if( $_POST ) 
{
    include('config.php'); //Includes configuration files
    require_once 'Mandrill.php';
    
    $refer = $_POST['refer']; // Gets reference number if applicable
    $email = $_POST['email'];
    $apikey = "N22ZhMNFJI85ZqXmDp8dlA";
    
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "c9";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    
    // Insert email into database if not empty and no duplicate
    if(!empty($email)) {
        
       // Create unique InviteCode
       $length = 10;
       $inviteCode = "";
       $characters = "0123456789abcdefghijklmnopqrstuvwxyz";
       for ($p = 0; $p < $length; $p++) {
	      $inviteCode .= $characters[mt_rand(0, strlen($characters))];
       }
       
       // Sanitize String
       $email = $db->real_escape_string($email); 
       
       // Check for duplicate emails
       $select = $db->query("SELECT email FROM users WHERE email = '$email'") or die(mysql_error());
       if(mysqli_num_rows($select)) { exit ("This email is already being used"); }
       
       // Insert email into database
       $query = $db->query("INSERT INTO users VALUES ('', '$email', '$inviteCode')");
 	      if(isset($refer)){
 		     $query = $db->query("INSERT INTO referrals VALUES ('', '$refer','$id')"); //Add reference to id
 	      } 
       }
       
       // Get Invite link
       $extract = $db->query("SELECT * FROM users WHERE email='$email'") or die(mysql_error());
       while($row = mysqli_fetch_assoc($extract)) {
 	     $id = $row['invitecode'];
       }
    
       // Send a welcome email
       $mandrill = new Mandrill($apikey);
       $message = new stdClass();
       $message->html = "
          <b>What if you send a quick note to your event industry friends:</b></ br> 
          <a href= '" . URL . "?refer=$id'>" . URL . "?refer=$id</a><br>
          <p><b>Your invite link</b><br>
          There is no way fr your friends to join the #EventJive community without your
          invite link. <a href='http://www.eventjive.com'>EventJive.co</a> is an invite-only
          community of event professionals. Members from companies like IMEX, IBTM, MPI, sli.do, etouches are among them.
          Your invite link: <a href= '" . URL . "?refer=$id'>" . URL . "?refer=$id</a><br>
          "; 
       $message->text = "text body";
       $message->subject = "#EventJive ★ Welcome on board";
       $message->from_email = "carsten@eventjive.co";
       $message->from_name  = "Carsten at EventJive";
       $message->to = array(array("email" => "$email"));
       $message->track_opens = true;
       $response = $mandrill->messages->send($message);
};
?>