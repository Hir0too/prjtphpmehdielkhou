<?php



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['emailmane'];
    $password = $_POST['passname'];

    
    if (strpos($email, '@gmail.com') === false) {
        $error = "Email incorrect";
    } else {
        
    }
}
?>
