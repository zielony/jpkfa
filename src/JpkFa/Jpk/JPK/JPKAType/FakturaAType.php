<?php

namespace JpkFa\Jpk\JPK\JPKAType;

/**
 * Class representing FakturaAType
 */
class FakturaAType
{

    /**
     * Trzyliterowy kod waluty (ISO-4217), w której faktura, zamówienie lub umowa zostały wystawione
     *
     * @var string $kodWaluty
     */
    private $kodWaluty = null;

    /**
     * Data wystawienia
     *
     * @var \DateTime $p1
     */
    private $p1 = null;

    /**
     * Kolejny numer faktury, nadany w ramach jednej lub więcej serii, który w sposób jednoznaczny indentyfikuje fakturę
     *
     * @var string $p2A
     */
    private $p2A = null;

    /**
     * Imię i nazwisko lub nazwa nabywcy towarów lub usług. Pole opcjonalne dla przypadku określonego w art. 106e ust. 5 pkt 3 ustawy
     *
     * @var string $p3A
     */
    private $p3A = null;

    /**
     * Adres nabywcy. Pole opcjonalne dla przypadków określonych w art. 106e ust. 5 pkt 3 ustawy oraz w § 3 pkt 4 rozporządzenia Ministra Finansów z dnia 3 grudnia 2013 r. w sprawie wystawiania faktur (Dz. U. z 2013 r., poz. 1485)
     *
     * @var string $p3B
     */
    private $p3B = null;

    /**
     * Imię i nazwisko lub nazwa sprzedawcy towarów lub usług
     *
     * @var string $p3C
     */
    private $p3C = null;

    /**
     * Adres sprzedawcy
     *
     * @var string $p3D
     */
    private $p3D = null;

    /**
     * Kod (prefiks) podatnika VAT UE dla przypadków określonych w art. 97 ust. 10 ustawy
     *
     * @var string $p4A
     */
    private $p4A = null;

    /**
     * Numer, za pomocą którego podatnik jest zidentyfikowany na potrzeby podatku, z zastrzeżeniem pkt 24 lit. a ustawy. Pole opcjonalne dla przypadku określonego w art. 106e ust. 4 pkt 2 ustawy. W przypadku faktur wystawianych w procedurze uproszczonej przez drugiego w kolejności podatnika, o którym mowa w art. 135 ust. 1 pkt 4 lit. b i c oraz ust. 2 ustawy, numer, o którym mowa w art. 136 ust. 1 pkt 3 ustawy
     *
     * @var string $p4B
     */
    private $p4B = null;

    /**
     * Kod (prefiks) nabywcy - podatnika VAT UE dla przypadków określonych w art. 97 ust. 10 ustawy
     *
     * @var string $p5A
     */
    private $p5A = null;

    /**
     * Numer, za pomocą którego nabywca towarów lub usług jest identyfikowany dla podatku lub podatku od wartości dodanej, pod którym otrzymał on towary lub usługi, z zastrzeżeniem pkt 24 lit. b ustawy. Pole opcjonalne dla przypadku określonego w art. 106e ust. 5 pkt 2 ustawy. W przypadku faktur wystawianych w procedurze uproszczonej przez drugiego w kolejności podatnika, o którym mowa w art. 135 ust. 1 pkt 4 lit. b i c oraz ust. 2 ustawy, numer, o którym mowa w art. 136 ust. 1 pkt 4 ustawy
     *
     * @var string $p5B
     */
    private $p5B = null;

    /**
     * Data dokonania lub zakończenia dostawy towarów lub wykonania usługi lub data otrzymania zapłaty, o której mowa w art. 106b ust. 1 pkt 4, o ile taka data jest określona i różni się od daty wystawienia faktury
     *
     * @var \DateTime $p6
     */
    private $p6 = null;

    /**
     * Suma wartości sprzedaży netto ze stawką podstawową - aktualnie 23% albo 22%. W przypadku faktur zaliczkowych, kwota zaliczki netto
     *
     * @var float $p131
     */
    private $p131 = null;

    /**
     * Kwota podatku od sumy wartości sprzedaży netto ze stawką podstawową - aktualnie 23% albo 22%. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @var float $p141
     */
    private $p141 = null;

    /**
     * W przypadku gdy faktura jest wystawiona w walucie obcej, kwota podatku od sumy wartości sprzedaży netto ze stawką podstawową, przeliczona zgodnie z art. 31a w związku z art. 106e ust. 11 ustawy - aktualnie 23% albo 22%. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @var float $p141W
     */
    private $p141W = null;

    /**
     * Suma wartości sprzedaży netto ze stawką obniżoną pierwszą - aktualnie 8 % albo 7%. W przypadku faktur zaliczkowych, kwota zaliczki netto
     *
     * @var float $p132
     */
    private $p132 = null;

    /**
     * Kwota podatku od sumy wartości sprzedaży netto ze stawką obniżoną pierwszą - aktualnie 8% albo 7%. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @var float $p142
     */
    private $p142 = null;

    /**
     * W przypadku gdy faktura jest wystawiona w walucie obcej, kwota podatku od sumy wartości sprzedaży netto ze stawką obniżoną, przeliczona zgodnie z art. 31a w związku z art. 106e ust. 11 ustawy - aktualnie 8% albo 7%. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @var float $p142W
     */
    private $p142W = null;

    /**
     * Suma wartości sprzedaży netto ze stawką obniżoną drugą - aktualnie 5%. W przypadku faktur zaliczkowych, kwota zaliczki netto
     *
     * @var float $p133
     */
    private $p133 = null;

    /**
     * Kwota podatku od sumy wartości sprzedaży netto ze stawką obniżoną drugą - aktualnie 5%. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @var float $p143
     */
    private $p143 = null;

    /**
     * W przypadku gdy faktura jest wystawiona w walucie obcej, kwota podatku od sumy wartości sprzedaży netto ze stawką obniżoną drugą, przeliczona zgodnie z art. 31a w związku z art. 106e ust. 11 ustawy - aktualnie 5%. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @var float $p143W
     */
    private $p143W = null;

    /**
     * Suma wartości sprzedaży netto ze stawką obniżoną trzecią w walucie, w której faktura została wystawiona - procedura odwrotnego obciążenia, dla której podatnikiem jest nabywca zgodnie z art. 17 ust. 1 pkt 7 i 8 ustawy VAT oraz dla stawki 4% w przypadku ryczałtu dla taksówek osobowych. W przypadku faktur zaliczkowych, kwota zaliczki netto
     *
     * @var float $p134
     */
    private $p134 = null;

    /**
     * Kwota "0" dla procedury odwrotnego obciążenia, dla której podatnikiem jest nabywca zgodnie z art. 17 ust. 1 pkt 7 i 8 ustawy VAT oraz kwota podatku od sumy wartości sprzedaży netto dla stawki 4% w walucie, w której faktura została wystawiona w przypadku ryczałtu dla taksówek osobowych. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @var float $p144
     */
    private $p144 = null;

    /**
     * W przypadku gdy faktura jest wystawiona w walucie obcej, kwota "0" dla procedury odwrotnego obciążenia, dla której podatnikiem jest nabywca zgodnie z art. 17 ust. 1 pkt 7 i 8 ustawy VAT oraz kwota podatku od sumy wartości sprzedaży netto w walucie obcej dla stawki 4% w przypadku ryczałtu dla taksówek osobowych, przeliczona zgodnie z art. 31a w związku z art. 106e ust. 11 ustawy. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @var float $p144W
     */
    private $p144W = null;

    /**
     * Suma wartości sprzedaży netto dla transakcji dostawy towarów oraz świadczenia usług poza terytorium kraju. W przypadku faktur zaliczkowych, kwota zaliczki netto. Pole opcjonalne dla przypadków określonych w art. 106e ust.2 i 3 oraz ust. 4 pkt 1, a także ust. 4 pkt 3 i ust. 5 pkt 1-3 ustawy
     *
     * @var float $p135
     */
    private $p135 = null;

    /**
     * Suma wartości sprzedaży netto ze stawką 0%. W przypadku faktur zaliczkowych, kwota zaliczki netto. Pole opcjonalne dla przypadków określonych w art. 106e ust. 2 i 3, a także ust. 4 pkt 3 i ust. 5 pkt 1-3 ustawy
     *
     * @var float $p136
     */
    private $p136 = null;

    /**
     * Suma wartości sprzedaży zwolnionej. W przypadku faktur zaliczkowych, kwota zaliczki netto. Pola opcjonalne dla przypadków określonych w art. 106e ust. 2 i 3, a także ust. 4 pkt 3 i ust. 5 pkt 1-3 ustawy
     *
     * @var float $p137
     */
    private $p137 = null;

    /**
     * Kwota należności ogółem lub w przypadku faktur zaliczkowych, otrzymana kwota zapłaty
     *
     * @var float $p15
     */
    private $p15 = null;

    /**
     * W przypadku dostawy towarów lub świadczenia usług, w odniesieniu do których obowiązek podatkowy powstaje zgodnie z art. 19a ust. 5 pkt 1 lub art. 21 ust. 1 - wyrazy "metoda kasowa", należy podać wartość "true"; w przeciwnym przypadku - wartość "false"
     *
     * @var bool $p16
     */
    private $p16 = null;

    /**
     * W przypadku faktur, o których mowa w art. 106d ust. 1 - wyraz "samofakturowanie", należy podać wartość "true"; w przeciwnym przypadku - wartość "false"
     *
     * @var bool $p17
     */
    private $p17 = null;

    /**
     * W przypadku dostawy towarów lub wykonania usługi, dla których obowiązanym do rozliczenia podatku od wartości dodanej lub podatku o podobnym charakterze jest nabywca towaru lub usługi - wyrazy "odwrotne obciążenie", należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @var bool $p18
     */
    private $p18 = null;

    /**
     * W przypadku faktur, w których kwota należności ogółem stanowi kwotę, o której mowa w art. 19 pkt 2 ustawy z dnia 6 marca 2018 r. - Prawo przedsiębiorców, obejmujących dokonaną na rzecz podatnika dostawę towarów lub świadczenie usług wymienionych w załączniku nr 15 do ustawy - wyrazy „mechanizm podzielonej płatności”, należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @var bool $p18A
     */
    private $p18A = null;

    /**
     * W przypadku dostawy towarów lub świadczenia usług zwolnionych od podatku na podstawie art. 43 ust. 1, art. 113 ust. 1 i 9 albo przepisów wydanych na podstawie art. 82 ust. 3 należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @var bool $p19
     */
    private $p19 = null;

    /**
     * Jeśli pole P_19 równa się "true" - należy wskazać przepis ustawy albo aktu wydanego na podstawie ustawy, na podstawie którego podatnik stosuje zwolnienie od podatku
     *
     * @var string $p19A
     */
    private $p19A = null;

    /**
     * Jeśli pole P_19 równa się "true" - należy wskazać przepis dyrektywy 2006/112/WE, który zwalnia od podatku taką dostawę towarów lub takie świadczenie usług
     *
     * @var string $p19B
     */
    private $p19B = null;

    /**
     * Jeśli pole P_19 równa się "true" - należy wskazać inną podstawę prawną wskazującą na to, że dostawa towarów lub świadczenie usług korzysta ze zwolnienia
     *
     * @var string $p19C
     */
    private $p19C = null;

    /**
     * W przypadku, o którym mowa w art. 106c ustawy należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @var bool $p20
     */
    private $p20 = null;

    /**
     * Jeśli pole P_20 równa się "true" - należy podać nazwę organu egzekucyjnego lub imię i nazwisko komornika sądowego
     *
     * @var string $p20A
     */
    private $p20A = null;

    /**
     * Jeśli pole P_20 równa się "true" - należy podać adres organu egzekucyjnego lub komornika sądowego
     *
     * @var string $p20B
     */
    private $p20B = null;

    /**
     * W przypadku faktur wystawianych w imieniu i na rzecz podatnika przez jego przedstawiciela podatkowego należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @var bool $p21
     */
    private $p21 = null;

    /**
     * Jeśli pole P_21 równa się "true" - należy podać nazwę lub imię i nazwisko przedstawiciela podatkowego
     *
     * @var string $p21A
     */
    private $p21A = null;

    /**
     * Jeśli pole P_21 równa się "true" - należy podać adres przedstawiciela podatkowego
     *
     * @var string $p21B
     */
    private $p21B = null;

    /**
     * Jeśli pole P_21 równa się "true" - należy podać numer przedstawiciela podatkowego, za pomocą którego jest on zidentyfikowany na potrzeby podatku
     *
     * @var string $p21C
     */
    private $p21C = null;

    /**
     * W przypadku gdy przedmiotem wewnątrzwspólnotowej dostawy są nowe środki transportu należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @var bool $p22
     */
    private $p22 = null;

    /**
     * Jeśli pole P_22 równa się "true" - należy podać datę dopuszczenia nowego środka transportu do użytku
     *
     * @var \DateTime $p22A
     */
    private $p22A = null;

    /**
     * Jeśli pole P_22 równa się "true" a dostawa dotyczy pojazdów lądowych, o których mowa w art. 2 pkt 10 lit. a ustawy - należy podać przebieg pojazdu
     *
     * @var string $p22B
     */
    private $p22B = null;

    /**
     * Jeśli pole P_22 równa się "true" a dostawa dotyczy jednostek pływających, o których mowa w art. 2 pkt 10 lit. b ustawy, oraz statków powietrznych, o których mowa w art. 2 pkt 10 lit. c ustawy, należy podać liczbę godzin roboczych używania nowego środka transportu
     *
     * @var string $p22C
     */
    private $p22C = null;

    /**
     * W przypadku faktur wystawianych w procedurze uproszczonej przez drugiego w kolejności podatnika, o którym mowa w art. 135 ust. 1 pkt 4 lit. b i c oraz ust. 2, zawierającej adnotację, o której mowa w art. 136 ust. 1 pkt 1 i stwierdzenie, o którym mowa w art. 136 ust. 1 pkt 2 ustawy należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @var bool $p23
     */
    private $p23 = null;

    /**
     * W przypadku świadczenia usług turystyki, dla których podstawę opodatkowania stanowi zgodnie z art. 119 ust. 1 kwota marży, faktura - w zakresie danych określonych w ust. 1 pkt 1-17 - powinna zawierać wyłącznie dane określone w ust. 1 pkt 1-8 i 15-17, a także wyrazy "procedura marży dla biur podróży", należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @var bool $p106E2
     */
    private $p106E2 = null;

    /**
     * W przypadku dostawy towarów używanych, dzieł sztuki, przedmiotów kolekcjonerskich i antyków, dla których podstawę opodatkowania stanowi zgodnie z art. 120 ust. 4 i 5 marża, należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @var bool $p106E3
     */
    private $p106E3 = null;

    /**
     * Jeżeli pole P_106E_3 równa się "true", należy podać wyrazy: "procedura marży - towary używane" lub "procedura marży - dzieła sztuki" lub "procedura marży - przedmioty kolekcjonerskie i antyki"
     *
     * @var string $p106E3A
     */
    private $p106E3A = null;

    /**
     * Rodzaj faktury
     *
     * @var string $rodzajFaktury
     */
    private $rodzajFaktury = null;

    /**
     * Przyczyna korekty dla faktur korygujących
     *
     * @var string $przyczynaKorekty
     */
    private $przyczynaKorekty = null;

    /**
     * Numer faktury korygowanej
     *
     * @var string $nrFaKorygowanej
     */
    private $nrFaKorygowanej = null;

    /**
     * Dla faktury korygującej - okres, do którego odnosi się udzielany opust lub obniżka, w przypadku gdy podatnik udziela opustu lub obniżki ceny w odniesieniu do wszystkich dostaw towarów lub usług dokonanych lub świadczonych na rzecz jednego odbiorcy w danym okresie
     *
     * @var string $okresFaKorygowanej
     */
    private $okresFaKorygowanej = null;

    /**
     * Dla faktury, o której mowa w art. 106f ust. 3 i 4 ustawy - numery poprzednich faktur zaliczkowych
     *
     * @var string $nrFaZaliczkowej
     */
    private $nrFaZaliczkowej = null;

    /**
     * Gets as kodWaluty
     *
     * Trzyliterowy kod waluty (ISO-4217), w której faktura, zamówienie lub umowa zostały wystawione
     *
     * @return string
     */
    public function getKodWaluty()
    {
        return $this->kodWaluty;
    }

    /**
     * Sets a new kodWaluty
     *
     * Trzyliterowy kod waluty (ISO-4217), w której faktura, zamówienie lub umowa zostały wystawione
     *
     * @param string $kodWaluty
     * @return self
     */
    public function setKodWaluty($kodWaluty)
    {
        $this->kodWaluty = $kodWaluty;
        return $this;
    }

    /**
     * Gets as p1
     *
     * Data wystawienia
     *
     * @return \DateTime
     */
    public function getP1()
    {
        return $this->p1;
    }

    /**
     * Sets a new p1
     *
     * Data wystawienia
     *
     * @param \DateTime $p1
     * @return self
     */
    public function setP1(\DateTime $p1)
    {
        $this->p1 = $p1;
        return $this;
    }

    /**
     * Gets as p2A
     *
     * Kolejny numer faktury, nadany w ramach jednej lub więcej serii, który w sposób jednoznaczny indentyfikuje fakturę
     *
     * @return string
     */
    public function getP2A()
    {
        return $this->p2A;
    }

    /**
     * Sets a new p2A
     *
     * Kolejny numer faktury, nadany w ramach jednej lub więcej serii, który w sposób jednoznaczny indentyfikuje fakturę
     *
     * @param string $p2A
     * @return self
     */
    public function setP2A($p2A)
    {
        $this->p2A = $p2A;
        return $this;
    }

    /**
     * Gets as p3A
     *
     * Imię i nazwisko lub nazwa nabywcy towarów lub usług. Pole opcjonalne dla przypadku określonego w art. 106e ust. 5 pkt 3 ustawy
     *
     * @return string
     */
    public function getP3A()
    {
        return $this->p3A;
    }

    /**
     * Sets a new p3A
     *
     * Imię i nazwisko lub nazwa nabywcy towarów lub usług. Pole opcjonalne dla przypadku określonego w art. 106e ust. 5 pkt 3 ustawy
     *
     * @param string $p3A
     * @return self
     */
    public function setP3A($p3A)
    {
        $this->p3A = $p3A;
        return $this;
    }

    /**
     * Gets as p3B
     *
     * Adres nabywcy. Pole opcjonalne dla przypadków określonych w art. 106e ust. 5 pkt 3 ustawy oraz w § 3 pkt 4 rozporządzenia Ministra Finansów z dnia 3 grudnia 2013 r. w sprawie wystawiania faktur (Dz. U. z 2013 r., poz. 1485)
     *
     * @return string
     */
    public function getP3B()
    {
        return $this->p3B;
    }

    /**
     * Sets a new p3B
     *
     * Adres nabywcy. Pole opcjonalne dla przypadków określonych w art. 106e ust. 5 pkt 3 ustawy oraz w § 3 pkt 4 rozporządzenia Ministra Finansów z dnia 3 grudnia 2013 r. w sprawie wystawiania faktur (Dz. U. z 2013 r., poz. 1485)
     *
     * @param string $p3B
     * @return self
     */
    public function setP3B($p3B)
    {
        $this->p3B = $p3B;
        return $this;
    }

    /**
     * Gets as p3C
     *
     * Imię i nazwisko lub nazwa sprzedawcy towarów lub usług
     *
     * @return string
     */
    public function getP3C()
    {
        return $this->p3C;
    }

    /**
     * Sets a new p3C
     *
     * Imię i nazwisko lub nazwa sprzedawcy towarów lub usług
     *
     * @param string $p3C
     * @return self
     */
    public function setP3C($p3C)
    {
        $this->p3C = $p3C;
        return $this;
    }

    /**
     * Gets as p3D
     *
     * Adres sprzedawcy
     *
     * @return string
     */
    public function getP3D()
    {
        return $this->p3D;
    }

    /**
     * Sets a new p3D
     *
     * Adres sprzedawcy
     *
     * @param string $p3D
     * @return self
     */
    public function setP3D($p3D)
    {
        $this->p3D = $p3D;
        return $this;
    }

    /**
     * Gets as p4A
     *
     * Kod (prefiks) podatnika VAT UE dla przypadków określonych w art. 97 ust. 10 ustawy
     *
     * @return string
     */
    public function getP4A()
    {
        return $this->p4A;
    }

    /**
     * Sets a new p4A
     *
     * Kod (prefiks) podatnika VAT UE dla przypadków określonych w art. 97 ust. 10 ustawy
     *
     * @param string $p4A
     * @return self
     */
    public function setP4A($p4A)
    {
        $this->p4A = $p4A;
        return $this;
    }

    /**
     * Gets as p4B
     *
     * Numer, za pomocą którego podatnik jest zidentyfikowany na potrzeby podatku, z zastrzeżeniem pkt 24 lit. a ustawy. Pole opcjonalne dla przypadku określonego w art. 106e ust. 4 pkt 2 ustawy. W przypadku faktur wystawianych w procedurze uproszczonej przez drugiego w kolejności podatnika, o którym mowa w art. 135 ust. 1 pkt 4 lit. b i c oraz ust. 2 ustawy, numer, o którym mowa w art. 136 ust. 1 pkt 3 ustawy
     *
     * @return string
     */
    public function getP4B()
    {
        return $this->p4B;
    }

    /**
     * Sets a new p4B
     *
     * Numer, za pomocą którego podatnik jest zidentyfikowany na potrzeby podatku, z zastrzeżeniem pkt 24 lit. a ustawy. Pole opcjonalne dla przypadku określonego w art. 106e ust. 4 pkt 2 ustawy. W przypadku faktur wystawianych w procedurze uproszczonej przez drugiego w kolejności podatnika, o którym mowa w art. 135 ust. 1 pkt 4 lit. b i c oraz ust. 2 ustawy, numer, o którym mowa w art. 136 ust. 1 pkt 3 ustawy
     *
     * @param string $p4B
     * @return self
     */
    public function setP4B($p4B)
    {
        $this->p4B = $p4B;
        return $this;
    }

    /**
     * Gets as p5A
     *
     * Kod (prefiks) nabywcy - podatnika VAT UE dla przypadków określonych w art. 97 ust. 10 ustawy
     *
     * @return string
     */
    public function getP5A()
    {
        return $this->p5A;
    }

    /**
     * Sets a new p5A
     *
     * Kod (prefiks) nabywcy - podatnika VAT UE dla przypadków określonych w art. 97 ust. 10 ustawy
     *
     * @param string $p5A
     * @return self
     */
    public function setP5A($p5A)
    {
        $this->p5A = $p5A;
        return $this;
    }

    /**
     * Gets as p5B
     *
     * Numer, za pomocą którego nabywca towarów lub usług jest identyfikowany dla podatku lub podatku od wartości dodanej, pod którym otrzymał on towary lub usługi, z zastrzeżeniem pkt 24 lit. b ustawy. Pole opcjonalne dla przypadku określonego w art. 106e ust. 5 pkt 2 ustawy. W przypadku faktur wystawianych w procedurze uproszczonej przez drugiego w kolejności podatnika, o którym mowa w art. 135 ust. 1 pkt 4 lit. b i c oraz ust. 2 ustawy, numer, o którym mowa w art. 136 ust. 1 pkt 4 ustawy
     *
     * @return string
     */
    public function getP5B()
    {
        return $this->p5B;
    }

    /**
     * Sets a new p5B
     *
     * Numer, za pomocą którego nabywca towarów lub usług jest identyfikowany dla podatku lub podatku od wartości dodanej, pod którym otrzymał on towary lub usługi, z zastrzeżeniem pkt 24 lit. b ustawy. Pole opcjonalne dla przypadku określonego w art. 106e ust. 5 pkt 2 ustawy. W przypadku faktur wystawianych w procedurze uproszczonej przez drugiego w kolejności podatnika, o którym mowa w art. 135 ust. 1 pkt 4 lit. b i c oraz ust. 2 ustawy, numer, o którym mowa w art. 136 ust. 1 pkt 4 ustawy
     *
     * @param string $p5B
     * @return self
     */
    public function setP5B($p5B)
    {
        $this->p5B = $p5B;
        return $this;
    }

    /**
     * Gets as p6
     *
     * Data dokonania lub zakończenia dostawy towarów lub wykonania usługi lub data otrzymania zapłaty, o której mowa w art. 106b ust. 1 pkt 4, o ile taka data jest określona i różni się od daty wystawienia faktury
     *
     * @return \DateTime
     */
    public function getP6()
    {
        return $this->p6;
    }

    /**
     * Sets a new p6
     *
     * Data dokonania lub zakończenia dostawy towarów lub wykonania usługi lub data otrzymania zapłaty, o której mowa w art. 106b ust. 1 pkt 4, o ile taka data jest określona i różni się od daty wystawienia faktury
     *
     * @param \DateTime $p6
     * @return self
     */
    public function setP6(\DateTime $p6)
    {
        $this->p6 = $p6;
        return $this;
    }

    /**
     * Gets as p131
     *
     * Suma wartości sprzedaży netto ze stawką podstawową - aktualnie 23% albo 22%. W przypadku faktur zaliczkowych, kwota zaliczki netto
     *
     * @return float
     */
    public function getP131()
    {
        return $this->p131;
    }

    /**
     * Sets a new p131
     *
     * Suma wartości sprzedaży netto ze stawką podstawową - aktualnie 23% albo 22%. W przypadku faktur zaliczkowych, kwota zaliczki netto
     *
     * @param float $p131
     * @return self
     */
    public function setP131($p131)
    {
        $this->p131 = $p131;
        return $this;
    }

    /**
     * Gets as p141
     *
     * Kwota podatku od sumy wartości sprzedaży netto ze stawką podstawową - aktualnie 23% albo 22%. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @return float
     */
    public function getP141()
    {
        return $this->p141;
    }

    /**
     * Sets a new p141
     *
     * Kwota podatku od sumy wartości sprzedaży netto ze stawką podstawową - aktualnie 23% albo 22%. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @param float $p141
     * @return self
     */
    public function setP141($p141)
    {
        $this->p141 = $p141;
        return $this;
    }

    /**
     * Gets as p141W
     *
     * W przypadku gdy faktura jest wystawiona w walucie obcej, kwota podatku od sumy wartości sprzedaży netto ze stawką podstawową, przeliczona zgodnie z art. 31a w związku z art. 106e ust. 11 ustawy - aktualnie 23% albo 22%. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @return float
     */
    public function getP141W()
    {
        return $this->p141W;
    }

    /**
     * Sets a new p141W
     *
     * W przypadku gdy faktura jest wystawiona w walucie obcej, kwota podatku od sumy wartości sprzedaży netto ze stawką podstawową, przeliczona zgodnie z art. 31a w związku z art. 106e ust. 11 ustawy - aktualnie 23% albo 22%. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @param float $p141W
     * @return self
     */
    public function setP141W($p141W)
    {
        $this->p141W = $p141W;
        return $this;
    }

    /**
     * Gets as p132
     *
     * Suma wartości sprzedaży netto ze stawką obniżoną pierwszą - aktualnie 8 % albo 7%. W przypadku faktur zaliczkowych, kwota zaliczki netto
     *
     * @return float
     */
    public function getP132()
    {
        return $this->p132;
    }

    /**
     * Sets a new p132
     *
     * Suma wartości sprzedaży netto ze stawką obniżoną pierwszą - aktualnie 8 % albo 7%. W przypadku faktur zaliczkowych, kwota zaliczki netto
     *
     * @param float $p132
     * @return self
     */
    public function setP132($p132)
    {
        $this->p132 = $p132;
        return $this;
    }

    /**
     * Gets as p142
     *
     * Kwota podatku od sumy wartości sprzedaży netto ze stawką obniżoną pierwszą - aktualnie 8% albo 7%. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @return float
     */
    public function getP142()
    {
        return $this->p142;
    }

    /**
     * Sets a new p142
     *
     * Kwota podatku od sumy wartości sprzedaży netto ze stawką obniżoną pierwszą - aktualnie 8% albo 7%. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @param float $p142
     * @return self
     */
    public function setP142($p142)
    {
        $this->p142 = $p142;
        return $this;
    }

    /**
     * Gets as p142W
     *
     * W przypadku gdy faktura jest wystawiona w walucie obcej, kwota podatku od sumy wartości sprzedaży netto ze stawką obniżoną, przeliczona zgodnie z art. 31a w związku z art. 106e ust. 11 ustawy - aktualnie 8% albo 7%. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @return float
     */
    public function getP142W()
    {
        return $this->p142W;
    }

    /**
     * Sets a new p142W
     *
     * W przypadku gdy faktura jest wystawiona w walucie obcej, kwota podatku od sumy wartości sprzedaży netto ze stawką obniżoną, przeliczona zgodnie z art. 31a w związku z art. 106e ust. 11 ustawy - aktualnie 8% albo 7%. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @param float $p142W
     * @return self
     */
    public function setP142W($p142W)
    {
        $this->p142W = $p142W;
        return $this;
    }

    /**
     * Gets as p133
     *
     * Suma wartości sprzedaży netto ze stawką obniżoną drugą - aktualnie 5%. W przypadku faktur zaliczkowych, kwota zaliczki netto
     *
     * @return float
     */
    public function getP133()
    {
        return $this->p133;
    }

    /**
     * Sets a new p133
     *
     * Suma wartości sprzedaży netto ze stawką obniżoną drugą - aktualnie 5%. W przypadku faktur zaliczkowych, kwota zaliczki netto
     *
     * @param float $p133
     * @return self
     */
    public function setP133($p133)
    {
        $this->p133 = $p133;
        return $this;
    }

    /**
     * Gets as p143
     *
     * Kwota podatku od sumy wartości sprzedaży netto ze stawką obniżoną drugą - aktualnie 5%. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @return float
     */
    public function getP143()
    {
        return $this->p143;
    }

    /**
     * Sets a new p143
     *
     * Kwota podatku od sumy wartości sprzedaży netto ze stawką obniżoną drugą - aktualnie 5%. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @param float $p143
     * @return self
     */
    public function setP143($p143)
    {
        $this->p143 = $p143;
        return $this;
    }

    /**
     * Gets as p143W
     *
     * W przypadku gdy faktura jest wystawiona w walucie obcej, kwota podatku od sumy wartości sprzedaży netto ze stawką obniżoną drugą, przeliczona zgodnie z art. 31a w związku z art. 106e ust. 11 ustawy - aktualnie 5%. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @return float
     */
    public function getP143W()
    {
        return $this->p143W;
    }

    /**
     * Sets a new p143W
     *
     * W przypadku gdy faktura jest wystawiona w walucie obcej, kwota podatku od sumy wartości sprzedaży netto ze stawką obniżoną drugą, przeliczona zgodnie z art. 31a w związku z art. 106e ust. 11 ustawy - aktualnie 5%. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @param float $p143W
     * @return self
     */
    public function setP143W($p143W)
    {
        $this->p143W = $p143W;
        return $this;
    }

    /**
     * Gets as p134
     *
     * Suma wartości sprzedaży netto ze stawką obniżoną trzecią w walucie, w której faktura została wystawiona - procedura odwrotnego obciążenia, dla której podatnikiem jest nabywca zgodnie z art. 17 ust. 1 pkt 7 i 8 ustawy VAT oraz dla stawki 4% w przypadku ryczałtu dla taksówek osobowych. W przypadku faktur zaliczkowych, kwota zaliczki netto
     *
     * @return float
     */
    public function getP134()
    {
        return $this->p134;
    }

    /**
     * Sets a new p134
     *
     * Suma wartości sprzedaży netto ze stawką obniżoną trzecią w walucie, w której faktura została wystawiona - procedura odwrotnego obciążenia, dla której podatnikiem jest nabywca zgodnie z art. 17 ust. 1 pkt 7 i 8 ustawy VAT oraz dla stawki 4% w przypadku ryczałtu dla taksówek osobowych. W przypadku faktur zaliczkowych, kwota zaliczki netto
     *
     * @param float $p134
     * @return self
     */
    public function setP134($p134)
    {
        $this->p134 = $p134;
        return $this;
    }

    /**
     * Gets as p144
     *
     * Kwota "0" dla procedury odwrotnego obciążenia, dla której podatnikiem jest nabywca zgodnie z art. 17 ust. 1 pkt 7 i 8 ustawy VAT oraz kwota podatku od sumy wartości sprzedaży netto dla stawki 4% w walucie, w której faktura została wystawiona w przypadku ryczałtu dla taksówek osobowych. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @return float
     */
    public function getP144()
    {
        return $this->p144;
    }

    /**
     * Sets a new p144
     *
     * Kwota "0" dla procedury odwrotnego obciążenia, dla której podatnikiem jest nabywca zgodnie z art. 17 ust. 1 pkt 7 i 8 ustawy VAT oraz kwota podatku od sumy wartości sprzedaży netto dla stawki 4% w walucie, w której faktura została wystawiona w przypadku ryczałtu dla taksówek osobowych. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @param float $p144
     * @return self
     */
    public function setP144($p144)
    {
        $this->p144 = $p144;
        return $this;
    }

    /**
     * Gets as p144W
     *
     * W przypadku gdy faktura jest wystawiona w walucie obcej, kwota "0" dla procedury odwrotnego obciążenia, dla której podatnikiem jest nabywca zgodnie z art. 17 ust. 1 pkt 7 i 8 ustawy VAT oraz kwota podatku od sumy wartości sprzedaży netto w walucie obcej dla stawki 4% w przypadku ryczałtu dla taksówek osobowych, przeliczona zgodnie z art. 31a w związku z art. 106e ust. 11 ustawy. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @return float
     */
    public function getP144W()
    {
        return $this->p144W;
    }

    /**
     * Sets a new p144W
     *
     * W przypadku gdy faktura jest wystawiona w walucie obcej, kwota "0" dla procedury odwrotnego obciążenia, dla której podatnikiem jest nabywca zgodnie z art. 17 ust. 1 pkt 7 i 8 ustawy VAT oraz kwota podatku od sumy wartości sprzedaży netto w walucie obcej dla stawki 4% w przypadku ryczałtu dla taksówek osobowych, przeliczona zgodnie z art. 31a w związku z art. 106e ust. 11 ustawy. W przypadku faktur zaliczkowych, kwota podatku wyliczona według wzoru, o którym mowa w art. 106f ust. 1 pkt 3 ustawy
     *
     * @param float $p144W
     * @return self
     */
    public function setP144W($p144W)
    {
        $this->p144W = $p144W;
        return $this;
    }

    /**
     * Gets as p135
     *
     * Suma wartości sprzedaży netto dla transakcji dostawy towarów oraz świadczenia usług poza terytorium kraju. W przypadku faktur zaliczkowych, kwota zaliczki netto. Pole opcjonalne dla przypadków określonych w art. 106e ust.2 i 3 oraz ust. 4 pkt 1, a także ust. 4 pkt 3 i ust. 5 pkt 1-3 ustawy
     *
     * @return float
     */
    public function getP135()
    {
        return $this->p135;
    }

    /**
     * Sets a new p135
     *
     * Suma wartości sprzedaży netto dla transakcji dostawy towarów oraz świadczenia usług poza terytorium kraju. W przypadku faktur zaliczkowych, kwota zaliczki netto. Pole opcjonalne dla przypadków określonych w art. 106e ust.2 i 3 oraz ust. 4 pkt 1, a także ust. 4 pkt 3 i ust. 5 pkt 1-3 ustawy
     *
     * @param float $p135
     * @return self
     */
    public function setP135($p135)
    {
        $this->p135 = $p135;
        return $this;
    }

    /**
     * Gets as p136
     *
     * Suma wartości sprzedaży netto ze stawką 0%. W przypadku faktur zaliczkowych, kwota zaliczki netto. Pole opcjonalne dla przypadków określonych w art. 106e ust. 2 i 3, a także ust. 4 pkt 3 i ust. 5 pkt 1-3 ustawy
     *
     * @return float
     */
    public function getP136()
    {
        return $this->p136;
    }

    /**
     * Sets a new p136
     *
     * Suma wartości sprzedaży netto ze stawką 0%. W przypadku faktur zaliczkowych, kwota zaliczki netto. Pole opcjonalne dla przypadków określonych w art. 106e ust. 2 i 3, a także ust. 4 pkt 3 i ust. 5 pkt 1-3 ustawy
     *
     * @param float $p136
     * @return self
     */
    public function setP136($p136)
    {
        $this->p136 = $p136;
        return $this;
    }

    /**
     * Gets as p137
     *
     * Suma wartości sprzedaży zwolnionej. W przypadku faktur zaliczkowych, kwota zaliczki netto. Pola opcjonalne dla przypadków określonych w art. 106e ust. 2 i 3, a także ust. 4 pkt 3 i ust. 5 pkt 1-3 ustawy
     *
     * @return float
     */
    public function getP137()
    {
        return $this->p137;
    }

    /**
     * Sets a new p137
     *
     * Suma wartości sprzedaży zwolnionej. W przypadku faktur zaliczkowych, kwota zaliczki netto. Pola opcjonalne dla przypadków określonych w art. 106e ust. 2 i 3, a także ust. 4 pkt 3 i ust. 5 pkt 1-3 ustawy
     *
     * @param float $p137
     * @return self
     */
    public function setP137($p137)
    {
        $this->p137 = $p137;
        return $this;
    }

    /**
     * Gets as p15
     *
     * Kwota należności ogółem lub w przypadku faktur zaliczkowych, otrzymana kwota zapłaty
     *
     * @return float
     */
    public function getP15()
    {
        return $this->p15;
    }

    /**
     * Sets a new p15
     *
     * Kwota należności ogółem lub w przypadku faktur zaliczkowych, otrzymana kwota zapłaty
     *
     * @param float $p15
     * @return self
     */
    public function setP15($p15)
    {
        $this->p15 = $p15;
        return $this;
    }

    /**
     * Gets as p16
     *
     * W przypadku dostawy towarów lub świadczenia usług, w odniesieniu do których obowiązek podatkowy powstaje zgodnie z art. 19a ust. 5 pkt 1 lub art. 21 ust. 1 - wyrazy "metoda kasowa", należy podać wartość "true"; w przeciwnym przypadku - wartość "false"
     *
     * @return bool
     */
    public function getP16()
    {
        return $this->p16;
    }

    /**
     * Sets a new p16
     *
     * W przypadku dostawy towarów lub świadczenia usług, w odniesieniu do których obowiązek podatkowy powstaje zgodnie z art. 19a ust. 5 pkt 1 lub art. 21 ust. 1 - wyrazy "metoda kasowa", należy podać wartość "true"; w przeciwnym przypadku - wartość "false"
     *
     * @param bool $p16
     * @return self
     */
    public function setP16($p16)
    {
        $this->p16 = $p16;
        return $this;
    }

    /**
     * Gets as p17
     *
     * W przypadku faktur, o których mowa w art. 106d ust. 1 - wyraz "samofakturowanie", należy podać wartość "true"; w przeciwnym przypadku - wartość "false"
     *
     * @return bool
     */
    public function getP17()
    {
        return $this->p17;
    }

    /**
     * Sets a new p17
     *
     * W przypadku faktur, o których mowa w art. 106d ust. 1 - wyraz "samofakturowanie", należy podać wartość "true"; w przeciwnym przypadku - wartość "false"
     *
     * @param bool $p17
     * @return self
     */
    public function setP17($p17)
    {
        $this->p17 = $p17;
        return $this;
    }

    /**
     * Gets as p18
     *
     * W przypadku dostawy towarów lub wykonania usługi, dla których obowiązanym do rozliczenia podatku od wartości dodanej lub podatku o podobnym charakterze jest nabywca towaru lub usługi - wyrazy "odwrotne obciążenie", należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @return bool
     */
    public function getP18()
    {
        return $this->p18;
    }

    /**
     * Sets a new p18
     *
     * W przypadku dostawy towarów lub wykonania usługi, dla których obowiązanym do rozliczenia podatku od wartości dodanej lub podatku o podobnym charakterze jest nabywca towaru lub usługi - wyrazy "odwrotne obciążenie", należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @param bool $p18
     * @return self
     */
    public function setP18($p18)
    {
        $this->p18 = $p18;
        return $this;
    }

    /**
     * Gets as p18A
     *
     * W przypadku faktur, w których kwota należności ogółem stanowi kwotę, o której mowa w art. 19 pkt 2 ustawy z dnia 6 marca 2018 r. - Prawo przedsiębiorców, obejmujących dokonaną na rzecz podatnika dostawę towarów lub świadczenie usług wymienionych w załączniku nr 15 do ustawy - wyrazy „mechanizm podzielonej płatności”, należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @return bool
     */
    public function getP18A()
    {
        return $this->p18A;
    }

    /**
     * Sets a new p18A
     *
     * W przypadku faktur, w których kwota należności ogółem stanowi kwotę, o której mowa w art. 19 pkt 2 ustawy z dnia 6 marca 2018 r. - Prawo przedsiębiorców, obejmujących dokonaną na rzecz podatnika dostawę towarów lub świadczenie usług wymienionych w załączniku nr 15 do ustawy - wyrazy „mechanizm podzielonej płatności”, należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @param bool $p18A
     * @return self
     */
    public function setP18A($p18A)
    {
        $this->p18A = $p18A;
        return $this;
    }

    /**
     * Gets as p19
     *
     * W przypadku dostawy towarów lub świadczenia usług zwolnionych od podatku na podstawie art. 43 ust. 1, art. 113 ust. 1 i 9 albo przepisów wydanych na podstawie art. 82 ust. 3 należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @return bool
     */
    public function getP19()
    {
        return $this->p19;
    }

    /**
     * Sets a new p19
     *
     * W przypadku dostawy towarów lub świadczenia usług zwolnionych od podatku na podstawie art. 43 ust. 1, art. 113 ust. 1 i 9 albo przepisów wydanych na podstawie art. 82 ust. 3 należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @param bool $p19
     * @return self
     */
    public function setP19($p19)
    {
        $this->p19 = $p19;
        return $this;
    }

    /**
     * Gets as p19A
     *
     * Jeśli pole P_19 równa się "true" - należy wskazać przepis ustawy albo aktu wydanego na podstawie ustawy, na podstawie którego podatnik stosuje zwolnienie od podatku
     *
     * @return string
     */
    public function getP19A()
    {
        return $this->p19A;
    }

    /**
     * Sets a new p19A
     *
     * Jeśli pole P_19 równa się "true" - należy wskazać przepis ustawy albo aktu wydanego na podstawie ustawy, na podstawie którego podatnik stosuje zwolnienie od podatku
     *
     * @param string $p19A
     * @return self
     */
    public function setP19A($p19A)
    {
        $this->p19A = $p19A;
        return $this;
    }

    /**
     * Gets as p19B
     *
     * Jeśli pole P_19 równa się "true" - należy wskazać przepis dyrektywy 2006/112/WE, który zwalnia od podatku taką dostawę towarów lub takie świadczenie usług
     *
     * @return string
     */
    public function getP19B()
    {
        return $this->p19B;
    }

    /**
     * Sets a new p19B
     *
     * Jeśli pole P_19 równa się "true" - należy wskazać przepis dyrektywy 2006/112/WE, który zwalnia od podatku taką dostawę towarów lub takie świadczenie usług
     *
     * @param string $p19B
     * @return self
     */
    public function setP19B($p19B)
    {
        $this->p19B = $p19B;
        return $this;
    }

    /**
     * Gets as p19C
     *
     * Jeśli pole P_19 równa się "true" - należy wskazać inną podstawę prawną wskazującą na to, że dostawa towarów lub świadczenie usług korzysta ze zwolnienia
     *
     * @return string
     */
    public function getP19C()
    {
        return $this->p19C;
    }

    /**
     * Sets a new p19C
     *
     * Jeśli pole P_19 równa się "true" - należy wskazać inną podstawę prawną wskazującą na to, że dostawa towarów lub świadczenie usług korzysta ze zwolnienia
     *
     * @param string $p19C
     * @return self
     */
    public function setP19C($p19C)
    {
        $this->p19C = $p19C;
        return $this;
    }

    /**
     * Gets as p20
     *
     * W przypadku, o którym mowa w art. 106c ustawy należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @return bool
     */
    public function getP20()
    {
        return $this->p20;
    }

    /**
     * Sets a new p20
     *
     * W przypadku, o którym mowa w art. 106c ustawy należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @param bool $p20
     * @return self
     */
    public function setP20($p20)
    {
        $this->p20 = $p20;
        return $this;
    }

    /**
     * Gets as p20A
     *
     * Jeśli pole P_20 równa się "true" - należy podać nazwę organu egzekucyjnego lub imię i nazwisko komornika sądowego
     *
     * @return string
     */
    public function getP20A()
    {
        return $this->p20A;
    }

    /**
     * Sets a new p20A
     *
     * Jeśli pole P_20 równa się "true" - należy podać nazwę organu egzekucyjnego lub imię i nazwisko komornika sądowego
     *
     * @param string $p20A
     * @return self
     */
    public function setP20A($p20A)
    {
        $this->p20A = $p20A;
        return $this;
    }

    /**
     * Gets as p20B
     *
     * Jeśli pole P_20 równa się "true" - należy podać adres organu egzekucyjnego lub komornika sądowego
     *
     * @return string
     */
    public function getP20B()
    {
        return $this->p20B;
    }

    /**
     * Sets a new p20B
     *
     * Jeśli pole P_20 równa się "true" - należy podać adres organu egzekucyjnego lub komornika sądowego
     *
     * @param string $p20B
     * @return self
     */
    public function setP20B($p20B)
    {
        $this->p20B = $p20B;
        return $this;
    }

    /**
     * Gets as p21
     *
     * W przypadku faktur wystawianych w imieniu i na rzecz podatnika przez jego przedstawiciela podatkowego należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @return bool
     */
    public function getP21()
    {
        return $this->p21;
    }

    /**
     * Sets a new p21
     *
     * W przypadku faktur wystawianych w imieniu i na rzecz podatnika przez jego przedstawiciela podatkowego należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @param bool $p21
     * @return self
     */
    public function setP21($p21)
    {
        $this->p21 = $p21;
        return $this;
    }

    /**
     * Gets as p21A
     *
     * Jeśli pole P_21 równa się "true" - należy podać nazwę lub imię i nazwisko przedstawiciela podatkowego
     *
     * @return string
     */
    public function getP21A()
    {
        return $this->p21A;
    }

    /**
     * Sets a new p21A
     *
     * Jeśli pole P_21 równa się "true" - należy podać nazwę lub imię i nazwisko przedstawiciela podatkowego
     *
     * @param string $p21A
     * @return self
     */
    public function setP21A($p21A)
    {
        $this->p21A = $p21A;
        return $this;
    }

    /**
     * Gets as p21B
     *
     * Jeśli pole P_21 równa się "true" - należy podać adres przedstawiciela podatkowego
     *
     * @return string
     */
    public function getP21B()
    {
        return $this->p21B;
    }

    /**
     * Sets a new p21B
     *
     * Jeśli pole P_21 równa się "true" - należy podać adres przedstawiciela podatkowego
     *
     * @param string $p21B
     * @return self
     */
    public function setP21B($p21B)
    {
        $this->p21B = $p21B;
        return $this;
    }

    /**
     * Gets as p21C
     *
     * Jeśli pole P_21 równa się "true" - należy podać numer przedstawiciela podatkowego, za pomocą którego jest on zidentyfikowany na potrzeby podatku
     *
     * @return string
     */
    public function getP21C()
    {
        return $this->p21C;
    }

    /**
     * Sets a new p21C
     *
     * Jeśli pole P_21 równa się "true" - należy podać numer przedstawiciela podatkowego, za pomocą którego jest on zidentyfikowany na potrzeby podatku
     *
     * @param string $p21C
     * @return self
     */
    public function setP21C($p21C)
    {
        $this->p21C = $p21C;
        return $this;
    }

    /**
     * Gets as p22
     *
     * W przypadku gdy przedmiotem wewnątrzwspólnotowej dostawy są nowe środki transportu należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @return bool
     */
    public function getP22()
    {
        return $this->p22;
    }

    /**
     * Sets a new p22
     *
     * W przypadku gdy przedmiotem wewnątrzwspólnotowej dostawy są nowe środki transportu należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @param bool $p22
     * @return self
     */
    public function setP22($p22)
    {
        $this->p22 = $p22;
        return $this;
    }

    /**
     * Gets as p22A
     *
     * Jeśli pole P_22 równa się "true" - należy podać datę dopuszczenia nowego środka transportu do użytku
     *
     * @return \DateTime
     */
    public function getP22A()
    {
        return $this->p22A;
    }

    /**
     * Sets a new p22A
     *
     * Jeśli pole P_22 równa się "true" - należy podać datę dopuszczenia nowego środka transportu do użytku
     *
     * @param \DateTime $p22A
     * @return self
     */
    public function setP22A(\DateTime $p22A)
    {
        $this->p22A = $p22A;
        return $this;
    }

    /**
     * Gets as p22B
     *
     * Jeśli pole P_22 równa się "true" a dostawa dotyczy pojazdów lądowych, o których mowa w art. 2 pkt 10 lit. a ustawy - należy podać przebieg pojazdu
     *
     * @return string
     */
    public function getP22B()
    {
        return $this->p22B;
    }

    /**
     * Sets a new p22B
     *
     * Jeśli pole P_22 równa się "true" a dostawa dotyczy pojazdów lądowych, o których mowa w art. 2 pkt 10 lit. a ustawy - należy podać przebieg pojazdu
     *
     * @param string $p22B
     * @return self
     */
    public function setP22B($p22B)
    {
        $this->p22B = $p22B;
        return $this;
    }

    /**
     * Gets as p22C
     *
     * Jeśli pole P_22 równa się "true" a dostawa dotyczy jednostek pływających, o których mowa w art. 2 pkt 10 lit. b ustawy, oraz statków powietrznych, o których mowa w art. 2 pkt 10 lit. c ustawy, należy podać liczbę godzin roboczych używania nowego środka transportu
     *
     * @return string
     */
    public function getP22C()
    {
        return $this->p22C;
    }

    /**
     * Sets a new p22C
     *
     * Jeśli pole P_22 równa się "true" a dostawa dotyczy jednostek pływających, o których mowa w art. 2 pkt 10 lit. b ustawy, oraz statków powietrznych, o których mowa w art. 2 pkt 10 lit. c ustawy, należy podać liczbę godzin roboczych używania nowego środka transportu
     *
     * @param string $p22C
     * @return self
     */
    public function setP22C($p22C)
    {
        $this->p22C = $p22C;
        return $this;
    }

    /**
     * Gets as p23
     *
     * W przypadku faktur wystawianych w procedurze uproszczonej przez drugiego w kolejności podatnika, o którym mowa w art. 135 ust. 1 pkt 4 lit. b i c oraz ust. 2, zawierającej adnotację, o której mowa w art. 136 ust. 1 pkt 1 i stwierdzenie, o którym mowa w art. 136 ust. 1 pkt 2 ustawy należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @return bool
     */
    public function getP23()
    {
        return $this->p23;
    }

    /**
     * Sets a new p23
     *
     * W przypadku faktur wystawianych w procedurze uproszczonej przez drugiego w kolejności podatnika, o którym mowa w art. 135 ust. 1 pkt 4 lit. b i c oraz ust. 2, zawierającej adnotację, o której mowa w art. 136 ust. 1 pkt 1 i stwierdzenie, o którym mowa w art. 136 ust. 1 pkt 2 ustawy należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @param bool $p23
     * @return self
     */
    public function setP23($p23)
    {
        $this->p23 = $p23;
        return $this;
    }

    /**
     * Gets as p106E2
     *
     * W przypadku świadczenia usług turystyki, dla których podstawę opodatkowania stanowi zgodnie z art. 119 ust. 1 kwota marży, faktura - w zakresie danych określonych w ust. 1 pkt 1-17 - powinna zawierać wyłącznie dane określone w ust. 1 pkt 1-8 i 15-17, a także wyrazy "procedura marży dla biur podróży", należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @return bool
     */
    public function getP106E2()
    {
        return $this->p106E2;
    }

    /**
     * Sets a new p106E2
     *
     * W przypadku świadczenia usług turystyki, dla których podstawę opodatkowania stanowi zgodnie z art. 119 ust. 1 kwota marży, faktura - w zakresie danych określonych w ust. 1 pkt 1-17 - powinna zawierać wyłącznie dane określone w ust. 1 pkt 1-8 i 15-17, a także wyrazy "procedura marży dla biur podróży", należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @param bool $p106E2
     * @return self
     */
    public function setP106E2($p106E2)
    {
        $this->p106E2 = $p106E2;
        return $this;
    }

    /**
     * Gets as p106E3
     *
     * W przypadku dostawy towarów używanych, dzieł sztuki, przedmiotów kolekcjonerskich i antyków, dla których podstawę opodatkowania stanowi zgodnie z art. 120 ust. 4 i 5 marża, należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @return bool
     */
    public function getP106E3()
    {
        return $this->p106E3;
    }

    /**
     * Sets a new p106E3
     *
     * W przypadku dostawy towarów używanych, dzieł sztuki, przedmiotów kolekcjonerskich i antyków, dla których podstawę opodatkowania stanowi zgodnie z art. 120 ust. 4 i 5 marża, należy podać wartość "true", w przeciwnym przypadku - wartość "false"
     *
     * @param bool $p106E3
     * @return self
     */
    public function setP106E3($p106E3)
    {
        $this->p106E3 = $p106E3;
        return $this;
    }

    /**
     * Gets as p106E3A
     *
     * Jeżeli pole P_106E_3 równa się "true", należy podać wyrazy: "procedura marży - towary używane" lub "procedura marży - dzieła sztuki" lub "procedura marży - przedmioty kolekcjonerskie i antyki"
     *
     * @return string
     */
    public function getP106E3A()
    {
        return $this->p106E3A;
    }

    /**
     * Sets a new p106E3A
     *
     * Jeżeli pole P_106E_3 równa się "true", należy podać wyrazy: "procedura marży - towary używane" lub "procedura marży - dzieła sztuki" lub "procedura marży - przedmioty kolekcjonerskie i antyki"
     *
     * @param string $p106E3A
     * @return self
     */
    public function setP106E3A($p106E3A)
    {
        $this->p106E3A = $p106E3A;
        return $this;
    }

    /**
     * Gets as rodzajFaktury
     *
     * Rodzaj faktury
     *
     * @return string
     */
    public function getRodzajFaktury()
    {
        return $this->rodzajFaktury;
    }

    /**
     * Sets a new rodzajFaktury
     *
     * Rodzaj faktury
     *
     * @param string $rodzajFaktury
     * @return self
     */
    public function setRodzajFaktury($rodzajFaktury)
    {
        $this->rodzajFaktury = $rodzajFaktury;
        return $this;
    }

    /**
     * Gets as przyczynaKorekty
     *
     * Przyczyna korekty dla faktur korygujących
     *
     * @return string
     */
    public function getPrzyczynaKorekty()
    {
        return $this->przyczynaKorekty;
    }

    /**
     * Sets a new przyczynaKorekty
     *
     * Przyczyna korekty dla faktur korygujących
     *
     * @param string $przyczynaKorekty
     * @return self
     */
    public function setPrzyczynaKorekty($przyczynaKorekty)
    {
        $this->przyczynaKorekty = $przyczynaKorekty;
        return $this;
    }

    /**
     * Gets as nrFaKorygowanej
     *
     * Numer faktury korygowanej
     *
     * @return string
     */
    public function getNrFaKorygowanej()
    {
        return $this->nrFaKorygowanej;
    }

    /**
     * Sets a new nrFaKorygowanej
     *
     * Numer faktury korygowanej
     *
     * @param string $nrFaKorygowanej
     * @return self
     */
    public function setNrFaKorygowanej($nrFaKorygowanej)
    {
        $this->nrFaKorygowanej = $nrFaKorygowanej;
        return $this;
    }

    /**
     * Gets as okresFaKorygowanej
     *
     * Dla faktury korygującej - okres, do którego odnosi się udzielany opust lub obniżka, w przypadku gdy podatnik udziela opustu lub obniżki ceny w odniesieniu do wszystkich dostaw towarów lub usług dokonanych lub świadczonych na rzecz jednego odbiorcy w danym okresie
     *
     * @return string
     */
    public function getOkresFaKorygowanej()
    {
        return $this->okresFaKorygowanej;
    }

    /**
     * Sets a new okresFaKorygowanej
     *
     * Dla faktury korygującej - okres, do którego odnosi się udzielany opust lub obniżka, w przypadku gdy podatnik udziela opustu lub obniżki ceny w odniesieniu do wszystkich dostaw towarów lub usług dokonanych lub świadczonych na rzecz jednego odbiorcy w danym okresie
     *
     * @param string $okresFaKorygowanej
     * @return self
     */
    public function setOkresFaKorygowanej($okresFaKorygowanej)
    {
        $this->okresFaKorygowanej = $okresFaKorygowanej;
        return $this;
    }

    /**
     * Gets as nrFaZaliczkowej
     *
     * Dla faktury, o której mowa w art. 106f ust. 3 i 4 ustawy - numery poprzednich faktur zaliczkowych
     *
     * @return string
     */
    public function getNrFaZaliczkowej()
    {
        return $this->nrFaZaliczkowej;
    }

    /**
     * Sets a new nrFaZaliczkowej
     *
     * Dla faktury, o której mowa w art. 106f ust. 3 i 4 ustawy - numery poprzednich faktur zaliczkowych
     *
     * @param string $nrFaZaliczkowej
     * @return self
     */
    public function setNrFaZaliczkowej($nrFaZaliczkowej)
    {
        $this->nrFaZaliczkowej = $nrFaZaliczkowej;
        return $this;
    }


}

