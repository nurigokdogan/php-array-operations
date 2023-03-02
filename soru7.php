/*Soru 7: $metin1 ve $metin2 içerisinde verilen 2 string'in(karakter katari) içinde geçen ve birbirinden bosluk karakteriyle ayrilmis kelimelerin küme bilesimini, farkini ve kesisimini dizi olarak döndüren kelimeBirlesim($kume1, $kume2), kelimefark($kume1, $kume2), kelimeKesisim($kume1, $kume2) fonksiyonlarini yaziniz. Iki metni klavyeden okuyarak bunlarin bilesimini, farkini ve kesisimini yukardaki fonksiyonlarini çagirarak bulan ve sonuçlarini ekrana yazdiran programi veriniz. String'i kelimelerine ayirmak için substr haricinde hazir fonksiyon kullanmayiniz.

Örnek senaryo:

Birinci metni giriniz?
istanbul üniversitesi
Ikinci metni giriniz?
cerrahpasa üniversitesi
Küme birlesimi: istanbul üniversitesi cerrahpasa
Küme kesisim: üniversitesi
Küme farki: istanbul*/

<?php
echo "Birinci metni giriniz?\n ";
$words1 = explode(' ', fgets(STDIN));
echo "Ikinci metni giriniz?\n ";
$words2 = explode(' ', fgets(STDIN));
print"Küme birlesimi:  ";
print_r(birlesim($words1, $words2)) ;
print"Küme farki:  ";
print_r(fark($words1, $words2));
print"Küme  kesisim:  ";
print_r(kesisim($words1, $words2));

function birlesim($string1, $string2) {
    $sonuc = array();
    for ($i = 0; $i < sizeof($string1); $i++)
        if (! icindemi($sonuc, $string1[$i])){
            $sonuc[] = $string1[$i];
            $sonuc[] = ' ';
        }
    for ($i = 0; $i < sizeof($string2); $i++)
        if (! icindemi($sonuc, $string2[$i]))  {
            $sonuc[] = $string2[$i];
            $sonuc[] = ' ';
        }
    return $sonuc;
}

function fark($string1, $string2)

{

    $sonuc = array();
       for ($i = 0; $i < sizeof($string1); $i++) {
               if (! icindemi($string2, $string1[$i])) {
                   $sonuc[] = $string1[$i];
               }
       }
       return $sonuc;
}

function kesisim($string1, $string2)
{

    $sonuc = array();
    $z = 0;
    for ($i = 0; $i < sizeof($string1); $i++) {
        for ($j = 0; $j < sizeof($string2); $j++) {
            if ($string1[$i] == $string2[$j] && !in_array($string1[$i], $sonuc)) {
                $sonuc[$z] = $string1[$i];
            }
            $z++;
        }
    }
    return  $sonuc;
}


function icindemi($haystack, $needle) {
    for ($i=0 ; $i < sizeof($haystack); $i++)
        if($haystack[$i]==$needle)
            return true;
    return false;
}

?>
