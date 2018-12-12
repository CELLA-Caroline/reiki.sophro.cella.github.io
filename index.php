<?php 
require_once('functions.php');
template('header');
?>

</head>
<body>
  <?php template('menu'); ?>

  <div id='content'>
      <div id='title' class='blue-flower'>
        <h1 class='test'>Caroline Cella</h1>
        <h2>Accueil</h2>
      </div>
    <div id='modalite' class='section first'>
      <h3>Modalités</h3>
      <p>
        Les prises de rendez-vous se font d’une séance à l’autre. La personne est libre d’arrêter à tout moment sa prise en charge en ayant prévenu au préalable.<br/>
        Age prérequis pour mes séances : 6 ans pour la sophrologie et 10 ans pour le reiki.
      </p>
    </div>
    <div id='duree'>
      <h3>Durée</h3>
      <p>
        Une séance (de sophrologie ou de reiki) dure en moyenne 1 heure.
      </p>
    </div>
    <div id='prix'>
      <h3>Tarif <span class='cinquanteE'>: 50€</span></h3>
      <p>
	Règlement par chèque ou espèces uniquement.<br/>
        A noter que certaines mutuelles remboursent pleinement ou en partie des séances de sophrologie. Renseignez-vous pour une éventuelle prise en charge. 
      </p>
    </div>
    <div id='info-complementaire'>
      <h3>Informations complémentaires</h3>
      <p>
          Le praticien n'est pas un médecin, ses méthodes ne se substituent pas aux traitements médicaux et aux diverses thérapies mais en sont un très bon complément. Il ne concurrence pas les professionnels de la santé. Il ne pose pas de diagnostic, n'influence pas les choix thérapeutiques de ses clients et n'interfère pas dans les traitements en cours. Il dirige sur un thérapeute compétent et dûment qualifié le client qui nécessite une aide qui ne relève pas de ses compétences.<br/> 

          Il est important de noter qu’en aucune manière, le reiki comme la sophrologie ne sont rattachés à une religion ou une croyance.<br/>
          
          Toutes les séances permettent un moment de libre échange. Ces instants privilégiés seront placés sous le sceau de la confidentialité la plus totale. 
      </p>
    </div>
  </div>
  <script src='title.js'></script>
</body>
</html>
