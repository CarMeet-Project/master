<?php
if($succesFull == "FALSE") { ?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  Er is een fout opgetreden 
  <a href="#" class="alert-link"><strong>Klik hier</strong></a> om opnieuw te proberen.
</div>

<?php } else { ?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Succesvol</strong> aangemaakt, Controleer je <strong>Mail</strong> voor de verficatie code
</div>

<?php } ?>