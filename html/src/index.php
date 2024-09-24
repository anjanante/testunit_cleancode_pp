<?php

// Bad example
$a = calculateArea($width, $height);

// Good example
$rectangleArea = calculateRectangleArea($rectangleWidth, $rectangleHeight);

// Bad example
function processUserRegistration($username, $email, $password, $address, $phoneNumber) {
    // Complex treatment
    // ...
}

// Good example
function registerUser($username, $email, $password) {
    // User registration processing
    // ...
}

// Bad example
if ($condition1) {
    if ($condition2) {
        if ($condition3) {
            // treatment
        }
    }
}

// Good example
if ($condition1 && $condition2 && $condition3) {
    // treatment
}

// Bad example
class Utilisateur {
    public function inscription($donnees) {
        // Registration processing
        // Send confirmation e-mail
        // Add user to database
    }
}

// Good example
class Utilisateur {
    public function inscription($donnees) {
        // Registration processing
    }
}

class ServiceMail {
    public function envoyerConfirmation($email) {
        // Send confirmation e-mail
    }
}

class ServiceBaseDonnees {
    public function ajouterUtilisateur($donnees) {
        // Add user to database
    }
}
