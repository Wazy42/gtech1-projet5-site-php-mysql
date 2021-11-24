<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/style.css">

    <title>Puissance 4</title>
  </head>
  <body>
    <?php require "menu.php" ?>
    <!-- Structure puissance 4 (à modifier ?) -->
    <div id="puis4" class="modal">
      <div class="modal-content">
        <div id="game-board">
          <div class="column" id="column-0" data-x="0">
            <svg height="100" width="100" class="row-5">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-4">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-3">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-2">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-1">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-0">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
          </div>
          <div class="column"  id="column-1" data-x="1">
            <svg height="100" width="100" class="row-5">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-4">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-3">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-2">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-1">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-0">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
          </div>
          <div class="column" id="column-2" data-x="2">
            <svg height="100" width="100" class="row-5">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-4">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-3">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-2">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-1">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-0">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
          </div>
          <div class="column" id="column-3" data-x="3">
            <svg height="100" width="100" class="row-5">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-4">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-3">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-2">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-1">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-0">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
          </div>
          <div class="column" id="column-4" data-x="4">
            <svg height="100" width="100" class="row-5">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-4">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-3">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-2">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-1">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-0">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
          </div>
          <div class="column" id="column-5" data-x="5">
            <svg height="100" width="100" class="row-5">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-4">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-3">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-2">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-1">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-0">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
          </div>
          <div class="column" id="column-6" data-x="6">
            <svg height="100" width="100" class="row-5">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-4">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-3">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-2">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-1">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
            <svg height="100" width="100" class="row-0">
              <circle cx="50" cy="50" r="40" stroke="#0B4E72" stroke-width="3" class="free" />
            </svg> 
          </div>
        </div>
      </div>
    </div>

    <!-- Header -->
    <div class="header">
      <h2 class="center">Projet en G.Tech 1: Puissance 4 en C</h2>
      <img class="centered responsive-img" src="img/p4-logo.jpg" alt="puissance 4 exemple">
    </div>
    <div class="divider"></div>
    <!-- Description du projet -->
    <div class="row">
      <div class="col s12 m10 offset-m1">
        <h3>Description du projet:</h3>
        <p class="justify flow-text">
          Cette année (en 2021), nous avons eu à programmer entièrement un puissance 4 
          en C sous environnement Linux. Le puissance 4 à faire est en mode console,
          c'est à dire que nous n'avons pas utilisé d'interface graphique mais nous 
          envoyons chaque mise à jour du tableau sous forme de texte. Nous avons 
          utilisé un émulateur de Debian et nous avons appris les bases de Git et 
          GitHub. Le puissance 4 présenté ici est celui du binome 04, V.Lucas et 
          V.Nathanaël.
        </p>
        <div class="divider"></div>
        <!-- Fonctionalités -->
        <h3>Fonctionnalités:</h3>
        <div class="section row">
          <img class="col s12 l6 responsive-img modal-trigger" src="img/p4-ig-classic.jpg" href="#puis4" alt="Milieu de partie dans un puissance 4 classique">
          <div class="col s12 l6">
            <h4>Changement taille du tableau</h4>
            <p class="justify flow-text">
              Le jeu peut être lancé avec des paramètres différents, comme le taille du 
              tableau (sur l'image en 8x7). Cette fonctionnalité nous a permis de mieux
              développer le multijoueur...
            </p>
          </div>
        </div>
        <div class="section row">
          <div class="col s12 l6">
            <h4>Multijoueur jusqu'a 6</h4>
            <p class="justify flow-text">
              Le fait de jouer au puissance 4 avec plus de 2 joueurs permet de 
              développer une nouvelle vision du jeu ainsi que des stratégies plus 
              complexes. Nous avons aussi utilisé une couleur différente pour chaque
              joueur, ainsi qu'un caractère différent afin de mieux différencier les
              différents jetons.
            </p>
          </div>
          <img class="col s12 l6 responsive-img" src="img/p4-8x7table.jpg" alt="Fin de partie tableau avec taille modifiée en 8x7">
        </div>
        <div class="section row">
          <img class="col s12 l6 responsive-img" src="img/p4-4players.jpg" alt="Fin de partie à 4 joueurs">
          <div class="col s12 l6">
            <h4>Détection du vainqueur</h4>
            <p class="justify flow-text">
              Une des fonctionnalité les plus dure à programmer, même si il y avait
              plus simple... A chaque coup le programme vérifie l'entièreté du tableau
              à la recherche de 4 jetons du même joueur alignés. Une façon plus simple
              aurait été de vérifier seulement autour du dernier jeton inséré. Nous 
              avons ajouté un ASCII art pour le cas de la victoire d'un des joueur ou 
              l'égalite.
            </p>
          </div>
        </div>
      </div>
    </div>

    <a class="black btn modal-trigger" href="#puis4"></a>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
