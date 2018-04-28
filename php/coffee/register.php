<div id="formku">


<form id="formdaftar" name="frm" action="index.php?hal=success" method="post">

<!-- nama -->
<div class="row-form">
  <div class="form-25">
    <label for="namax" > Nama </label>
  </div>
  <div class="form-75">
    <input type="text" id="namax" name="namax"placeholder="Masukkan Nama" >
  </div>
</div>

<!-- email -->
<div class="row-form">
  <div class="form-25">
    <label for="email" > Email </label>
  </div>
  <div class="form-75">
    <input type="email" id="email" name="email" placeholder="Masukkan email">
    <span id="feedback"></span>
  </div>
</div>

<!-- Password -->
<div class="row-form">
  <div class="form-25">
    <label for="password" > Password </label>
  </div>
  <div class="form-75">
    <input type="password" id="password" name="password" placeholder="Keep Secret!" >
  </div>
</div>
<!-- Password -->
<div class="row-form">
  <div class="form-25">
    <label for="password_again" > Verif Password </label>
  </div>
  <div class="form-75">
    <input class="left" type="password" id="password_again" name="password_again" placeholder="Keep Secret!" >
  </div>
</div>

<!-- Gender  -->
<div class="row-form">
  <div id="form-25">
    <label for="gender" > Jenis Kelamin </label>
  </div>
  <div id="form-75">
    <input type="radio" name="gender" value="P" checked>Pria &nbsp;&nbsp;
    <input type="radio" name="gender" value="W" checked>Wanita
  </div>
</div>


<!-- Kota -->
<div class="row-form">
  <div class="form-25">
    <label for="kota" > Kota </label>
  </div>
  <div class="form-75">
    <select id="kota" name="kota">
      <option value="Tangerang"> Tangerang </option>
      <option value="Jakarta"> Jakarta </option>
    </select>
  </div>
</div>

<div class="row-form">
  <input type="submit" name="kirim" value="kirim">
</div>
</form>



</div>
