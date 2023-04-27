<?php
echo "Menghitung BMI";
$nama = "feki";
$tinggi = 160/100;
$berat = 50;
echo "<br>=====================<br>";
$bmi = $berat / ($tinggi*$tinggi);
echo "Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk ";

if ($bmi <= 18.5) {
   echo "kurus";
}
elseif ($bmi <= 24.9) {
    echo "sedang";
}
elseif ($bmi <= 29) {
    echo "gemuk";
}
elseif ($bmi >= 30) {
    echo "obesitas";
}


?>