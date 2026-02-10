<?php include 'template/Header.php'; ?>

<body class=""> <!-- pt-4 pt-lg-5 --> <?php include 'template/nav.php'; ?>
  <div class="vitrine" id="vitrine">
    <div class="container"> <!-- LIGNE DU HAUT (cards libres) -->
      <div class="row mb-4">
        <div class="col-lg-4"> <!-- CARD GAUCHE (optionnelle) --> </div>
        <div class="col-lg-4 text-center"> <!-- <hr> --> </div>
        <div class="col-lg-4"> <!-- CARD DROITE (optionnelle) --> </div>
      </div> <!-- LIGNE CENTRALE -->
      <div class="row align-items-center mb-4"> <!-- COLONNE GAUCHE -->
        <div class="col-12 col-lg-3 mb-4 mb-lg-0 gx-lg-5 gx-xl-6">
          <div class="card neo-card neo-card--interactive card-projet h-100"> <a data-bs-toggle="modal"
              data-bs-target="#modal-BlckContrast" class="text-decoration-none">
              <div class="card-head d-flex justify-content-between align-items-center mb-2"> <i
                  class="fa-solid fa-thumbtack"></i> <span class="badge badge-warning">LD</span>
                <h6 class="mb-0">LP</h6>
              </div> <img class="card-img-top mb-3" src="assets/img/BlockoutContrast.png" alt="ESP : Duel En Ligne" />
              <div class="card-details text-center">
                <p class="text-title mb-1">Blockout : Contraste</p>
                <p class="text-body"> <i class="cib-unreal-engine icon icon-xxl"></i> </p>
              </div> <button class="neo-card__button"> En savoir plus</button>
            </a> </div>
          <hr>
          <div class="card neo-card neo-card--interactive card-projet h-100"> <a data-bs-toggle="modal"
              data-bs-target="#modal-GJLPDeath" class="text-decoration-none">
              <div class="card-head d-flex justify-content-between align-items-center mb-2"> <i
                  class="fa-solid fa-thumbtack"></i> <span class="badge badge-warning">LD</span>
                <h6 class="mb-0">LP</h6>
              </div> <img class="card-img-top mb-3" src="assets/img/GJDeath.png"
                alt="Visuel Deathtination Finale -a Floumby's Stourie" />
              <div class="card-details text-center">
                <p class="text-title mb-1">Game Jams : "Deathtination Finale" -a Floumby's Stourie</p>
                <p class="text-body"> <i class="fab fa-unity fa-2x"></i> </p>
              </div> <button class="neo-card__button"> En savoir plus</button>
            </a> </div>
        </div> <!-- TEXTE CENTRAL ENCADRÉ -->
        <div class="col-12 col-lg-6 ">
          <div class="neo-card neo-card--round text-center vitrine-center">
            <h1 class="mb-3"> <strong>Bonjour !</strong><br> Je suis Aymeric Moreau </h1>
            <p class="mb-3"> Je suis Acutellement en Licence professionnelle Métiers du jeu vidéo – Level Design<br> a
              l'Université Lumière Lyon 2 </p> <?php include 'template/reseaux.php'; ?>
          </div>
        </div> <!-- COLONNE DROITE -->
        
        <div class="col-12 col-lg-3 mt-4 mt-lg-0 gx-lg-5 gx-xl-6"> 
          <div class="card neo-card neo-card--interactive card-projet h-100"> <a data-bs-toggle="modal"
              data-bs-target="#modal-Towerbael" class="text-decoration-none">
              <div class="card-head d-flex justify-content-between align-items-center mb-2"> <i
                  class="fa-solid fa-thumbtack">
                </i> <span class="badge badge-error">GameDev</span> 
                <span class="badge ">GenProcedural</span>
                <h6 class="mb-0">LP</h6>
              </div> <img class="card-img-top mb-3" src="assets/img/TowerOfBael.png" alt="ESP : Duel En Ligne" />
              <div class="card-details text-center">
                <p class="text-title mb-1">Tower Of Baël</p>
                <p class="text-body"> <i class="fab fa-unity fa-2x"></i> </p>
              </div> <button class="neo-card__button"> En savoir plus </button>
            </a> 
          </div>

          <hr>

          <div class="card neo-card neo-card--interactive card-projet h-100"> <a data-bs-toggle="modal"
              data-bs-target="#modal-Towerbael" class="text-decoration-none">
              <div class="card-head d-flex justify-content-between align-items-center mb-2"> <i
                  class="fa-solid fa-thumbtack"></i> <span class="badge badge-error">GameDev</span>
                <h6 class="mb-0">Projet personnel</h6>
              </div> <img class="card-img-top mb-3" src="assets/img/JeuDeLaVie.png" alt="Projet Perso Jeu de la vie" />
              <div class="card-details text-center">
                <p class="text-title mb-1">Jeu de la vie</p>
                <p class="text-body d-flex justify-content-center align-items-center gap-2"> <i class="cib-cplusplus icon icon-xxl"></i> 
                <svg xmlns="http://www.w3.org/2000/svg" class="tech-logo" viewBox="0 0 24 24">
                    <path
                      d="M0 0v24h24V0zm1.5 1.5h21v21h-21zm14.813 15.469v3.281h.937v-.469h-.469V16.97zm1.406 0v.468h.468v-.468zm.937 0v3.281H21v-2.344h-1.875v-.937zm-10.781.937v2.344h.469v-1.875h1.875v-.469zm2.813 0v.469h1.874v.469h-1.874v1.406h2.343v-2.344zm2.812 0v2.344h1.875v.469H13.5v.468h2.344v-3.28h-.469v1.874h-1.406v-1.875zm4.219 0v2.344h.468v-2.344zm1.406.469h1.406v1.406h-1.406zm-7.969.938h1.406v.468h-1.406z" />
                  </svg> </p>
              </div> <button class="neo-card__button"> En savoir plus </button>
            </a> </div>
        </div>
      </div> <!-- LIGNE DU BAS (cards libres) -->
      <div class="row mt-4">
        <div class="col-lg-4"> <!-- CARD GAUCHE --> </div>
        <div class="col-lg-4 text-center"> <!-- <hr> --> </div>
        <div class="col-lg-4"> <!-- CARD DROITE --> </div>
      </div>
    </div>
  </div>


  <?php include 'template/competence.php'; ?>
  <?php include 'template/projets.php'; ?>
  <?php include 'template/parcourScolaire.php'; ?>
  <?php include 'template/Stage.php'; ?>
  <?php include 'template/certif.php'; ?>

  <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>


  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"
    integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
    integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D"
    crossorigin="anonymous"></script>

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

  <script>
document.addEventListener("DOMContentLoaded", function () {
  const grid = document.querySelector(".masonry-grid");

  const msnry = new Masonry(grid, {
    itemSelector: ".masonry-item",
    percentPosition: true
  });

  imagesLoaded(grid).on("progress", function () {
    msnry.layout();
  });
});
</script>


  <script src="assets/App.js" type="text/javascript"></script>
</body>

</html>