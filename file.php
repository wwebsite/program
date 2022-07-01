<form action="" method="post">
    <input type="submit" value="Send details to embassy" />
    <input type="hidden" name="button_pressed" value="1" />
</form>

<?php

if(isset($_POST['button_pressed']))
{
    $to      = 'ivanchernichenko@gmail.com';
    $subject = 'lets see if this woks';
    $message = message;

    mail($to, $sujbect, $message);

    echo 'Email Sent.';
}

?>