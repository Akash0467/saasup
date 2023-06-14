<!doctype html>
<html <?php language_attributes(); ?>>
<head>

  <!-- Required meta tags -->
  <meta charset="<?php echo bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- favicon-icon  -->
  <link rel="shortcut icon" href="<?php echo $options['favicon-upload']['url'];?>" type="image/x-icon">
  <!-- CSS Links -->
  <link href="<?php echo get_template_directory_uri();?>/assets/css/fontawesome.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/owl.theme.default.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/style.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css" rel="stylesheet">

  <?php wp_head() ?>
</head>

<body>
   <!-- strat header_area  -->
   <header class="About_header ">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-md-12 col-lg-3 ">
            <div class="logo">
              <a href="<?php home_url();?>">
              <img src="<?php echo $options['header-logo']['url'];?>" loading="lazy" alt="saasup_logo">
              </a>
              <div class="menu-icon">
                <a href="<?php echo $options['header-1-url']; ?>" class="btn-1"><?php echo $options['header-button-1']; ?></a>
                <a href="#" class="menu-icon1"><i class="fa-solid fa-bars-staggered"></i></a>
                
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-9">
            <div class="menus d-flex justify-content-end align-items-center">
              <nav class="menu">
                <ul class="d-flex ">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="#"  data-bs-toggle="dropdown" class="dropdown-toggle"  >Features</a>
                    
                    <ul class="dropdown-menu">
                      <li class="dropdown-item"><a href="features.html">Features</a></li>
                      <li class="dropdown-item"><a href="developer.html">Developer</a></li>
                      <li class="dropdown-item"><a href="Articles.html">Article</Article></a></li>
                      <li class="dropdown-item"><a href="facebook.html">Facebook</a></li> 
                       
                    </ul>
                  </li>
                  <li><a href="#"  data-bs-toggle="dropdown"  class="dropdown-toggle" >Pages</a>
                    
                    <ul class="dropdown-menu">
                      <li class="dropdown-item"><a href="careers.html">Careers</a></li>
                      <li class="dropdown-item"><a href="changelog.html">Changelog</a></li>
                      <li class="dropdown-item"><a href="Integrations.html">Integrations</a></li>
                      <li class="dropdown-item"><a href="contact.html">Contact</a></li>
                      <li class="dropdown-item"><a href="advance.html">Advance</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Cart &nbsp;<i class="fa-solid fa-cart-plus"></i></a></li>
                </ul>
              </nav>
              <div class="menu-button">
              <a href="<?php echo $options['header-1-url']; ?>" class="btn-1"><?php echo $options['header-button-1']; ?></a>
              </div>
            </div>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
         -->
          </div>

       </div>

        

      </div>

    </div>

  </header>
  <!-- end header_area  -->
  