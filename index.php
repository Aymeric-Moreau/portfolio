<?php include 'template/Header.php'; ?>

<body class="pt-4 pt-lg-5">
    <?php include 'template/nav.php'; ?>

<div class="vitrine py-5" id="vitrine">
  <div class="container">

    <!-- LIGNE DU HAUT (cards libres) -->
    <div class="row mb-4">
      <div class="col-lg-4">
        <!-- CARD GAUCHE (optionnelle) -->
      </div>

      <div class="col-lg-4 text-center">
        <!-- <hr> -->
      </div>

      <div class="col-lg-4">
        <!-- CARD DROITE (optionnelle) -->
      </div>
    </div>

    <!-- LIGNE CENTRALE -->
    <div class="row align-items-center mb-4">

      <!-- COLONNE GAUCHE -->
      <div class="col-12 col-lg-3 mb-4 mb-lg-0">
         <div class="card neo-card neo-card--interactive card-projet h-100">
        <a data-bs-toggle="modal" data-bs-target="#modal-esp" class="text-decoration-none">
            
            <div class="card-head d-flex justify-content-between align-items-center mb-2">
                <span class="badge badge-warning">LD</span>
                <h6 class="mb-0">LP</h6>
            </div>

            <img
                class="card-img-top mb-3"
                src="assets/img/ESP.png"
                alt="ESP : Duel En Ligne"
            />

            <div class="card-details text-center">
                <p class="text-title mb-1">Blockout : Contraste</p>
                <p class="text-body">
                    <i class="cib-unreal-engine icon icon-xxl"></i>
                </p>
            </div>

            <button class="neo-card__button">
                En savoir plus
            </button>
        </a>
    
</div>
        
      </div>

      <!-- TEXTE CENTRAL ENCADRÉ -->
      <div class="col-12 col-lg-6">
        <div class="neo-card neo-card--round text-center vitrine-center">
          <h1 class="mb-3">
            <strong>Bonjour !</strong><br>
            Je suis Aymeric Moreau
          </h1>

          <p class="mb-3">
            Je suis Acutellement en Licence professionnelle Métiers du jeu vidéo – Level Design<br>
            a l'Université Lumière Lyon 2
          </p>

          <?php include 'template/reseaux.php'; ?>
        </div>
      </div>

      <!-- COLONNE DROITE -->
      <div class="col-12 col-lg-3 mt-4 mt-lg-0">
        <!-- Tu peux mettre une card ici -->
        <!-- <div class="card neo-card h-100 text-cente">
          <div class="card-body text-center">
            <h5 class="card-title">Projet Luna</h5>
            <p class="card-text">Game Design</p>
          </div>
        </div> -->
        
        <!-- <div class="col-12 col-md-6 col-lg-3"> -->
    <div class="card neo-card neo-card--interactive card-projet h-100">
        <a data-bs-toggle="modal" data-bs-target="#modal-esp" class="text-decoration-none">
            
            <div class="card-head d-flex justify-content-between align-items-center mb-2">
                <span class="badge badge-warning">LD</span>
                <h6 class="mb-0">LP</h6>
            </div>

            <img
                class="card-img-top mb-3"
                src="assets/img/ESP.png"
                alt="ESP : Duel En Ligne"
            />

            <div class="card-details text-center">
                <p class="text-title mb-1">Blockout : Contraste</p>
                <p class="text-body">
                    <i class="cib-unreal-engine icon icon-xxl"></i>
                </p>
            </div>

            <button class="neo-card__button">
                En savoir plus
            </button>
        </a>
    <!-- </div> -->
</div>

      </div>

    </div>

    <!-- LIGNE DU BAS (cards libres) -->
    <div class="row mt-4">
      <div class="col-lg-4">
        <!-- CARD GAUCHE -->
      </div>

      <div class="col-lg-4 text-center">
        <!-- <hr> -->
      </div>

      <div class="col-lg-4">
        <!-- CARD DROITE -->
      </div>
    </div>

  </div>
</div>


    <?php include 'template/competence.php'; ?>
    <?php include 'template/projets.php'; ?>
    <?php include 'template/parcourScolaire.php'; ?>
    <?php include 'template/Stage.php'; ?>
    <?php include 'template/certif.php'; ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"
        integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>

    <script>

        $(document).ready(function () {

            $('[data-toggle="tooltip"]').tooltip();

            $('.card-content').hide();
            $('.btn-en-savoir-plus').click(function (event) {
                var target = $(event.target).closest('.card-body').find('.card-content');
                target.slideDown();
                target.siblings('.btn-en-savoir-plus').hide();
                target.siblings('.btn-fermer').show();
            });

            $('.btn-fermer').click(function (event) {
                var target = $(event.target).closest('.card-body').find('.card-content');
                target.slideUp();
                target.siblings('.btn-en-savoir-plus').show();
                target.siblings('.btn-fermer').hide();
            });



            //                                    $('#btn-en-savoir-plus').click(function () {
            //                                        $('.card-content').slideDown();
            //                                        $('#btn-fermer').show();
            //                                        $(this).hide();
            //                                    });
            //
            //                                    $('#btn-fermer').click(function () {
            //                                        $('.card-content').slideUp();
            //                                        $('#btn-en-savoir-plus').show();
            //                                        $(this).hide();
            //                                    });
        });
    </script>

    <script src="assets/App.js" type="text/javascript"></script>
</body>

</html>