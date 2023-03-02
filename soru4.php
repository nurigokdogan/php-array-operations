/*Soru 4: Verilen bir dizinin medyanini döndüren diziMedyani fonksiyonu yaziniz (Medyan yani orta elemanini bulma: Dizideki sayilar küçükten büyüge siralanir. Dizideki eleman sayisi n tek sayiysa, orta eleman tamsayi bölmeyle n/2. elemandir. Eleman sayisi çift sayiysa, orta eleman dizinin ortasindaki 2 elemanin yani (n/2)-1. eleman ve n/2. elemanin ortalamasidir.) Verilen bir dizideki sayilari önce diziOku fonksiyonunu çagirarak okuyan, sonra bu diziyi diziMedyani fonsiyonunu çagirarak medyanini bulan ve ekrana diziYaz ile yazdiran programi veriniz. diziMedyani fonksiyonu siralama için hazir sort fonksiyonunu kullanabilir.
*/
<?php
print " dizi için sayilari giriniz(0: bitis)\n";
$dizi = diziOku();
$diziMedyani = diziMedyani($dizi);
$diziSirala = diziSirala($dizi);
print "sorted array \n";
matrisYaz($diziSirala);
print " MEDIAN is element :" ;
print $diziMedyani;

function diziYaz($x){

    for($i = 0; $i < count($x); $i++){
        print($x[$i]) . "\n";
    }
    return;
}

function diziMedyani ($dizi){
    $count = count($dizi); //total numbers in array
    $middleval = floor(($count-1)/2); // find the middle value, or the lowest middle value
    if($count % 2) { // odd number, middle is the median
        $median = $dizi[$middleval];
    } else { // even number, calculate avg of 2 medians
        $low = $dizi[$middleval];
        $high = $dizi[$middleval+1];
        $median = (($low+$high)/2);
    }
    return $median;
}

function diziSirala ($dizi){ //sorting function

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
        //$temp[] = $deger; seklinde de yazilabilir
        $i++;
    }
    while($deger);		// eger $deger sifirdan(false) farkliysa
    return $temp;
}
?>
