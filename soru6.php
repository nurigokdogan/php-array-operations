/*
Soru 6: $metin1 ve $metin2 içerisinde verilen 2 string'in(karakter katari) içinde geçen karakterlerin (harf, rakam, sembol vs.) küme bilesimini, farkini ve kesisimini string olarak döndüren metinBirlesim($metin1, $metin2), metinfark($metin1, $metin2), metinKesisim($metin1, $metin2) fonksiyonlarini yaziniz. Iki metni klavyeden okuyarak bunlarin bilesimini, farkini ve kesisimini yukardaki fonksiyonlarini çagirarak bulan ve sonuçlarini ekrana yazdiran programi veriniz.
*/

<?php


echo "Birinci metni giriniz?\n ";
$string1 = trim(fgets(STDIN));
echo "Ikinci metni giriniz?\n ";
$string2 = trim(fgets(STDIN));
print " Küme kesisim:  ";
print kesisim($string1, $string2);
print "Küme farki:";
print fark($string1, $string2);
print "Küme birlesimi:";
print birlesim($string1, $string2);

function kesisim($string1, $string2)
{

    $sonuc = array();
    $z = 0;
    for ($i = 0; $i < strlen($string1); $i++) {
        for ($j = 0; $j < strlen($string2); $j++) {
            if ($string1[$i] == $string2[$j] && !in_array($string1[$i], $sonuc)) {
                $sonuc[$z] = $string1[$i];
            }
            $z++;
        }
    }
    return implode('', $sonuc);
}


function birlesim($string1, $string2)

{
    $sonuc = '';
    for ($i = 0; $i < strlen($string1); $i++)
        if (! icindemi($sonuc, $string1[$i]))
            $sonuc .= $string1[$i];
     for ($i = 0; $i < strlen($string2); $i++)
        if (! icindemi($sonuc, $string2[$i]))
              $sonuc .= $string2[$i];
    return $sonuc;

}

function fark($string1, $string2)

{
    /*$dizi1 = str_split($string1);
    $dizi2 = str_split($string2);
    $difference = array_diff($dizi1, $dizi2);
    return implode('', $difference); */
        $sonuc = '';
       for ($i = 0; $i < strlen($string1); $i++) {
               if (! icindemi($string2, $string1[$i])) {
                   $sonuc .= $string1[$i];
               }
       }
       return $sonuc;
}
function icindemi($haystack, $needle){
    for ($i=0 ; $i < strlen($haystack); $i++)
        if($haystack[$i]==$needle)
            return true;
    return false;
}
?>