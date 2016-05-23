<?php
/**
 * Created by PhpStorm.
 * User: Cathrin
 * Date: 23.05.2016
 * Time: 12:08
 */

if(isset($_POST['email'])) {

    $email_to = "k-dem1985@gmail.com";

    $email_subject = "New Email";

    function died($error) {

        echo "We are very sorry, but there were error(s) found with the form you submitted. ";

        echo "These errors appear below.<br /><br />";

        echo $error."<br /><br />";

        echo "Please go back and fix these errors.<br /><br />";

        die();

    }



    // validation expected data exists

    if(!isset($_POST['first_name']) ||

        !isset($_POST['email']) ||

        !isset($_POST['text'])) {

        died('We are sorry, but there appears to be a problem with the form you submitted.');

    }



    $first_name = $_POST['first_name']; // required

    $email_from = $_POST['email']; // required

    $message = $_POST['text']; // required



    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email_from)) {

        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if(!preg_match($string_exp,$first_name)) {

        $error_message .= 'The First Name you entered does not appear to be valid.<br />';

    }

    if(strlen($message) < 2) {

        $error_message .= 'The Message you entered do not appear to be valid.<br />';

    }

    if(strlen($error_message) > 0) {

        died($error_message);

    }

    $email_message = "Form details below.\n\n";



    function clean_string($string) {

        $bad = array("content-type","bcc:","to:","cc:","href");

        return str_replace($bad,"",$string);

    }



    $email_message .= "First Name: ".clean_string($first_name)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";

    $email_message .= "Message: ".clean_string($message)."\n";


// create email headers

    $headers = 'From: '.$email_from."\r\n".

        'Reply-To: '.$email_from."\r\n" .

        'X-Mailer: PHP/' . phpversion();

    @mail($email_to, $email_subject, $email_message, $headers);


    //Success message

    ?>


    <p>Thank you for contacting me. I'll be in touch with you very soon.</p>
    <a href="index.html" class="success-button">Go back to main page</a>



    <?php

}

?>