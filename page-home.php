<?php get_header();  ?>

<div class="main" id='main'>
  <div class="container">

     <div class="hero">
         <?php the_field('hero'); ?>
     </div>


    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <div class="line"></div>
        <div class="quote"> <?php the_content(); ?></div>

      <?php endwhile; // end the loop?>
      <h2>Featured Products</h2>
      <div class="line"></div>
     
     <div class="featuredProducts"> 
        <img src="<?php the_field('image_one'); ?>" alt="">  
        <img src="<?php the_field('image_two'); ?>" alt="">  
        <img src="<?php the_field('image_three'); ?>" alt=""> 
    </div>

       <h2>Recent Posts</h2>
      <div class="line line2"></div>

      <?php 
      // the query
      $the_query = new WP_Query( array(
        'posts_per_page' => 2
      ) ); ?>

      <?php if ( $the_query->have_posts() ) : ?>

        <!-- pagination here -->

        <!-- the loop -->
        <div class="home-posts">
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="post">
              <?php the_post_thumbnail('large'); ?>
              <h4><?php the_title(); ?></h4>
              <div class="white"><?php the_excerpt(); ?></div> 

            </div> <!-- /.post -->
          <?php endwhile; ?>
        </div> <!-- /.home-posts -->
        <!-- end of the loop -->

        <?php wp_reset_postdata(); ?>

      <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
      
<div class="emailContact"> 
       <?php the_field('home_email'); ?>
</div>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>