$(window).scroll(function(){
  if ($(window).scrollTop()> 760){
     $("#fixedMenu").css("background-color", "rgba(0,0,0,0.5)");
  }
  else
  {
    $("#fixedMenu").css("background-color", "transparent");
  }
});


function Start()
{
$("html, body").animate({ scrollTop: 740 }, "slow");
}
function Product(id) {
	var link = "http://localhost/PHP_Project/Templates/SignalProduct.php?id=" + id;
	window.location.href = link;
}