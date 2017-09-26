<a class="back" href="<?=$_SERVER[PHP_SELF]?>">Kembali</a>
<form method="POST" action="?bangundatar=<?="$bangundatar#$bangundatar"?>">
   <?php 
        if ($bangundatar == "persegi") {
            input("sisi","Masukkan Sisi...");
        }elseif ($bangundatar == "ppanjang") {
            input("panjang", "Masukkan Panjang...");
            input("lebar", "Masukkan Lebar...");
        }elseif ($bangundatar == "jgenjang") {
            input("panjang", "Masukkan Nilai Alas...");
            input("lebar", "Masukkan Nilai Sisi...");
            input("tinggi", "Masukkan Nilai Tinggi...");
        }elseif ($bangundatar == "lingkaran") {
            input("panjang","Masukkan Nilai Jari-Jari");
            input("tinggi","Masukkan Nilai Diameter");
        }
    ?>
   <input type="submit" class="enter" name="cari" value="CARI">
</form>
  <?php 
    echo pengertian($bangundatar);
   ?>