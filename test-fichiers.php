<?php
// Exemple d'accès au système de fichiers
// Exemple 1: Lecture du contenud'un dossier

$contenuTextes = scandir('textes');

// Afficher le tableau obtenu
print_r($contenuTextes);

?>