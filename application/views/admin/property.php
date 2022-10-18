


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
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="my_dash">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url();?>AdminDash/assets/images/logo.png" class="light-logo" style="width: 100px; height: 80px;"/>
                           
                            <img src="<?php echo base_url();?>AdminDash/assets/images/logo.png" class="dark-logo" style="width: 100px; height: 80px;"/>

          
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                    
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="mdi mdi-menu"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-magnify me-1"></i> <span class="font-16">Search</span></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?php echo base_url();?>AdminDash/assets/images/users/profile.png" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i>
                                    Inbox</a>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="my_dash" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="my_profile" aria-expanded="false"><i
                                    class="mdi mdi-account-network"></i><span class="hide-menu">Profile</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="form" aria-expanded="false"><i class="mdi mdi-home-outline"></i><span
                                    class="hide-menu">Real Estate Form</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="logout" aria-expanded="false"><i class="mdi mdi-log-out"></i><span
                                    class="hide-menu">Logout</span></a></li>
                  
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
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
                        <a class="fw-bold" style="color: #1277e1;" href="../my_dash"><i class="fa-solid fa-left-long fa-2xl fw-bold mt-4"></i>  BACK</a>
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
            <div class="container-fluid">
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
                        <h1 class="card-title" style="font-size: 45px; font-weight: 900; color: #1277e1;"><?php echo '$'.$value;?> <span class="text-dark fw-normal">| <?php echo $property_type;?></span></h1>
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

</body>

</html>