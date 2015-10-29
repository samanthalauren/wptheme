<?php get_header();  ?>

<div class="main" id='main'>
  <div class="container">

     <div class="hero">
         <img src="<?php the_field('hero'); ?>" alt="">  
     </div>


    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <div class="line"></div>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
      <h2>Featured Products</h2>
      <div class="line"></div>
     
     <div class="featuredProducts"> 
        <img src="<?php the_field('image_one'); ?>" alt="">  
        <img src="<?php the_field('image_two'); ?>" alt="">  
        <img src="<?php the_field('image_three'); ?>" alt=""> 
        <form action=""> <?php the_field('email_sub'); ?></form>
    </div>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>