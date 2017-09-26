<?php
    function input($name,$text){
        echo "<input type='text' name='$name' placeholder='$text' maxlength='2'/>";
    }
    function judul($b_datar){
        if ($b_datar == "persegi") {
            $judul = "Persegi";
        }
        elseif ($b_datar == "ppanjang") {
            $judul = "Persegi Panjang";
        }
        elseif ($b_datar == "jgenjang") {
            $judul = "Jajar Genjang";
        }elseif ($b_datar == "ketupat") {
            $judul = "Belah Ketupat";
        }elseif ($b_datar == "layang") {
            $judul = "Layang - Layang";
        }elseif ($b_datar == "trapesium") {
            $judul = "Trapesium";
        }elseif ($b_datar == "segitiga") {
            $judul = "Segitiga";
        }elseif ($b_datar == "lingkaran") {
            $judul = "Lingkaran";
        }
        return "<h2 id='$b_datar'>Menghitung Luas dan Keliling $judul</h2>";
    }
    function hitung($b_datar, $operasi, $tinggi = 0) {
       $r_luas = array('persegi' => 's x s', 
                      'ppanjang' => 'p x l',
                      'jgenjang' => 'a x t',
                      'lingkaran' => '&pi; x r x r',
                      'layang' => '1/2 x d1 x d2',
                      'ketupat' => '1/2 x d1 x d2',
                      'trapesium' => '1/2 x (a + c) x t',
                      'segitiga' => '1/2 x a x t'
                     );
        $r_kel = array('persegi' => '4 x s', 
                      'ppanjang' => '2 x (p + l)',
                      'jgenjang' => '2 x (a + b)',
                      'lingkaran' => '2 x &pi; x r',
                      'layang' => '2 x (a + b)',
                      'ketupat' => '4 x s',
                      'trapesium' => 'a + b + c + d',
                      'segitiga' => 'a + b + c'
                     );

        $hitung = explode("-", $operasi);
        if ($b_datar == "persegi") {
            $judul = "Persegi";
            $kel = 4*$hitung[0];
            $luas = pow($hitung[0], 2);
            $dik = ['Panjang Sisi'];
            $rumus[] = "4 x $hitung[0]";
            $rumus[] = "$hitung[0] x $hitung[0]";
        }
        elseif ($b_datar == "ppanjang") {
            $kel = 2*($hitung[0]+$hitung[1]);
            $luas = $hitung[0]*$hitung[1];
            $dik = ['Panjang','Lebar'];
            $rumus[] = "2 x ($hitung[0] + $hitung[1])";
            $rumus[] = "$hitung[0] x $hitung[1]";
        }
        elseif ($b_datar == "segitiga") {
            $kel = array_sum($hitung);
            $luas = 1/2*$hitung[0]*$tinggi;
            $dik = ['Alas','Sisi B','Sisi C','Tinggi'];
            $rumus[] = "$hitung[0] + $hitung[1] + $hitung[2]";
            $rumus[] = "1/2 x $hitung[0] x $tinggi";
        }elseif ($b_datar == "jgenjang") {
            $kel = 2*($hitung[0]+$hitung[1]);
            $luas = $hitung[0]*$tinggi;
            $rumus[] = "2 x $hitung[0] + $hitung[1]";
            $rumus[] = "$hitung[0] x $hitung[1]";
        }elseif ($b_datar == "layang") {
            $luas = 1/2*$hitung[0]*$hitung[1];
            $kel = 2*($hitung[0]+$hitung[1]);
            $rumus[] = "2 x $hitung[0] + $hitung[1]";
            $rumus[] = "1/2 x $hitung[0] x $hitung[1]";
        }elseif ($b_datar == "ketupat") {
            $luas = 1/2*$hitung[0]*$hitung[1];
            $kel = 4*$hitung[0];
            $rumus[] = "4 x $hitung[0]";
            $rumus[] = "1/2 x $hitung[0] x $hitung[1]";
        }elseif ($b_datar == "trapesium") {
            $kel = array_sum($hitung);
            $luas = 1/2*($hitung[0]+$hitung[3])*$tinggi;
            $rumus[] = "$hitung[0] + $hitung[1] + $hitung[2] + $hitung[3]";
            $rumus[] = "1/2 x ($hitung[0] + $hitung[3] x $tinggi)";
        }elseif ($b_datar == "lingkaran") {
            if ($tinggi == 0) {
                $dik = ['Jari-Jari'];
                $kel = 2*22/7*$hitung[0];
                $luas = 22/7 * $hitung[0] * $hitung[0];
                $rumus[] = "2 x <span>&pi;</span> x $hitung[0]";
                $rumus[] = "<span>&pi;</span> x $hitung[0] x $hitung[0]";
            }else{
                $dik = ['Diameter','Jari-Jari'];
                $kel = ceil(22/7*(1/2 * $tinggi));
                $luas = 22/7 * pow("1/2$tinggi", 2);    
                $hitung[0] = $tinggi;
                $hitung[1] = 1/2*$tinggi;        
                $rumus[] = "2 x <span>&pi;</span> x $hitung[1]";
                $rumus[] = "<span>&pi;</span> x $tinggi";
            }
            
        }
        echo "
        <p>Diketahui : <br/>
            <ul>
                ";
        $i = 0;
            while ($i < count($hitung)) {
                if ($dik[$i] != NULL) {
                    echo "<li>$dik[$i] = $hitung[$i] cm</li>";
                }
                $i++;
            }
       
        echo"
            </ul>
        </p>
       <p>Penyelesaian: <br>
            <div class=\"rumus\">
                <ul>
                    <li>keliling -&gt; <span>$r_kel[$b_datar]</span></li>
                    <li>luas -&gt; <span>$r_luas[$b_datar]</span></li>
                </ul>
            </div>
        </p>
        
        <div style=\"clear: both\"></div><br>
        
        <p>Keliling</p>
        $rumus[0] = <u>$kel</u> <br/>
        Jadi kelilingnya adalah <span>$kel</span>cm<br/>
        <p>Luas</p>
        $rumus[1] = <u>$luas</u> <br/>
        Jadi luasnya adalah <span>$luas</span>cm<sup>2</sup>
        ";
    }

    function pengertian($b_datar){
        if ($b_datar == "persegi") {
            $judul = "Persegi";
            $arti = "Pengertian Persegi adalah segiempat yang keempat sisinya sama panjang dan keempat sudutnya siku-siku, atau persegi adalah belahketupat yang salah satu sudutnya siku-siku, atau persegi adalah persegipanjang yang dua sisinya yang berdekatan sama panjang";
        }
        elseif ($b_datar == "ppanjang") {
            $judul = "Persegi Panjang";
            $arti = "Pengertian Persegipanjang adalah segiempat yang keempat sudutnya siku-siku atau jajargenjang yang salah satu sudutnya siku-siku";
        }
        elseif ($b_datar == "jgenjang") {
            $judul = "Jajar Genjang";
            $arti = "Pengertian Jargenjang adalah segiempat yang sisi-sisinya sepasang-sepasang sejajar, atau segiempat yang memiliki tepat dua pasang sisi yang sejajar";
        }elseif ($b_datar == "ketupat") {
            $judul = "Belah Ketupat";
            $arti = "Pengertian Belahketupat adalah segiempat yang keempat sisi-sisinya sama panjang, atau belahketupat adalah jajargenjang yang dua sisinya yang berdekatan sama panjang, atau belahketupat adalah layang-layang yang keempat sisi-sisinya sama panjang";
        }elseif ($b_datar == "layang") {
            $judul = "Layang - Layang";
            $arti = "Pengertian Layang-layang adalah segiempat yang dua sisinya yang berdekatan sama panjang, sedangkan kedua sisi yang lain juga sama panjang";
        }elseif ($b_datar == "trapesium") {
            $judul = "Trapesium";
            $arti = "Pengertian Trapesium adalah segiempat yang dua sisinya sejajar dan dua sisi yang lainnya tidak sejajar.";
        }elseif ($b_datar == "segitiga") {
            $judul = "Segitiga";
            $arti = "Segitiga atau segi tiga adalah nama suatu bentuk yang dibuat dari tiga sisi yang berupa garis lurus dan tiga sudut ";
        }elseif ($b_datar == "lingkaran") {
            $judul = "Lingkaran";
            $arti = "sebuah lingkaran adalah himpunan semua titik pada bidang dalam jarak tertentu, yang disebut jari-jari, dari suatu titik tertentu, yang disebut pusat";
        }

        return "<fieldset><legend><h2>Apa itu $judul ?</h2></legend>
  $arti. </fieldset>";        
    }

    function gagal($text){
        echo "<div class='gagal'>$text</div>";
    }


    echo number_format(22/7*pow(15, 2),2);
 ?>