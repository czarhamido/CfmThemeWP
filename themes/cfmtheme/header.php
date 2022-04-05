<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">CFM</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

             <!--   <ul class="navbar-nav ">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="./team.html">Our Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./blog.html">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./contact.html">Our contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="./events.html">Our Events</a>
                  </li>
                </ul>
-->
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
    </header>