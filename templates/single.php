 
 <?php get_header(); ?>
    <main class="container">
<?php
   if(have_posts()) {
        while (have_posts()) {
               the_post(); ?>

               <div class="single-post">
                   <div class="featured-image">
                        <?php the_post_thumbnail ('large'); ?>
                        <p><?php echo 'Post Written by: ' .get_the_author() .' | Published on: ' .get_the_date(); ?></p>
                           </div>/.featured-image

                           <div class="text-container">
                              
                            <h2><<?php the_tittle(); ?> Types of Apples</h2>

                               
                            <p class="body-content"><?php the_content(); ?>


                            <div id="main-banner">

                               <img src="../images/type_apples.jpeg" alt="Types of Apples">
                               
                             </div>
                         
                            <p> Learn about the top apple varieties grown, sold and exported from the United States</p>
                            <p>Story by usapples.org</p>
                              


                          <ul>
                            <li> Gripps Pink / Pink Lady</li>
                              <li> Empire </li>
                              <li> Fuji </li>
                              <li> Gala </li>
                              <li> Golden Delicious</li>
                              <li> Granny Smith</li>
                              <li> Honeycrisp </li>
                             <li> McIntosh </li>
                             <li> Red Delicious </li>
                          </ul>

                         <section class= "recipe">
                          <h1> Apple Pie Recipe </h1>



                          <img src="../images/apple_pie.jpeg" alt="Apple Pie Recipe">
                     


                         <p> Recipe by littlespoonfarm.com </p>      

                               <h2>WHAT YOU NEED </h2>


                <div class ="pie">   

                
                            <ul>

                              <li> pie crust </li>

                              <li>apples </li>

                              <li>granulated sugar</li>

                              <li>brown sugar</li>

                              <li>flour</li>

                              <li>cinnamon</li>

                              <li>nutmeg</li>

                              <li>lemon </li>

                               <li>egg</li>
                              
                           </ul> 
                      
        </div>       

<h2>HOW TO MAKE APPLE PIE FROM SCRATCH</h2>





<p>Peel, core and slice the apples. In a large mixing bowl, gently toss the apple slices, granulated sugar, light brown sugar, flour, cinnamon, nutmeg, lemon zest and lemon juice until well combined and set aside. Place the oven rack in the center position and preheat your oven to 400°F.

Remove the discs of pie crust from the fridge and let set at room temperature for 5-10 minutes. </p>

<p>On a lightly floured surface, roll one of the discs into a 12" circle that is ⅛" thick. Place the crust into the bottom of the deep dish pie plate.

Spoon the apple pie filling into the crust, discarding any liquid at the bottom of the mixing bowl. Spread the apple slices evenly.</p>

<p>On a lightly floured surface, roll the second disc of pie dough into a 12" circle that is ⅛" thick. Place the crust over the apple pie filling.</p>

</p>Use a sharp knife to trim the excess dough from around the edge of the pie plate. Use your fingers to pull both the bottom and top pie crust up and slightly awayfrom the edge of the pie dish. Fold the edge under itself and press down to seal the edge in place. Rotate the pie a quarter turn and repeat until edges are neatly tucked in.</p>

<p>In order to protect the edges of the pie from over-browning, use a long strip of aluminum foil (about 38" long) by folding it in half lengthwise and then folding in half again, lengthwise. Wrap it around the edges of the pie plate and over the edges of the crust. This is referred to as a "pie shield".

A strip of foil around the edges of the pie keeps them from over-browning while baking.</p>

<p>Bake the pie at 400°F for 25 minutes. Remove the pie shield, lower the oven temperature to 375°F and bake an additional 30-35 minutes.

You'll know the apple pie is done when the crust is a lovely golden brown and the juice is bubbling up the sides of the pan. Enjoy!</p>



   </section>

        <section class ="apple_cider">
          

     <h1>Home Made Apple Cider </h1>


     <img src="../images/Apple_cider.jpeg" alt="Home Made Apple Cider">



<p> This delicious homemade apple cider recipe is super-easy to make in the Crock-Pot, Instant Pot or on the stovetop! </p>
     <p> Recipe by Gimme some Oven </p>

<p>Fresh apples: As you can see, I enjoy making cider with a rainbow of apples. But feel free to use whichever varieties (or mix of varieties) that you love most. 
Oranges: Fresh oranges are essential to giving cider its trademark citrusy flavor. 

<P>You will also need:</P>

<P>Fine-mesh strainer or cheesecloth: This will be essential for straining out the cider after it has cooked.
Potato masher or wooden spoon: Either will work to mash the apples.
Stockpot, Crock-Pot or Instant Pot: As I mentioned above, any size will do.</p>

<p>To make stovetop apple cider, simply:</P>

<P>Combine your ingredients in a stockpot. Add the apples, oranges*, and spices to a large stockpot. Then cover with water, leaving about an inch or two of space at the top of the stockpot.
Simmer. Heat the cider over high heat until it reaches a simmer. Then reduce heat to medium-low, cover and simmer for about 2 hours, or until the apples are completely soft.</P>

<P>Mash the apples and oranges. Using a potato masher or a wooden spoon, take a minute to mash all of the apples and oranges against the side of the stockpot to release more of their flavors. Then cover and let the cider simmer a bit longer.
Strain. Then, using a fine-mesh strainer or a cheesecloth, strain out all of the solids (apples, oranges, spices), pressing them against the strainer to release all of their juices. </P>

<P>Then discard the solids (or save for smoothies or another use). This will probably take about 5 minutes.
Sweeten. Then stir in your desired amount of sweetener, to taste.</P>
<P>Serve warm. And then, your cider is all ready to go! For extra presentation points, I like to add a few fresh orange slices and cinnamon sticks back to the stockpot for pretty serving. But however you like to serve it, your cider is now ready to go and enjoy.</P>



        </section>





                            </p>

                            </div>/.text-conatiner
                
                        </div>/.single-post



                     <?php
         

                }

           }
      ?>

</main>/.container

<?get_thefooter(); ?>
