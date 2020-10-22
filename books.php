<?php session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Book Store</title>
<link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>
<div id="wrap">

       <div class="header">
       		<div class="logo"><a href="index.php"><img src="images/footer_logo.gif" alt="" title="" border="0" /></a></div>            
        <center> <div id="menu">
            <ul>                                                                       
            <li><a href="index.php">home</a></li>
            <li><a href="about.php">about us</a></li>
            <li><a href="books.php">books</a></li>
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
        	<div class="crumb_nav">
            <a href="index.php"></a> 
            </div>
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Category books</div>
           
           <div class="new_products">
           
                    <div class="new_prod_box">
                        <a href="">Cookie Jar</a>
                        <div class="new_prod_bg">
                        <a href=""><img src="images/cookie-jar-ulyate-ebook.jpg" alt="" title="" class="thumb" border="0" /></a>
                        </div>   <a href=""id="Novels\Cookie-Jar-obooko-fd0018.pdf" onclick="mybookfunction(this.id)" >- Read Me -</a>          
                    </div>
                    
                    <div class="new_prod_box">
                        <a href="">Comic Book</a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                        <a href=""><img src="images/1508628-comic_book_guy_5.jpg" alt="" title="" class="thumb" border="0" /></a>
                        </div>   <a href=""id="Novels\rbi-comic.pdf"  onclick="mybookfunction(this.id)">- Read Me -</a>         
                    </div>                    
                    
                    <div class="new_prod_box">
                        <a href="">Sea Change</a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                        <a href=""><img src="images/sea_change_dixon.jpg" alt="" title="" class="thumb" border="0" /></a>
                        </div>  <a href="" id="Novels\SeaChange-obooko-mon0005.pdf" onclick="mybookfunction(this.id)">- Read Me -</a>           
                    </div>          


                    <div class="new_prod_box">
                        <a href="">Love Letters Dead</a>
                        <div class="new_prod_bg">
                        <a href=""><img src="images\one.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>   <a href=""id="Novels\Love letters to the dead.pdf"onclick="mybookfunction(this.id)" >- Read Me -</a>         
                    </div>
                    
                    <div class="new_prod_box">
                        <a href="">Girl Saves A Boy</a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                        <a href=""><img src="images\two.jpg" alt="" title="" class="thumb" border="0" /></a>
                        </div>   <a href=""id="Novels\GirlSavesBoy_TeachersResource.pdf"onclick="mybookfunction(this.id)" >- Read Me -</a>         
                    </div>                    
                    
                    <div class="new_prod_box">
                        <a href="">Weird Beliefs</a>
                        <div class="new_prod_bg">
                        
                        <a href=""><img src="images\Cover-Weird-Beliefs.jpg" alt="" title="" class="thumb" border="0" /></a>
                        </div>   <a href=""id="Novels\WeirdBeliefs-obooko-rel0062.pdf" onclick="mybookfunction(this.id)">- Read Me -</a>         
                    </div> 
       
                    <div class="new_prod_box">
                        <a href="">Boost Your Metabolism</a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                        <a href=""><img src="images\bigbookmetabolism.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>     <a href=""id="Novels\obooko_boost_metabolism.pdf"onclick="mybookfunction(this.id)" >- Read Me -</a>       
                    </div> 

                    <div class="new_prod_box">
                        <a href="">Neptune Cross carver</a>
                        <div class="new_prod_bg">
                        <a href=""><img src="images\neptunecrosscarver.jpg" alt="" title="" class="thumb" border="0" /></a>
                        </div>    <a href=""id="Novels\NeptuneCrossing-obooko-scifi0033.pdf"onclick="mybookfunction(this.id)" >- Read Me -</a>        
                    </div>
                    
                     <div class="new_prod_box">
                        <a href="">Hell is Bigger Than Heaven</a>
                        <div class="new_prod_bg">
                        <a href=""><img src="images\hell-higham.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>      <a href=""id="Novels\HellHeaven-obooko-rel0051.pdf"onclick="mybookfunction(this.id)" >- Read Me -</a>      
                    </div>

                    <div class="new_prod_box">
                        <a href="">Social Marketing</a>
                        <div class="new_prod_bg">
                         <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                        <a href=""><img src="images\social_bookmarking_maya.jpg" alt="" title="" class="thumb" border="0" /></a>
                        </div>  <a href=""id="Novels\SocialBookmarking-obooko-comp0004.pdf"onclick="mybookfunction(this.id)" >- Read Me -</a>          
                    </div>
                    <div class="new_prod_box">
                        <a href="">Bhagwad Gita</a>
                        <div class="new_prod_bg">
                        <a href=""><img src="images\bhagvad-gita-murthy.jpg" alt="" title="" class="thumb" border="0" /></a>
                        </div>  <a href="Novels\Bhagvad-Gita-Treatise-obooko-rel0102.pdf" >- Read Me -</a> 

                    </div>                  
                    

            <div class="pagination">
            <span class="disabled"><<</span><span class="current">1</span><a href="#?page=2">2</a><a href="#?page=3">3</a>…<a href="#?page=199">10</a><a href="#?page=200">11</a><a href="#?page=2">>></a>
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
                        <a href="Novels\fivequicksermons_obooko-rel0024.pdf"><img src="images\five_quick_sermons.jpg" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>
                    
                    <div class="new_prod_box">
                         <div class="prod_title">Short fuses</div>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                        <a href="Novels\ShortFuses-obooko-thr0186.pdf">
                        <img src="images\short-fuses-stephen-leather.jpg" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>                    
                    
                    <div class="new_prod_box">
                        <div class="prod_title">Fox & Bear</div>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                        <a href=""><img src="images\silurianwilson.jpg" alt="" title="" class="thumb" border="0" /></a>
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
                
             	<div class="title"><span class="title_icon"><img src="images/bullet6.gif" alt="" title="" /></span>Partners</div> 
                
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
       	<div class="left_footer"><img src="images/footer_logo.gif" alt="" title="" /><br /> <a href="http://csscreme.com/freecsstemplates/" title="free templates"><img src="images/csscreme.gif" alt="free templates" title="free templates" border="0" /></a></div>
       <!-- <div class="right_footer">
        <a href="#">home</a>
        <a href="#">about us</a>
        <a href="#">services</a>
        <a href="#">privacy policy</a>
        <a href="#">contact us</a>
       
        </div>-->
        
       
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