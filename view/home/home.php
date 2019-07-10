<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/image/2.jpg" alt="First slide" style="height:400px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/image/3.jpg" alt="Second slide" style="height:400px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/image/4.jpg" alt="Third slide" style="height:400px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/image/5.jpg" alt="Third slide" style="height:400px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

      <div class="card" >
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
