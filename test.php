<?php


function createPageWeb(  $title , $contenu )
{
    print( "<!doctype html>");
    print( "<html lang=\"fr\">");
    print( "<head>");
    print( "  <meta charset=\"utf-8\">");
    print( "   <title>".$title."</title>");
    print( "  <link rel=\"stylesheet\" href=\"style.css\">");
    print( " </head>");
    print( "<body>");
    print( $contenu);

    print( "</body>");
    print( "</html>");

} 

$article="La conception d'une page web en suivant la philosophie du standard HTML5 spécifié par le W3C (ou du standard vivant tel que désigné par le WhatWG) répond à quelques réflexes de base. La structure d'un document (l'imbrication des balises à la racine) est simplfiiée pour répondre aux attentes pragmatiques des intégrateurs et webdesigners.";




createPageWeb( "ma page web", $article);

/*
function disBonjour( $var )
{
    print( "bonjour ".$var." <br>" );
}



$nom = 'xavier';

disBonjour( "toto");
disBonjour( "tata");
disBonjour( "titi");

print ( "bonjour ".$nom );
*/
?>