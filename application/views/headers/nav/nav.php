<?php 
switch(current_url()){
    case 'http://localhost:8888/BUILDERS/index.php/Home/welcome':
     $home_active="active-link";
     break;

    case 'http://localhost:8888/BUILDERS/index.php/Home/about':
        $about_active="active-link";
        break;
    
    case 'http://localhost:8888/BUILDERS/index.php/Home/contact':
        $contact_active="active-link";
        break;
    case 'http://localhost:8888/BUILDERS/index.php/Home/mortgage':
        $mortgage_active="active-link";
        break;

    case 'http://localhost:8888/BUILDERS/index.php/Login/signin':
        $login_active= 'active-link';
        break;
 
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="http://localhost:8888/BUILDERS/index.php/Home/welcome"><span class="text-warning">Buil</span>ders</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="<?php if(isset($home_active)){echo $home_active;} ?>" aria-current="page" href="http://localhost:8888/BUILDERS/index.php/Home/welcome">Home</a>
                
              </li>
              <li class="nav-item">
                <a id="mort" href="mortgage">Mortgage Calculator</a>
              </li>
              <li class="nav-item">
                <a class="<?php if(isset($about_active)){echo $about_active;}  ?>" href="http://localhost:8888/BUILDERS/index.php/Home/about">About</a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8888/BUILDERS/index.php/Home/contact" class="<?php if(isset($contact_active)){echo $contact_active;} ?>" >Contact</a>
              </li>
              <li class="nav-item">
                <a  href="http://localhost:8888/BUILDERS/index.php/Login/signin" class="<?php if(isset($login_active)){echo $login_active;}  ?>">login</a>
              </li>
          
            </ul>
      
            </div>

        </div>


        
      </nav>