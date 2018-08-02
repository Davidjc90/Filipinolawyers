<?php get_header();?>

 <!--single-->

    <!--header-->
   <div class="header-banner-area">
       
     <div class="container">
         
         <div class="row">
             <div class="header-banner" >
                 <h1><?php the_title();?></h1>
             </div>
         </div>

     </div>

   </div>


   <div class="main-news-page" >

    <div class="container">
        
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="news-page-content-section-area" >
                	<?php if(have_posts()):?> <!--checking if have posts-->
 					          <?php while(have_posts()): the_post();?>

                       <?php if(has_post_thumbnail()):?>
                    <figure>
                    	<?php the_post_thumbnail();?>
                    </figure>
                       <?php endif;?>

                    <div class="news-body">

                        <h3 class="news-titlle"><?php the_title();?></h3>
                      

                        <p class="news-content">
                            <?php the_content();?>
                        </p>

                    </div>

                   <?php endwhile;?>

                                <?php

                                if( comments_open() || get_comments_number() ){
	                                comments_template();
                                }

                                ?>

                   <?php endif;?>



                </div>


               



            </div>

        </div>

    </div>
       
   </div>


<div class="free-consult" data-aos="fade-right" data-aos-duration="1000">
    
    <div class="container">
        
        <div class="row">
            
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
              <div class="free-consult-text">
                  <p>If you have any Financial problem ... We are available</p>
              </div>  
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="get-free-consult">
                    <p>Write Us</p>
                </div>
            </div>

        </div>

    </div>

</div>



<!--Contact area-->
    <div class="contact" id="contact" data-aos="fade-up" data-aos-duration="1000">
        
        <div class="container">
            
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div id="footer-top-area">
                  
                  <div class="footer-top-main">
                      <p>3600 Wilshire Blvd #1716 Los Angeles, CA 90010 USA</p>
                      <p>info@Filipinolawgroup.com</p>
                      <h3><a href="tel:+213.380.3939">213.380.3939</a></h3>
                  </div>

                  <?php
                    if(isset($_GET['sent'])){
                       if($_GET['sent']=='1'){
                        echo "<p> ✔ Form sent sucessfully </p></br>";
                       }
                       else{
                        echo "<p> There is a problem to send the form </p></br>";
                       }
                    }
                  ?>

                  <form method="post" action="<?php echo admin_url( 'admin-post.php' ) ?>" class="contact-form" id='contact-form' role="form">
              <fieldset>
                <div class="col-sm-6 acurate">
                  <div class="form-group" data-aos="fade-down" data-aos-duration="1000">
                    <input type="text" placeholder="Name*" class="form-control" id="form-name" data-error="Name field is required" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-sm-6 acurate">
                  <div class="form-group" data-aos="fade-down" data-aos-duration="1000">
                    <input type="email" placeholder="Email*" class="form-control" id="form-email" data-error="Email field is required" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-sm-12 acurate">
                  <div class="form-group" data-aos="fade-down" data-aos-duration="1000">
                    <textarea placeholder="Message*" class="textarea form-control" id="form-message" rows="8" cols="20" data-error="Message field is required" required></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-sm-12 acurate">
                  <div class="form-group text-center" data-aos="fade-down" data-aos-duration="1000">
                    <input type="hidden" name="action" value="process_form">
                  <button class="btn-send submit-botton"  name="submit" type="submit">Send Message <i aria-hidden="true" class="fa fa-arrow-circle-right"></i></button>
                  </div>
                  <div class='form-response'></div>
                </div>
              </fieldset>
            </form>

              </div>
          </div>

        </div>

    </div>
    <!--Contact area-->



<?php get_footer();?>
