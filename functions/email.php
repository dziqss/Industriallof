<?php
    
    $name = $_POST['name'];
    $email = $_POST['email'];
   //$email = strtolower($email);
    $tel = $_POST['tel'];
    $message = $_POST['message'];



// $checkTekst = preg_match('@^[0-9]{2}-[0-9]{3}$@',$tel);
// echo $tel . "<br>" . $checkTekst;

echo $email . "<br>"; //do sprawdzania lovercase

//walidacja, wyrazenia regularne
//login a-zA-Z0-9
//@
//serwer a-z0-9
//domena a-z0-9
$checkEmail = preg_match('*^[a-zA-Z0-9][a-zA-Z0-9\.-_]+@[a-zA-Z0-9]\.[a-z0-9]{2,5}$*', $_POST['email']);
echo $checkEmail . "<br>";


    
    if ($checkEmail) {
        echo "E-mail prawidłowy";
    } else {
        echo "Niepoprawny adres e-mail";

    }



?>