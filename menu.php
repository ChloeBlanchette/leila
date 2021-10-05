<?php
  $page = 'menu';

  // Inclure l'entête
  include('inclusions/entete.php');

  //Inclure la librairie 'citation'
  include('lib/citations.lib.php');
  
  // Obtenir une citation aléatoire
  $citation = citationAleatoire($langueChoisie, 'menu');

  // Gestion de l'affichage dynamique du menu

  // Étape 1 : lire le contenu du fichier dans une chaine de caractères

  // IMPORTANT!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  // Tester si le fichier existe avant... Si ça existe, on l'écrit comme ça. Sinon on écrit avec fr au lieu de langue choisie.
  $menuChaine = file_get_contents("data/menu-$langueChoisie.json");

  // Étape 2 : Décoder la chaîne JSON pour obtenir un tableau PHP
  $menuTableau = json_decode($menuChaine, true);

?>
    <div class="contenu-principal">
      <div class="citation">
        <img src="images/menu-citation.jpg" alt="">
        <blockquote>
          <?= $citation['texte']; ?>
          <cite>- <?= $citation['auteur']; ?></cite>
        </blockquote>
      </div>
      <div class="carte">

        <!-- Boucle pour générer dynamiquement les sections du menu -->
        <?php foreach($menuTableau as $titreSection => $platsSection) : ?>
        <section>
          <h2><?= $titreSection; ?></h2>
          <ul>

            <!-- Boucle pour générer dynamiquement les plats dans la section de menu courante -->
            <?php foreach($platsSection as $plat) : ?>
            <li>
              <span><?= $plat['nom']; ?><br><i>Description du plat</i></span>
              <span class="prix"><i class="article-menu-portion">(2 <?= $mnu_portion; ?>)</i>prix</span>
            </li>
            <?php endforeach; ?>
            <!-- Fin de la boucle des plats -->

          </ul>
        </section>
        <?php endforeach; ?>
        <!-- Fin de la boucle des sections -->

      </div>
    </div>
<?php
  // Inclure le pied de page
  include('inclusions/pied2page.php');
?>