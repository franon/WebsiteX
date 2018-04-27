<div id="footer">

</div>

</div>

</div>

<script src="../../jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
// $("#nav").css("position", "fixed");
$(window).scroll(function(e){
  var st = $(this).scrollTop();
  console.log(st);
  if (st > 630) {
    $("#nav").css("background-color", "#C09F8075");
    $("#nav").css("color", "#fff");
  } else {
    $("#nav").css("background-color", "transparent");
    $("#nav").css("color", "#000");
  }
})
})
</script>
</body>
</html>
