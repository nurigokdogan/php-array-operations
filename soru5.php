/*Soru 5: Verilen iki diziyi küme kabul ederek küme bilesimini, farkini ve kesisimini dizi olarak döndüren birlesim($kume1, $kume2), fark($kume1, $kume2), kesisim($kume1, $kume2) fonksiyonlarini yaziniz. Iki kümedeki elemanlari diziOku fonksiyonunu çagirarak okuyan sonra bu dizilerin bilesimini, farkini ve kesisimini yukardaki fonksiyonlarini çagirarak bulan ve diziYaz fonksiyonuyla ekrana yazdiran programi veriniz.
*/
<?php
print " 1.dizi için sayilari giriniz(0: bitis)\n";
$dizi1 = diziOku();
print " 2.dizi için sayilari giriniz(0: bitis)\n";
$dizi2 = diziOku();

print "birlesim \n";
$birlesim = birlesim($dizi1, $dizi2);
diziYaz($birlesim);

print "Fark \n";
$fark = fark($dizi1, $dizi2);
diziYaz($fark);

print "kesisim\n";
$kesisim = kesisim($dizi1, $dizi2);
diziYaz($kesisim);



function diziYaz($x){

    for($i = 0; $i < count($x); $i++){
        print($x[$i])."\n";
    }
    return;
}

 function birlesim($kume1, $kume2){

     $birlesim = array_merge($kume1, $kume2);
     return $birlesim;
 }

 function fark($kume1, $kume2){

    $fark = array_diff($kume1, $kume2);
    return $fark;
}

function kesisim($kume1, $kume2){

    $kesisim = array_intersect($kume1, $kume2);
    return $kesisim;
}

function diziOku(){

    $i = 0;
    $temp = array();		// bos array tanimla
    // klavyeden sayilari oku ve $temp dizisine sakla
    do{
        $deger = (int)fgets(STDIN);	// bir sayi oku
        if($deger == 0)		// eger girilen sayi sifirsa
            break;			// donguden cik
        $temp[$i] = $deger;	// $deger'i $temp dizisine ekle
        //$temp[] = $deger; seklinde de yazilabilir
        $i++;
    }
    while($deger);		// eger $deger sifirdan(false) farkliysa
    return $temp;
}
?>
