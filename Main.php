<?php

error_reporting(E_ALL);
ini_set( 'display_errors','1');

include_once 'classes\Autoloader.php';
/**
 * Group namespaces PHP 7 syntax
 */
use testdome\Entity\{Triangle,Cercle,Carre,Hexagone};

$triangle = new Triangle(5,6,7);
$cercle   = new Cercle(4);
$carre    = new Carre(3);
$hexagone = new Hexagone(2,3,4,5,6,7);

/** Triangle **/
$triangle->setColor('red');
echo 'la surface du triangle est '.$triangle->surface();
echo nl2br("\n");
echo 'la périmetre du triangle est '.$triangle->perimetre();
echo nl2br("\n");
echo 'la couleur du triangle est '.$triangle->getColor();

echo nl2br("\n");
echo nl2br("\r");

/** Cercle **/
$cercle->setColor('yellow');
echo 'la surface du cercle est '.$cercle->surface();
echo nl2br("\n");
echo 'la périmetre du cercle est '.$cercle->perimetre();
echo nl2br("\n");
echo 'la couleur du cercle est '.$cercle->getColor();

echo nl2br("\n");
echo nl2br("\r");

/** Carré **/
$carre->setColor('green');
echo 'la surface du carré est '.$carre->surface();
echo nl2br("\n");
echo 'la périmetre du carré est '.$carre->perimetre();
echo nl2br("\n");
echo 'la couleur du carré est '.$carre->getColor();

echo nl2br("\n");
echo nl2br("\r");

/** Hexagone **/
$hexagone->setColor('gris');
echo 'la surface du hexagone est '.$hexagone->surface();
echo nl2br("\n");
echo 'la périmetre du hexagone est '.$hexagone->perimetre();
echo nl2br("\n");
echo 'la couleur du hexagone est '.$hexagone->getColor();