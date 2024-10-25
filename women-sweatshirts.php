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

<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  
  <title>Dresses | inspire</title>
  

  

  <link rel="canonical" href="dresses.html" />

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

<body id="dresses" class="template-collection">
 
<div id="wrapper">
<!-- Navigation -->  
<header id="header">
 
<div class="container-fluid" style = "background-color:#DAA520">
  
<div class="row mob-header">
    <div class="col-lg-2 col-sm-3 col-md-2 col-xs-12 logo_position">
        <h1 style = "font-size: 50px; font-style: italic; font-weight: bold; font-family: georgia,sans-serif; color:white; text-align:center; padding-top: 15px;text-shadow: 2px 2px 4px #000000; margin-bottom: 10px">Arise</h1>

  </div>

  <div class="col-lg-7 col-sm-4 col-md-6 col-xs-12 top_search">   
        
        <div class="tile_search trs_bg" style = "padding-bottom:20px">
          <!-- search form -->
          <form id="search" name = "search" class="search-form" action="femaleSearch.php" method="post">
                <input id="search" type="text" name="search" placeholder="search here" />
              <button type="submit" title="Search" style = "background-color:black" class="search-btn-bg" id="submit-button"><span>search</span></button>
              
            </form>
        </div>
     
      </div>   
  
      <div class="col-lg-3 col-sm-5 col-md-4 col-xs-12"> 
  
      <div class="tile_cart trs_bg">
    <!-- shopping cart -->
          <a href="productCart.php" >
              <i class="fa fa-shopping-cart" style = "color:black"></i>
              <strong style = "color:black">my Cart</strong>
            <span class="cart-total-items"><span class="count" id = "cartQuantity">0</span> </span>
            
          </a>
      </div>
     
     
     
    </div>
  
 </div>

</div>
</header>


<?php
  require_once('js_4.php');
?>
 


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
  
    

    
    
  

  

<!-- left column -->
      
    
    
    
     

                   </div>
      
                
    
        









</div>
  

     

          
    	</div>
  
       
 
  
</div>
                   </div>
      


  

</div>
  


		   
          
    	</div>
  
      
 
  
</div>
                   </div>
      
    </div>
          </div>
       </div>
  </div>
</div>
  
  


<script type="text/javascript">
//<![CDATA[
 jQuery(document).ready(function(cash) {
  jQuery("#best-seller-block .slider-items").owlCarousel({
   items : 1, //10 items above 1000px browser width
      itemsDesktop : [1024,1], //5 items between 1024px and 901px
        itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
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
     
    
      
      
   

    

<!-- center column -->
    <div id="main_content" class="col-main col-sm-9">
      <!-- collection-header --> 
  
       
    

<style>

@media screen and (max-width: 1200px){
     .header_product{
      margin-left: 200px;
    }
    
  }

  @media screen and (max-width: 769px){
    .header_product{
      margin-left: 10px;
    }
  }

</style>


<div class="grid grid-border header_product" style = "text-align:center">


  <!-- <div class="grid-item large--four-fifths grid-border--left"> -->

    
    
 
      <span id = "addToCartMessage" name = "addToCartMessage"></span>
    
      <h1 style = "text-align:center; color: black; font-size: 30px; font-style: italic; font-weight: bold; font-family: georgia,sans-serif;padding-top: 20px" class = "header_product">WOMEN SWEATSHIRT</h1>
      
        
  
  
</div>

<script>
  Shopify.queryParams = {};
  if (location.search.length) {
    for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
      aKeyValue = aCouples[i].split('=');
      if (aKeyValue.length > 1) {
        Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
      }
    }
  }

  jQuery(function() {
    jQuery('#sortBy')
      // select the current sort order
      .val('title-ascending')
      .bind('change', function() {
        Shopify.queryParams.sort_by = jQuery(this).val();
        location.search = jQuery.param(Shopify.queryParams).replace(/\+/g, '%20');
      }
    );
  });
</script>
        


<script>
  function replaceUrlParam(url, paramName, paramValue) {
    var pattern = new RegExp('('+paramName+'=).*?(&|$)'),
        newUrl = url.replace(pattern,'$1' + paramValue + '$2');
    if ( newUrl == url ) {
      newUrl = newUrl + (newUrl.indexOf('?')>0 ? '&' : '?') + paramName + '=' + paramValue;
    }
    return newUrl;
  }

  $(function() {
    $('.change-view').on('click', function() {
      var view = $(this).data('view'),
          url = document.URL,
          hasParams = url.indexOf('?') > -1;

      if (hasParams) {
        window.location = replaceUrlParam(url, 'view', view);
      } else {
        window.location = url + '?view=' + view;
      }
    });
  });
</script>
       </div>
    </header>


     
    <div class="grid-uniform">

      

    <?php
      require_once("admin/dbconn.php");
      
      $sql = "SELECT * FROM female_products WHERE product_categories = 'female sweatshirts' ORDER BY product_id DESC";
      $result = mysqli_query($connection, $sql) or die(mysql_error());
    
      $defaultNum = mysqli_num_rows($result);
      if($defaultNum == 0){
        echo '<div class="product product__product-grid-item col-sm-3">
          <div class="product_image-wrap">  
          
            <a class="product-grid-image">
                <img src="asset/images/no-product.jfif  " alt="Black Slim Tapered Fit Track Pants">
          
              </a>
            
          </div>
                <div class="product_title-wrap" style = "margin-top:20px; text-align:center">
                  <a class="product_title" style ="font-size:20px;color:white;text-shadow: 2px 2px 4px #000000;">
                    No Product
                  </a>
                
                </div>
        </div>

        
        </div>';
       }
       while($row = mysqli_fetch_array($result)){
          $productId			    = $row["product_id"];
          $productName 		  = $row["product_name"];
          $productPrice          = number_format($row["product_price"]);
          $productDescription	          = $row["product_description"];
          $brandName 	    = $row["brand_name"];
          $productImage		  = "admin/female products/".$productId.".jpg";
          $productCategories = $row["product_categories"];
          $imageTag     = $row['imagetag'];
          $productUrl		= "viewFemaleProduct.php?productid=".$productId;	
          $pagename = $_SERVER['PHP_SELF'];
          $pagename = explode("/", $pagename);
          $pagename = $pagename[count($pagename) - 1];	
          
           $numRow = mysqli_num_rows($result);
           if($numRow > 0){
               echo "<div class='product product__product-grid-item col-sm-3'>
                 <div class='product_image-wrap'>";
                   
                 if($imageTag == 'F'){
                  echo "<a href='".$productUrl."' class='product-grid-image'>";
                    echo '<img src="asset/images/no-product.jfif  " alt="Black Slim Tapered Fit Track Pants" style = "height: 250px">
              
                  </a>';
                }else{
                  echo "<a href='".$productUrl."' class='product-grid-image'>";
                      echo "<img src='".$productImage."' style = 'height: 250px'>
                    </a>";
                }  
                     
                 echo "</div>
                     <div class='product_title-wrap' style = 'margin-top:20px; text-align:center'>
                       <a class='product_title' style ='font-size:20px;color:black;'>
                         $productName 	
                       </a>
                     
                     </div>
            
                   <div class='product_price' style = 'margin-top:5px; text-align:center'>
                   <span class='money' style = 'font-size:19px;color:red;font-weight:bold'>
                   <span style = 'font-size:20px'>&#8358;</span>
                   $productPrice
             </span>
           
             </div>
           
               <form action='' method='post' enctype='multipart/form-data' class='addToCartForm1'>
                   
                   <input type='hidden' name='id' value='5309057155' class='btn'/>
                   
                   
                   
                   <button type='button' name='$productId~$pagename' id = 'add' class='btn btn-primary addToCart' style= 'background-color:black' onclick= 'addItemCart(this.name)'>
                   <span class='addToCartText'>Add to cart</span>
                 </button>
                   
               </form>
             </div>";
       
             
          }
        }
   
       
   
   
   
     ?>




      <!-----Next image would fall under here---->


      


    </div>

  </div>

  <script>
    function addItemCart(getThisname){  
      // alert(getThisname);
      $.post("addProductToCart.php", 'btnData=' + getThisname).done(function(data){
        var data = $.parseJSON(data);
        // alert(data);
        if(data.status == 1){   
          $("#addToCartMessage").html(data.builder);
          $("#cartQuantity").text(parseInt($("#cartQuantity").text()) + 1);
        }else if(data.status == 0){
          $("#addToCartMessage").html(data.builder);
        }else if(data.status == -1){
          $("#addToCartMessage").html(data.builder);
        }
      });
    }
    onload = getCurrentCartQuantity();

    function getCurrentCartQuantity(){
      $.get('getcartquantitybyuser.php').done(function(data){
        $("#cartQuantity").text(data);
      });
    }
  </script>
  <div class="grid-item pagination-border-top">
    <!-- <div class="grid">
      <div class="grid-item large--four-fifths push--large--one-fifth">
          <div class="text-center">
         
          </div>
      </div>
    </div> -->
  </div>
  

</div>



   
    
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
<footer id="footer" style = "background-color:black; padding-bottom:40px;height:190px">
 
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
              <a href="#"><img alt="offer banner2" src="images/offer-banner2.jpg"></a></div>
      
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
<script src="asset/images/jquery.currencies.min338e.js?v=148731906405125217661438064336" type="text/javascript"></script>

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
  <script src="asset/images/shope868.js?v=169707876251965233051439906388" type="text/javascript"></script>


  
 
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

<!-- Mirrored from inspire-17.myshopify.com/collections/dresses by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 14:21:18 GMT -->
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

