<?php

    //membuat function sederhana

    /* 
    FUNCTION TERBAGI MENJADI DUA
    -Function yang tidak mengembalikan nilai
    -Function yang mengembalikan nilai
    */

    //function yang tidak mengembalikan nilai
    function menampilkan(){
        echo "Hello PHP ";
        $a = 10;
        $hasil = $a * $a;
        echo $hasil;
        echo "%";
    }
    
    //function yang mengembalikan nilai
    function perkalian($a, $b){
    $hasil = $a * $b;
    echo "\n";
    echo $hasil;
    return $hasil;
}

    //memanggil function
   // menampilkan();
  //  perkalian(10, 100);
    ?>