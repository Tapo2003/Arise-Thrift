<?php
session_start();
  if(isset($_SESSION['useruniquenumber']) && !empty($_SESSION['useruniquenumber'])){
    $productUniqueId =  $_SESSION['useruniquenumber'];
   

  }else{
    $_SESSION['useruniquenumber'] = 'customer_' . rand(10, 1000) . time();
   
  }
?>
<!doctype html>

<html class="no-js">  

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  
  <title>Arise</title>
  

  

  <link rel="canonical" href="login.html" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

  <?php 
    require_once('js.php');

  ?>
  
  <?php
    require_once('css.php');

  ?>
  
    <script src="../cdn/shopifycloud/shopify/assets/themes_support/shopify_common-33bb9d312118840468a53f36b59c62c1e8f2b7d1a0a77250db9e300441827470.js" type="text/javascript"></script>
    <script src="../cdn/shopifycloud/shopify/assets/themes_support/customer_area-4beccea87758d91106a581ba89341d9b51842f6da79209258c8297239e950343.js" type="text/javascript"></script>
  


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
<body id="account" class="template-customers-login" >
 
<div id="wrapper">
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
  <!-- <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 hidden-xs" >
   
        
    <div class="offer-text" style = "margin-left: 190px; font-size: 25px; font-style:bold; color:white">Happy SHOPPING</div>
  
  
  </div> -->
    <!-- <div class="col-lg-5 col-md-5 col-xs-6 col-sm-10">
   <div class="toplinks">
     <div class="links">

      
      
      </div> 
   </div> 
  </div> -->
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

 <!-- <div class="col-lg-3 col-sm-5 col-md-4 col-xs-12"> 
  
   
  </div> -->
 </div>

</div>
</header>

<?php
    require_once('js_4.php');

?>
<!-- Navigation -->

 


<nav class="navbar navbar-inverse" style = "font-size:15px;background-color:black;">
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
        <li class="active"><a href="index.php">Home</a></li>
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

 
  

  
  
  



  
  
  
   
<!-- main content -->
  
    
    <div class="breadcrumbs">   
        
<!-- <div id="breadcrumb">
  <div class="container">
  <ul class="breadcrumb">
    <li><a href="../index.html" class="homepage-link" title="Back to the frontpage">Home</a><span class="divider">&rarr;</span></li>
    
        <li><span class="page-title">Account</span></li>
    
  </ul>
</div>
  </div> -->
 
 </div>
    
 <div class="container" >
 <div class="template_header">
    <h2 class="page_title" style = "text-align: center;padding-top: 20px">Order Now</h2>
 </div>           
  <table class="table table-bordered" style = "border:solid 2px black">
    <thead>
      <tr style = "border:solid 2px black">
      <!-- <h4 style = "margin-top:20px">Grand Total =</h4> -->
        <th style = "border:solid 2px black">SN</th>
        <th style = "border:solid 2px black">Product Name</th>
        <th style = "border:solid 2px black">product Amount</th>
        <th style = "border:solid 2px black">product Quantity</th>
        <th style = "border:solid 2px black">Total</th>
        
      </tr>
    </thead>
    
    <tbody id='tblOrder'>
      
    
    </tbody>
  </table>
  <div class="action_bottom">
      

      <a href = "productCart.php" class="btn btn-primary" type="submit" value="Edit" style = "background-color:green; color: white;width:100px;border-radius:40px">Edit</a>

      <a href = "order-now.php" class="btn btn-primary" type="submit" value="Edit" style = "background-color:black; color: white;width:100px;border-radius:40px">Order Now</a>

      <!-- <input class="btn btn-primary" type="submit" value="Order Now" style = "background-color:black; color: white;margin-left:15px" onclick= "payWithPaystack()"/> -->


      <!-- <span class="note">or <a href="../index.html">Return to Store</a></span> -->
  </div>
  <!-- <a class="blog-article_read-more btn btn-info" href="productCart.php" style ="font-size: 10px; border: solid black 1px; width:100px;border-radius: 20px; background-color: black; color:white">Edit</a>

  <a class="blog-article_read-more btn btn-info" href="order-now.php" style ="font-size: 10px; border: solid black 1px; width:150px;border-radius: 20px; background-color: black; color:white;transform: translate(100%, 10%);visibility:hidden">Order Now</a>
  <a class="blog-article_read-more btn btn-info" href="order-now.php" style ="font-size: 10px; border: solid black 1px; width:150px;border-radius: 20px; background-color: black; color:white;transform: translate(100%, 10%);visibility:hidden">Order Now</a>
  <a class="blog-article_read-more btn btn-info" href="order-now.php" style ="font-size: 10px; border: solid black 1px; width:150px;border-radius: 20px; background-color: black; color:white;transform: translate(100%, 10%);visibility:hidden">Order Now</a>
  <a class="blog-article_read-more btn btn-info" href="order-now.php" style ="font-size: 10px; border: solid black 1px; width:150px;border-radius: 20px; background-color: black; color:white;transform: translate(100%, 10%);visibility:hidden">Order Now</a>
  <a class="blog-article_read-more btn btn-info" href="order-now.php" style ="font-size: 10px; border: solid black 1px; width:100px;border-radius: 20px; background-color: blue; color:white;transform: translate(100%,10%);">Order Now</a>
  
 -->


</div>
  

  
<div id="main" class="container" role="main">

 

    <div class="row"> 
    

<!-- left column -->
      
    
     
    
      
      
   


<!-- center column -->
    <div id="main_content" class="col-main col-sm-12">
      <!-- collection-header --> 
  
    





<script type="text/javascript">
  function showRecoverPasswordForm() {
    document.getElementById('recover-password').style.display = 'block';
    document.getElementById('customer').style.display='none';
  }

  function hideRecoverPasswordForm() {
    document.getElementById('recover-password').style.display = 'none';
    document.getElementById('customer').style.display = 'block';
  }

  if (window.location.hash == '#recover') { showRecoverPasswordForm() }
</script>

<script>
  jQuery(function($){
    $('.errors').addClass('alert').addClass('alert-warning');
  });
</script>

   
    
    </div>

<!-- right column -->
    

    </div>
</div>


    
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    
</div><!-- end of #wrapper -->
 
        

<div class="brand-logo">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            <!-- Item -->
            <div class="item"><a href="../index.html"><img src="../cdn/shop/t/2/assets/b-logo1e023.png?v=108936127095157247911438238896" alt="" /></a></div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="../index.html"><img src="../cdn/shop/t/2/assets/b-logo3fb9d.png?v=88749485572692786761438238921" alt="" /></a></div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="../index.html"><img src="../cdn/shop/t/2/assets/b-logo2c7f0.png?v=53787553221377548231438238908" alt="" /></a></div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="../index.html"><img src="../cdn/shop/t/2/assets/b-logo430c1.png?v=13910931070503797381438238931" alt="" /></a></div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="../index.html"><img src="../cdn/shop/t/2/assets/b-logo59460.png?v=28168610365985877141438238944" alt="" /></a></div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="../index.html"><img src="../cdn/shop/t/2/assets/b-logo67e14.png?v=153609756368673526681438238959" alt="" /></a></div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="../index.html"><img src="../cdn/shop/t/2/assets/b-logo7c672.png?v=88749485572692786761438239575" alt="" /></a></div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="../index.html"><img src="../cdn/shop/t/2/assets/b-logo8dbcd.png?v=28168610365985877141438239591" alt="" /></a></div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>

  

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
 
        
<div class="newsletterwrapper">
  <div id="email-modal" style="display: none;">
    <div class="modal-overlay"></div>
    <div class="modal-window" style="display: none;">
      <div class="window-window">
        <div class="window-content"><a class="btn close" title="Close Window">Close Window </a>
        <div class="left">
          <h1 class="title">Newsletter Sign up</h1>
           <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
       
          

<div class="newsletter">
 
<div id="mc_embed_signup">
<form action="http://magikcommerce.us9.list-manage.com/subscribe/post?u=f6efaf2aa7fd4b4ed81371791&amp;id=e32bd0c22f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL1" placeholder="your@email.com" required>
    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
    </div>
</form>
</div>

  
  </div>
  <div class="col mid">
              <div class="inner-text">
                <h3>Watches</h3>
              </div>
              <a href="#"><img alt="offer banner2" src="images/offer-banner2.html"></a></div>
      
          <h2 class="message">sign up for our exclusive email list and be the first to hear of special promotions, new arrivals, and designer news.</h2>
          
          <ul class="social-links">

<!-- twitter -->
    <li class="tile tile_twi trs_scale">
         <a href="https://twitter.com/magikcommerce"><i class="fa fa-twitter"></i></a>
    </li>
<!-- google+ -->
    <li class="tile tile_gpl trs_scale">
        <a href="https://google.com/+magikcommerce"><i class="fa fa-google-plus"></i></a>
    </li>
<!-- facebook -->
    <li class="tile tile_fcb trs_scale">
        <a href="https://www.facebook.com/magikcommerce"><i class="fa fa-facebook"></i></a>
    </li>
<!-- pinterest -->
    <li class="tile tile_pin trs_scale">
        <a href="https://www.pinterest.com/magikcommerce/"><i class="fa fa-pinterest"></i></a>
    </li>
  <!-- RSS -->
    <li class="tile tile_rss trs_scale">
        <a href="../index.html"><i class="fa fa-rss"></i></a>
    </li>

  </ul>
          
         </div>
          <div class="right"><img src="../../cdn.shopify.com/s/files/1/0938/3126/t/2/assets/newsletter-bg.jpg" alt="newsletter-bg" /></div>
        </div>
      </div>
    </div>
  </div>
</div>
  
  



<script src="../services/javascripts/currencies.js" type="text/javascript"></script>
<script src="../cdn/shop/t/2/assets/jquery.currencies.min338e.js?v=148731906405125217661438064336" type="text/javascript"></script>

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
  <script src="../cdn/shop/t/2/assets/shope868.js?v=169707876251965233051439906388" type="text/javascript"></script>


  
 
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

<!-- Mirrored from inspire-17.myshopify.com/account/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 14:20:40 GMT -->
</html>


<div id="sca-qv-showqv">  
 <div>
	<!--START PRODUCT-->
	 <div class="quick-view-container fancyox-view-detail">
	    <div id="sca-qv-left" class="sca-left">
            <div id="sca-qv-sale" class="sca-qv-sale sca-qv-hidden">Sale</div>
			<!-- START ZOOM IMAGE-->
			 <div class="sca-qv-zoom-container">
                    <div class="zoomWrapper">
					  <div id="sca-qv-zoomcontainer" class='sqa-qv-zoomcontainer'>
                              <!-- Main image  ! DON'T PUT CONTENT HERE! -->     
                      </div>
                       
                    </div>
             </div>
			<!-- END ZOOM IMAGE-->
          
            <!-- START GALLERY-->
            <div id="sca-qv-galleryid" class="sca-qv-gallery"> 
              		<!-- Collection of image ! DON'T PUT CONTENT HERE!-->
            </div>	
            <!-- END GALLERY-->
        </div>

		<!--START BUY-->
		<div id ="sca-qv-right" class="sca-right">
          	<!-- -------------------------- -->
			<div id="sca-qv-title" class="name-title" >
					<!-- Title of product ! DON'T PUT CONTENT HERE!-->
			</div>
			<!-- -------------------------- -->
			<div id ="sca-qv-price-container" class="sca-qv-price-container"  >
					<!-- price information of product ! DON'T PUT CONTENT HERE!-->
			</div>
			<!-- -------------------------- -->
			<div id="sca-qv-des" class="sca-qv-row">
					<!-- description of product ! DON'T PUT CONTENT HERE!-->
			</div>
			<!-- -------------------------- -->
			<div class="sca-qv-row">
				<a id="sca-qv-detail" href="#" > 	View full product details → </a>
			</div>
		<!-- ----------------------------------------------------------------------- -->
            <div id='sca-qv-cartform'>
	          <form id="sca-qv-add-item-form" method="post">     
                <!-- Begin product options ! DON'T PUT CONTENT HERE!-->
                <div class="sca-qv-product-options">
                  <!-- -------------------------- -->
                  <div id="sca-qv-variant-options" class="sca-qv-optionrow">
							<!-- variant options  of product  ! DON'T PUT CONTENT HERE!-->
		          </div>  
                  <!-- -------------------------- -->
                  <div class="sca-qv-optionrow">	    
                    <label>Quantity</label>
          	        <input id="sca-qv-quantity" min="1" type="number" name="quantity" value="1"  />
                  </div>
				  <!-- -------------------------- -->
                  <div class="sca-qv-optionrow">
                     <p id="sca-qv-unavailable" class="sca-sold-out sca-qv-hidden">Unavailable</p>
                     <p id="sca-qv-sold-out" class="sca-sold-out sca-qv-hidden">Sold Out</p>
                     <input type="submit" class="sca-qv-cartbtn sca-qv-hidden" value="ADD TO CART" />
                     
                  </div>
                  <!-- -------------------------- -->
                </div>
               <!-- End product options -->
            </form>
         </div>
	   </div>
	   <!--END BUY-->
    </div>
	<!--END PRODUCT-->
 </div>
</div>


<div id="scaqv-metadata" 
autoconfig = "yes" 
noimage = "//inspire-17.myshopify.com/cdn/shop/t/2/assets/sca-qv-no-image.jpg?v=104119773571000533581438064338" 
moneyFormat = "$ {{amount}}" 
jsondata = "eyJibnRfdGV4dCI6Ilx1MDBhMCIsImJudF90ZXh0X2ZvbnQiOiJhcmlhbCIsImJudF90ZXh0X2ZvbnRzaXplIjoiMTRweCIsImJudF90ZXh0X2NvbG9yIjoiI2ZmZmZmZiIsImJudF90ZXh0X2hvdmVyIjoiI2ZmZmZmZiIsImJudF9jb2xvciI6IiMzODY4OTkiLCJibnRfY29sb3JfaG92ZXIiOiIjMmM1OTg3IiwiYm50X3Bvc3NpdGlvbiI6ImNlbnRlciIsImltZ19tYWluX3dpZHRoIjoiMzQ1cHgiLCJ3ZF9oZWlnaHQiOiI1MDAiLCJ3ZF93aWR0aCI6Ijg2MCIsImNhcnRfZ28iOiJubyIsImNhcnRjb3VudCI6IiNjYXJ0LWNvdW50fCNtaW5pY2FydCAjY2FydC10YXJnZXQtZGVza3RvcHwjZHJhd2VyIC5jb250YWluZXJ8LndyYXBwZXIgLmhlYWRlci1jYXJ0LWJ0bnwjY2FydC10b3RhbCAjY2FydC1wcmljZXwjY2FydC1jb3VudCAubm8tdW5kZXJsaW5lfC5mciAuY2FydCAudG90YWxfcHJpY2V8LnVuc3R5bGVkIC5mciAuY2FydHwud3JhcHBlciAjY2FydFRvZ2dsZXwjdW1icmVsbGEgLmNhcnQtbGluayAuaWNvbnwjbWluaS1jYXJ0ICNjYXJ0LXRhcmdldHwudG9vbGJhci13cmFwcGVyIC51bnN0eWxlZCIsImNhcnRfdG90YWwiOiIjY2FydGlkLW5lZWQtdG8tcmVsb2FkIiwiY2FydF9ub3RpZnlfYWRkX2Zvcm1hdCI6IlRoaXMgcHJvZHVjdCBpbiAqWW91ciBDYXJ0JSBhbHJlYWR5LiIsImNhcnRfbm90aWZ5X2luX2Zvcm1hdCI6Ikl0ZW0gYWRkZWQgdG8gY2FydCEgKlZpZXcgQ2FydCUuIiwiY2FydF9jb2xvciI6IiNmYzRjMDMiLCJzYWxlX2ljb25fY29sb3IiOiIjZmM0YzAzIiwicHJpY2VfY29sb3IiOiIjZjQ1YjRmIiwibGlua19jb2xvciI6IiNmNDViNGYiLCJ0aXRsZV9jb2xvciI6IiMwMDg4Y2QiLCJxdl9kaXNhYmxlIjpudWxsfQ==" ></div>

<script>
  onload = getCartItems();
  
  function getCartItems(){
    $.get("getCartItems.php").done(function(data){
    
      if(data == 0){
          // do nothing
      }else{
          $("#tblOrder").html(data);

      }
    });
  }
</script>