<?php
// Textes statiques du site du restaurant Leila

/* 1er essai
// Meta
$titreAccueil = "Accueil";
$titreMenu = "Menu";
$titreVins = "Catre des vins";
*/

/*
//Deuxième essai
$titres = [];
array_push($titres, "Accueil";)
$titres[1] = "Menu";
$titres[2] = "Carte des vins";
*/

/*
// Ou
$titres = [
    "Accueil",
    "Menu",
    "Carte des vins"
];
*/

// Troisième et dernier essai
// Remplacer le tableau positionnel par un tableau associatif.

/*
$titres = [
    "accueil" => "Bienvenue",
    "menu" => "Nos menus",
    "vins" => "Carte des vins"
];

$description = [

];
*/

$meta = [
    "accueil" => [  
                    "titre" => "Bienvenue", 
                    "desc"  => "Restaurant Leila - Montréal",
                    "h1"    => "Leila"
                 ],
    "menu"    => [
                    "titre" => "Nos Menus", 
                    "desc"  => "Menu du restaurant Leila à Montréal",
                    "h1"    => "Menu"
                 ],
    "vins"    => [
                    "titre" => "Carte des vins", 
                    "desc"  => "Carte des vins du restaurant Leila à Montréal",
                    "h1"    => "Vins"
                 ]
];

$mnu_portion = "portions";

// Entête
$en_sousTitre = "CUISINE BISTRONOMIQUE";
$en_heuresOuverture = "Ouvert aujourd'hui jusqu'à 23 h";
$en_adresse = "275 rue Notre-Dame Est, Montréal, Québec";
$en_telephone = "(514) 958-2580";

// Entête - Navigation principale
$en_altMenu = "Les menus";
$en_altVins = "Carte des vins";
$en_altReservation ="Réservation en ligne - à venir";

// Pied de page
$pp_infoTitre = "Info pratique";
$pp_heuresOuverture1 = "Cuisine ouverte de 11 h à 22 h.";
$pp_heuresOuverture2 = "Fermé le lundi.";
$pp_etiquetteReservation = "Pour réservation :";
$pp_titreImageCarte = "Cliquez ici pour localiser le restaurant sur Google Maps";

// Accueil
$ac_titrePage = "Cuisine créative de saison";

?>