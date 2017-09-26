<?php 
    $angka[] = isset($_POST['sisi']) ? $_POST['sisi'] : NULL;
    $angka[] = isset($_POST['panjang']) ? $_POST['panjang'] : NULL;
    $angka[] = isset($_POST['lebar']) ? $_POST['lebar'] : NULL;
    $tinggi = isset($_POST['tinggi']) ? $_POST['tinggi'] : NULL;

    // untuk ngecek apakah array ada yang berisin ""
    $i = 0;
    while ($i < count($angka)) {
      if ($angka[$i] == NULL) {
        unset($angka[$i]);
      }
      $angka = array_values($angka);
      $i++;
    } 

    // mengubah array jadi string
    $operasi = implode("-", $angka);

    if ($bangundatar == "lingkaran" && $_POST['panjang'] && $_POST['tinggi']) {
        gagal("Masukkan Salah satu! jangan keduanya!");
    }else  { 
 ?>
        <div class="papan">
            <div class="hitung">

                <?=judul($bangundatar)?>
                <div class="img"><img src=""></div>
                <?php 
                    hitung($bangundatar,$operasi,$tinggi);
                 ?>
            </div>
            <div class="ttd">R.K Azam</div>
        </div>
    </div>
    <?php 
    }

     ?>