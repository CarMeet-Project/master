<?php
if($succesFull == "FALSE") { ?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  Gebruikersnaam en/of email bestaat al, probeer het opnieuw.
</div>

<?php } else { ?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Succesvol</strong> aangemaakt
</div>

<?php } ?>