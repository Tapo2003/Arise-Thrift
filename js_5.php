<script type="text/javascript">
//<![CDATA[
 jQuery(document).ready(function(cash) {
  jQuery("#latest-products-slider .slider-items").owlCarousel({
   items : 2, //10 items above 1000px browser width
      itemsDesktop : [1024,2], //5 items between 1024px and 901px
        itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
        itemsTablet: [600,2], //2 items between 600 and 0;
        itemsMobile : [320,1],
        navigation : true,
        navigationText : ["<a class=\"flex-prev\"></a>","<a class=\"flex-next\"></a>"],
        slideSpeed : 500,
        pagination : false,
        autoPlay: false
            });
 }); 
//]]>
</script>