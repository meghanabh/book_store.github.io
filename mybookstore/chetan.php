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
            <li class="selected"><a href="specials.php">specials books</a></li>
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
          
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Chetan Bhagat </div>
        
          <div class="feat_prod_box">
            
              <div class="prod_img"><a href=""><img src="images\3_Mistakes_of_My_Life.jpg" alt="" title="" border="0" /></a></div>
                
                <div class="prod_det_box">
                  <span class="special_icon"><img src="images/special_icon.gif" alt="" title="" /></span>
                  <div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title"> Three Mistakes of my life</div>
                    <p class="details">The 3 Mistakes of my life is the third novel written by eminent Indian Author Chetan Bhagat. Based on cricket, business and religion, the novel is set against the backdrop of beautiful city Ahmedabad..</p>
                    <a href="" id="Novels\3-mistake-of-my-life.pdf" onclick="mybookfunction(this.id)"class="more">- Read Me -</a>
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>  
            
            
          <div class="feat_prod_box">
            
              <div class="prod_img"><a href=""><img src="images\one night.jpg" alt="" title="" border="0" /></a></div>
                
                <div class="prod_det_box">
                <span class="special_icon"><img src="images/special_icon.gif" alt="" title="" /></span>
                  <div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title">One Night At The Call Centre
                  </div>
                    <p class="details">One Night at the Call Centre focuses on the story of one nights happening with 6 people working together at a call centre in Gurgaon, India. At this particular call centre, the employees are focused on giving technical support to American clients.</p>
                    <a href="" id="Novels\one-night-at-the-call-center-all-chapters (1).pdf" onclick="mybookfunction(this.id)"class="more">- Read Me -</a>
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>
            
            
            
          <div class="feat_prod_box">
            
              <div class="prod_img"><a href=""><img src="images\revo.jpg" alt="" title="" border="0" /></a></div>
                
                <div class="prod_det_box">
                  <span class="special_icon"><img src="images/special_icon.gif" alt="" title="" /></span>
                  <div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title">Revolution 2020</div>
                    <p class="details">Book Summary of Revolution 2020 Once upon a time, in small-town India, there lived two intelligent boys. One wanted to use his intelligence to make money. One wanted to use his intelligence to create a revolution. </p>
                    <a href="" id="Novels\revolution 2020.pdf" onclick="mybookfunction(this.id)"class="more">- Read Me -</a>
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>  
            
            
          <div class="feat_prod_box">
            
              <div class="prod_img"><a href=""><img src="images\2states.jpg" alt="" title="" border="0" /></a></div>
                
                <div class="prod_det_box">
                <span class="special_icon"><img src="images/special_icon.gif" alt="" title="" /></span>
                  <div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title">Two States</div>
                    <p class="details">This book is the fourth in Bhagats list of novels and also the fourth one to be adapted as a movie. This funfilled love story that gets complicated when the question of marriage comes up, is a loose adaptation of Chetan Bhagats own marriage..</p>
                    <a href="" id="Novels\2 states.pdf"onclick="mybookfunction(this.id)" class="more">- Read Me -</a>
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>            
            
                      <div class="pagination">
            <span class="disabled"><<</span><span class="current">1</span><a href="#?page=2">2</a><a href="#?page=3">3</a>…<a href="#?page=199">10</a><a href="#?page=200">11</a><a href="#?page=2">>></a>
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