

<?php 
foreach($property['data'] as $row){
    $property_type = $row->property_type;
    $address = $row->property_address;
    $state = $row->property_state;
    $city = $row->property_city;
    $zipcode = $row->zipcode;
    $value = $row->property_value;
    $description = $row->property_description;
    $baths = $row->baths;
    $beds = $row->beds;
    $square_footage = $row->square_footage;
    $lot_size = $row->lot_size;
    $features = $row->features;
    $image = $row->property_image;
}
?>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
 
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper m-5 p-5">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="../my_dash" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Real Estate</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Property Details</h1> 
                        <a class="fw-bold text-primary" style="text-decoration: none;" href="../../Home/welcome"><i class="fa-solid fa-left-long fa-2xl fw-bold mt-4"></i>  BACK</a>
                        <?php echo $this->session->flashdata('errors');?>
                    </div>
                
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid shadow-lg p-3 mb-5 bg-body rounded mt-3">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
           
                <div class="card mb-3" style="max-width: auto; max-height: auto; border: none;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="<?php echo $image;?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="card-title text-primary" style="font-size: 45px; font-weight: 900;"><?php echo '$'.$value;?> <span class="text-dark fw-normal">| <?php echo $property_type;?></span></h1>
                        <h5 class="fw-bold text-secondary"><?php echo $address . ', '.$city.', '.$state.', '.$zipcode;?></h5>
                        <p class="card-text font-16"><?php echo $description;?></p>
                        <br />
                        <p class="card-text text-white p-4" style="background-color: #1277e1;"><i class="fa-solid fa-bed text-white fa-xl"></i> Beds: <?php echo $beds;?></p>
                        <p class="card-text text-white p-4" style="background-color: #1277e1;"><i class="fa-solid fa-bath text-white fa-xl"></i> Baths: <?php echo $baths;?></p>
                        <p class="card-text text-white p-4" style="background-color: #1277e1;"><i class="fa-solid fa-shoe-prints text-white fa-xl"></i> Size: <?php echo $square_footage. ' Sqft' ?></p>
                        <p class="card-text text-white p-4" style="background-color: #1277e1;"><i class="fa-solid fa-tree text-white fa-lxlg"></i> <?php echo $lot_size. ' acre(s)'; ?></p>
                    </div>
                    </div>
                </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
            
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>