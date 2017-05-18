<div class="container">
<?php
if(isset($_POST['submit'])){
    $to = "xpeki123456@gmail.com"; // My mail
    $from = $_POST['email'];
    $name = $_POST['nom'];
    $sujet = $_POST['sujet'];
    $subject = "Form submission";
    $subject2 = "Copie de votre message";
    $message = $name . " " . " A ecris ceci:" . "\n\n" . $_POST['message'];
    $message2 = "Voici une copie de votre message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$sujet,$message,$headers);// to me
    mail($from,$subject2,$message2,$headers2); // to the send

    echo "Mail envoyé " . $name . ", nous allons vous contacter prochainement.";

}
?>
</div>