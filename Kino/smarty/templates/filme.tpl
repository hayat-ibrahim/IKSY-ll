{include file="header.tpl"}

<div class="m-1 d-flex flex-column align-items-center w-100 p-3">

  <!--<h1 class="mb-4">Filmübersicht</h1>-->
  
  <!-- Suchfeld -->
  <form method="get" action="filme.php" class="mb-4">
    <div class="input-group">
      <input type="text" name="suche" class="form-control" placeholder="Nach Filmtitel suchen..." value="{$suchbegriff|escape}">
      <button type="submit" class="btn primary-background">Suchen</button>
    </div>
  </form>
  
  <!-- Films section -->
  <!-- Aus Filme eine Liste gemacht (Grid) -->
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4 w-100"> <!-- responsive -->
    {foreach $filme as $film}
      <div class="col d-flex justify-content-center">
        <div class="card h-100">
          <img src="{$film.bild_link}" class="card-img-top" alt="{$film.titel}">
          <div class="card-body d-flex flex-column align-items-center ">
            <h3 class="card-title">{$film.titel}</h5>
            <a href="film_details.php?id={$film.id}" class="btn btn-md primary-background">Filmdetails</a>
          </div>
        </div>
      </div>
    {/foreach}
  </div>
  
  {if $filme|@count == 0}
    <p class="mt-4">Keine Filme gefunden.</p>
  {/if}
  
</div>
{include file="footer.tpl"}
