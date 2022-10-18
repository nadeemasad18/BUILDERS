

<body>

    <!---- This is NavBar group-->

  

      


    <!---- This is carousel group-->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url();?>Builders/builders/builders/images/home-3.jpg" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-sm-block d-sm-block">
              <h5>Your Dream Home</h5>
              <p class="d-none d-sm-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, labore.</p>
              <button type="button" class="btn btn-warning">Learn More</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url();?>Builders/builders/builders/images/img5454.jpg" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-sm-block d-sm-block">
                <h5>Luxury Homes</h5>
                <p class="d-none d-sm-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, labore.</p>
              <button type="button" class="btn btn-warning">Learn More</button>

            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url();?>Builders/builders/builders/images/home-1.jpg" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-sm-block d-sm-block">
                <h5>Looking For The Perfect Property?</h5>
                <p class="d-none d-sm-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, labore.</p>
              <button type="button" class="btn btn-warning">Learn More</button>

            </div>
          </div>
        </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
      </div>
</div>




<!---- This is card group-->
<div class="row pt-0">
  <div class="col-12">
<div class="card-group">
  <?php 
  foreach($properties['data'] as $row){
    echo '
    <div class="col-lg-4 d-flex align-items-stretch">
    <div class="card">
    <img src="'.$row->property_image.'"  class="card-img-top" />
    <div class="card-body d-flex flex-column">
    <h5 class="card-title">$ '.$row->property_value.'</h5>
    <p class="card-text mb-4">'.$row->beds.' bedrooms & '.$row->baths.' bathrooms</p>
    <a href="../Real_Estate/property/'.$row->property_id.'" class="btn btn-warning mt-auto align-self-start">Learn More</a>
  </div>
    </div>
    </div>';
  }
  ?>
  <!--  <div class="card">
      <img src="<?php echo base_url();?>Builders/builders/images/img1111.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">$200,000</h5>
        <p class="card-text">2 Bedroom 1 Bathroom</p>
        <button type="button" class="btn btn-warning">Learn More</button>
        


      </div>
    </div>-->
    <!--<div class="card">
        <img src="<?php echo base_url();?>Builders/builders/images/img2323.png" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">$2,000,000</h5>
        <p class="card-text">4 Bedroom 3 Bathroom.</p>
        <button type="button" class="btn btn-warning">Learn More</button>

      </div>
    </div>-->
   <!-- <div class="card">
        <img src="<?php echo base_url();?>Builders/builders/images/img2100.png" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">$5,275,320</h5>
        <p class="card-text">7 Bedroom 4 Bathroom</p>
        <button type="button" class="btn btn-warning">Learn More</button>

      </div>
    </div>-->

    <!--<div class="card">
        <img src="<?php echo base_url();?>Builders/builders/images/img2022.avif" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">$6,432,270</h5>
        <p class="card-text">8 Bedroom 5 Bathroom</p>
        <button type="button" class="btn btn-warning">Learn More</button>

      </div>

  </div>-->

  <!--<div class="card">
    <img src="<?php echo base_url();?>Builders/builders/images/img111.avif" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">$326,863</h5>
    <p class="card-text">4 Bedroom 1.5 Bathroom</p>
    <button type="button" class="btn btn-warning">Learn More</button>

  </div>
-->
 

</div>
</div>     <!-- Col End -->
</div>   <!-- Row End -->








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>



</body>
