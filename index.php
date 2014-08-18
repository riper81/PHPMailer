<?php
require 'PHPMailerAutoload.php';

if (!empty($_POST)) {
    if (isset($_POST['to_email'], $_POST['subject_email'], $_POST['body_email'])){

        $to_email =      ($_POST['to_email']);
        $subject_email =    ($_POST['subject_email']);
        $body_email =        ($_POST['body_email']);
    }
}

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

            <form action="index.php" method="post">
                <div class="row">
                    <div class="large-12 columns">
                        <label>Email Address</label>
                        <input type="text" placeholder="Email address" name="to_email" id="to_email" />
                    </div>
                    <div class="large-12 columns">
                        <label>Subject</label>
                        <input type="text" placeholder="Subject" name="subject_email" id="subject_email"/>
                    </div>
                </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <label>Email Body</label>
                            <textarea placeholder="Email Body" rows="25" cols="70" name="body_email" id="body_email"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-8 columns">
                            <input class="button small large-3" type="submit" value="Send Email NOW">
                        </div>
                    </div>

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