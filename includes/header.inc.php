<?php
// Sommes-nous sur l'index ? Récupération du nom de page dans $pageActuelle
$scriptName = filter_input(INPUT_SERVER, 'SCRIPT_NAME');
$pageActuelle = substr($scriptName, strrpos($scriptName, '/') + 1);
if ($pageActuelle === 'index.php') {
    $dirIndex = './';
    $dirPages = './pages/';
} else {
    $dirIndex = '../';
    $dirPages = './';
}
// Construction d'un tableau associatif contenant les correspondances
// noms de pages / liens de la barre de navigation
$pages = array(
    'Accueil' => $dirIndex . 'index.php',
    'Route' => $dirPages . 'route.php',
    'Cross' => $dirPages . 'cross.php',
    'Piste' => $dirPages . 'piste.php',
    'Enfants' => $dirPages . 'enfants.php',
    'Nous contacter' => $dirPages . 'nous-contacter.php'
);