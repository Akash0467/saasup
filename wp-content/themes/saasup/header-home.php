<?php 
  $options = get_option('saasup');
?>
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
<header class="header_area section_padding">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-md-12 col-lg-3 ">
            <div class="logo">
              <a href="<?php home_url();?>">
              <img src="<?php echo $options['header-logo']['url'];?>" loading="lazy" alt="saasup_logo">
              </a>
              <div class="menu-icon">
                <a href="#" class="btn-2">Sing In</a>
                <a href="#" class="menu-icon1"><i class="fa-solid fa-bars-staggered"></i></a>               
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-9">
            <div class="menus d-flex justify-content-end align-items-center">
              <nav class="menu">

                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'menu_class' => 'd-flex',
                        'walker' => new WP_Bootstrap_Navwalker(),
                    ));
                ?>
 
              </nav>
              <div class="menu-button">
                <a href="<?php echo $options['header-1-url']; ?>" class="btn-1"><?php echo $options['header-button-1']; ?></a>
              </div>
            </div>
          </div>
       </div>
       <div class="row benner_area">
          <div class="col-lg-6">
            <div class="bennar_conteat">
              <h1><?php echo $options['bennar-heading'];?></h1>
              <p><?php echo $options['bennar-description']; ?></p>
              <ul class=" d-flex">
                <li><a class=" btn-2" href="<?php echo $options['button-1-url'];?>"><?php echo $options['bennar-button-1'];?></a></li>
                <li><a class=" btn-3 d-flex align-items-center" id="popupVideo" href="<?php echo $options['button-2-url'];?>"><?php echo $options['bennar-button-2'];?><i class="fa-solid fa-circle-play"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="bennar-img" >
              <img src="<?php echo $options['bennar-image']['url'];?>" loading="lazy" alt="">
            </div>
          </div>
       </div>
      </div>
    </div>
  </header>
  <!-- end header_area  -->
  