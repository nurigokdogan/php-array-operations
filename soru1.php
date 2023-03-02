/*
Soru 1: Verilen bir dizinin eleman sirasini tersine çevirip bir dizi olarak döndüren diziTersi($dizi1, $dizi2) fonksiyonu yaziniz. Sifir(0) sayisi girilinceye kadar klavyeden girilen sayilari bir diziye yerlestiren ve bu diziyi döndüren diziOku fonksiyonunu yaziniz. Verilen bir diziyi her satira bir sayi gelecek sekilde ekrana yazdiran diziYaz fonksiyonunu yaziniz. Verilen bir dizideki sayilari önce diziOku fonksiyonunu çagirarak okuyan, sonra bu diziyi diziTersi fonsiyonunu çagirarak tersine çeviren ve diziYaz fonsiyonunun çagirarak ekrana yazdiran programi veriniz.


$dizi = diziOku();
$sonuc = diziTersi($dizi);
print "Dizinin tersi\n";
diziYaz($sonuc);


Örnek çalisma senaryosu:
--------------------------------------
Sayilari giriniz (sifirla bitiriniz)
2
3
4
0ss

Dizinin tersi:
4
3
2

*/

<?php
$dizi = diziOku();
print "Dizinin tersi\n";
$sonuc = diziTersi($dizi);
diziYaz($sonuc);


function diziTersi($dizi)
{
    for ($i = count($dizi) - 1; $i >= 0; $i--) {
        $dizi[] = $dizi[$i];
        unset($dizi[$i]);
    }
    print_r($dizi);//????
}

function diziYaz($x)
{

    for ($i = 0; $i < count($x); $i++) {
        print($x[$i]) . "\n";
    }
    return;
}

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

?>