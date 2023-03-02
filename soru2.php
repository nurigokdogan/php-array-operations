/*Soru 2: Verilen iki dizinin bir döngüyle karsilikli elemanlari toplami, çarpimini bir dizi olarak döndüren toplama($kume1, $kume2), carpma($kume1, $kume2), cikarma($kume1, $kume2) fonksiyonlarini yaziniz. Iki dizideki elemanlari diziOku fonksiyonunu çagirarak okuyan sonra bu dizilerin toplam, çarpim ve farklarini ilgili fonksiyonlarini çagirarak bulan ve diziYaz fonksiyonuyla ekrana yazdiran programi veriniz.
*/

<?php
print "Birinci dizi için sayilari giriniz(0: bitis)\n";
$dizi1 = diziOku();
print "Ikinci dizi için sayilari giriniz(0: bitis)\n";
$dizi2 = diziOku();


$toplam = toplam($dizi1, $dizi2);
print "toplam \n";
matrisYaz($toplam);

$carpim = carpim($dizi1, $dizi2);
print "carpim \n";
matrisYaz($carpim);


$fark = fark($dizi1, $dizi2);
print "fark \n";
matrisYaz($fark);


function diziOku()
{

    $i = 0;
    $temp = array();        // bos array tanimla
    // klavyeden sayilari oku ve $temp dizisine sakla
    do {
        $deger = (int)fgets(STDIN);    // bir sayi oku
        if ($deger == 0)        // eger girilen sayi sifirsa
            break;            // donguden cik
        $temp[$i] = $deger;    // $deger'i $temp dizisine ekle
        //$temp[] = $deger; seklinde de yazilabilir
        $i++;
    } while ($deger);        // eger $deger sifirdan(false) farkliysa
    return $temp;
}

function matrisYaz($dizi)
{

    for ($i = 0; $i < count($dizi); $i++) {
        print($dizi[$i]) . "\n";
    }
    return;
}

function toplam($dizi1, $dizi2)
{
    for ($i = 0; $i < count($dizi1); $i++) {
        $sonuc[$i] = $dizi1[$i] + $dizi2[$i];
    }
    return $sonuc;
}

function carpim($dizi1, $dizi2)
{

    for ($i = 0; $i < count($dizi1); $i++) {
        $sonuc[$i] = $dizi1[$i] * $dizi2[$i];
    }
    return $sonuc;
}

function fark($dizi1, $dizi2)
{

    for ($i = 0; $i < count($dizi1); $i++) {
        $sonuc[$i] = $dizi1[$i] - $dizi2[$i];
    }
    return $sonuc;
}
