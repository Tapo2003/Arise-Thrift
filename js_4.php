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


<?php
  
?>