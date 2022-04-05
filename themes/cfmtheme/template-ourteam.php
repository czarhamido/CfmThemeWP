<?php get_header('team'); 

/*Template Name:Our Team
*/

?>
    <main>

      <div class="container">
        <div class="row ">
        <?php $members=carbon_get_the_post_meta('crb_team'); ?>
        <?php foreach($members AS $key => $member){ ?>

          <div class="col-sm-6 col-lg-3 my-auto">
            <div class="box shadow-sm p-4">
              <div class="image-wrapper mb-3">
                <img class="img-fluid" src="<?php echo $member['image'] ?>" alt="..." />
              </div>
              <div class="box-desc">
                <h5><?php echo $member['crb_name'] ?></h5>
                <p><?php echo $member['crb_job'] ?></p>
              </div>
              <ul class="social">
                <li><a href="<?php echo $member['crb_facebook'] ?>"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="<?php echo $member['crb_instagram'] ?>"><i class="fab fa-instagram"></i></a></li>
                <li><a href="<?php echo $member['crb_linkden'] ?>"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
   <?php } ?>

        </div>
      </div>	
        

      

    


</main>
<?php get_footer(); ?>