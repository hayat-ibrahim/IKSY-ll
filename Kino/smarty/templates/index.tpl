
{include file="header.tpl"}
<body class="m-0">

    <!-- Hero section -->
    <div class="hero-image my-3">
      <div class="hero-text text-white text-center d-flex flex-column align-items-center justify-content-center h-100">
            <h1 class="mb-3">Willkommen im Kinoerlebnis</h1>
            <p class="mb-4">Entdecke aktuelle Blockbuster, zeitlose Klassiker und kommende Highlights</p>
            <a href="filme.php" class="btn btn-lg primary-background">Jetzt Filme entdecken</a>
        </div>
    </div>

    <!-- Films section -->
    <!-- Aus Filme eine Liste gemacht (Grid) -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4"> <!-- responsive -->
      {foreach $filme as $film}
        <div class="col d-flex justify-content-center">
          <div class="card h-100 m-2 p-2" style="width: 400px;">
            <img src="./{$film.bild_link}" class="card-img-top" alt="{$film.titel}">
            <div class="card-body d-flex flex-column align-items-center justify-content-between">
              <h5 class="card-title">{$film.titel}</h5>
              <a href="film_details.php?id={$film.id}" class="btn btn-md primary-background">Filmdetails</a>
            </div>
          </div>
        </div>
      {/foreach}
    </div>
</body>

{include file="footer.tpl"}
