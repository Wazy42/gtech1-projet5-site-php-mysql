<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/style.css">

    <title>EntityFall</title>
  </head>
  <body>
    <?php require "menu.php" ?>
    <!-- Header -->
    <div class="header">
      <h2 class="center">Projet en Seconde et Première: EntityFall</h2>
      <img class="responsive-img centered" src="img/ef-logo.png" alt="Logo EntityFall">
    </div>
    <div class="divider"></div>
    <!-- Description du jeu -->
    <div class="row">
      <div class="col s12 m10 offset-m1">
        <h3>Description du jeu</h3>
        <p class="justify flow-text">
          EntityFall est un jeu de stratégie en tour par tour où deux equipes de héros 
          s'affrontent jusqu'a la mort dans un champ de bataille constitué de divers 
          obstacles.
        </p>
        <div class="divider"></div>
        <!-- Les héros -->
        <div class="section">
          <h3>Les Héros</h3>
          <img class="responsive-img" src="img/hero-list.png" alt="list of hero portraits">
          <p class="justify flow-text">
            Chaque Héro est doté de trois capacités actives et d'une capacité passive qui le 
            rendent unique. Les équipes sont composées de 2 a 4 Héros contrôlés par autant de
            joueurs.
          </p>
        </div>
        <div class="divider"></div>
        <!-- Champs de bataille -->
        <div class="section row">
          <h3 class="col s12">Les champs de bataille</h3>
          <img class="col s12 l6 responsive-img" src="img/champ-de-bataille.png" alt="champ de bataille en forêt">
          <p class="col s12 l6 justify flow-text">
            les champs de bataille sont le lieu des affrontements en mode multijoueur comme en
            mode campagne. ILs sont découpés en cases pour permettre des stratégies de 
            placement et de position en équipe.
          </p>
        </div>
        <div class="divider"></div>
        <!-- Les mecaniques -->
        <h3 class="col s12">Les mecaniques</h3>
        <div class="section row">
          <img class="col s12 l6" src="img/fog-of-war.png" alt="image fog of war">
          <div class="col s12 l6">
            <h4>Le brouillard de guerre</h4>
            <p class="justify flow-text">
              Chaque Héros voit jusqu’à une distance déterminée par ses Points de Vision (ici 
              cinq). Les cases hors du champ de vision des alliés sont dans le Brouillard de 
              Guerre et les alliés ne voient pas ce qui s’y passe (position des ennemis, 
              capacités utilisées…)
            </p>
          </div>
        </div>
        <div class="section row">
          <div class="col s12 l6">
            <h4>Le cycle jour/nuit</h4>
            <p class="justify flow-text">
              Un Cycle Jour-Nuit complet dure six tours. Un tour est fini lorsque tous les 
              Héros du champ de bataille ont joué. Un jour dure trois tours et une nuit dure 
              aussi trois tours. Les Héros perdent un Point de Vision la nuit. Un tour se 
              termine une fois que tous les Héros ont joué, et un nouveau tour commence alors.
            </p>
          </div>
          <img class="col s12 l6 responsive-img" src="img/day-night-cycle.gif" alt="day and night cycle gif">
        </div>
        <div class="section row">
          <img class="col s12 l6 responsive-img" src="img/orientation.png" alt="image orientation">
          <div class="col s12 l6">
            <h4>L'orientation</h4>
            <p class="justify flow-text">
              Chaque Héros sur le Champ de Bataille possède une orientation précise qu’il peut 
              changer à tout moment pendant son tour. Chaque Héros sur le Champ de Bataille 
              possède une orientation précise qu’il peut changer à tout moment pendant son 
              tour. De face (dans la zone verte), les dégâts ne sont pas affectés. De côté (dans
              les zones oranges), le Héros subit 25% de dégâts supplémentaires. Ce nombre passe
                à 50% de dos (dans la zone rouge).
            </p>
          </div>
        </div>
      </div>
    </div>
    
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
