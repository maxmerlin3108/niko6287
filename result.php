<?php
$nom = $_POST["nom"];
$login = $_POST["login"];
$age = $_POST ["age"];

$name = ucfirst( $nom);

if ( $login == "maxou")
{
    print( "bonjour ".$nom );
    print( "<br>");
    print( "ton mot de passe est ". $login );
    print( "<br>");
    print( "ton age est " .$age );
}
else
{

    print( "bonjour ".$nom );
    print( "<br>");
    print( "ton mot de passe est invalide " );
}
?>