<?php
/* Smarty version 4.3.2, created on 2025-06-15 00:00:33
  from '/var/www/html/iksy05/Kino/smarty/templates/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_684e0d2138a154_60039178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c14c6ef937ac0beaa5269facc14cdcf1f177e705' => 
    array (
      0 => '/var/www/html/iksy05/Kino/smarty/templates/footer.tpl',
      1 => 1749945629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684e0d2138a154_60039178 (Smarty_Internal_Template $_smarty_tpl) {
?></div> <!-- ggf. ein schließendes DIV vom Haupt-Container -->


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
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>


</body>
</html>
<?php }
}
