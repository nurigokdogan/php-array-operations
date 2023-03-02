
/*Soru 3: Verilen bir dizinin elemanlarini küçükten büyüge siralayan diziSirala fonksiyonu yaziniz. sort gibi hazir fonksiyon kullanmayiniz. Verilen bir dizideki sayilari önce diziOku fonksiyonunu çagirarak okuyan, sonra bu diziyi diziSirala fonsiyonunu çagirarak siralayan ve diziYaz fonsiyonunun çagirarak ekrana yazdiran programi veriniz.
 */


<?php
print " dizi için sayilari giriniz(0: bitis)\n";
$dizi = diziOku();
$diziSirala = diziSirala($dizi);
print "sorted array \n";
matrisYaz($diziSirala);


function matrisYaz($dizi){

    for($i = 0; $i < count($dizi); $i++){
        print($dizi[$i]) . "\n";
    }
    return;
}

function diziSirala ($dizi){

    for($j = 0; $j < count($dizi); $j ++) {
        for($i = 0; $i < count($dizi)-1; $i ++){
            if($dizi[$i] > $dizi[$i+1]) {
                $temp = $dizi[$i+1];
                $dizi[$i+1]=$dizi[$i];
                $dizi[$i]=$temp;
            }
        }
    }
    return $dizi;
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
        $i++;
    }
    while($deger);		// eger $deger sifirdan(false) farkliysa
    return $temp;
}
?>