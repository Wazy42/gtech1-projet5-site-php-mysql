<!DOCTYPE html>
<html>
    <?php require "menu.php" ?>
    <!-- Header -->
    <div class="header">
      <h2 class="center">Projet de Terminale: Labyrinthe en Python</h2>
      <img class="centered responsive-img" src="img/interface_laby.jpg" alt="Interface Labyrithe fenêtre">
    </div>
    <div class="divider"></div>
    <!-- Description du projet -->
    <div class="row">
      <div class="col s12 m10 offset-m1">
        <h3>Description du projet:</h3>
        <p class="justify flow-text">
          En terminale, j'ai eu à faire une petite application en python qui permettait 
          de crééer un labyrinthe aléatoirement. Ce projet nous a fait approfondir 
          notre maîtrise des class python et prendre en main une interface graphique 
          (ici PyGame).
        </p>
        <div class="divider"></div>
        <!-- Différents algrithmes (gallerie) -->
        <h3>Création aléatoire avec différents algorithmes</h3>
        <div class="section row">
          <div class="section col s12 m6 l4">
            <h4 class="col s12">Algorithme de Fusion</h4>
            <img class="responsive-img" src="img/laby-fusion.jpg" alt="Génération labyrinthe fusion">
          </div>
          <div class="col s12 m6 l4">
            <h4>Algorithme de Prim</h4>
            <img class="responsive-img" src="img/laby-prim.jpg" alt="Génération labyrinthe Prim">
          </div>
          <div class="col s12 m6 l4">
            <h4>Algorithme d'Aldous-Broder</h4>
            <img class="responsive-img" src="img/laby-aldous-broder.jpg" alt="Génération labyrinthe Aldous-Broder">
          </div>
          <div class="col s12 m6 l4">
            <h4>Algorithme de Wilson</h4>
            <img class="responsive-img" src="img/laby-wilson.jpg" alt="Génération labyrinthe Wilson">
          </div>
          <div class="col s12 m6 l4">
            <h4>Algorithme de Backtracking</h4>
            <img class="responsive-img" src="img/laby-backtracking.jpg" alt="Génération labyrinthe Backtracking">
          </div>
        </div>
        <div class="divider"></div>
        <!-- Fonctionnalités -->
        <h3>Fonctionnalités</h3>
        <div class="section row">
          <img class="col s12 l6 responsive-img" src="img/ig_laby.jpg" alt="Labyrinthe en jeu">
          <div class="col s12 l6">
            <h4>Labyrinthe en jeu</h4>
            <p class="justify flow-text">
              Le labyrinthe affiché peut être joué à l'aide des flèches du clavier. La
              postition actuelle est représentée par un point et le chemin parcouru par 
              des flèches. Le bouton "Recommencer" nous fait revenir à l'entrée du
              labyrinthe.
            </p>
          </div>
        </div>
        <div class="section row">
          <div class="col s12 l6">
            <h4>Affichage en fin de partie, solution</h4>
            <p class="justify flow-text">
              Quand le joueur arrive à aller jusqu'au bout, ou que le bouton "Afficher 
              solution" est pressé, le chemin est affiché en entier avec des flèches.
              On peut générer un nouveau labyrinthe aléatoirement avec le bouton
              "reconstruire", il sera regénéré avec l'algorithme en surbrillance.
            </p>
          </div>
          <img class="col s12 l6 responsive-img" src="img/fin_partie_laby.jpg" alt="Labyrinthe fin de partie solution">
        </div>
      </div>

    <?php require "footer.php" ?>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
