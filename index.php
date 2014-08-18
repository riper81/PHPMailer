<?php
require 'PHPMailerAutoload.php';


//Create a new PHPMailer instance
$mail = new PHPMailer();
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();
//Set who the message is to be sent from
$mail->setFrom('fiscalia@ministeriopublico.gob.ni', 'Fiscalia Nicaragua');
//Set an alternative reply-to address
$mail->addReplyTo('fiscalia.nicaragua@gmail.com', 'Fiscalia Nicaragua');
//Set who the message is to be sent to
$mail->addAddress($to_email);
//Set the subject line
$mail->Subject = $subject_email;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($body_email);


if (!empty($_POST)) {
    if (isset($_POST['to_email'], $_POST['subject_email'], $_POST['body_email'])){

    $to_email =      ($_POST['to_email']);
    $subject_email =    ($_POST['subject_email']);
    $body_email =        ($_POST['body_email']);
    }
}

?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fiscalia Nicaragua</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>

<div class="row">
    <div class="large-12 columns">
        <h1>Welcome to Fiscalia Nicaragua</h1>
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        <div class="panel">

            <form>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Email Address</label>
                        <input type="text" placeholder="Email address" />
                    </div>
                    <div class="large-12 columns">
                        <label>Subject</label>
                        <input type="text" placeholder="Subject" />
                    </div>
                </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <label>Email Body</label>
                            <textarea placeholder="Email Body"></textarea>
                        </div>
                    </div>
                <a href="#" class="small round button">Send Email NOW</a><br/>

            </form>


        </div>
    </div>
</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>