<?php
if($succesFull == "FALSE") { ?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  Er is een fout opgetreden probeer het <strong>opnieuw</strong></div>

<?php } else { ?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>

  Bevestigings mail <strong>Succesvol</strong> verstuurd
</div>

<?php } ?>