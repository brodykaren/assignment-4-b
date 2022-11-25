<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset = " <?php bloginfo ('charset');?> ">
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <tittle><?php bloginfo('name');?></title>

      <?php wp_head(); ?>


   </head>
   <body <?php body_class();?>>
      <header>
          <div class= "container">
            <div class="row">
                <div class="col-lg-6 logo-container">

                <?php

                 //display logo if its set, if not display site title




                  if (get_header_image()=='') { ?>

                    <h1><a href="<?php echo get_home_url(); ?>"> <?php bloginfo ('name'); ?> </a></h1>
                     
                    <?php
                    }else {?>
                       <a href =" <?php echo get_home_url(); ?> "> <img class="logo" scr=" <?php header_image(); ?>"
                       height="<?php echo get_custom_header() -> height; ?>"  width="<?php echo get_custom_header()
                       ->width; ?>" atl="Company Logo" /></a>

                       
                    <?php

                    }
                  ?>
                
            </div>/.col-lg-6 .logo-container
            <img src="<?php echo get_template_directory_uri(); ?>../images/apples_logo.jpg" width="120" alt="Bootstrappin'">
            
            <div class="col-lg-6 navigation"></div>
           </div> /. col-lg-6 .navigation
       </div> /.row
   </div> /.container
</header>

<?php

<div class="wrapper">
    <div class="nav">
        <h2>Tasting Apples</h2>
        <ul>
            <li><a href="">Type of Apples</a></li>
            <li><a href="">Apple Pie Recipe</a></li>
            <li><a href="">Home made Apple Cider</a></li> 
            
        </ul>
    </div>
</div>
?>
