{include file="header.tpl"}

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
  <div style="background-color: #9F2225; color: white; padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 550px; height: 500px; display: flex; flex-direction: column; justify-content: space-between;">

    <div style="flex-grow: 1; overflow-y: auto;">
      {foreach $tickets as $ticket}
      <div style="display: flex; gap: 1.5rem; margin-bottom: 2rem;">

        <div style="flex-shrink: 0;">
          <img src="{$ticket.bild_url}" alt="{$ticket.titel}" style="width: 250px; height: 330px; object-fit: cover; border-radius: 0.5rem;">
        </div>

        <div style="flex: 1; display: flex; flex-direction: column; justify-content: space-between; padding-left: 1rem;">

          <div>
            <h4 style="margin-top: 2.5rem; font-weight: bold; text-align: center;">
              {$ticket.titel}
            </h4>
          </div>

          <div style="text-align: center; margin-top: 3.4rem;">
            <p style="margin: 0.25rem 0;">Datum: {$ticket.veroeffentlichungsdatum}</p>
            <p style="margin: 0.25rem 0;">Uhrzeit: {$ticket.uhrzeiten}</p>
            <p style="margin: 0.25rem 0;">Saal: {$ticket.saalnummer}</p>
            <p style="margin: 0.25rem 0;">Preis: {$ticket.ticketPreis|default:"nicht verfügbar"} €</p>
          </div>

          <form method="post" action="warenkorb.php" style="margin-top: 0.5rem; text-align: center;">
 			<input type="hidden" name="typUpdate" value="1">
  			<select name="ticket_typ" onchange="this.form.submit()" style="font-size: 0.85rem; border-radius: 0.5rem; padding: 0.25rem 0.5rem;">
		    <option value="Normal" {if $ticket.typ == "Normal"}selected{/if}>Erwachsener</option>
 		   <option value="Kind unter 12" {if $ticket.typ == "Kind unter 12"}selected{/if}>Kind unter 12</option>
		  </select>
		 </form>


        </div>

      </div>
      {/foreach}
    </div>

    <a href="buchung.php">
      <button style="background: #f2e3e3; color: black; padding: 1rem; font-weight: bold; border-radius: 1.5rem; cursor: pointer; width: 100%; font-size: 1rem; border: none;">
        zur Kasse
      </button>
    </a>

  </div>
</div>

{include file="footer.tpl"}