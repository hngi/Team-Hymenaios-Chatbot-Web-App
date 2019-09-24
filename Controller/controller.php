<?php
    session_start();
    $path = '../Models/model.php';

    require_once($path);

    if (isset($_POST["send"])) {
        $var = $_POST['chat'];

        if ((strpos($var, 'name') !== false)) {
            if (strpos($var, 'my')!== false){
                $name = substr($var,12);
                response($name);
            }else {
                echo nl2br(" Please write in the format: my name is 'your name here' \n Thank you ");
            }
        }

        if (strpos($var, 'joke')!== false){
                tell_me_a_joke();
        }
    
    
    }

?>