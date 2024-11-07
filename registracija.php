<?php

if(!isset($_POST["email"]) || empty($_POST["email"]))
{
    die("Email nije prosledjen!");
}

if(!isset($_POST["lozinka"]) || empty($_POST["lozinka"]))
{
    die("Lozinka nije prosledjena!");
}

$email = $_POST["email"];
$lozinka = $_POST["lozinka"];

require_once "baza.php";

$q = " INSERT INTO korisnici (email, lozinka) VALUES ('$email', '$lozinka') ";
$baza -> query($q);

