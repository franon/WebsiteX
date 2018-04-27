<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/coffee.css">

    <title>Fox Coffee</title>
  </head>
  <body>

<!-- master -->

  <div id="container">

<!-- Bungkus nav -->

<div class="bungkus">

<!-- Huruf ditengah -->
  <div id="nav-main">



  </div>

<!-- Nav Kiri-->
    <div id="nav">
      <div id="nav-left">
        <a href="#">Fox Coffee</a>
      </div>

<!-- Nav Kanan -->
      <div id="nav-right">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </div>
    </div>
</div>
<!-- sidebar -->

    <div id="sidebar">
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
    </div>

<!-- main -->
    <div id="main">
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
      <p>lorem</p>
    </div>

<!-- Foot -->
    <div id="footer">

    </div>

</div>

</div>

<script src="../jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    // $("#nav").css("position", "fixed");
    $(window).scroll(function(e){
      var st = $(this).scrollTop();
      console.log(st);
      if (st > 630) {
        $("#nav").css("background-color", "#0009");
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
