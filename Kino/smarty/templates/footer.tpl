</div> <!-- ggf. ein schließendes DIV vom Haupt-Container -->

{literal}
<!-- Datenschutz Modal (automatisch bei Seitenstart) -->
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
          Mit deiner Zustimmung erklärst du dich mit unserer <a href="#" class="text-decoration-underline">Datenschutzerklärung</a> einverstanden.
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
<footer class="primary-background text-white text-center p-3 mt-3 d-flex justify-content-center"> 
  <div>
    &copy; 2025 Kino-Projekt Hayat - Amani - Rouya<br>
    <a 
      href="#" 
      class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
      data-bs-toggle="modal" 
      data-bs-target="#datenschutzModal"
    >
      Datenschutz
    </a>
  </div>
</footer>

<!-- Bootstrap JS + Modal Init Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Show modal on page load
  window.addEventListener('load', function () {
    var modal = new bootstrap.Modal(document.getElementById('datenschutzModal'));
    modal.show();

    // Enable button only when checkbox is checked
    const checkbox = document.getElementById('acceptPrivacy');
    const button = document.getElementById('acceptButton');

    checkbox.addEventListener('change', () => {
      button.disabled = !checkbox.checked;
    });

    button.addEventListener('click', () => {
      modal.hide();
      // Optional: localStorage.setItem('privacyAccepted', 'true');
    });
  });
</script>
{/literal}

</body>
</html>
