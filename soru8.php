/* Soru 8:
(i) Klavyeden girilen kitap adi ve fiyatlarini dizi(ler)de saklayip (kitap adi bos girilince bilgi girisi biter),
(ii) en pahali ve en ucuz hariç tutularak hesaplanan ortalama kitap fiyatina en yakin kitap(lar)in ismini yazdiran,
(iii) ortalama fiyata olan fiyat uzakliklarin ortalamasini (yani fiyatlarin standart sapmasi) bulup yazdiran,

Bu programi (soru 8) test ederken en az üç farkli fiyat girilecek. Sedece iki veya bir farkli fiyat girilirse program, heaplama yapmayip yeniden en az 3 farkli kitap/fiyat bilgi girisini bastan talep edecektir. En ucuz ve en pahali kitap birden fazla varsa onlarin tamamini ortalama hesabinin disinda tutacaksiniz.


Örnek senaryo:

Kitap adi? safahat
Kitap fiyati? 25
Kitap adi? Serguzest
Kitap fiyati? 35
Kitap adi? Calikusu
Kitap fiyati? 10
Kitap adi?
ortalamaya en yakin kitaplarin fiyatlari:
Serguzest 25TL
Standart sapma: 7,5
*/

<?php
print"lutfen en az 3 kitap ve fiyat yaziniz \n";

oku();

function oku()
{
    $counter = 0;
    $i = 0;

    while (1) {

        print"kitap adi \n";
        $kitap[$i] = fgets(STDIN);
        print"kitap fiyat \n";
        $fiyat[$i] = (int)fgets(STDIN);
        $i = $i + 1;
        $counter = $counter + 1;
        if ($counter == 2)
            break;
    }
    print"Standart sapma \n";
    $search = ortalama($fiyat);
    print $search . "\n";
    $enyakinfiyat = enyakin($search, $fiyat);
    $enyakinkitap;
    for ($i = 0; $i < $counter; $i++) {
        if ($enyakinfiyat == $fiyat[$i]) {
            $enyakinkitap = $kitap[$i];
            break;
        }
    }
    print"ortalamaya en yakin kitaplarin fiyatlari:";
    print $enyakinkitap . " " . $enyakinfiyat;
}


function ortalama($dizi)
{
    $num = count($dizi);

    $variance = 0.0;
    $orta = array_sum($dizi) / count($dizi);
    foreach ($dizi as $i) {
        $variance += pow(($i - $orta), 2);
    }
    return (float)sqrt($variance / $num);
}

function enyakin($search, $dizi)
{
    $yakin = null;
    foreach ($dizi as $item) {
        if ($yakin === null || abs($search - $yakin) > abs($item - $search)) {
            $yakin = $item;
        }
    }
    return $yakin;
}
?>