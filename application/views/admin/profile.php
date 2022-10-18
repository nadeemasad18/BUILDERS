



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
                              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">My Profile</h1> 
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
                                        <h4 class="card-title">Update my profile info</h4>
                                    </div>
                                    <div class="ms-auto d-flex no-block align-items-center">
                                     
                                    </div>
                                </div>
                               <form method="POST" action="../index.php/Admin/update_profile">
                                <input style="padding: 15px; width: 100%; border: none; background-color: #eee; font-size: 18px;" class="mb-3" placeholder="Email" value="<?php echo $this->session->email;?>" />
                                <textarea style="padding: 15px; width: 100%; border: none; background-color: #eee; font-size: 18px;" placeholder="Realtor Bio"></textarea>
                                <button class="btn btn-primary mt-3 btn-lg">Update</button>   
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Change Password</h4>
                                        <?php 
                                       echo $this->session->flashdata('errors');
                                       echo $this->session->flashdata('incorrect_curr_pwd');
                                       echo $this->session->flashdata('pwd_updated');
                                       echo $this->session->flashdata('pwd_update_fail');
                                       
                                        ?>
                                    </div>
                                    <div class="ms-auto d-flex no-block align-items-center">
                                     
                                    </div>
                                </div>
                               <form method="POST" action="change_pass">
                                <input type="password" name="curr_pwd" style="padding: 15px; width: 100%; border: none; background-color: #eee; font-size: 18px;" class="mb-3" placeholder="Current Password"  />
                                <input type="password" name="new_pwd" style="padding: 15px; width: 100%; border: none; background-color: #eee; font-size: 18px;" class="mb-3" placeholder="New Password"  />
                                <input type="password" name="confirm_pwd" style="padding: 15px; width: 100%; border: none; background-color: #eee; font-size: 18px;" class="mb-3" placeholder="Retype New Password"  />

                                <button class="btn btn-primary mt-3 btn-lg">Change Password</button>   
                                </form>
                            </div>
                        </div>
                    </div>
           
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Upload Profile Pic</h4>
                                        <?php 
                                        // Success or error messages
                                        echo $this->session->flashdata('upload_errors');
                                        echo $this->session->flashdata('image_upload_failed');
                                        echo $this->session->flashdata('image_upload_success');

                                        ?>
                                    </div>
                                    <div class="ms-auto d-flex no-block align-items-center"></div>
                                </div>
                                <form method="POST" action="upload_profile_pic">
                                        <input  style="padding: 15px; width: 100%; border: none; background-color: #eee; font-size: 18px;" class="mb-3" type="text" name="profile_pic" placeholder="Enter image url">
                                        <button class="mt-3 btn btn-dark btn-lg">Upload</button>
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