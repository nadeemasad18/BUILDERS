



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
                              <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Real Estate</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Property Form</h1> 
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
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Upload Real Estate Property</h4>
                                        <?php echo $this->session->flashdata('uploaded');?>
                                        <?php echo $this->session->flashdata('not_uploaded');?>
                                        <p class="text-center text-muted">The properties will be displayed on the home page</p>
                                    </div>
                                    <div class="ms-auto d-flex no-block align-items-center">
                                     
                                    </div>
                                </div>
                               <form method="POST" action="upload_property">
                                <select name="property_type" style="padding: 15px; width: 100%; border: none; background-color: #eee; font-size: 18px;" class="mb-3">
                                <option disabled selected>Property Type</option>
                                <option value="<?php echo set_select('property_type');?>"><?php echo set_select('property_type'); ?></option>
                                <option>Single Family Home</option>
                                <option>Multi-Family Home</option>
                                <option>Apartment</option>
                                <option>Condo</option>
                                <option>Cabin</option>
                                <option>Lot</option> 
                                </select>
                                <input value="<?php echo set_value('property_address');?>" name="property_address" style="padding: 15px; width: 100%; border: none; background-color: #eee; font-size: 18px;" class="mb-3" placeholder="Property Address" />
                                
                                <select name="state" id="state" name="state" style="padding: 15px; width: 100%; border: none; background-color: #eee; font-size: 18px;" class="mb-3">
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AS">American Samoa</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District Of Columbia</option>
                                <option value="FM">Federated States Of Micronesia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="GU">Guam</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PW">Palau</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VI">Virgin Islands</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                                </select>
                                                        

                                <input value="<?php echo set_value('city');?>" name="city"  style="padding: 15px; width: 100%; border: none; background-color: #eee; font-size: 18px;" class="mb-3" placeholder="City" />
                                <input value="<?php echo set_value('zipcode');?>" name="zipcode" style="padding: 15px; width: 100%; border: none; background-color: #eee; font-size: 18px;" class="mb-3" placeholder="Zipcode" />
                                <input value="<?php echo set_value('beds');?>" name="beds" style="padding: 15px; width: 100%; border: none; background-color: #eee; font-size: 18px;" class="mb-3" placeholder="Beds" />
                                <input value="<?php echo set_value('baths');?>" name="baths" style="padding: 15px; width: 100%; border: none; background-color: #eee; font-size: 18px;" class="mb-3" placeholder="Baths" />
                                <input value="<?php echo set_value('square_footage');?>" name="square_footage" style="padding: 15px; width: 100%; border: none; background-color: #eee; font-size: 18px;" class="mb-3" placeholder="Square footage" />
                               <input value="<?php echo set_value('lot_size');?>" name="lot_size" style="padding: 15px; width: 100%; border: none; background-color: #eee; font-size: 18px;" class="mb-3" placeholder="Lot Size" />
                                <input value="<?php echo set_value('property_value');?>"  name="property_value" style="padding: 15px; width: 100%; border: none; background-color: #eee; font-size: 18px;" class="mb-3" placeholder="Property Value" />
                                <textarea value="<?php echo set_value('features');?>" name="features" style="padding: 15px; width: 100%; border: none; background-color: #eee; font-size: 18px;" class="mb-3" placeholder="Property Features or if none enter N/A"></textarea>
                                <textarea value="<?php echo set_value('property_description');?>" name="property_description" style="padding: 15px; width: 100%; border: none; background-color: #eee; font-size: 18px;" class="mb-3" placeholder="Property Description"></textarea>
                                <input name="property_image" type="text" style="padding: 15px; width: 100%; border: none; background-color: #eee; font-size: 18px;" class="mb-3 form-control" placeholder="Image (enter image url)" />
                                <button class="btn btn-primary mt-3 btn-lg">Upload</button>   
                                </form>
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