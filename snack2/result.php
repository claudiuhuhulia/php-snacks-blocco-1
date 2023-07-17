<?php
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

if (strlen($name) > 3 && str_contains($email, '.') && str_contains($email, '@') && is_numeric($age)) {

    echo ('Accesso riuscito');
} elseif (strlen($name) < 3) {
    echo ('Il campo nome deve contenere almeno 3 caratteri');
} elseif (!str_contains($email, '.') or !str_contains($email, '@')) {
    echo ('Il campo email deve contenere almeno una chiocciola e un punto');
} elseif (!is_numeric($age)) {
    echo ('il campo età deve essere un numero');
}
