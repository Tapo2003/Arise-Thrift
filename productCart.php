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
  

  
  <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla nec augue east tristique auctor. Donec non est at free vulputate rutrum. Morbi adorn lectus quis justo always pregnant. Tell us anything about me, vulputate adipiscing cursus eu, suscipit id nothing. Donec neque in free. Pellentesque aliquet, sem eg" />
  

  <link rel="canonical" href="artica-nested-table.html" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <style>
    @media screen and (max-width: 560px){
        #orderNow{
          
          margin-left:200px;
         
           
        }
    }
    @media screen and (max-width: 520px){
        #orderNow{
          
          margin-right:400px;
         
           
        }
    }

    @media screen and (max-width: 500px){
        #orderNow{
          
          margin-right:1000px;
         
           
        }
    }
    @media screen and (max-width: 480px){
        #orderNow{
          
          margin-right:4000px;
          position:absolute;
          left:-40px;
          top: 80px;
         
           
        }
    }

    @media screen and (max-width: 380px){
        #orderNow{
          
          margin-right:4000px;
          position:absolute;
          left:-80px;
          top: 100px;
         
           
        }
    }
  </style>
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


 


<meta property="og:image" content="https://cdn.shopify.com/s/files/1/0938/3126/products/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071" />
<meta property="og:image:secure_url" content="https://cdn.shopify.com/s/files/1/0938/3126/products/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071" />
<meta property="og:image:width" content="700" />
<meta property="og:image:height" content="850" />
<?php
    require_once('js_3.php');

  ?>
</head>
<body id="artica-nested-table" class="template-product" >
 
<div id="wrapper">
<!-- Navigation -->  
<header id="header">
 
</div>
<div class = "container-fluid" style = "background-color:#DAA520;padding-top:30px">
  <div class="row mob-header">
    <div class="col-lg-2 col-sm-3 col-md-2 col-xs-12 logo_position">
<!-- logo -->
        
    <h1 style = "font-size: 60px; font-style: italic; font-weight: bold; font-family: georgia,sans-serif; color:white; text-align:center;text-shadow: 2px 2px 4px #000000;">Arise</h1>
  
   
  </div>

    <div class="col-lg-7 col-sm-4 col-md-6 col-xs-12 top_search">   
        
   
   
   </div>   

 <div class="col-lg-3 col-sm-5 col-md-4 col-xs-12"> 
   
   
   <div class="tile_cart trs_bg">
        <a href="productCart.php">
            <i class="fa fa-shopping-cart"></i>
            <?php
               require_once("admin/dbconn.php");
               $sql 	= "SELECT * FROM product_cart";
               $result = mysqli_query($connection,$sql) or die(mysql_error());	
               $record_count = mysqli_num_rows($result);
            ?>
            
            <strong style = "color:black">my Cart</strong>
            <span class="cart-total-items" style = "color:black"><span id="cartQuantity" class="count">0</span> </span>
          
        </a>
    </div>

   
  </div>
 </div>

</div>
</header>

<script>
  $(window).scroll(function() {
if ($(this).scrollTop() > 1){  
$('#navigation').addClass("sticky");
}
else{
$('#navigation').removeClass("sticky");
}
});

</script>

<script>
  $(window).scroll(function() {
if ($(this).scrollTop() > 1){  
$('.tile_cart.trs_bg').addClass("sticky");
}
else{
$('.tile_cart.trs_bg').removeClass("sticky");
}
});
</script>  

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

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
    <?php
        require_once("admin/dbconn.php");
       

        // if(isset($_POST['add'])){

        //   $productQuantity = $_POST['quantity'];
        //   $sql 	= "SELECT * FROM product_cart WHERE product_name ='$productName'";
        //   $result = mysqli_query($connection,$sql) or die(mysql_error());	
        //   $recordNum = mysqli_num_rows($result);

        //   if (mysqli_num_rows($result) == 0){
        //     $sql = "INSERT INTO product_cart(product_cart_id, product_name, product_price, product_description, brand_name,productCategories,product_image,product_quantity) 
        //     VALUES(Null, '$productName', '$productPrice','$productDescription','$brandName','$productCategories','$productImage','$productQuantity')";
        //         $result = mysqli_query($connection, $sql);
        //         if($result == true){
        //           echo '<div class="container" style = "margin-top:20px">
        //                 <div class="alert alert-success alert-dismissible" style = "text-align:center">
        //                   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        //                   <strong>Record</strong> Inserted Successfully.
        //                 </div>
        //               </div>';
        //         }else{
        //           echo '<div class="container" style = "margin-top:20px">
        //               <div class="alert alert-danger alert-dismissible" style = "text-align:center">
        //                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        //                 <strong>Error</strong>Inserting record.
        //               </div>
        //             </div>';
        //         }
        //   }else{
        //     echo '<div class="container" style = "margin-top:20px">
        //     <div class="alert alert-danger alert-dismissible" style = "text-align:center">
        //       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        //       <strong>Record</strong> Exist in cart already.
        //     </div>
        //   </div>';
        //   }


        // }
        
    ?>        
          
   
<!-- main content -->
  
    
    <div class="breadcrumbs">   
        

 
 </div>
    
    
  

  
<div id="main" class="container" role="main">

 

    <div class="row"> 
<!-- center column -->
    <div id="main_content" class="col-main col-sm-12">
      <!-- collection-header --> 
  
       
    <div itemscope itemtype="http://schema.org/Product" class="product-scope">
  
  <meta itemprop="url" content="https://inspire-17.myshopify.com/products/artica-nested-table" />
  <meta itemprop="image" content="asset/images/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39_grande.jpeg?v=1438074071" />
<h1 style = "font-size: 50px; font-style: italic; font-weight: bold; font-family: georgia,sans-serif; color:black; text-align:center;text-shadow: 2px 2px 4px white; padding-bottom:30px">Product Cart</h1><hr><h2> 





<?php 
  require_once("admin/dbconn.php");
  $productUniqueId = $_SESSION['useruniquenumber'];
  $sql = "SELECT * FROM product_cart WHERE product_cart_user_order_status = 'F' AND product_cart_user_unique_id = '$productUniqueId' ORDER BY product_cart_id	 DESC";
  $result = mysqli_query($connection,$sql) or die(mysql_error());
  $recordCount = mysqli_num_rows($result);
  if($recordCount > 0){
      echo '<a class="blog-article_read-more btn btn-info" href="order-table.php" style = "border-radius:20px; margin-bottom:20px; padding: 7px 20px 7px 20px;font-size: 15px; border: solid black 1px";text-align:center;" id = "orderNow">Order Now</a><br>';
      $price_total  = 0;    
      while($row = mysqli_fetch_array($result)){
        $product_cart_id                = $row["product_cart_id"];
        $product_male_id	 		          = $row["product_male_id"];
        $product_female_id	 	          = $row["product_female_id"];
        $product_name		                = $row["product_name"];
        $product_price	                = $row["product_price"];
        $product_description	          = $row["product_description"];
        $brand_name	                    = $row["brand_name"];
        $productCategories	            = $row["productCategories"];
        $product_image	                = $row["product_image"];
        $product_quantity	              = $row["product_quantity"];
        $product_user_unique_id	        = $row["product_cart_user_unique_id"];
        $product_user_status	          = $row["product_cart_user_order_status"];
        $product_cart_timestamp	        = $row["product_cart_timestamp"];
        $total_price                    = ($product_price *  $product_quantity);
        $totalAmount                    =   number_format($total_price);
        
        number_format($price_total += $total_price);
    
    
        echo  "<div class='product_wrap' style ='border-bottom:solid 1px black;border-top:solid 1px black; padding-top: 30px'>
                <div class='row'>
                  <div data-id='1844346307' class='product-1844346307 product-item'>
                      <div class='col-sm-4 col-lg-4 product-image'>
                        <div class='large-image'>      
                              <img src='".$product_image."' alt='Artica Nested Table'  id='product-featured-image' style = 'height:150px;width:150px'/></a>
                        </div>
                      </div>
                      <div class='col-lg-7 col-sm-6'>
                        <h1 itemprop='name' class='product_title page_title'>$product_name</h1>
                        <form action='' method='post' class='addToCartForm product-actions-1844346307'>
                          <div class='options clearfix'> 
                            <p style= 'font-size:20px'>Brand: <span style = 'color:blue; text-transform: capitalize'> $brand_name</span></p>
                              <div id='product_price'><p class='price product-price' style = 'color:black' name = 'productprice' id ='productprice_$product_cart_id'>&#8358;$totalAmount</p></div> 
                                <div id='purchase'> 
                                <label for='quantity'>Quantity: </label>
                                <input type='number' id='quantity_$product_cart_id' name='quantity' value='$product_quantity' style = 'width:50px;height: 30px;'>
    
                                <input type='hidden' id='productstatus' name='productstatus' value='$product_user_status' >
    
                              
                                <button type='button' class='btn btn-info'  name='$product_cart_id' onclick = 'updateQuantity(this.name)' style = 'background-color:black;color:white;border-radius:20px'>Update</button>
    
                                <button type='button' class='btn btn-info'  name='$product_cart_id' onclick = 'deleteQuantity(this.name)' style = 'background-color:red;color:white;border-radius:20px'>Delete</button>
                              </div> 
                          </div>
                        </form>
                      <div class='bottom_block'>
                    </div>
                    </div>            
                    </div>
                    </div>
                    <div class='pro-tabs'>
                </div>
              </div>";
                
      }
      $subTotal =  number_format($price_total);
      // echo "<h1>$subTotal</h1>";
      echo "<h2 style = 'text-align:center;font-size:20px;margin-top:10px;font-style: italic;'>(Subtotal:&#8358;  $subTotal)</h2>";
  }else{
    echo "<div class='col-sm-4 col-lg-4 product-image'>
      <div class='large-image'>      
            <img src='asset/images/no-product.jfif' alt='Artica Nested Table'  id='product-featured-image' style = 'height:220px;width:400px'/></a>
            <h2 style = 'text-align:center;font-style:italic;'>No product in cart</h2>
      </div>
    </div>";
  }
 
?>

<!-- <span style = 'font-size:20px'>&#8358;</span>  -->



<!--- product would start from here --->

</div>
</div>


<script>
  function refreshPage() {
    location.reload(true);
  }

  function updateQuantity(getCartID){
    
    var productCartID = "#quantity_" + getCartID;
  
    var productQuantity = $(productCartID).val();
    var number = 30000;
    

    var passdata = 'productCartID=' + getCartID + "&productQuantity=" + productQuantity;

    $.post("updateProductQuantity.php", passdata).done(function(data){
  
      var productPrice = data;
      if(productPrice != -2 || productPrice != -1){
        $("#productprice_" + getCartID).html("&#8358;" + parseInt(productPrice) * productQuantity);
        alert("Product updated !");
        refreshPage();
      }else if(productPrice == -2){
        alert("product can't be updated !");
      }else{aa
        alert("Record does not exist");
      }
    });
  }


  function deleteQuantity(getCartId){
    var getCartId = "CartId=" + getCartId;
    var feedback  = confirm("Are you sure you want to delete product");
    if(feedback == true){
      $.post("DeleteProductQuantity.php",getCartId).done(function(data){

        if(data == 2){
          alert('Product deleted successfully');
          refreshPage();
          $("#cartQuantity").text(parseInt($("#cartQuantity").text()) - 1);
        }else if(data == -2){
          alert('Product was unable to be deleted');
        }else{
          alert('Record does not exist');
        }
      });
    }
   
  }


  onload = getCurrentCartQuantity();

    function getCurrentCartQuantity(){
      $.get('getcartquantitybyuser.php').done(function(data){
        $("#cartQuantity").text(data);
      });
    }


</script>
<script>
  jQuery(".button").on("click", function() {
    var oldValue = jQuery("#quantity").val(),
        newVal = 1;

    if (jQuery(this).text() == "+") {
        newVal = parseInt(oldValue) + 1;
      } else if (oldValue > 1) {
        newVal = parseInt(oldValue) - 1;
    }
    
    jQuery("#quantity").val(newVal);
    
  });
</script>
        

  

     



<script type="text/javascript">
//<![CDATA[
 jQuery(document).ready(function(cash) {
  jQuery("#related-slider .slider-items").owlCarousel({
   items : 4, //10 items above 1000px browser width
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

<script src="asset/js/cloud-zoom1cf7.js?v=89117528290539160361449141650" type="text/javascript"></script>





<script>
  $(document).ready(function() {
    $('ul.tabs').each(function(){
      var active, content, links = $(this).find('a');
      active = links.first().addClass('active');
      content = $(active.attr('href'));
      links.not(':first').each(function () {
        $($(this).attr('href')).hide();
      });
      $(this).find('a').click(function(e){
        active.removeClass('active');
        content.hide();
        active = $(this);
        content = $($(this).attr('href'));
        active.addClass('active');
        content.show();
        return false;
      });
    });
  });
</script>


  <script>
    var selectCallback = function(variant, selector) {
      
      // BEGIN SWATCHES
if (variant) {
  var form = jQuery('#' + selector.domIdPrefix).closest('form');
  for (var i=0,length=variant.options.length; i<length; i++) {
    var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] +'"]');
    if (radioButton.size()) {
      radioButton.get(0).checked = true;
    }
  }
}
// END SWATCHES
      
      if (variant && variant.available) {
        // selected a valid variant
        $('#add-to-cart').removeClass('disabled').removeAttr('disabled'); // remove unavailable class from add-to-cart button, and re-enable button
        if(variant.compare_at_price == null){
          $('#product_price .price').html('<span class="money"><strong>'+Shopify.formatMoney(variant.price, "$ {{amount}} USD")+'</strong></span>');
                                                                                             
                                                                                             
        } else {
                                                                                             
          $('#product_price .price').html('<span class="money"><strong>'+Shopify.formatMoney(variant.price, "$ {{amount}} USD") + '</strong></span> <span class="money compare_at_price">(was <del>' + Shopify.formatMoney(variant.compare_at_price, "$ {{amount}} USD") + '</del>)</span>');
        }
      } else {
        $('#add-to-cart').addClass('disabled').attr('disabled', 'disabled'); // set add-to-cart button to unavailable class and disable button
        var message = variant ? "Sold Out" : "Unavailable";
        $('#product_price .price').text(message); // update price-field message
      }
    };

    // initialize multi selector for product
    $(function() {
      new Shopify.OptionSelectors("product-select", { product: {"id":1844346307,"title":"Artica Nested Table","handle":"artica-nested-table","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla nec augue east tristique auctor. Donec non est at free vulputate rutrum. Morbi adorn lectus quis justo always pregnant. Tell us anything about me, vulputate adipiscing cursus eu, suscipit id nothing. Donec neque in free. Pellentesque aliquet, sem eget laoreet ultrices, metus ipsum feugiat sem, quis turpis eros fermentum eget velit. Donec ac tempus ante. Fusce ultricies mass mass. Fusce aliquam, eget purus sagittis vulputate, free sapien hendrerit est, sed homelike augue nisi not neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit quis hate me. Cras neque metus, consequat et et blandit, luctus a nunc.\u003cbr\u003e\u003cbr\u003eSample Unordered List\u003cbr\u003e\u003cbr\u003eComodous in tempor ullamcorper miaculis\u003cbr\u003ePellentesque vitae mollis neque urn mattis laoreet.\u003cbr\u003eDivamus purus sit amet justo.\u003cbr\u003eProin harassment egestas jars suscipit ac risus posuere loremous\u003cbr\u003eSample Ordered List\u003cbr\u003e\u003cbr\u003eComodous in tempor ullamcorper miaculis.\u003cbr\u003ePellentesque vitae mollis neque urn mattis laoreet.\u003cbr\u003eDivamus purus sit amet justo.\u003cbr\u003eProin harassment egestas jars suscipit ac risus posuere loremous.\u003cbr\u003eSample Paragraph\u003cbr\u003e\u003cbr\u003eNunc facilisis sagittis ullamcorper. Proin lectus ipsum, et pregnant mattis vulputate, tristique ut lectus. Sed et nunc lorem. Vestibulum ante ipsum primis in faucibus jars luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus nisl ut adipiscing dolor dignissim always. Nothing luctus malesuada tincidunt. Class aptent tacit sociosqu to litora torquent for our conubia for inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat at felis. Suspendisse pretium aliquet urn eros convallis interdum.","published_at":"2015-07-28T01:38:00-04:00","created_at":"2015-07-28T01:38:20-04:00","vendor":"Shopify","type":"Furniture","tags":["Furniture","Shelf","size"],"price":9999,"price_min":9999,"price_max":9999,"available":true,"price_varies":false,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":5308984131,"title":"S \/ Grey","option1":"S","option2":"Grey","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760195,"product_id":1844346307,"position":1,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071","variant_ids":[5308984131,5308984387,5308984643]},"available":true,"name":"Artica Nested Table - S \/ Grey","public_title":"S \/ Grey","options":["S","Grey"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416878681,"position":1,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984195,"title":"S \/ Black","option1":"S","option2":"Black","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760259,"product_id":1844346307,"position":2,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071","variant_ids":[5308984195,5308984451,5308984835]},"available":true,"name":"Artica Nested Table - S \/ Black","public_title":"S \/ Black","options":["S","Black"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416911449,"position":2,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984259,"title":"S \/ Blue","option1":"S","option2":"Blue","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760323,"product_id":1844346307,"position":3,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product8_097ffbae-2a21-48b9-8c96-273fa6c42ee8.jpeg?v=1438074071","variant_ids":[5308984259,5308984515]},"available":true,"name":"Artica Nested Table - S \/ Blue","public_title":"S \/ Blue","options":["S","Blue"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416944217,"position":3,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product8_097ffbae-2a21-48b9-8c96-273fa6c42ee8.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984323,"title":"S \/ Yellow","option1":"S","option2":"Yellow","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760387,"product_id":1844346307,"position":4,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product9_a28fc777-dfd6-459f-95db-c675066bcc02.jpeg?v=1438074071","variant_ids":[5308984323,5308984579]},"available":true,"name":"Artica Nested Table - S \/ Yellow","public_title":"S \/ Yellow","options":["S","Yellow"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416976985,"position":4,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product9_a28fc777-dfd6-459f-95db-c675066bcc02.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984387,"title":"M \/ Grey","option1":"M","option2":"Grey","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760195,"product_id":1844346307,"position":1,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071","variant_ids":[5308984131,5308984387,5308984643]},"available":true,"name":"Artica Nested Table - M \/ Grey","public_title":"M \/ Grey","options":["M","Grey"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416878681,"position":1,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984451,"title":"M \/ Black","option1":"M","option2":"Black","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760259,"product_id":1844346307,"position":2,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071","variant_ids":[5308984195,5308984451,5308984835]},"available":true,"name":"Artica Nested Table - M \/ Black","public_title":"M \/ Black","options":["M","Black"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416911449,"position":2,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984515,"title":"M \/ Blue","option1":"M","option2":"Blue","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760323,"product_id":1844346307,"position":3,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product8_097ffbae-2a21-48b9-8c96-273fa6c42ee8.jpeg?v=1438074071","variant_ids":[5308984259,5308984515]},"available":true,"name":"Artica Nested Table - M \/ Blue","public_title":"M \/ Blue","options":["M","Blue"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416944217,"position":3,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product8_097ffbae-2a21-48b9-8c96-273fa6c42ee8.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984579,"title":"M \/ Yellow","option1":"M","option2":"Yellow","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760387,"product_id":1844346307,"position":4,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product9_a28fc777-dfd6-459f-95db-c675066bcc02.jpeg?v=1438074071","variant_ids":[5308984323,5308984579]},"available":true,"name":"Artica Nested Table - M \/ Yellow","public_title":"M \/ Yellow","options":["M","Yellow"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416976985,"position":4,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product9_a28fc777-dfd6-459f-95db-c675066bcc02.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984643,"title":"L \/ Grey","option1":"L","option2":"Grey","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760195,"product_id":1844346307,"position":1,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071","variant_ids":[5308984131,5308984387,5308984643]},"available":true,"name":"Artica Nested Table - L \/ Grey","public_title":"L \/ Grey","options":["L","Grey"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416878681,"position":1,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984707,"title":"L \/ Black","option1":"L","option2":"Black","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760579,"product_id":1844346307,"position":7,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product12_ec047f81-1869-4a94-9258-cd55c89e1319.jpeg?v=1438074071","variant_ids":[5308984707]},"available":true,"name":"Artica Nested Table - L \/ Black","public_title":"L \/ Black","options":["L","Black"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24417075289,"position":7,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product12_ec047f81-1869-4a94-9258-cd55c89e1319.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984771,"title":"L \/ Blue","option1":"L","option2":"Blue","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760515,"product_id":1844346307,"position":6,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product11_cc5ff262-5c2f-456e-bb83-2bbd5427dd76.jpeg?v=1438074071","variant_ids":[5308984771]},"available":true,"name":"Artica Nested Table - L \/ Blue","public_title":"L \/ Blue","options":["L","Blue"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24417042521,"position":6,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product11_cc5ff262-5c2f-456e-bb83-2bbd5427dd76.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984835,"title":"L \/ Yellow","option1":"L","option2":"Yellow","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760259,"product_id":1844346307,"position":2,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071","variant_ids":[5308984195,5308984451,5308984835]},"available":true,"name":"Artica Nested Table - L \/ Yellow","public_title":"L \/ Yellow","options":["L","Yellow"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416911449,"position":2,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}}],"images":["\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071","#\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071","#\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product8_097ffbae-2a21-48b9-8c96-273fa6c42ee8.jpeg?v=1438074071","#\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product9_a28fc777-dfd6-459f-95db-c675066bcc02.jpeg?v=1438074071","#\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product10_945fced1-8b6b-4069-9363-2fcba561ea77.jpeg?v=1438074071","#\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product11_cc5ff262-5c2f-456e-bb83-2bbd5427dd76.jpeg?v=1438074071","\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product12_ec047f81-1869-4a94-9258-cd55c89e1319.jpeg?v=1438074071"],"featured_image":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071","options":["Size","Color"],"media":[{"alt":null,"id":24416878681,"position":1,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071"},"aspect_ratio":0.824,"height":850,"media_type":"image","src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071","width":700},{"alt":null,"id":24416911449,"position":2,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071"},"aspect_ratio":0.824,"height":850,"media_type":"image","src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071","width":700},{"alt":null,"id":24416944217,"position":3,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product8_097ffbae-2a21-48b9-8c96-273fa6c42ee8.jpeg?v=1438074071"},"aspect_ratio":0.824,"height":850,"media_type":"image","src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product8_097ffbae-2a21-48b9-8c96-273fa6c42ee8.jpeg?v=1438074071","width":700},{"alt":null,"id":24416976985,"position":4,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product9_a28fc777-dfd6-459f-95db-c675066bcc02.jpeg?v=1438074071"},"aspect_ratio":0.824,"height":850,"media_type":"image","src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product9_a28fc777-dfd6-459f-95db-c675066bcc02.jpeg?v=1438074071","width":700},{"alt":null,"id":24417009753,"position":5,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product10_945fced1-8b6b-4069-9363-2fcba561ea77.jpeg?v=1438074071"},"aspect_ratio":0.824,"height":850,"media_type":"image","src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product10_945fced1-8b6b-4069-9363-2fcba561ea77.jpeg?v=1438074071","width":700},{"alt":null,"id":24417042521,"position":6,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product11_cc5ff262-5c2f-456e-bb83-2bbd5427dd76.jpeg?v=1438074071"},"aspect_ratio":0.824,"height":850,"media_type":"image","src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product11_cc5ff262-5c2f-456e-bb83-2bbd5427dd76.jpeg?v=1438074071","width":700},{"alt":null,"id":24417075289,"position":7,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product12_ec047f81-1869-4a94-9258-cd55c89e1319.jpeg?v=1438074071"},"aspect_ratio":0.824,"height":850,"media_type":"image","src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product12_ec047f81-1869-4a94-9258-cd55c89e1319.jpeg?v=1438074071","width":700}],"requires_selling_plan":false,"selling_plan_groups":[],"content":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla nec augue east tristique auctor. Donec non est at free vulputate rutrum. Morbi adorn lectus quis justo always pregnant. Tell us anything about me, vulputate adipiscing cursus eu, suscipit id nothing. Donec neque in free. Pellentesque aliquet, sem eget laoreet ultrices, metus ipsum feugiat sem, quis turpis eros fermentum eget velit. Donec ac tempus ante. Fusce ultricies mass mass. Fusce aliquam, eget purus sagittis vulputate, free sapien hendrerit est, sed homelike augue nisi not neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit quis hate me. Cras neque metus, consequat et et blandit, luctus a nunc.\u003cbr\u003e\u003cbr\u003eSample Unordered List\u003cbr\u003e\u003cbr\u003eComodous in tempor ullamcorper miaculis\u003cbr\u003ePellentesque vitae mollis neque urn mattis laoreet.\u003cbr\u003eDivamus purus sit amet justo.\u003cbr\u003eProin harassment egestas jars suscipit ac risus posuere loremous\u003cbr\u003eSample Ordered List\u003cbr\u003e\u003cbr\u003eComodous in tempor ullamcorper miaculis.\u003cbr\u003ePellentesque vitae mollis neque urn mattis laoreet.\u003cbr\u003eDivamus purus sit amet justo.\u003cbr\u003eProin harassment egestas jars suscipit ac risus posuere loremous.\u003cbr\u003eSample Paragraph\u003cbr\u003e\u003cbr\u003eNunc facilisis sagittis ullamcorper. Proin lectus ipsum, et pregnant mattis vulputate, tristique ut lectus. Sed et nunc lorem. Vestibulum ante ipsum primis in faucibus jars luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus nisl ut adipiscing dolor dignissim always. Nothing luctus malesuada tincidunt. Class aptent tacit sociosqu to litora torquent for our conubia for inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat at felis. Suspendisse pretium aliquet urn eros convallis interdum."}, onVariantSelected: selectCallback });
      
      // Add label if only one product option and it isn't 'Title'.
      
  
      // Auto-select first available variant on page load.
      
      
        
          
          
            $('.single-option-selector:eq(0)').val("S").trigger('change');
          
            $('.single-option-selector:eq(1)').val("Grey").trigger('change');
          
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
      
    });
  </script>
  





<script>
(function($) { 
  var variantImages = {},
    thumbnails,
    variant,
    variantImage,
    optionValue;
    
       variant = {"id":5308984131,"title":"S \/ Grey","option1":"S","option2":"Grey","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760195,"product_id":1844346307,"position":1,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071","variant_ids":[5308984131,5308984387,5308984643]},"available":true,"name":"Artica Nested Table - S \/ Grey","public_title":"S \/ Grey","options":["S","Grey"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416878681,"position":1,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}};
       if ( typeof variant.featured_image !== 'undefined' && variant.featured_image !== null ) {
         variantImage =  variant.featured_image.src.split('?')[0].replace(/http(s)?:/,'');
         variantImages[variantImage] = variantImages[variantImage] || {};
         
           
           
           if (typeof variantImages[variantImage]["option-0"] === 'undefined') {
             variantImages[variantImage]["option-0"] = "S";
           }
           else {
             var oldValue = variantImages[variantImage]["option-0"];
             if ( oldValue !== null && oldValue !== "S" )  {
               variantImages[variantImage]["option-0"] = null;
             }
           }
         
           
           
           if (typeof variantImages[variantImage]["option-1"] === 'undefined') {
             variantImages[variantImage]["option-1"] = "Grey";
           }
           else {
             var oldValue = variantImages[variantImage]["option-1"];
             if ( oldValue !== null && oldValue !== "Grey" )  {
               variantImages[variantImage]["option-1"] = null;
             }
           }
         
       }
    
       variant = {"id":5308984195,"title":"S \/ Black","option1":"S","option2":"Black","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760259,"product_id":1844346307,"position":2,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071","variant_ids":[5308984195,5308984451,5308984835]},"available":true,"name":"Artica Nested Table - S \/ Black","public_title":"S \/ Black","options":["S","Black"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416911449,"position":2,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}};
       if ( typeof variant.featured_image !== 'undefined' && variant.featured_image !== null ) {
         variantImage =  variant.featured_image.src.split('?')[0].replace(/http(s)?:/,'');
         variantImages[variantImage] = variantImages[variantImage] || {};
         
           
           
           if (typeof variantImages[variantImage]["option-0"] === 'undefined') {
             variantImages[variantImage]["option-0"] = "S";
           }
           else {
             var oldValue = variantImages[variantImage]["option-0"];
             if ( oldValue !== null && oldValue !== "S" )  {
               variantImages[variantImage]["option-0"] = null;
             }
           }
         
           
           
           if (typeof variantImages[variantImage]["option-1"] === 'undefined') {
             variantImages[variantImage]["option-1"] = "Black";
           }
           else {
             var oldValue = variantImages[variantImage]["option-1"];
             if ( oldValue !== null && oldValue !== "Black" )  {
               variantImages[variantImage]["option-1"] = null;
             }
           }
         
       }
    
       variant = {"id":5308984259,"title":"S \/ Blue","option1":"S","option2":"Blue","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760323,"product_id":1844346307,"position":3,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product8_097ffbae-2a21-48b9-8c96-273fa6c42ee8.jpeg?v=1438074071","variant_ids":[5308984259,5308984515]},"available":true,"name":"Artica Nested Table - S \/ Blue","public_title":"S \/ Blue","options":["S","Blue"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416944217,"position":3,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product8_097ffbae-2a21-48b9-8c96-273fa6c42ee8.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}};
       if ( typeof variant.featured_image !== 'undefined' && variant.featured_image !== null ) {
         variantImage =  variant.featured_image.src.split('?')[0].replace(/http(s)?:/,'');
         variantImages[variantImage] = variantImages[variantImage] || {};
         
           
           
           if (typeof variantImages[variantImage]["option-0"] === 'undefined') {
             variantImages[variantImage]["option-0"] = "S";
           }
           else {
             var oldValue = variantImages[variantImage]["option-0"];
             if ( oldValue !== null && oldValue !== "S" )  {
               variantImages[variantImage]["option-0"] = null;
             }
           }
         
           
           
           if (typeof variantImages[variantImage]["option-1"] === 'undefined') {
             variantImages[variantImage]["option-1"] = "Blue";
           }
           else {
             var oldValue = variantImages[variantImage]["option-1"];
             if ( oldValue !== null && oldValue !== "Blue" )  {
               variantImages[variantImage]["option-1"] = null;
             }
           }
         
       }
    
       variant = {"id":5308984323,"title":"S \/ Yellow","option1":"S","option2":"Yellow","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760387,"product_id":1844346307,"position":4,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product9_a28fc777-dfd6-459f-95db-c675066bcc02.jpeg?v=1438074071","variant_ids":[5308984323,5308984579]},"available":true,"name":"Artica Nested Table - S \/ Yellow","public_title":"S \/ Yellow","options":["S","Yellow"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416976985,"position":4,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product9_a28fc777-dfd6-459f-95db-c675066bcc02.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}};
       if ( typeof variant.featured_image !== 'undefined' && variant.featured_image !== null ) {
         variantImage =  variant.featured_image.src.split('?')[0].replace(/http(s)?:/,'');
         variantImages[variantImage] = variantImages[variantImage] || {};
         
           
           
           if (typeof variantImages[variantImage]["option-0"] === 'undefined') {
             variantImages[variantImage]["option-0"] = "S";
           }
           else {
             var oldValue = variantImages[variantImage]["option-0"];
             if ( oldValue !== null && oldValue !== "S" )  {
               variantImages[variantImage]["option-0"] = null;
             }
           }
         
           
           
           if (typeof variantImages[variantImage]["option-1"] === 'undefined') {
             variantImages[variantImage]["option-1"] = "Yellow";
           }
           else {
             var oldValue = variantImages[variantImage]["option-1"];
             if ( oldValue !== null && oldValue !== "Yellow" )  {
               variantImages[variantImage]["option-1"] = null;
             }
           }
         
       }
    
       variant = {"id":5308984387,"title":"M \/ Grey","option1":"M","option2":"Grey","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760195,"product_id":1844346307,"position":1,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071","variant_ids":[5308984131,5308984387,5308984643]},"available":true,"name":"Artica Nested Table - M \/ Grey","public_title":"M \/ Grey","options":["M","Grey"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416878681,"position":1,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}};
       if ( typeof variant.featured_image !== 'undefined' && variant.featured_image !== null ) {
         variantImage =  variant.featured_image.src.split('?')[0].replace(/http(s)?:/,'');
         variantImages[variantImage] = variantImages[variantImage] || {};
         
           
           
           if (typeof variantImages[variantImage]["option-0"] === 'undefined') {
             variantImages[variantImage]["option-0"] = "M";
           }
           else {
             var oldValue = variantImages[variantImage]["option-0"];
             if ( oldValue !== null && oldValue !== "M" )  {
               variantImages[variantImage]["option-0"] = null;
             }
           }
         
           
           
           if (typeof variantImages[variantImage]["option-1"] === 'undefined') {
             variantImages[variantImage]["option-1"] = "Grey";
           }
           else {
             var oldValue = variantImages[variantImage]["option-1"];
             if ( oldValue !== null && oldValue !== "Grey" )  {
               variantImages[variantImage]["option-1"] = null;
             }
           }
         
       }
    
       variant = {"id":5308984451,"title":"M \/ Black","option1":"M","option2":"Black","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760259,"product_id":1844346307,"position":2,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071","variant_ids":[5308984195,5308984451,5308984835]},"available":true,"name":"Artica Nested Table - M \/ Black","public_title":"M \/ Black","options":["M","Black"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416911449,"position":2,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}};
       if ( typeof variant.featured_image !== 'undefined' && variant.featured_image !== null ) {
         variantImage =  variant.featured_image.src.split('?')[0].replace(/http(s)?:/,'');
         variantImages[variantImage] = variantImages[variantImage] || {};
         
           
           
           if (typeof variantImages[variantImage]["option-0"] === 'undefined') {
             variantImages[variantImage]["option-0"] = "M";
           }
           else {
             var oldValue = variantImages[variantImage]["option-0"];
             if ( oldValue !== null && oldValue !== "M" )  {
               variantImages[variantImage]["option-0"] = null;
             }
           }
         
           
           
           if (typeof variantImages[variantImage]["option-1"] === 'undefined') {
             variantImages[variantImage]["option-1"] = "Black";
           }
           else {
             var oldValue = variantImages[variantImage]["option-1"];
             if ( oldValue !== null && oldValue !== "Black" )  {
               variantImages[variantImage]["option-1"] = null;
             }
           }
         
       }
    
       variant = {"id":5308984515,"title":"M \/ Blue","option1":"M","option2":"Blue","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760323,"product_id":1844346307,"position":3,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product8_097ffbae-2a21-48b9-8c96-273fa6c42ee8.jpeg?v=1438074071","variant_ids":[5308984259,5308984515]},"available":true,"name":"Artica Nested Table - M \/ Blue","public_title":"M \/ Blue","options":["M","Blue"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416944217,"position":3,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product8_097ffbae-2a21-48b9-8c96-273fa6c42ee8.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}};
       if ( typeof variant.featured_image !== 'undefined' && variant.featured_image !== null ) {
         variantImage =  variant.featured_image.src.split('?')[0].replace(/http(s)?:/,'');
         variantImages[variantImage] = variantImages[variantImage] || {};
         
           
           
           if (typeof variantImages[variantImage]["option-0"] === 'undefined') {
             variantImages[variantImage]["option-0"] = "M";
           }
           else {
             var oldValue = variantImages[variantImage]["option-0"];
             if ( oldValue !== null && oldValue !== "M" )  {
               variantImages[variantImage]["option-0"] = null;
             }
           }
         
           
           
           if (typeof variantImages[variantImage]["option-1"] === 'undefined') {
             variantImages[variantImage]["option-1"] = "Blue";
           }
           else {
             var oldValue = variantImages[variantImage]["option-1"];
             if ( oldValue !== null && oldValue !== "Blue" )  {
               variantImages[variantImage]["option-1"] = null;
             }
           }
         
       }
    
       variant = {"id":5308984579,"title":"M \/ Yellow","option1":"M","option2":"Yellow","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760387,"product_id":1844346307,"position":4,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product9_a28fc777-dfd6-459f-95db-c675066bcc02.jpeg?v=1438074071","variant_ids":[5308984323,5308984579]},"available":true,"name":"Artica Nested Table - M \/ Yellow","public_title":"M \/ Yellow","options":["M","Yellow"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416976985,"position":4,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product9_a28fc777-dfd6-459f-95db-c675066bcc02.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}};
       if ( typeof variant.featured_image !== 'undefined' && variant.featured_image !== null ) {
         variantImage =  variant.featured_image.src.split('?')[0].replace(/http(s)?:/,'');
         variantImages[variantImage] = variantImages[variantImage] || {};
         
           
           
           if (typeof variantImages[variantImage]["option-0"] === 'undefined') {
             variantImages[variantImage]["option-0"] = "M";
           }
           else {
             var oldValue = variantImages[variantImage]["option-0"];
             if ( oldValue !== null && oldValue !== "M" )  {
               variantImages[variantImage]["option-0"] = null;
             }
           }
         
           
           
           if (typeof variantImages[variantImage]["option-1"] === 'undefined') {
             variantImages[variantImage]["option-1"] = "Yellow";
           }
           else {
             var oldValue = variantImages[variantImage]["option-1"];
             if ( oldValue !== null && oldValue !== "Yellow" )  {
               variantImages[variantImage]["option-1"] = null;
             }
           }
         
       }
    
       variant = {"id":5308984643,"title":"L \/ Grey","option1":"L","option2":"Grey","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760195,"product_id":1844346307,"position":1,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071","variant_ids":[5308984131,5308984387,5308984643]},"available":true,"name":"Artica Nested Table - L \/ Grey","public_title":"L \/ Grey","options":["L","Grey"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416878681,"position":1,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}};
       if ( typeof variant.featured_image !== 'undefined' && variant.featured_image !== null ) {
         variantImage =  variant.featured_image.src.split('?')[0].replace(/http(s)?:/,'');
         variantImages[variantImage] = variantImages[variantImage] || {};
         
           
           
           if (typeof variantImages[variantImage]["option-0"] === 'undefined') {
             variantImages[variantImage]["option-0"] = "L";
           }
           else {
             var oldValue = variantImages[variantImage]["option-0"];
             if ( oldValue !== null && oldValue !== "L" )  {
               variantImages[variantImage]["option-0"] = null;
             }
           }
         
           
           
           if (typeof variantImages[variantImage]["option-1"] === 'undefined') {
             variantImages[variantImage]["option-1"] = "Grey";
           }
           else {
             var oldValue = variantImages[variantImage]["option-1"];
             if ( oldValue !== null && oldValue !== "Grey" )  {
               variantImages[variantImage]["option-1"] = null;
             }
           }
         
       }
    
       variant = {"id":5308984707,"title":"L \/ Black","option1":"L","option2":"Black","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760579,"product_id":1844346307,"position":7,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product12_ec047f81-1869-4a94-9258-cd55c89e1319.jpeg?v=1438074071","variant_ids":[5308984707]},"available":true,"name":"Artica Nested Table - L \/ Black","public_title":"L \/ Black","options":["L","Black"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24417075289,"position":7,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product12_ec047f81-1869-4a94-9258-cd55c89e1319.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}};
       if ( typeof variant.featured_image !== 'undefined' && variant.featured_image !== null ) {
         variantImage =  variant.featured_image.src.split('?')[0].replace(/http(s)?:/,'');
         variantImages[variantImage] = variantImages[variantImage] || {};
         
           
           
           if (typeof variantImages[variantImage]["option-0"] === 'undefined') {
             variantImages[variantImage]["option-0"] = "L";
           }
           else {
             var oldValue = variantImages[variantImage]["option-0"];
             if ( oldValue !== null && oldValue !== "L" )  {
               variantImages[variantImage]["option-0"] = null;
             }
           }
         
           
           
           if (typeof variantImages[variantImage]["option-1"] === 'undefined') {
             variantImages[variantImage]["option-1"] = "Black";
           }
           else {
             var oldValue = variantImages[variantImage]["option-1"];
             if ( oldValue !== null && oldValue !== "Black" )  {
               variantImages[variantImage]["option-1"] = null;
             }
           }
         
       }
    
       variant = {"id":5308984771,"title":"L \/ Blue","option1":"L","option2":"Blue","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760515,"product_id":1844346307,"position":6,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product11_cc5ff262-5c2f-456e-bb83-2bbd5427dd76.jpeg?v=1438074071","variant_ids":[5308984771]},"available":true,"name":"Artica Nested Table - L \/ Blue","public_title":"L \/ Blue","options":["L","Blue"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24417042521,"position":6,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product11_cc5ff262-5c2f-456e-bb83-2bbd5427dd76.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}};
       if ( typeof variant.featured_image !== 'undefined' && variant.featured_image !== null ) {
         variantImage =  variant.featured_image.src.split('?')[0].replace(/http(s)?:/,'');
         variantImages[variantImage] = variantImages[variantImage] || {};
         
           
           
           if (typeof variantImages[variantImage]["option-0"] === 'undefined') {
             variantImages[variantImage]["option-0"] = "L";
           }
           else {
             var oldValue = variantImages[variantImage]["option-0"];
             if ( oldValue !== null && oldValue !== "L" )  {
               variantImages[variantImage]["option-0"] = null;
             }
           }
         
           
           
           if (typeof variantImages[variantImage]["option-1"] === 'undefined') {
             variantImages[variantImage]["option-1"] = "Blue";
           }
           else {
             var oldValue = variantImages[variantImage]["option-1"];
             if ( oldValue !== null && oldValue !== "Blue" )  {
               variantImages[variantImage]["option-1"] = null;
             }
           }
         
       }
    
       variant = {"id":5308984835,"title":"L \/ Yellow","option1":"L","option2":"Yellow","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760259,"product_id":1844346307,"position":2,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071","variant_ids":[5308984195,5308984451,5308984835]},"available":true,"name":"Artica Nested Table - L \/ Yellow","public_title":"L \/ Yellow","options":["L","Yellow"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416911449,"position":2,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}};
       if ( typeof variant.featured_image !== 'undefined' && variant.featured_image !== null ) {
         variantImage =  variant.featured_image.src.split('?')[0].replace(/http(s)?:/,'');
         variantImages[variantImage] = variantImages[variantImage] || {};
         
           
           
           if (typeof variantImages[variantImage]["option-0"] === 'undefined') {
             variantImages[variantImage]["option-0"] = "L";
           }
           else {
             var oldValue = variantImages[variantImage]["option-0"];
             if ( oldValue !== null && oldValue !== "L" )  {
               variantImages[variantImage]["option-0"] = null;
             }
           }
         
           
           
           if (typeof variantImages[variantImage]["option-1"] === 'undefined') {
             variantImages[variantImage]["option-1"] = "Yellow";
           }
           else {
             var oldValue = variantImages[variantImage]["option-1"];
             if ( oldValue !== null && oldValue !== "Yellow" )  {
               variantImages[variantImage]["option-1"] = null;
             }
           }
         
       }
    
    $(function() {
      thumbnails = $('img[src*="/products/"]').not(':first');
      if (thumbnails.size()) {
        thumbnails.bind('click', function() {
          var image = $(this).attr('src').split('?')[0].replace(/(_thumb\.)|(_small\.)|(_compact\.)|(_medium\.)|(_large\.)|(_grande\.)/,'.');
          if (typeof variantImages[image] !== 'undefined') {
            
            optionValue = variantImages[image]['option-0'];
            if (optionValue !== null && $('.single-option-selector:eq(0) option').filter(function() { return $(this).text() === optionValue }).length) {
              $('.single-option-selector:eq(0)').val(optionValue).trigger('change');
            }
            
            optionValue = variantImages[image]['option-1'];
            if (optionValue !== null && $('.single-option-selector:eq(1) option').filter(function() { return $(this).text() === optionValue }).length) {
              $('.single-option-selector:eq(1)').val(optionValue).trigger('change');
            }
            
          }
        });
      }
    });
})(jQuery);
</script> 




  <script>
    var selectCallback = function(variant, selector) {
      
      if (variant && variant.available) {
        
        // selected a valid variant
        $('#add-to-cart').removeClass('disabled').removeAttr('disabled'); // remove unavailable class from add-to-cart button, and re-enable button
        if(variant.compare_at_price == null){
          $('#product_price .price').html('<span class="money"><strong>'+Shopify.formatMoney(variant.price, "$ {{amount}} USD")+'</strong></span>');
        } else {
          $('#product_price .price').html('<span class="money"><strong>'+Shopify.formatMoney(variant.price, "$ {{amount}} USD") + '</strong></span> <span class="money compare_at_price">(was <del>' + Shopify.formatMoney(variant.compare_at_price, "$ {{amount}} USD") + '</del>)</span>');
        }
      } else {
        $('#add-to-cart').addClass('disabled').attr('disabled', 'disabled'); // set add-to-cart button to unavailable class and disable button
        var message = variant ? "Sold Out" : "Unavailable";
        $('#product_price .price').text(message); // update price-field message
      }
                                          
         if (variant && variant.featured_image) {
           
        var originalImage = jQuery("#product-featured-image");
        var newImage = variant.featured_image;
        var element = originalImage[0];
        Shopify.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) { 
          jQuery('#more-view-carousel img').each(function() {
            var grandSize = jQuery(this).attr('src');
            grandSize = grandSize.replace('compact','grande');
            if (grandSize == newImageSizedSrc) {
              jQuery(this).parent().trigger('click');              
              return false;
            }
          });
        });        
    }
    };

    // initialize multi selector for product
    $(function() {
      new Shopify.OptionSelectors("product-select", { product: {"id":1844346307,"title":"Artica Nested Table","handle":"artica-nested-table","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla nec augue east tristique auctor. Donec non est at free vulputate rutrum. Morbi adorn lectus quis justo always pregnant. Tell us anything about me, vulputate adipiscing cursus eu, suscipit id nothing. Donec neque in free. Pellentesque aliquet, sem eget laoreet ultrices, metus ipsum feugiat sem, quis turpis eros fermentum eget velit. Donec ac tempus ante. Fusce ultricies mass mass. Fusce aliquam, eget purus sagittis vulputate, free sapien hendrerit est, sed homelike augue nisi not neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit quis hate me. Cras neque metus, consequat et et blandit, luctus a nunc.\u003cbr\u003e\u003cbr\u003eSample Unordered List\u003cbr\u003e\u003cbr\u003eComodous in tempor ullamcorper miaculis\u003cbr\u003ePellentesque vitae mollis neque urn mattis laoreet.\u003cbr\u003eDivamus purus sit amet justo.\u003cbr\u003eProin harassment egestas jars suscipit ac risus posuere loremous\u003cbr\u003eSample Ordered List\u003cbr\u003e\u003cbr\u003eComodous in tempor ullamcorper miaculis.\u003cbr\u003ePellentesque vitae mollis neque urn mattis laoreet.\u003cbr\u003eDivamus purus sit amet justo.\u003cbr\u003eProin harassment egestas jars suscipit ac risus posuere loremous.\u003cbr\u003eSample Paragraph\u003cbr\u003e\u003cbr\u003eNunc facilisis sagittis ullamcorper. Proin lectus ipsum, et pregnant mattis vulputate, tristique ut lectus. Sed et nunc lorem. Vestibulum ante ipsum primis in faucibus jars luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus nisl ut adipiscing dolor dignissim always. Nothing luctus malesuada tincidunt. Class aptent tacit sociosqu to litora torquent for our conubia for inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat at felis. Suspendisse pretium aliquet urn eros convallis interdum.","published_at":"2015-07-28T01:38:00-04:00","created_at":"2015-07-28T01:38:20-04:00","vendor":"Shopify","type":"Furniture","tags":["Furniture","Shelf","size"],"price":9999,"price_min":9999,"price_max":9999,"available":true,"price_varies":false,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":5308984131,"title":"S \/ Grey","option1":"S","option2":"Grey","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760195,"product_id":1844346307,"position":1,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071","variant_ids":[5308984131,5308984387,5308984643]},"available":true,"name":"Artica Nested Table - S \/ Grey","public_title":"S \/ Grey","options":["S","Grey"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416878681,"position":1,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984195,"title":"S \/ Black","option1":"S","option2":"Black","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760259,"product_id":1844346307,"position":2,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071","variant_ids":[5308984195,5308984451,5308984835]},"available":true,"name":"Artica Nested Table - S \/ Black","public_title":"S \/ Black","options":["S","Black"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416911449,"position":2,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984259,"title":"S \/ Blue","option1":"S","option2":"Blue","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760323,"product_id":1844346307,"position":3,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product8_097ffbae-2a21-48b9-8c96-273fa6c42ee8.jpeg?v=1438074071","variant_ids":[5308984259,5308984515]},"available":true,"name":"Artica Nested Table - S \/ Blue","public_title":"S \/ Blue","options":["S","Blue"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416944217,"position":3,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product8_097ffbae-2a21-48b9-8c96-273fa6c42ee8.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984323,"title":"S \/ Yellow","option1":"S","option2":"Yellow","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760387,"product_id":1844346307,"position":4,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product9_a28fc777-dfd6-459f-95db-c675066bcc02.jpeg?v=1438074071","variant_ids":[5308984323,5308984579]},"available":true,"name":"Artica Nested Table - S \/ Yellow","public_title":"S \/ Yellow","options":["S","Yellow"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416976985,"position":4,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product9_a28fc777-dfd6-459f-95db-c675066bcc02.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984387,"title":"M \/ Grey","option1":"M","option2":"Grey","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760195,"product_id":1844346307,"position":1,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071","variant_ids":[5308984131,5308984387,5308984643]},"available":true,"name":"Artica Nested Table - M \/ Grey","public_title":"M \/ Grey","options":["M","Grey"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416878681,"position":1,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984451,"title":"M \/ Black","option1":"M","option2":"Black","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760259,"product_id":1844346307,"position":2,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071","variant_ids":[5308984195,5308984451,5308984835]},"available":true,"name":"Artica Nested Table - M \/ Black","public_title":"M \/ Black","options":["M","Black"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416911449,"position":2,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984515,"title":"M \/ Blue","option1":"M","option2":"Blue","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760323,"product_id":1844346307,"position":3,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product8_097ffbae-2a21-48b9-8c96-273fa6c42ee8.jpeg?v=1438074071","variant_ids":[5308984259,5308984515]},"available":true,"name":"Artica Nested Table - M \/ Blue","public_title":"M \/ Blue","options":["M","Blue"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416944217,"position":3,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product8_097ffbae-2a21-48b9-8c96-273fa6c42ee8.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984579,"title":"M \/ Yellow","option1":"M","option2":"Yellow","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760387,"product_id":1844346307,"position":4,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product9_a28fc777-dfd6-459f-95db-c675066bcc02.jpeg?v=1438074071","variant_ids":[5308984323,5308984579]},"available":true,"name":"Artica Nested Table - M \/ Yellow","public_title":"M \/ Yellow","options":["M","Yellow"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416976985,"position":4,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product9_a28fc777-dfd6-459f-95db-c675066bcc02.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984643,"title":"L \/ Grey","option1":"L","option2":"Grey","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760195,"product_id":1844346307,"position":1,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071","variant_ids":[5308984131,5308984387,5308984643]},"available":true,"name":"Artica Nested Table - L \/ Grey","public_title":"L \/ Grey","options":["L","Grey"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416878681,"position":1,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984707,"title":"L \/ Black","option1":"L","option2":"Black","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760579,"product_id":1844346307,"position":7,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product12_ec047f81-1869-4a94-9258-cd55c89e1319.jpeg?v=1438074071","variant_ids":[5308984707]},"available":true,"name":"Artica Nested Table - L \/ Black","public_title":"L \/ Black","options":["L","Black"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24417075289,"position":7,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product12_ec047f81-1869-4a94-9258-cd55c89e1319.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984771,"title":"L \/ Blue","option1":"L","option2":"Blue","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760515,"product_id":1844346307,"position":6,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product11_cc5ff262-5c2f-456e-bb83-2bbd5427dd76.jpeg?v=1438074071","variant_ids":[5308984771]},"available":true,"name":"Artica Nested Table - L \/ Blue","public_title":"L \/ Blue","options":["L","Blue"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24417042521,"position":6,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product11_cc5ff262-5c2f-456e-bb83-2bbd5427dd76.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}},{"id":5308984835,"title":"L \/ Yellow","option1":"L","option2":"Yellow","option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":{"id":3756760259,"product_id":1844346307,"position":2,"created_at":"2015-07-28T05:01:11-04:00","updated_at":"2015-07-28T05:01:11-04:00","alt":null,"width":700,"height":850,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071","variant_ids":[5308984195,5308984451,5308984835]},"available":true,"name":"Artica Nested Table - L \/ Yellow","public_title":"L \/ Yellow","options":["L","Yellow"],"price":9999,"weight":0,"compare_at_price":null,"inventory_quantity":60,"inventory_management":"shopify","inventory_policy":"deny","barcode":"","featured_media":{"alt":null,"id":24416911449,"position":2,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071"}},"requires_selling_plan":false,"selling_plan_allocations":[],"quantity_rule":{"min":1,"max":null,"increment":1}}],"images":["\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071","#\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071","#\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product8_097ffbae-2a21-48b9-8c96-273fa6c42ee8.jpeg?v=1438074071","#\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product9_a28fc777-dfd6-459f-95db-c675066bcc02.jpeg?v=1438074071","#\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product10_945fced1-8b6b-4069-9363-2fcba561ea77.jpeg?v=1438074071","#\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product11_cc5ff262-5c2f-456e-bb83-2bbd5427dd76.jpeg?v=1438074071","\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product12_ec047f81-1869-4a94-9258-cd55c89e1319.jpeg?v=1438074071"],"featured_image":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071","options":["Size","Color"],"media":[{"alt":null,"id":24416878681,"position":1,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071"},"aspect_ratio":0.824,"height":850,"media_type":"image","src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39.jpeg?v=1438074071","width":700},{"alt":null,"id":24416911449,"position":2,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071"},"aspect_ratio":0.824,"height":850,"media_type":"image","src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product7_25466abb-343e-4995-88b0-4089d289353e.jpeg?v=1438074071","width":700},{"alt":null,"id":24416944217,"position":3,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product8_097ffbae-2a21-48b9-8c96-273fa6c42ee8.jpeg?v=1438074071"},"aspect_ratio":0.824,"height":850,"media_type":"image","src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product8_097ffbae-2a21-48b9-8c96-273fa6c42ee8.jpeg?v=1438074071","width":700},{"alt":null,"id":24416976985,"position":4,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product9_a28fc777-dfd6-459f-95db-c675066bcc02.jpeg?v=1438074071"},"aspect_ratio":0.824,"height":850,"media_type":"image","src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product9_a28fc777-dfd6-459f-95db-c675066bcc02.jpeg?v=1438074071","width":700},{"alt":null,"id":24417009753,"position":5,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product10_945fced1-8b6b-4069-9363-2fcba561ea77.jpeg?v=1438074071"},"aspect_ratio":0.824,"height":850,"media_type":"image","src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product10_945fced1-8b6b-4069-9363-2fcba561ea77.jpeg?v=1438074071","width":700},{"alt":null,"id":24417042521,"position":6,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product11_cc5ff262-5c2f-456e-bb83-2bbd5427dd76.jpeg?v=1438074071"},"aspect_ratio":0.824,"height":850,"media_type":"image","src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product11_cc5ff262-5c2f-456e-bb83-2bbd5427dd76.jpeg?v=1438074071","width":700},{"alt":null,"id":24417075289,"position":7,"preview_image":{"aspect_ratio":0.824,"height":850,"width":700,"src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product12_ec047f81-1869-4a94-9258-cd55c89e1319.jpeg?v=1438074071"},"aspect_ratio":0.824,"height":850,"media_type":"image","src":"\/\/inspire-17.myshopify.com\/cdn\/shop\/products\/product12_ec047f81-1869-4a94-9258-cd55c89e1319.jpeg?v=1438074071","width":700}],"requires_selling_plan":false,"selling_plan_groups":[],"content":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla nec augue east tristique auctor. Donec non est at free vulputate rutrum. Morbi adorn lectus quis justo always pregnant. Tell us anything about me, vulputate adipiscing cursus eu, suscipit id nothing. Donec neque in free. Pellentesque aliquet, sem eget laoreet ultrices, metus ipsum feugiat sem, quis turpis eros fermentum eget velit. Donec ac tempus ante. Fusce ultricies mass mass. Fusce aliquam, eget purus sagittis vulputate, free sapien hendrerit est, sed homelike augue nisi not neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit quis hate me. Cras neque metus, consequat et et blandit, luctus a nunc.\u003cbr\u003e\u003cbr\u003eSample Unordered List\u003cbr\u003e\u003cbr\u003eComodous in tempor ullamcorper miaculis\u003cbr\u003ePellentesque vitae mollis neque urn mattis laoreet.\u003cbr\u003eDivamus purus sit amet justo.\u003cbr\u003eProin harassment egestas jars suscipit ac risus posuere loremous\u003cbr\u003eSample Ordered List\u003cbr\u003e\u003cbr\u003eComodous in tempor ullamcorper miaculis.\u003cbr\u003ePellentesque vitae mollis neque urn mattis laoreet.\u003cbr\u003eDivamus purus sit amet justo.\u003cbr\u003eProin harassment egestas jars suscipit ac risus posuere loremous.\u003cbr\u003eSample Paragraph\u003cbr\u003e\u003cbr\u003eNunc facilisis sagittis ullamcorper. Proin lectus ipsum, et pregnant mattis vulputate, tristique ut lectus. Sed et nunc lorem. Vestibulum ante ipsum primis in faucibus jars luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus nisl ut adipiscing dolor dignissim always. Nothing luctus malesuada tincidunt. Class aptent tacit sociosqu to litora torquent for our conubia for inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat at felis. Suspendisse pretium aliquet urn eros convallis interdum."}, onVariantSelected: selectCallback });
      
      // Add label if only one product option and it isn't 'Title'.
      
  
      // Auto-select first available variant on page load.
      
      
        
          
          
            $('.single-option-selector:eq(0)').val("S").trigger('change');
          
            $('.single-option-selector:eq(1)').val("Grey").trigger('change');
          
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
        
      
      
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


<!-- BEGIN: RatingWidget -->
<div class="rw-js-container">
    <script type="text/javascript">(function(d, t, e, m){
        // Async Rating-Widget initialization.
        window.RW_Async_Init = function(){
            var settings = {
    uid: "7e125e20746667f48310b7887e2782b4", 
    huid: "251676",
    source: "Shopify",
    options: {}     
};

var ratingSettings = {
    title: "Artica Nested Table",
    url: "",
    domain: "inspire-17.myshopify.com",
    img: "//inspire-17.myshopify.com/cdn/shop/products/product6_248c2d57-d8af-4a6e-90d2-9d0c74bceb39_large.jpeg%3Fv=1438074071",
    tags: "Furniture;Shelf;size;"
};
            
            
            // Init ratings settings.
            RW.init(settings);

            // Adds rating identification for analytics.
            RW.initRating("1844346307", ratingSettings);

            RW.render();
        };

        // Append Rating-Widget JavaScript library.
        var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
            l = d.location, ck = "Y" + t.getFullYear() + 
            "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
            f = (-1 < l.search.indexOf("DBG=") ? "" : ".min"),
            a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
        if (d.getElementById(id)) return;              
        rw = d.createElement(e);
        rw.id = id; rw.async = true; rw.type = "text/javascript";
        rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
        s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/index.html"));</script>
</div>
<!-- END: RatingWidget -->

  
 
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

<!-- Mirrored from inspire-17.myshopify.com/products/artica-nested-table by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 14:43:43 GMT -->
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

