<?php
function generate_password($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:",.<>?/`~';
    $charactersLength = strlen($characters);
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $charactersLength - 1);
        $password .= $characters[$randomIndex];
    }

    return $password;
}
?>
