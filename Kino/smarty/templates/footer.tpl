</div> <!-- ggf. ein schließendes DIV vom Haupt-Container -->

{literal}
<!-- Datenschutz Modal -->
<div class="modal fade" id="datenschutzModal" tabindex="-1" aria-labelledby="datenschutzLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="datenschutzLabel">Datenschutzhinweis</h5>
      </div>
      <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
        <p>
          Diese Website verwendet nur technisch notwendige Cookies und speichert keine personenbezogenen Daten ohne deine Zustimmung.
        </p>
        <p>
          Mit deiner Zustimmung erklärst du dich mit unserer 
          <a href="datenschutz.php" class="text-decoration-underline" target="_blank">Datenschutzerklärung</a> einverstanden.
        </p>

        <div class="form-check mt-4">
          <input class="form-check-input" type="checkbox" id="acceptPrivacy">
          <label class="form-check-label" for="acceptPrivacy">
            Ich habe die Datenschutzerklärung gelesen und akzeptiere sie.
          </label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="acceptButton" class="btn btn-primary" disabled>Akzeptieren</button>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer style="background-color: #9F2225; color: white;" class="text-center p-3 mt-3 d-flex justify-content-center"> 
  <div>
    &copy; 2025 Kino-Projekt – Hayat • Amani • Rouya<br>
    <a 
      href="#" 
      id="openPrivacyLink"
      style="color: white; text-decoration: none;"
      onmouseover="this.style.textDecoration='underline';" 
      onmouseout="this.style.textDecoration='none';"
    >
      Datenschutz
    </a>
  </div>
</footer>

<!-- Bootstrap + Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  window.addEventListener('load', function () {
    const modalEl = document.getElementById('datenschutzModal');
    const modal = new bootstrap.Modal(modalEl);
    const checkbox = document.getElementById('acceptPrivacy');
    const button = document.getElementById('acceptButton');
    const openLink = document.getElementById('openPrivacyLink');

    const showModal = () => {
      checkbox.checked = false;
      button.disabled = true;
      modal.show();
    };

    // 1. Zeige Modal automatisch nur einmal
    if (!localStorage.getItem('privacyAccepted')) {
      showModal();
    }

    // 2. Button aktivieren, wenn Checkbox angeklickt
    checkbox.addEventListener('change', () => {
      button.disabled = !checkbox.checked;
    });

    // 3. Akzeptieren speichern
    button.addEventListener('click', () => {
      localStorage.setItem('privacyAccepted', 'true');
      modal.hide();
    });

    // 4. Zeige Modal erneut, wenn auf "Datenschutz"-Link geklickt wird
    openLink.addEventListener('click', (e) => {
      e.preventDefault();
      showModal();
    });
  });
</script>
{/literal}

</body>
</html>
