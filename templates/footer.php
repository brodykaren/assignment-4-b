<?php wp_footer();?>


// diplay general admin links

if((is_administrator()) || (isset($loggedin) && $loggedin)) {

 echo '<hr>

 <h3> Site Admin </h3>
<p><a href= "add_quote.php"> Add Quote </a> | < a href + " view_quotes.php"> View ALL Quotes </a> | 
<a href= "logout.php"> Logout </a> </p>';

}

?>

</div> <!--container-->

<footer id = "footer" class="container"> Content &copy; <?php echo date('Y'); ?> 


            <div class="wrapper">
                <ul>
                    <li>Scotts Orchard Farm</li>
                    <li>2163 Scott Rd,</li>
                    <li>Hazel Green, AL 35750.</li>
                    <li>(256) 828-4563</li>
                    <li><a href="https://scottsorchard.com"> Website</a></li>
                </ul>
                <ul>
                    <li>Mercier Orchards</li>
                    <li>8660 Blue Ridge Dr,</li>
                    <li>Blue Ridge, GA 30513.</li>
                    <li>(706) 632-3411</li>
                    <li><a href="https://mercier-orchards.com"> Website </a></li>
                </ul>
                <ul>
                   <li> Rileys at Los Rios Rancho</li>
                    <li>39611 Oak Glen Rd,</li>
                    <li>Yucaipa, CA 92399.</li>
                    <li>(909) 797-1005</li>
                    <li><a href="https://losriosrancho.com">Website</a></li>
                </ul>
                <ul>
                    <li><img src="../images/apples_logo.jpg" alt="logo"></li>
                    <li>&copy; All rights reserved 2022</li>

                </ul>
            </div>
      





</footer>  


  </body>
</html>