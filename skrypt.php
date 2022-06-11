<?php
$mail=$_POST['mail'];
$message =$_POST['message'];
if(isset($_POST[submit])) {
    echo 'Twoja wiadomość: '.$_POST['message'].'<br/>';
    echo 'została wysłana na adres: '.$_POST['mail'];
}
?>