<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    <title>Our Team</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">CFM</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <?php 
                wp_nav_menu( [
                  'theme_location'=>'menu',
                  'menu_class' => 'navbar-nav',
                  'container' =>'div',
                  'container_class' => 'collapse navbar-collapse justify-content-end',
                  'container_id' => 'navbarNav'
                ])
                
                ?>

            </div>
          </nav>

          <div  class="container " data-aos="fade-down">
            <div class="px-4 py-5 my-5 text-center">
                <h1 class="display-5 fw-bold Title">Our Team</h1>
                <div class="col-lg-12 mx-auto">
                  <p class="leadTeam mb-8">We are not just a team, we are a family</p>
                </div>
              </div>
          </div> 
    </header>