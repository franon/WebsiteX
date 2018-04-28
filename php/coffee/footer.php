<div id="footer">

</div>

</div>

</div>

<!-- navbar -->
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

<!-- Validasi -->
<!-- Validasi Nama -->
<script type="text/javascript">
$(document).ready(function(){
  $('#formdaftar').submit(function(){ //Dijalankan Saat form disubmit
    if($('#namax').val()=='') { //cek nama harus diisi
      alert('Nama Harus Diisi'); //kursor focus di Nama
      $('#namax').focus();
      return false;
    }
else {
      return true;
    }

  })

})
</script>

<script type="text/javascript">

jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});

$("#formdaftar").validate({
  rules: {
    password: "required",
    password_again: {
      equalTo: "#password"
    }
  }
});

</script>

</body>
</html>
