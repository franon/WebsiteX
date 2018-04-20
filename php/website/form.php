<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contoh Form</title>
  </head>
  <body>

    <form name="frm1" id="frm1" action="" method="post">
      Nama : <input type="text" name="nama" placeholder="nama lengkap" maxlength="50" required> <br>
      Usia : <input type="number" name="usia" requred> <br>
      Jenis Kelamin : <input type="radio" name="Kelamin" value="P" checked>Pria &nbsp;&nbsp;
                      <input type="radio" name="Kelamin" value="W" checked>Wanita <br>
      Hobi : <input type="checkbox" name="Hobi" value="masak ">Memasak &nbsp;&nbsp;
             <input type="checkbox" name="hobi" value="belajar">Belajar &nbsp;&nbsp;
             <input type="checkbox" name="hobi" value="Main">Komputer &nbsp;&nbsp; <br>
      Alamat : <textarea name="alamat" cols="30" rows="3" placeholder="isi Alamat Lengkap"></textarea> <br>
      Provinsi : <select name="prov" required>
                    <option value="1">Banten</options>
                    <option value="2">Tangerang</options>
                    <option value="3">Jakarta</options>
                  </select> <br>
      password : <input type="password" name="pass" placeholder="Ketik password disini" required> <br>
      Email : <input type="email" name="email" placeholder="isi alamat email"> <br>
      Warna Fav : <input type="color" name="web" placeholder="alamat web"> <br>
      file : <input type="file" name="foto" multiple accept=".pdf,.docx"> <br>
      <input type="submit" name="simpan" id="simpan" value="Simpan Data"> &nbsp;
      <input type="reset" name="batal" value="kosongkan Form">


    </form>

  </body>
</html>
