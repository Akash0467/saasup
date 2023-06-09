<?php 
get_header(); 
$options = get_option('saasup');
?>
<main>
     <!-- new & article section strat  -->
    <section class="article_area">
        <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class=" article_heading">
                        <div class="article_text" >
                          <h2><?php echo $options['blog-page-title']; ?></h2>
                          <p><?php echo $options['blog-page-description']; ?></p>
                        </div>
                      </div>
                  </div> 
              </div>
              <div class="row ">
                  
                  <?php while(have_posts()) : the_post();?>
                  <div class="col-lg-6">
                      <div class="blog_boxs article_crad">
                          <div class="blog_box" >
                              <?php the_post_thumbnail(); ?>
                              <div class="blog-button">
                                <?php $categories = get_the_category();
                                foreach( $categories as $category) :
                                
                                ?>
                                <a href="<?php get_category_link($category->trim_iD);?>" class="btn-1"><?php echo $category->name; ?></a>
                                <?php endforeach; ?>
                              </div>
                          </div>
                          <div class="blog_text" >
                              <p class="blog-p"><?php the_time('F j, Y'); ?></p>
                              <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                              <p><?php echo wp_trim_words(get_the_content(),15,'....');  ?></p>
                              <a href="<?php the_permalink();?>">Read More</a>
                          </div>
                      </div>
                  </div>
                  <?php endwhile; ?>
              </div>
        </div>
    </section>
     <!-- new & article section end  -->
</main>

<?php get_footer(); ?>