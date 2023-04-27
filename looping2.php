<?php
for($a=9;$a>=0;$a--){ //ini digunakan untuk membuat banyaknya baris, $a-- berarti nilai pada tiap barisnya akan terus berkurang
    for($b=0;$b<$a;$b++){ //ini digunakan untuk membuat banyaknya kolom, dimana nilai $b < $a 
        echo "*"; //output yang ditampilkan berupa bintang
    }
    echo "<br>";
}
?>