<?php 
  // Template Name: Home Template
  get_header('home');
?> 
  <main>
    <section class="features_area section_padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="features-heading d-flex justify-content-center text-center">
              <div class="features_text">
                <p class="section_btn">Features</p>
                <h2>Powerful features to boost your productivity</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center"> 
          <div class="col-md-6 col-lg-4"  >
            <div class="features_item text-center"  >
              <img src="<?php echo get_template_directory_uri();?>/assets/images/Icon.png" loading="lazy" alt="features-img">
              <h3>Secured Platform</h3>
              <p>Contrary to popular belief, Lore Ipsum is not simply random text. It has roots in a piece.</p>
              <a href="#"  class="stretched-link">Learn More</a>
            
            </div>
          </div>
          <div class="col-md-6 col-lg-4" >
            <div class="features_item text-center"   >
              <img src="<?php echo get_template_directory_uri();?>/assets/images/Icon(1).png" loading="lazy" alt="features-img">
              <h3>Advanced Analytics</h3>
              <p>Contrary to popular belief, Lore Ipsum is not simply random text. It has roots in a piece.</p>
              <a href="#"  class="stretched-link">Learn More</a>
            
            </div>
          </div>
          <div class="col-md-6 col-lg-4"  >
            <div class="features_item text-center"  >
              <img src="<?php echo get_template_directory_uri();?>/assets/images/Icon(2).png" loading="lazy" alt="features-img">
              <h3>Powerful Automation</h3>
              <p>Contrary to popular belief, Lore Ipsum is not simply random text. It has roots in a piece.</p>
              <a href="#" class="stretched-link">Learn More</a>
            
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- platform area strat -->
    <section class="plaform_area">
      <div class="container">
        <div class="row align-items-center platfom-background">
          <div class="col-lg-6">
            <div class="platform">
              <h2 data-aos="fade-down-left">Powerful and easy to use saas builder platform</h2>
              <p>It is a long established fact that a reader will be by the from readable content of a page when looking at its layout. The point of using lorem Ipsum.</p>
              <div class="cost d-flex">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/cost.png" loading="lazy" alt="cost-icon">
                <div class="cost-text">
                  <h3>Cost Effective</h3>
                  <p>Contrary to popular belief, Lore Ipsum is not simply random text. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/Image(1).png" loading="lazy"    alt="platfomr-images">
          </div>
        </div>
      </div>
    </section>
    <!-- platform area end -->
    <!-- smarter area strat  -->
    <section class="smarter_area section_padding
    ">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="features-heading d-flex justify-content-center text-center  ">
              <div class="features_text smarter_box" >
                 
                <p class="section_btn">How It Work</p>
                <h2>Work smarter </h2>
                <h2> with easy access for user..</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row nav nav-pills">
          <div class="col-md-4">
            <div class="smarter-item nav-link active"  data-bs-toggle="pill" data-bs-target="#pills-home"  >
              <h3>01. Create account</h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="smarter-item nav-link" data-bs-toggle="pill" data-bs-target="#pills-profile"  >
              <h3>02. Install tracking code</h3>
               
            </div>
          </div>
          <div class="col-md-4">
            <div class="smarter-item nav-link" data-bs-toggle="pill" data-bs-target="#pills-contact" >
              <h3>03. Track analytics</h3>
            </div>
          </div>
        </div>
        <div class="row tab-content " id="pills-tabContent">  
          <div class="col-12 tab-pane fade show active" id="pills-home">
            <div class="smarter-item-content">
               <div class="row">
                <div class="col-md-6 create-text">
                  <div class="create d-flex align-items-center">
                    <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/create.svg" alt=""></a>
                    <h3 >Create your account & start your work</h3>
                  </div>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page from when looking at it layout. The point of using Lorem Ipsum</p>
                  <a href="" class="btn-1 btn-over">Get Started</a>
                </div>
                <div class="col-md-6">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/create-acount.png"  alt="create-img">
                </div>
               </div>
            </div>
          </div>
          <div class="col-12 tab-pane fade " id="pills-profile">
            <div class="smarter-item-content">
               <div class="row">
                <div class="col-md-6 create-text">
                  <div class="create d-flex align-items-center">
                    <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/create.svg" alt="create-img"></a>
                    <h3>Create your account & start your work</h3>
                  </div>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page from when looking at it layout. The point of using Lorem Ipsum</p>
                  <a href="" class="btn-1 btn-over">Install</a>
                </div>
                <div class="col-md-6">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/icon_platform2.png" alt="images">
                </div>
               </div>
            </div>
          </div>
          <div class="col-12 tab-pane fade " id="pills-contact">
            <div class="smarter-item-content">
               <div class="row">
                <div class="col-md-6 create-text">
                  <div class="create d-flex align-items-center">
                    <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/create.svg" alt="platfomr-images"></a>
                    <h3>Create your account & start your work</h3>
                  </div>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page from when looking at it layout. The point of using Lorem Ipsum</p>
                  <a href="" class="btn-1 btn-over">Track</a>
                </div>
                <div class="col-md-6">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/md.png" alt="platfomr-images">
                </div>
               </div>
            </div>
          </div>

        </div>
        
         

      </div>
    </section>
 
    <!-- smarter area end  -->
    <!-- Trusted_area section strat  -->
    <section class="Trusted_area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="trusted">
              <div class="features-heading d-flex justify-content-center text-center  ">
                <div class="features_text trusted_box" >
                  <p class="section_btn">Testimonial</p>
                  <h2> Trusted by millions of creators</h2>
                </div>
              </div>
              <div class="trusted_text owl-carousel owl-theme " id="mycroues">
               <div class="masud justify-content-center d-flex">
                  <div class="trusted_text1 text-center ">
                    <span class="quote" >“</span>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage .</p>
                    <div class="trusted_img">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/Image (70).png" loading="lazy" alt="James_Toriff">
                        <h3>James Toriff</h3>
                        <p>Developer</p>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                  </div>
               </div>
               
               <div class="masud justify-content-center d-flex">
                  <div class="trusted_text1 text-center ">
                    <span class="quote" >“</span>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage .</p>
                    <div class="trusted_img">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/Image (70).png" loading="lazy" alt="James_Toriff">
                        <h3>James Toriff</h3>
                        <p>Developer</p>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                  </div>
               </div>
               
                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Trusted_area section end  -->

    <!-- simple_area section  strat -->
     <section class="simple_area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 col-md12">
            <div class="simple_box">
              <p class="section_btn">How It Work</p>
              <h2>Simple and flexible pricing</h2>
              <p>It is a long established fact that a reader the will be distracted by the readable content of a page from when looking at it layout. </p>
              <h3>Accepted Payment Methods </h3>
              <div class="simple_crade_img">
                <ul class="d-flex justify-content-between"> 
                  <li><img src="<?php echo get_template_directory_uri();?>/assets/images/simple_crad/simple-crad4.svg" alt="simple_crade_img"></li>
                  <li><img src="<?php echo get_template_directory_uri();?>/assets/images/simple_crad/simple-crad3.svg" alt="simple_crade_img"></li>
                  <li><img src="<?php echo get_template_directory_uri();?>/assets/images/simple_crad/simple-crad2.svg" alt="simple_crade_img"></li>
                  <li><img src="<?php echo get_template_directory_uri();?>/assets/images/simple_crad/simple-crad1.svg" alt="simple_crade_img"></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-12">
            <div class="row">
              <div class="col-md-6">
                <div class="basic"  >
                  <div class="basic_heading d-flex justify-content-between align-items-center">
                    <h2>Basic</h2>
                    <p class="section_btn">save 30%</p>
                  </div>
                  <div class="basic_month text-center">
                    <h2>$7.99<span>/month</span></h2>
                    <a href="#" class="section_btn">Billed as $96 per year </a>
                  </div>
                  <div class="basic_text text-center">
                    <ul>
                      <li>Unlimited members</li>
                      <li><b class="p_text20">Unlimited</b> feedback</li>
                      <li>Weekly team Feedback Friday</li>
                      <li>Custom Kudos <b class="p_text20">+9 illustration</b></li>
                      <li>Team feedback history</li>
                    </ul>
                     
                    <a href="#" class="btn-1">Get Started</a>
                  </div>
                   
                </div>
              </div>
              <div class="col-md-6">
                <div class="basic" >
                  <div class="basic_heading d-flex justify-content-between align-items-center">
                    <h2 >Advanced</h2>
                    <p class="section_btn btn-99">Popular</p>
                  </div>
                  <div class="basic_month text-center">
                    <h2>$10.99<span>/month</span></h2>
                    <a href="#" class="section_btn">Billed as $199 per year </a>
                  </div>
                  <div class="basic_text text-center">
                    <ul>
                      <li>Unlimited members</li>
                      <li><b class="p_text21">Unlimited</b> feedback</li>
                      <li>Weekly team Feedback Friday</li>
                      <li>Custom Kudos <b class="p_text21">+9 illustration</b></li>
                      <li>Team feedback history (30 items)</li>
                      <li>Personal feedback history (6 items)</li>
                      <li>Slack integration</li>
                    </ul>
                     
                    <a href="" class="btn-1">Get Started</a>
                  </div>
                   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </section>
     
     <section class="trial_area">
      <div class="container">
        <div class="row trial_bg align-items-center">
          <div class="col-lg-6">
            <div class="trial_text">
              <h2>Start your free trial today</h2>
              <p >It is a long established fact that a reader will be by the readable when looking at it layout. </p>
              <div class="subsribe-form" >
                <form action="#">
                  <input type="email" placeholder="your mail here...">
                  <input type="submit" class="btn-1" value="Get strat">
                </form>
              </div>
            </div>

          </div>
          <div class="col-lg-6" >
            <img src="<?php echo get_template_directory_uri();?>/assets/images/trial-img/trial-img.png" loading="lazy" alt="trial-img">
          </div>
          
        </div>
      </div>
     </section>
     <!--  trial_area section end  -->

     <!-- Blog_area section strat  -->
     <section class="Blog_area section_padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="features-heading d-flex justify-content-center text-center" >
              <div class="features_text">
                <p class="section_btn">Blog</p>
                <h2>Start your free trial today</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row ">
          <div class="col-lg-6">
            <div class="blog_boxs">
              <div class="blog_box" >
                <img src="<?php echo get_template_directory_uri();?>/assets/images/blog_img/blog_img1.png" alt="blog-img">
                <div class="blog-button">
                  <a href="#" class="btn-1">Marketing</a>
                  <a href="#" class="btn-1">Analysis</a>
                </div>
                 
              </div>
              <div class="blog_text" >
                <p class="blog-p">November 15, 2022</p>
                <h2>10 Top tips for making your Saas product sticky</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page from when looking at it layout. The point of using Lorem Ipsum</p>
                <a href="">Read More</a>
                 
              </div>
            </div>
             
          </div>
          <div class="col-lg-6">
            <div class="blog_boxs">
              <div class="blog_box" >
                <img src="<?php echo get_template_directory_uri();?>/assets/images/blog_img/blog_img2.png" alt="blog-img">
                <div class="blog-button">
                  <a href="#" class="btn-1">Marketing</a>
                  <a href="#" class="btn-1">Analysis</a>
                </div>
                 
              </div>
              <div class="blog_text">
                <p class="blog-p">November 15, 2022</p>
                <h2>Automate Reports Generation with Saasup </h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page from when looking at it layout. The point of using Lorem Ipsum</p>
                <a href="">Read More</a>
                 
              </div>
            </div>
          </div>
        </div>
      </div>
     </section>
     <!-- Blog_area section end -->
  </main>
<?php get_footer(); ?>