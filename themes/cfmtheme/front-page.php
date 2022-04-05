<?php get_header(); ?>


    <main>
    <div  class="container " data-aos="fade-down">
        <div class="px-4 py-5 my-5 text-center">
        <?php $logo_club_url=carbon_get_the_post_meta('image_logo'); ?>
            <img class="d-block mx-auto mb-4" src="<?php echo $logo_club_url; ?>" alt="" width="150" height="150">
            <?php $name_club=carbon_get_the_post_meta('crb_name_club'); ?>
            <h1 class="display-5 fw-bold Title"><?php echo $name_club; ?></h1>
            <div class="col-lg-6 mx-auto">
            <?php $desc_club=carbon_get_the_post_meta('crb_description_club'); ?>
              <p class="lead mb-4"><?php echo $desc_club; ?></p>
            </div>
          </div>
      </div> 

      
      <div class="partners text-center ">
        <div class="container">
        <h2 >Our partners</h2>
        <?php $partners=carbon_get_the_post_meta('crb_logos'); ?>
        <?php foreach($partners AS $key => $partner){ ?>
        <img src="<?php echo $partner['image'] ?>" class="partner" alt="" width="80" height="80"> 
          <?php } ?>
      </div>
      </div>


        <div class="container ">
          <div class=" row text-center justify-content-center ">
            <h1 class="display-5  subTitle "><span >OUR</span> EVENTS</h1>

            <?php $events=carbon_get_the_post_meta('crb_events'); ?>
            <?php foreach($events AS $key => $event){ ?>

            <div class="card-event text-center justify-content-center  " data-aos="fade-right" >
              <div class="img-event">
                <img src="<?php echo $event['image'] ?>" class="partner" alt="adisl" width="80" height="60"> 
              </div>
              <div class="text-event">
              <?php echo $event['crb_event']; ?>
              </div>
            </div>
            <?php } ?>


          </div>
        </div>  
          
  

      <div class="container justify-content-center align-items-center text-center ">
        <h1 class="display-5  subTitle "><span >WHAT</span> WE DO</h1>

            <section id="gallery">
              <div class="container">
                  <div class="row">
                  <?php $business=carbon_get_the_post_meta('crb_business'); ?>
                   <?php foreach($business AS $key => $busines){ ?>

                      <div class="col-lg-4 mb-4" data-aos="fade-right">
                        <div class="card">
                        <img src="<?php echo $busines['image'] ?>" alt="" class="card-img-top" width="700" height="300">
                        <div class="card-body">
                          <h5 class="card-title" style="color:#0B767A;font-weight: bold;">
                               <?php echo $busines['crb_business']; ?>
                          </h5>
                          <p class="card-text">
                          <?php echo $busines['crb_description_business']; ?>
                          </p>

                          </div>
                        </div>
                      </div>
                      <?php } ?>

                    </div>
              </div>
             </section>


          
          
      </div>
        <div class="container text-center">
          <h1 class="display-5  subTitle "><span >What</span>  did they say about us?</h1>
        </div>

     <div class="container">
      <div class="slider-area">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

            
            <div class="carousel-inner">
            <?php $says=carbon_get_the_post_meta('crb_says'); ?>
                   <?php foreach($says AS $key => $say){ ?>
                    <?php if ($key==0){ ?>
              <div class="carousel-item active">
                <?php }else {?>
                  <div class="carousel-item ">
              <?php  }  ?>
                <div class="img-area">
                  <img src=" <?php echo $say['image']; ?>" alt=""/>
                </div>
                <div class="carousel-caption  ">
                  <h3><?php echo $say['crb_name']; ?></h3>
                  <h4><?php echo $say['crb_job']; ?> </h4>
                  <p><?php echo $say['crb_say']; ?>.</p>
                </div>
              </div>
              <?php } ?>


            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!--FAQ-->
  
    <!--FAQ-->
    <section class="faq-section">
      <div class="container">
        <div class="row">
                          <!-- ***** FAQ Start ***** -->
                          <div class="col-md-6 offset-md-3">
      
                              <div class="faq-title text-center pb-3">
                                  <h2>FAQ</h2>
                              </div>
                          </div>
                          <div class="col-md-6 offset-md-3">
                              <div class="faq" id="accordion">
                              <?php $faqs=carbon_get_the_post_meta('crb_faq'); ?>
                               <?php foreach($faqs AS $key => $faq){ ?>
                                  <div class="card">
                                      <div class="card-header" id="faqHeading-<?php echo $key+1; ?>">
                                          <div class="mb-0">
                                              <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-<?php echo $key+1; ?>" data-aria-expanded="true" data-aria-controls="faqCollapse-<?php echo $key+1; ?>">
                                                  <span class="badge"><?php echo $key+1; ?></span><?php echo $faq['crb_question']; ?>
                                              </h5>
                                          </div>
                                      </div>
                                      <div id="faqCollapse-<?php echo $key+1; ?>" class="collapse" aria-labelledby="faqHeading-<?php echo $key+1; ?>" data-parent="#accordion">
                                          <div class="card-body">
                                              <p> <?php echo $faq['crb_answer']; ?></p>
                                          </div>
                                      </div>
                                  </div>

                                  <?php } ?>

                                 
                              </div>
                          </div>
                        </div>
                      </div>
                      </section>

 


</main>
<?php get_footer() ?>