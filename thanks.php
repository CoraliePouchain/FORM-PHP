<?php

$errors = [];


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (empty($_POST['user_name'])){
        $errors[] ='Nom requis';
    } 

    if (empty($_POST['last_name'])){
        $errors[] = 'Prénom requis';
    }  

    if (empty($_POST['user_mail'])){
        $error = 'Email requis';
    } elseif (!filter_var($_POST['user_mail'], FILTER_VALIDATE_EMAIL)){
            $errors[] = 'Format invalide';
    }

    if (empty($_POST['phone_number'])){
        $errors[] = 'Téléphone requis';
    } 
    
    if (empty($_POST['user_message'])){
         $errors[] = 'Message requis';
    } 

    if (empty($errors)){
        echo 'Merci ' . $_POST['user_name'] . ' ' . $_POST['last_name'] . ' de nous avoir contacté à propos du ' . $_POST['object'] . '.<br>' .
        'Un de nos conseiller vous contactera soit à l’adresse ' . $_POST['user_mail'] . ' ou par téléphone au ' . $_POST['phone_number'] . ' dans les plus brefs délais pour traiter votre demande : <br>' .
        $_POST['user_message'];
    } else {
        foreach($errors as $error){
            echo $error . '<br>';
        }
    }

};
