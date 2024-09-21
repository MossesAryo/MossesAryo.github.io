<?php
if (isset($_POST['Input'])) {
        $p = $_POST['panjang'];
        $l = $_POST['lebar'];

        $luas = $p * $l;
        $keliling = 2 * ($p + $l);
        if ($p == $l) {
            $bangun = "Persegi";
        } else {
            $bangun = "Persegi Panjang";
        }


        echo "<h3>Bangun Datar: $bangun</h3>";
        echo "Luas = $luas<br>Keliling = $keliling<br>";
    }
    ?>