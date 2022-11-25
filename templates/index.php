<?php get_header(); ?>
    <main class="container">
<?php
   if(have_posts()) {
        while (have_posts()) {
               the_post(); ?>

               <div class="individual-post">
                   <div class="featured-image">
                        <?php the_post_thumbnail ('large'); ?>
                           </div>/.featured-image

                           <div class="text-container">
                              
                            <h2><<a href="<?php the_permalink(); ?> "><?php the_tittle(); ?></a></h2>
                            <p class="excerpt"><?php echo get_the_excerpt(); ?></p>

                            </div>/.text-conatiner
                
                        </div>/.individual-post



                     <?php
         

                }

           }
      ?>

</main>/.container

<?get_thefooter(); ?>
