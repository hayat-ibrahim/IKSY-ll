{include file="header.tpl"}

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
  <div style="background-color: #9F2225; color: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 550px; height: 500px; display: flex; flex-direction: column; justify-content: space-between;">

    <div style="flex-grow: 1; overflow-y: auto;">
    
    {if !$tickets|@count}
  <p style="text-align:center; font-size:1.2rem; color:#bbb; margin-top:2rem;">
    Dein Warenkorb ist leer.
  </p>
{/if}
    
        {foreach $tickets as $index => $ticket}
        <div class="ticket-container" style="display: flex; gap: 1rem; margin-bottom: 1rem;">
          <div style="flex-shrink: 0;">
            <img src=".{$ticket.bild_link}" alt="{$ticket.titel}" style="width: 250px; height: 330px; object-fit: cover; border-radius: 0.5rem;">
          </div>

          <div style="flex: 1; display: flex; flex-direction: column; justify-content: space-between; padding-left: 1rem;">
            <div>
              <h4 style="margin-top: 1rem; font-weight: bold; text-align: center;">
                {$ticket.titel}
              </h4>
            </div>

            <div style="text-align: center; margin-top: 1rem;">
              <p style="margin: 0.2rem 0;">Datum: {$ticket.datum}</p>
              <p style="margin: 0.2rem 0;">Uhrzeit: {$ticket.uhrzeit}</p>
              <p style="margin: 0.2rem 0;">Saal: {$ticket.saalnummer}</p>

              <label style="margin-top: 3rem; display: block; font-size: 0.95rem;">
                <input 
                  type="checkbox" 
                  class="kind-checkbox" 
                  data-index="{$index}" 
                  {if $ticket.typ == "Kind"}checked{/if}>
                Kind unter 12 (3 € Rabatt)
              </label>

              <p class="preis-anzeige" style="margin-top: 0.8rem; font-size: 0.8rem; font-weight: bold; background-color: #f2e3e3; color: #000; padding: 0.5rem; border-radius: 0.5rem;">
                {assign var=preis value=$ticket.ticketPreis}
                {if $ticket.typ == "Kind"}{assign var=preis value=$ticket.ticketPreis - 3}{/if}
                Bezahlender Betrag: {$preis|number_format:2:",":"."} €
              </p>
            </div>
          </div>
        </div>
        {/foreach}
    
    </div>
	<button 
 		 id="checkoutBtn" 
 		 style="background: #f2e3e3; color: black; padding: 1rem; font-weight: bold; border-radius: 1.5rem; cursor: pointer; width: 100%; font-size: 1.1rem; border: none;" 
         {if $tickets|@count == 0}disabled{/if}
		>
 		 Zahlen
	</button>


  </div>
</div>
{literal}

<script>
document.getElementById('checkoutBtn').addEventListener('click', function() {
  // Button ist disabled?
  if (this.disabled) {
    // Nichts tun, weil kein Film ausgewählt
    return;
  }

  // Sonst Weiterleitung zur Buchungsseite
  window.location.href = 'buchung.php'; // Pfad anpassen
});
</script>


<script>
document.querySelectorAll('.kind-checkbox').forEach(checkbox => {
  checkbox.addEventListener('change', function() {
    const index = this.dataset.index;
    const ticket_typ = this.checked ? 'Kind' : 'Normal';

    fetch('warenkorb.php', {  // Hier den Pfad anpassen, falls deine PHP Datei anders heißt
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: `typUpdate=1&ticket_typ=${encodeURIComponent(ticket_typ)}&index=${encodeURIComponent(index)}`
    })
    .then(response => response.json())
    .then(data => {
      if (data.preis) {
        const preisAnzeige = this.closest('.ticket-container').querySelector('.preis-anzeige');
        preisAnzeige.textContent = `Bezahlender Betrag: ${data.preis} €`;
      }
    })
    .catch(console.error);
  });
});
</script>
{/literal}


{include file="footer.tpl"}
