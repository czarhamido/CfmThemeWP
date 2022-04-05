<?php get_header('team'); 

/*
Template Name:Blog
*/

?>
   <main>
        <div class="container">
            <div class="row">
<?php 
$query = new WP_Query( array( 'post_type' => 'post' ) );
$posts = $query->posts;
foreach($posts as $key => $post) {
?>

              <div class="col-12 col-sm-8 col-md-6 col-lg-4 " data-aos="fade-down">
                <div class="card" style="width: 17rem;">
                 <?php  the_post_thumbnail('thumbnail',array(
                   'class'=>'card-img'
                 )); ?>
                  <div class="card-body">
                    <h4 class="card-title"><?php the_title() ?></h4>
                    <small class="text-muted cat">
                    <?php echo get_the_author_meta('display_name', $post->post_author); ; ?>
                    </small>
                    <p class="card-text"><?php echo $post->post_excerpt; ?></p>
                    <a href="#" class="btn btn-info">Read more</a>
                  </div>
                  <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                    <div class="views">Oct 20, 12:45PM
                    </div>
                    <div class="stats">
                         <i class="far fa-eye"></i> 1347
                    </div>
                     
                  </div>
                </div>
              </div>


<?php } ?>




            </div>



        </div>



            
  
    


    </main>
<?php get_footer(); ?>