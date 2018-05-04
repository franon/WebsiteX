
</div>




<!--validation-->
<script>
$(document).ready(function(){
  $('#formdaftar').submit(function(){ //Dijalankan Saat form disubmit
    if($('#nama').val()=='') { //cek nama harus diisi
      alert('Nama Harus Diisi'); //kursor focus di Nama
      $('#nama').focus();
      return false;
    }
else {
      return true;
    }

  })

})

</script>


<div id="footer">
<h4>&copy 2018 Fox Coffee. Made with &#10084 By <a href="https://www.instagram.com/franolnsen/">Fran Olnsen</a></h4>

</div>

</body>
</html>
