
<?php session_start() ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    <title>Book Store</title>
    <link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>
    <div id="wrap">

     <div class="header">
       <div class="logo"><a href="index.php"><img src="images/footer_logo.gif " alt="" title="" border="0" /></a> </div>            
       <center style="width: 100%"> <div id="menu">
         <ul>                                                                       
            <li class="selected"><a href="index.php">home</a></li>
            <li><a href="about.php">about us</a></li>
            <li><a href="books.php">books</a></li>
            <li><a href="specials.php">specials books</a></li>
              <?php 
        if(empty($_SESSION['username'])){  ?>
            <li><a href="myaccount.php">my account</a></li>
             <?php } ?>
            <li><a href="register.php">register</a></li>
            <li><a href="contact.php">contact</a></li>
            <?php 
        if(isset($_SESSION['username'])){ ?>
        <li><a href="contact.php"><?php  ?></a></li>
            <li><a href="logout.php">logOut</a></li>
        <?php } ?>
        </div>     
        
    </div> 


    <div class="center_content">
        <div class="left_content">
        	
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Featured books</div>

            <div class="feat_prod_box">

            	<div class="prod_img"><a href=""><img src="images\81.jpg" alt="" title="" border="0" /></a></div>

                <div class="prod_det_box">
                	<div class="box_top"></div>
                    <div class="box_center">
                        <div class="prod_title">Vampire Diaries</div>
                        <p class="details">The Vampire Diaries is a young adult vampire horror series of novels created by L. J. Smith. The story centers on Elena Gilbert, a young high school girl who finds her heart eventually torn between two vampire brothers, Stefan and Damon Salvatore.</p>
                        <a href="" id="Novels\vampire-diaries-5-the-return-nightfall-by-lisa-jane-smith.pdf" onclick ="mybookfunction(this.id)"class="more">- Read Me -</a>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
                <div class="clear"></div>
            </div>	
            
            
            <div class="feat_prod_box">

            	<div class="prod_img"><a href=""><img src="images\80.jpg" alt="" title="" border="0" /></a></div>

                <div class="prod_det_box">
                	<div class="box_top"></div>
                    <div class="box_center">
                        <div class="prod_title">I Too Had A Love Story</div>
                        <p class="details">I Too Had a Love Story is an English autobiographical novel written by Ravinder Singh.This was the debut novel of the author and was first published in 2008 &  it was republished by Penguin India.</p>
                        <?php
                        //if(isset($_SESSION['username'])){ ?>
                        <a href="" id="Novels/fivequicksermons_obooko-rel0024.pdf" onclick="mybookfunction(this.id)" class="more">- Read Me -</a>
                        <?php// } 
                        //else
                        //{
                            
                        //}
                        ?>

                        <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
                <div class="clear"></div>
            </div>      
            
            
            
            <div class="title"><span class="title_icon"><img src="images/bullet2.gif" alt="" title="" /></span>New books</div> 

            <div class="new_products">

                <div class="new_prod_box">
                    <a href="">The Age Of Miracles</a>
                    <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                        <a href=""><img src="images\mira.jpg" alt="" title="" class="thumb" border="0" /></a>



                    </div>  <a href="" id="Novels\agemiracles.pdf" onclick="mybookfunction(this.id)">- Read Me -</a>         
                </div> 

                <div class="new_prod_box">
                    <a href="">I Can't Speak English</a>
                    <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                        <a href=""><img src="images\still.jpg" alt="" title="" class="thumb" border="0" /></a>  
                    </div> <a href="" id="Novels\i-still-cant-speak-english.pdf" onclick="mybookfunction(this.id)" >- Read Me -</a>                    
                </div>                 

                <div class="new_prod_box">
                    <a href="">Personal confidence </a>
                    <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                        <a href=""><img src="images\perso.jpg" alt="" title="" class="thumb" border="0" /></a>
                    </div>   <a href="" id="Novels\personal-confidence-and-motivation.pdf" onclick="mybookfunction(this.id)" >- Read Me -</a>                 
                </div>          

            </div> 

            
            <div class="clear"></div>
        </div><!--end of left content-->
        
        <div class="right_content">

            <div class="languages_box">
                <span class="red"></span>
                <a href="#"><img src="" alt="" title="" border="0" /></a>
                <a href="#"><img src="" alt="" title="" border="0" /></a>
                <a href="#"><img src="" alt="" title="" border="0" /></a>
            </div>
            <div class="currency">
                <span class="red"> </span>
                <a href="#"></a>
                <a href="#"></a>
                <a href="#"><strong></strong></a>
            </div>


            <div class="cart">
              <div class="title"><span class="title_icon"><img src="" alt="" title="" /></span></div>
              <div class="home_cart_content">
                 <span class="red"></span>
             </div>
             <a href="cart.php" class="view_cart"></a>

         </div>




         <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" title="" /></span>About Our Store</div> 
         <div class="about">
           <p>
               <img src="images/about.gif" alt="" title="" class="right" />

               Cookbooks, history books, gothic novels, children's bedtime stories, poetry collections and so much more. They are just a few of colorful reading matter available at our store..


           </p>

       </div>

       <div class="right_box">

          <div class="title"><span class="title_icon"><img src="images/bullet4.gif" alt="" title="" /></span>Top Rated</div> 
          <div class="new_prod_box">
            <div class="prod_title">Quick Sermons </div>
            <div class="new_prod_bg">
                <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                <a href="" id="Novels\fivequicksermons_obooko-rel0024.pdf" onclick="mybookfunction(this.id)" ><img src="images\five_quick_sermons.jpg" alt="" title="" class="thumb" border="0" /></a>
            </div>           
        </div>

        <div class="new_prod_box">
           <div class="prod_title">Short fuses</div>
           <div class="new_prod_bg">
            <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
            <a href="" id="Novels\ShortFuses-obooko-thr0186.pdf" onclick="mybookfunction(this.id)">
                <img src="images\short-fuses-stephen-leather.jpg" alt="" title="" class="thumb" border="0" /></a>
            </div>           
        </div>                    

        <div class="new_prod_box">
            <div class="prod_title">Fox & Bear</div>
            <div class="new_prod_bg">
                <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                <a href="" id="Novels\the-fox-and-the-polar-bear-print.pdf" onclick="mybookfunction(this.id)"><img src="images\silurianwilson.jpg" alt="" title="" class="thumb" border="0" /></a>
            </div>           
        </div>              

    </div>

    <div class="right_box">

      <div class="title"><span class="title_icon"><img src="images/bullet5.gif" alt="" title="" /></span>Categories</div> 

      <ul class="list">
        <li><a href="bio.php">Biography's</a></li>
        <li><a href="travel.php">Travel Books & Guides</a></li>
        <li><a href="science.php">Science</a></li>
        <li><a href="religion.php">Religion & Beliefs</a></li>
        <li><a href="computer.php">Computer Science</a></li>
        <li><a href="bussiness.php">Business </a></li>
        <li><a href="history.php">History Books</a></li>
        <li><a href="medical.php">Medical</a></li>
        <li><a href="food.php">Food & Drink</a></li>
        <li><a href="funny.php">Funny</a></li>

    </ul>

    <div class="title"><span class="title_icon"><img src="images/bullet6.gif" alt="" title="" /></span>Novels</div> 

    <ul class="list">
        <li><a href="durjoy.php">Durjoy Datta</a></li>
        <li><a href="ravinder.php">Ravinder Singh</a></li>
        <li><a href="sudeep.php">Sudeep Nagarkar</a></li>
        <li><a href="nikita.php">Nikita Singh</a></li>
        <li><a href="chetan.php#">Chetan Bhagat</a></li>
        <li><a href="john.php">John Green</a></li>
                <!--<li><a href="#">specials</a></li>
                <li><a href="#">hollidays gifts</a></li>
                <li><a href="#">accesories</a></li>       -->                       
            </ul>      

        </div>         

        
    </div><!--end of right content-->




    <div class="clear"></div>
</div><!--end of center content-->


<div class="footer">
    <div class="left_footer"><img src="images/footer_logo.gif" alt="" title="" /><br /> <a href="http://csscreme.com/freecsstemplates/" title="free templates"><img src="" alt="" title="free templates" border="0" /></a></div>
</div>


</div>
<script type="text/javascript">
  function mybookfunction(bookurl) {
     <?php if(isset($_SESSION['username'])){ ?>
     window.open(bookurl); 
     <?php } else{
        ?>
        alert("please login first.");
        <?php
     }
     ?>
};
</script>
</body>
</html>