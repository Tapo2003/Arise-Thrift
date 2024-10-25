<?php
    
  session_start();
  
  if(isset($_SESSION['useruniquenumber']) && !empty($_SESSION['useruniquenumber'])){
  
  }else{
    $_SESSION['useruniquenumber'] = 'customer_' . rand(10, 1000) . time();

  } 
?>

<!doctype html>

<html class="no-js">  

<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  
  <title>Arise</title>
  

  <link rel="canonical" href="index.html" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

  <?php 
    require_once('js.php');

  ?>
  
  <?php
    require_once('css.php');

  ?>
  
  <?php
    require_once('js_2.php');
  ?>
  
  <?php 

    require_once('css_2.php');
  ?>

  <?php
    require_once('js_3.php');

  ?>
</head>
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/670f79d34304e3196ad24981/1iaa77ol5';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
<!--End of Tawk.to Script-->
<body id="inspire" class="template-index" style = "background-color:#DAA520">
 


<div id="wrapper" style = "background-color:#DAA520">
<!-- Navigation -->  
<header id="header">
  <div class="top-links" style = "background-color:#DAA520">
<div class="container" >
  <div class="row">
    <div class="col-lg-2 col-md-2 col-xs-6 col-sm-2 currency">
  <!-- currency -->
  <div class="tile_currency">
        
        <!-- <div class="select_wrap">
<i class="arrow-down"></i>

</div> -->
        
   
    </div>
  </div>
 
  </div>
  </div><!--inner-->
</div>
<!-- <div class="container-fluid" style = "background-color:rgba(210, 105, 30)"> -->
<div class="container-fluid" style = "background-color:#DAA520">
  <div class="row mob-header">
    <div class="col-lg-2 col-sm-3 col-md-2 col-xs-12 logo_position">
        <h1 style = "font-size: 60px; font-style: italic; font-weight: bold; font-family: georgia,sans-serif; color:white; text-align:center;text-shadow: 2px 2px 4px #000000;">Arise</h1>

  </div>

    <div class="col-lg-7 col-sm-4 col-md-6 col-xs-12 top_search">   
        
    <div class="tile_search trs_bg">
        <form id="search_top" class="search-form" action="https://inspire-17.myshopify.com/search" method="get" style = "padding-bottom: 20px">
        
        </form>
    </div>
   
   </div>   
 </div>

</div>

</header>

<nav class="navbar navbar-inverse" style = "font-size:15px;background-color:black;postion:absolute; bottom:-20px">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Women Products<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="women-boots.php" class="">BOOTS</a></li>
            <li><a href="women.shoes.php" class="">SHOES</a></li>
            <li><a href="women-sweatshirts.php" class="">SWEATSHIRT</a></li>
            <li><a href="luxury-bags.php" class="">LUXURY BAGS</a></li>
            <li><a href="leather-wears.php" class="">LEATHER WEARS</a></li>
            <li><a href="skirt.php" class="">SKIRTS</a></li>
            <li><a href="bum-short.php" class="">BUM SHORTS</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Men Products<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="men-boots.php" class="">BOOTS</a></li>
              <li><a href="men-sweatshirt.php" class="">SWEATSHIRT</a></li>
              <li><a href="men-cargo-pant.php" class="">CARGO PANTS</a></li>
              <li><a href="men-leather-pant.php" class="">LEATHER PANTS</a></li>
          </ul>
        </li>
        <li><a href="productCart.php">Catalog</a></li>
        <li><a href="contact-us.php" class=""><span>Contact Us</span></a></li>
      </ul>
      
    </div>
  </div>
</nav>
<?php
  require_once('js_4.php');




?>



<!-- collapse -->

    </div>


  <script type="text/javascript">
jQuery(document).ready(function() {
jQuery('.toggle').click(function() {
if (jQuery('.submenu').is(":hidden"))
{
jQuery('.submenu').slideDown("fast");
} else {
jQuery('.submenu').slideUp("fast");
}
return false;
});
});

/*Phone Menu*/
jQuery(document).ready(function() {
jQuery(".topnav").accordion({
accordion:false,
speed: 300,
closedSign: '+',
openedSign: '-'
});
});
</script>


  



<script>
  jQuery(document).ready(function() {
    jQuery("ul.dropdown li").has("ul.dropdown").find('>span').click(function(e) {
      if (!jQuery(".visible-phone").is(":visible")) {
        e.preventDefault();

        var currentParentMenu = jQuery(this).parents(".parent-mega-menu");
        var subMegaMenu = jQuery(this).parents(".row").find(".sub-mega-menu");
        var parentLink = jQuery(this).prev();
        var grandParentLink = jQuery(this).parents(".inner").find(">a");

        subMegaMenu.find(".inner").html(jQuery(this).next().clone());
        subMegaMenu.find(".parent-link a:eq(0)").attr("href", grandParentLink.attr("href")).text(grandParentLink.text());
        subMegaMenu.find(".parent-link a:eq(1)").attr("href", parentLink.attr("href")).text(parentLink.text());
        subMegaMenu.find(".parent-link span.up").click(function(){
          subMegaMenu.slideUp();
          currentParentMenu.slideDown();
        });
        currentParentMenu.slideUp();
        subMegaMenu.slideDown();
      }      
    });
  });
</script>
  

<!-- slider -->





<div id="slider_wrap" class="container">
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12">
     
           
        <div id="slider">
            <!---one ----->
          <img src="asset/images/img-4.png" title="#htmlcaption-1" alt="slide1" />

          <!-- <img src="asset/images/img-3.jpg" title="#htmlcaption-1" alt="slide1" style = "height: 300px"/> -->
    
        <a>
          <img src="asset/images/img-6.png?v=174258517599439724201445679895" title="#htmlcaption-2" alt="slide2"/>
        </a>
    

</div>
      

    </div>
   
   

   
    </div>
</div>

<style>
 
</style>
<div class="caption_hidden">

<div id="htmlcaption-1">
    <div class="caption_title caption_title-1">
    <div class="caption_content caption_content-1">
      
    </div>
    <!---header1----->
    <div class="mycontent">
      <h3 class = "header" style = "color: gold;text-shadow: 2px 2px 4px #000000;" >Arise Thrift</h3>
        <h3 class = "header_2" style = "color: #DAA520; margin-top: 50px;text-shadow: 2px 2px 4px #000000;">Collection</h3>
          <!-- <div class="caption_content caption_content-1">
            <div class="par" style = " margin-top: 15px; border-radius: 25px; align-item: center; ">
                <p class= "header-par" style = "color:black; font-size: 10px;font-family: georgia,sans-serif;"><span>Place Where Your Next Drip Is Just<br><br> A Thrift Away.<span></p>
            </div>     
          </div>
          <div><a class="view-btn" href="products/product03.html">View More</a> <a class="buy-btn" href="products/product04.html">Buy Now</a></div> -->
    </div>
  </div>

</div>
<style>
  .mycontent2{
    transform: translate(60%, 60%);
  }

  @media screen and (max-width: 1115px){
    .mycontent2{
      transform: translate(90%, 90%);
    }
    

  }
  @media screen and (max-width: 1000px){
    .mycontent2{
      transform: translate(70%, 70%);
    }
  }

  @media screen and (max-width: 900px){
    .mycontent2{
      transform: translate(60%, 60%);
    }
    
  }
  @media screen and (max-width: 800px){
    .mycontent2{
      /* transform: translate(50%, 50%); */
      position: relative;
      left:180px;
    }
    
  }

  @media screen and (max-width: 775px){
    .mycontent2{
      /* transform: translate(50%, 50%); */
      position: relative;
      left:150px;
    }
  }

  @media screen and (max-width: 750px){
    .mycontent2{
      /* transform: translate(50%, 50%); */
      position: relative;
      left:110px;
    }
  }

  @media screen and (max-width: 700px){
    .mycontent2{
      /* transform: translate(50%, 50%); */
      position: relative;
      left:100px;
    }
  }

  @media screen and (max-width: 676px){
    .mycontent2{
      /* transform: translate(50%, 50%); */
      position: relative;
      left:80px;
    }
  }

  @media screen and (max-width: 637px){
    .mycontent2{
      /* transform: translate(50%, 50%); */
      position: relative;
      left:60px;
    }
  }

  @media screen and (max-width: 600px){
    .mycontent2{
      /* transform: translate(50%, 50%); */
      position: relative;
      left:15px;
      bottom: 20px;
    }
  }

  @media screen and (max-width: 550px){
    .mycontent2{
      /* transform: translate(50%, 50%); */
      position: relative;
      left:4px;
    }
  }

  @media screen and (max-width: 537px){
    .mycontent2{
      /* transform: translate(50%, 50%); */
      position: relative;
      left:4px;
      bottom: 40px;
    }
  }

  @media screen and (max-width: 513px){
    .head_2{
      /* transform: translate(50%, 50%); */
      top: -20px;
    }
  }

  @media screen and (max-width: 512px){
    .mycontent2{
      position:relative;
      left: 70px;
      bottom: 10px;
      /* transform: translate(3%, 3%); */
    }
    .head_2{
      position: relative;
      top: -40px;
    }
  }


  @media screen and (max-width: 500px){
    .mycontent2{
      bottom: 30px;
    }
    
  }

  @media screen and (max-width: 500px){
    .mycontent2{
      bottom: 30px;
    }
    
  }

  @media screen and (max-width: 500px){
    .mycontent2{
      position: relative;
      left: 50px;
    }
    
  }

  @media screen and (max-width: 400px){
    .mycontent2{
      position: relative;
      bottom:40px;
      left: 40px;
    }
    
  }

  @media screen and (max-width: 372px){
    .mycontent2{
      position: relative;
      bottom:60px;
      left: 20px;
    }
    
  }

</style>
<div id="htmlcaption-2">
    <div class="caption_title caption_title-2">
    <div class="mycontent2" >
        <h3 class = "header" style = "color: gold; text-align:center;text-shadow: 2px 2px 4px #000000;">Thrifts To </h3>
        <h3 class = "header_2 head_2" style = "color: #DAA520; text-align:center; margin-top: 40px;text-shadow: 2px 2px 4px #000000;">Drip</h3>
    </div>
       
       <!-- <div class="caption_content caption_content-2">
        <p style = "color:#DAA520; text-align:center">Lorem ipsum dolor sit amet, consectetur<  /p>
       
        
      </div> -->
    </div>
</div>



</div>

<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
        effect:'fade',
        animSpeed:500,
        pauseTime:7000,
        startSlide:0,
        directionNav:true,
        directionNavHide:true,
        controlNav:true,
        pauseOnHover:true
      
    });
});
</script>
  
<!-- offer text -->  
   
        
<!-- <div class="header-service">
    <div class="container">
      <div class="row">
      
  
      </div>
    </div>
  </div> -->
  
   
 
                    

<!-- showcase banner -->
<!-- showcase -->
   
 <div class="col-md-12" style = "text-align: center">
  <h3 style = "font-size: 30px; margin-top: 30px; font-family : georgia,sans-serif; color:black; text-transform:uppercase; margin-bottom:30px;text-shadow: 2px 2px 4px #000000; color:white">Check shop for different products</h3>
 </div>       
 
  <style>
    
    @media screen and (min-width: 990px){
       
      
      .sample{
        /* width: 20%; */
        /* display: grid; */
        /* grid-template-columns: 1fr 1fr 1fr; */
        
      }
      /* #image{
        width: 150px;
        background-color:red;
      }
     .f{
      width: 200px;
     } */
    }

  </style>



<div id="showcase" class="container">
<div class="row clearfix">

    

    <div class="banner banner_1 col-lg-4 col-xs-12 col-sm-4">
    <a class="trs_bg" >
        <img src="asset/images/img-10.png" alt="banner_2_img" />
       <div class="info">
       <h3 style = "color:white;text-shadow: 2px 2px 4px #000000">Fashion</h3>
       <!-- <p>men's</p>
        
          <h4>Lorem ipsum dolor sit amet, consectetur</h4>
         <span>Shop Now ></span> -->
             </div>
    </a>
    </div>

    <div class="banner banner_2 col-lg-4 col-xs-12 col-sm-4">
    <a class="trs_bg">
        <img src="asset/images/img-22.png" alt="banner_3_img" />
       <div class="info">
       <h3 style = "color:white;text-shadow: 2px 2px 4px #000000">Lifestyle</h3>
        <!-- <p>Super Sale</p>
        <h3>Electronics</h3>
         <span>Shop Now ></span> -->
      </div>  
    </a>
    </div>

    <div class="banner banner_3 col-lg-4 col-xs-12 col-sm-4">
    <a class="trs_bg">
        <img src="asset/images/img-21.png" alt="banner_4_img" />
       <div class="info">
       <h3 style = "color:white;text-shadow: 2px 2px 4px #000000">Thrift To Drip</h3>
      
      </div>  
    </a>
    </div>

</div>
</div>
  
  
 



  
  
   <div id="main_content" class="col-main col-sm-12 col-sm-push-3-">
    
    

<div class="index-scope">
  
<div class="container">
  
 

<script type="text/javascript">
//<![CDATA[
 jQuery(document).ready(function(cash) {
  jQuery("#best-seller-slider .slider-items").owlCarousel({
   items : 3, //10 items above 1000px browser width
      itemsDesktop : [1024,3], //5 items between 1024px and 901px
        itemsDesktopSmall : [900,2], // 3 items betweem 900px and 601px
        itemsTablet: [600,2], //2 items between 600 and 0;
        itemsMobile : [320,1],
        navigation : true,
        navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
        slideSpeed : 500,
        pagination : false,
        autoPlay: true
     });
 }); 
//]]>
</script>

 
<div class="widget widget__latest-products col-lg-4 col-xs-12 col-sm-4 latest-pro small-pr-slider">
 
  
 
  
  

<?php
    require_once('js_5.php');
?>
</div>
            
<div class="widget  widget__featured-pro"> 
  <div class="container">
 <!-- <div class="widget_header">
  <h2>Featured Products</h2>
  </div>  -->


 

</div>
</div>

 
  

<?php
    require_once('js_6.php');
?>
<?php
    require_once("admin/dbconn.php");
    $sql = "SELECT * FROM about_arise ORDER BY about_id DESC";
    $result = mysqli_query($connection,$sql) or die(mysql_error());
    $recordCount = mysqli_num_rows($result);
    if($recordCount > 0){
      $fetchRow = mysqli_fetch_array($result);
      $aboutContent   =       $fetchRow['about_content'];
      $about_id       =       $fetchRow['about_id'];
      $aboutImage		  =       "admin/about_image/".$about_id.".jpg";
      
  ?>
<div class="container">
<h1 style = "text-align:center; font-size: 25px; padding-bottom: 30px; font-family : georgia,sans-serif;color:white; margin-top: 70px; margin-bottom: 30px; text-transform: uppercase; color:white;text-shadow: 2px 2px 4px #000000;">About us .</h1>
</div>
<div>
    <div id="home-banner" style = "margin-bottom:40px">
      <?php echo "<img src= '".$aboutImage."' alt='' style = 'height:390px;width:380px'/>";?>
    </div>
    </div>
<div class="container" >
   
   <div>
      
 <!-- Begin MailChimp Signup Form -->
<link href="asset/css/slim-081711.css" rel="stylesheet" type="text/css" property="stylesheet">
<div class=" col-md-6" style = "height:">  

<div id="mc_embed_signup">
  <p style = "line-height: 30px;font-size:15px;font-family: Arial, Helvetica, sans-serif;"><?php echo $aboutContent?></p>
  <?php  

  }
  ?>
  
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_f6efaf2aa7fd4b4ed81371791_e32bd0c22f" tabindex="-1" value=""></div>
    <!-- <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"> -->
    </div>
</form>

</div>
  </div>

<!--End mc_embed_signup-->

<!-- intro i would still be needed --->
     
     <div>
      <!-- <div id="home-banner">
  

        <img src="asset/images/img-23.jpg" alt="" style = "height: 330px; width: 350px" />

    

      </div> -->
     </div>
   </div>
  
        

  

  
  </div>
   

  <div class="container">
<!-- <h1 style = "text-align:center; font-size: 35px; padding-bottom: 1px; font-family : georgia,sans-serif;color:black;text-transform: uppercase; margin-top: 70px; margin-bottom: 30px;color:white;text-shadow: 2px 2px 4px #000000;">About Us .</h1> -->
</div>
  <div class="container middle-slider" >
  
 <!--Custom Slider-->
  <!-- <div class="col-sm-5 custom-slider">
   <div class="custom-inner" style = "">
  
      <ul class="bxslider" >
                
        <li>
          
          
        </li> 
     
      </ul>
    </div>
  </div> -->
  <!--Custom Slider End--> 
 
  
  
  
        
  <div class="widget__tops_collection col-sm-6 pro-block" style = "margin-left:30px;margin-right:30px"> 
    <div class="">
      <div class="category-pro-title">
        <p style = "line-height: 30px;"></p>
      </div> 
     
      <div class="product-listing product-listing__index">
        <div id="tops_collection_pro" class="product-flexslider hidden-buttons">
          <div>  
           
              <div>
		
              <div >
             
             
            
            
 
  
          </div>	
        </div>
      
    </div>
  </div>
	
</div>
    </div>
</div>

 
  


  
  
        
<div> 
  
    <div>
 


<div >

  
      <div>
              <div> 

<div>
  
 <div>

</div>

     

      <div>
       
		   
          
    	</div>

</div>	
                  
		  
<div>

</div>	

        </div></div>
	
</div>
    </div>
</div>
  </div>
  
   
  
        

 
 


<script type="text/javascript">
//<![CDATA[
 jQuery(document).ready(function(cash) {
  jQuery("#new-pro-slider .slider-items").owlCarousel({
   items : 4, //8 items above 1000px browser width
      itemsDesktop : [1024,4], //5 items between 1024px and 901px
        itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
        itemsTablet: [600,2], //2 items between 600 and 0;
        itemsMobile : [320,1],
        navigation : true,
        navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
        slideSpeed : 500,
        pagination : false
     });
 }); 
//]]>
</script>
 
 
</div>


    
     
       </div>
  
  
  
   
<!-- main content -->
  
  

  
<div id="main" class="container" role="main">

 

    <div class="row"> 
    

<!-- left column -->
      
    
     
    
      
      
   

    

<!-- center column -->
    <div id="main_content" class="col-main col-sm-12">
      <!-- collection-header --> 
  
       
   
    
    </div>

<!-- right column -->
    

    </div>
</div>


    
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    
</div><!-- end of #wrapper -->
 
        


  

<script type="text/javascript">
jQuery("#brand-logo-slider .slider-items").owlCarousel({
 autoPlay : true,
 items : 6, //10 items above 1000px browser width
 itemsDesktop : [1024,4], //5 items between 1024px and 901px
 itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
 itemsTablet: [600,2], //2 items between 600 and 0;
 itemsMobile : [320,1],
 navigation : true,
 navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
 slideSpeed : 500,
 pagination : false   
});
  
</script>
<!-- footer -->
<footer id="footer" style = "background-color:black; padding-bottom:40px">
 
 <!-- footer block -->
 
   
<div id="bottom">
<div class="container">
<div class="row"> 
  

</div>
  </div>
</div> 
  <div class="container">
<div class="row"> 
	<div class="container copyright" role="contentinfo" style = "color:white; text-align:center;font-size:200px">
      &copy; <?php echo date('Y'); ?>  Arise, Developed  by Piz_tech</a>.
	</div>
  </div>
  </div>

</footer>
  
<script type="text/javascript">// <![CDATA[
jQuery(document).ready(function() {    //
    var $modalParent        = jQuery('div.newsletterwrapper'),
        modalWindow         = jQuery('#email-modal'),
        emailModal          = jQuery('#email-modal'),
        modalPageURL        = window.location.pathname; 
          
    modalWindow = modalWindow.html();
    modalWindow = '<div id="email-modal">' + modalWindow + '</div>';
    $modalParent.css({'position':'relative'});
    jQuery('.wrapper #email-modal').remove();
    $modalParent.append(modalWindow);
  
    if (jQuery.cookie('emailSubcribeModal') != 'closed') {
        openEmailModalWindow();
    };
      
    jQuery('#email-modal .btn.close').click(function(e) {
        e.preventDefault();
        closeEmailModalWindow();
    });
  
    jQuery('body').keydown(function(e) {
        if( e.which == 27) {
            closeEmailModalWindow();
            jQuery('body').unbind('keydown');
        }
    });
    jQuery('#mc_embed_signup form').submit(function() {
        if (jQuery('#mc_embed_signup .email').val() != '') {
            closeEmailModalWindow();
        }
    });
      
    function closeEmailModalWindow () {
        jQuery('#email-modal .modal-window').fadeOut(600, function() {
            jQuery('#email-modal .modal-overlay').fadeOut(600, function() {
                jQuery('#email-modal').hide();
                jQuery.cookie('emailSubcribeModal', 'closed', {expires:1, path:'/'});
            });
        })
    }
    function openEmailModalWindow () {
        jQuery('#email-modal').fadeIn(600, function() {
           jQuery('#email-modal .modal-window').fadeIn(600);
        });
    }
      
});
// ]]
// ]]></script>
 
        



<script src="asset/js/currencies.js" type="text/javascript"></script>
<script src="asset/css/jquery.currencies.min338e.js?v=148731906405125217661438064336" type="text/javascript"></script>

<script>


Currency.format = 'money_format';


var shopCurrency = 'USD';

/* Sometimes merchants change their shop currency, let's tell our JavaScript file */
Currency.money_with_currency_format[shopCurrency] = "$ {{amount}} USD";
Currency.money_format[shopCurrency] = "$ {{amount}}";
  
/* Default currency */
var defaultCurrency = 'USD' || shopCurrency;
  
/* Cookie currency */
var cookieCurrency = Currency.cookie.read();

/* Fix for customer account pages */
jQuery('span.money span.money').each(function() {
  jQuery(this).parents('span.money').removeClass('money');
});

/* Saving the current price */
jQuery('span.money').each(function() {
  jQuery(this).attr('data-currency-USD', jQuery(this).html());
});

// If there's no cookie.
if (cookieCurrency == null) {
  if (shopCurrency !== defaultCurrency) {
    Currency.convertAll(shopCurrency, defaultCurrency);
  }
  else {
    Currency.currentCurrency = defaultCurrency;
  }
}
// If the cookie value does not correspond to any value in the currency dropdown.
else if (jQuery('[name=currencies]').size() && jQuery('[name=currencies] option[value=' + cookieCurrency + ']').size() === 0) {
  Currency.currentCurrency = shopCurrency;
  Currency.cookie.write(shopCurrency);
}
else if (cookieCurrency === shopCurrency) {
  Currency.currentCurrency = shopCurrency;
}
else {
  Currency.convertAll(shopCurrency, cookieCurrency);
}

jQuery('[name=currencies]').val(Currency.currentCurrency).change(function() {
  var newCurrency = jQuery(this).val();
  Currency.convertAll(Currency.currentCurrency, newCurrency);
  jQuery('.selected-currency').text(Currency.currentCurrency);
});

var original_selectCallback = window.selectCallback;
var selectCallback = function(variant, selector) {
  original_selectCallback(variant, selector);
  Currency.convertAll(shopCurrency, jQuery('[name=currencies]').val());
  jQuery('.selected-currency').text(Currency.currentCurrency);
};

jQuery('.selected-currency').text(Currency.currentCurrency);

</script>



<script type="text/javascript">
$(document).ready(function(){
$('.custom-select').selectik();
});
</script>
  

<div class="cart_popup"><i class="icon-ok"></i> &nbsp; Product Added to Cart</div>
  <script src="asset/js/shope868.js?v=169707876251965233051439906388" type="text/javascript"></script>


  
 
  <script>
jQuery(function() {
  jQuery('.swatch :radio').change(function() {
    var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
    var optionValue = jQuery(this).val();
    jQuery(this)
      .closest('form')
      .find('.single-option-selector')
      .eq(optionIndex)
      .val(optionValue)
      .trigger('change');
  });
});
</script>   

</body>



