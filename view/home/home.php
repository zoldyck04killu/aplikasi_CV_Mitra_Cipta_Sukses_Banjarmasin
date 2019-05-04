<div class="card">
  <div class="card-header">
    HOME
  </div>
  <div class="card-body">
    <h5 class="card-title">Selamat Datang <?php if (@$_SESSION['admin']) { ?>  <b> Admin </b> <?php } ?> </h5> 
    <p class="card-text">Percetakan Dan Digital Printing Terlengkap Dan Ter-Oke Di Banjarmasin</p>
    <?php if (@$_SESSION['admin']) {?>
    	<a href="?view=logout" class="btn btn-danger">Logout</a>
    <?php }else{ ?>
    <a href="?view=login" class="btn btn-primary">Login</a>
	<?php } ?>
  </div>
</div>