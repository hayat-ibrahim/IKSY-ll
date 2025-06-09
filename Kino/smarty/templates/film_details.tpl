{include file="header.tpl"}

<div class="m-2">
  <div class="row mb-5 mr-3">
    <!-- Bild links (1/3) -->
    <div class="col-md-4">
      <img src="{$film.bild_link}" alt="{$film.titel}" class="img-fluid rounded shadow" style="object-fit: contain; width: 100%; max-height: 500px;">
    </div>
  
    <!-- Textinhalt rechts (2/3) -->
    <div class="col-md-8 d-flex flex-column justify-content-between">
      <div>
        <h1>{$film.titel}</h1>
        <p class="lead">{$film.beschreibung}</p>
      </div>
      <div class="mt-4 d-flex gap-2">
        <a href="filme.php" class="btn btn-secondary">← Zurück zur Übersicht</a>

        <!-- In den Warenkorb Button -->
        <a href="warenkorb.php?action=add&id={$film.id}" class="btn primary-background">
          🛒 In den Warenkorb
        </a>
      </div>
    </div>
  </div>
</div>

{include file="footer.tpl"}
