<?php

// Initialisation du stock

$articles = ["Hamza", "Mathéo", "Etienne", "Ethann", "LeSourireARyan"];

for ($i = 0; $i < count($articles); $i++) {
    echo $articles[$i] . " \n";
}

foreach ($articles as $article) {
    echo $article . " \n";
}

// Gestion des Stocks

$stocks = [1, 3, 18, 2, 100];
$ventes = [0, 0, 0, 0, 0];

for ($i = 0; $i < count($articles); $i++) {
    echo $articles[$i] . " : " . $stocks[$i] . " \n";
}

//  Réalisation d'une Vente

$choixUtil = readline("Saisir l'index de l'article qui vous intéresse : ");
$qteUtil = readline("Saisir la quantité voulue : ");

if ($stocks[$choixUtil] >= $qteUtil) {
    $stocks[$choixUtil] -= $qteUtil;
    $ventes[$choixUtil] += $qteUtil;
    echo "Vous avez acheté $qteUtil exemplaires de " . $articles[$choixUtil] . ". \n";
} else {
    echo "Le stock est insuffisant ! \n";
}

// Réapprovisionnement du Stock

$choixUtil = readline("Saisir l'index de l'article à réaprovisionner : ");
$qteUtil = readline("Saisir la quantité voulue : ");

$stocks[$choixUtil] += $qteUtil;
echo $articles[$choixUtil] . " : " . $stocks[$choixUtil] . " \n";

// Synthèse et Affichage du Stock

foreach ($articles as $index => $article) {
    if ($article <= 0) {
        echo $article . " : rupture de stock \n";
    } else {
        echo $article . " : " . $stocks[$index] . " \n";
    }
}

// Suivi des Ventes Totales par Article
echo "Nombre de ventes : \n";
foreach ($articles as $index => $article) {
    echo $article . " : " . $ventes[$index] . " \n";
}

// Suppression d'un Article

$choixUtil = readline("Saisir l'index de l'article à supprimer : ");
unset($articles[$choixUtil]);
unset($stocks[$choixUtil]);
unset($ventes[$choixUtil]);
for ($i = 0; $i < count($articles); $i++) {
    echo $articles[$i] . " : " . $stocks[$i] . " \n";
}
