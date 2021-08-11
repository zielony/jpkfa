<?php

namespace JpkFa\Jpk\JPK;

/**
 * Class representing FakturaWierszAType
 */
class FakturaWierszAType
{

    /**
     * Kolejny numer faktury, nadany w ramach jednej lub więcej serii, który w sposób jednoznaczny indentyfikuje fakturę
     *
     * @var string $p2B
     */
    private $p2B = null;

    /**
     * Nazwa (rodzaj) towaru lub usługi. Pole opcjonalne wyłącznie dla przypadku określonego w art 106j ust. 3 pkt 2 ustawy (faktura korekta)
     *
     * @var string $p7
     */
    private $p7 = null;

    /**
     * Miara dostarczonych towarów lub zakres wykonanych usług. Pole opcjonalne dla przypadku określonego w art. 106e ust. 5 pkt 3 ustawy
     *
     * @var string $p8A
     */
    private $p8A = null;

    /**
     * Ilość (liczba) dostarczonych towarów lub zakres wykonanych usług. Pole opcjonalne dla przypadku określonego w art. 106e ust. 5 pkt 3 ustawy
     *
     * @var float $p8B
     */
    private $p8B = null;

    /**
     * Cena jednostkowa towaru lub usługi bez kwoty podatku (cena jednostkowa netto). Pole opcjonalne dla przypadków określonych w art. 106e ust. 2 i 3 oraz ust. 5 pkt 3 ustawy
     *
     * @var float $p9A
     */
    private $p9A = null;

    /**
     * Cena wraz z kwotą podatku (cena jednostkowa brutto), w przypadku zastosowania art. 106e ust. 7 i 8 ustawy
     *
     * @var float $p9B
     */
    private $p9B = null;

    /**
     * Kwoty wszelkich opustów lub obniżek cen, w tym w formie rabatu z tytułu wcześniejszej zapłaty, o ile nie zostały one uwzględnione w cenie jednostkowej netto. Pole opcjonalne dla przypadków określonych w art. 106e ust. 2 i 3 oraz ust. 5 pkt 1 ustawy
     *
     * @var float $p10
     */
    private $p10 = null;

    /**
     * Wartość dostarczonych towarów lub wykonanych usług, objętych transakcją, bez kwoty podatku (wartość sprzedaży netto). Pole opcjonalne dla przypadków określonych w art. 106e ust. 2 i 3 oraz ust. 5 pkt 3 ustawy
     *
     * @var float $p11
     */
    private $p11 = null;

    /**
     * Wartość sprzedaży brutto, w przypadku zastosowania art. 106e ust. 7 i 8 ustawy
     *
     * @var float $p11A
     */
    private $p11A = null;

    /**
     * Stawka podatku. Pole opcjonalne dla przypadków określonych w art. 106e ust. 2, 3, 4 pkt 3 i ust. 5 pkt 3 ustawy
     *
     * @var string $p12
     */
    private $p12 = null;

    /**
     * Gets as p2B
     *
     * Kolejny numer faktury, nadany w ramach jednej lub więcej serii, który w sposób jednoznaczny indentyfikuje fakturę
     *
     * @return string
     */
    public function getP2B()
    {
        return $this->p2B;
    }

    /**
     * Sets a new p2B
     *
     * Kolejny numer faktury, nadany w ramach jednej lub więcej serii, który w sposób jednoznaczny indentyfikuje fakturę
     *
     * @param string $p2B
     * @return self
     */
    public function setP2B($p2B)
    {
        $this->p2B = $p2B;
        return $this;
    }

    /**
     * Gets as p7
     *
     * Nazwa (rodzaj) towaru lub usługi. Pole opcjonalne wyłącznie dla przypadku określonego w art 106j ust. 3 pkt 2 ustawy (faktura korekta)
     *
     * @return string
     */
    public function getP7()
    {
        return $this->p7;
    }

    /**
     * Sets a new p7
     *
     * Nazwa (rodzaj) towaru lub usługi. Pole opcjonalne wyłącznie dla przypadku określonego w art 106j ust. 3 pkt 2 ustawy (faktura korekta)
     *
     * @param string $p7
     * @return self
     */
    public function setP7($p7)
    {
        $this->p7 = $p7;
        return $this;
    }

    /**
     * Gets as p8A
     *
     * Miara dostarczonych towarów lub zakres wykonanych usług. Pole opcjonalne dla przypadku określonego w art. 106e ust. 5 pkt 3 ustawy
     *
     * @return string
     */
    public function getP8A()
    {
        return $this->p8A;
    }

    /**
     * Sets a new p8A
     *
     * Miara dostarczonych towarów lub zakres wykonanych usług. Pole opcjonalne dla przypadku określonego w art. 106e ust. 5 pkt 3 ustawy
     *
     * @param string $p8A
     * @return self
     */
    public function setP8A($p8A)
    {
        $this->p8A = $p8A;
        return $this;
    }

    /**
     * Gets as p8B
     *
     * Ilość (liczba) dostarczonych towarów lub zakres wykonanych usług. Pole opcjonalne dla przypadku określonego w art. 106e ust. 5 pkt 3 ustawy
     *
     * @return float
     */
    public function getP8B()
    {
        return $this->p8B;
    }

    /**
     * Sets a new p8B
     *
     * Ilość (liczba) dostarczonych towarów lub zakres wykonanych usług. Pole opcjonalne dla przypadku określonego w art. 106e ust. 5 pkt 3 ustawy
     *
     * @param float $p8B
     * @return self
     */
    public function setP8B($p8B)
    {
        $this->p8B = $p8B;
        return $this;
    }

    /**
     * Gets as p9A
     *
     * Cena jednostkowa towaru lub usługi bez kwoty podatku (cena jednostkowa netto). Pole opcjonalne dla przypadków określonych w art. 106e ust. 2 i 3 oraz ust. 5 pkt 3 ustawy
     *
     * @return float
     */
    public function getP9A()
    {
        return $this->p9A;
    }

    /**
     * Sets a new p9A
     *
     * Cena jednostkowa towaru lub usługi bez kwoty podatku (cena jednostkowa netto). Pole opcjonalne dla przypadków określonych w art. 106e ust. 2 i 3 oraz ust. 5 pkt 3 ustawy
     *
     * @param float $p9A
     * @return self
     */
    public function setP9A($p9A)
    {
        $this->p9A = $p9A;
        return $this;
    }

    /**
     * Gets as p9B
     *
     * Cena wraz z kwotą podatku (cena jednostkowa brutto), w przypadku zastosowania art. 106e ust. 7 i 8 ustawy
     *
     * @return float
     */
    public function getP9B()
    {
        return $this->p9B;
    }

    /**
     * Sets a new p9B
     *
     * Cena wraz z kwotą podatku (cena jednostkowa brutto), w przypadku zastosowania art. 106e ust. 7 i 8 ustawy
     *
     * @param float $p9B
     * @return self
     */
    public function setP9B($p9B)
    {
        $this->p9B = $p9B;
        return $this;
    }

    /**
     * Gets as p10
     *
     * Kwoty wszelkich opustów lub obniżek cen, w tym w formie rabatu z tytułu wcześniejszej zapłaty, o ile nie zostały one uwzględnione w cenie jednostkowej netto. Pole opcjonalne dla przypadków określonych w art. 106e ust. 2 i 3 oraz ust. 5 pkt 1 ustawy
     *
     * @return float
     */
    public function getP10()
    {
        return $this->p10;
    }

    /**
     * Sets a new p10
     *
     * Kwoty wszelkich opustów lub obniżek cen, w tym w formie rabatu z tytułu wcześniejszej zapłaty, o ile nie zostały one uwzględnione w cenie jednostkowej netto. Pole opcjonalne dla przypadków określonych w art. 106e ust. 2 i 3 oraz ust. 5 pkt 1 ustawy
     *
     * @param float $p10
     * @return self
     */
    public function setP10($p10)
    {
        $this->p10 = $p10;
        return $this;
    }

    /**
     * Gets as p11
     *
     * Wartość dostarczonych towarów lub wykonanych usług, objętych transakcją, bez kwoty podatku (wartość sprzedaży netto). Pole opcjonalne dla przypadków określonych w art. 106e ust. 2 i 3 oraz ust. 5 pkt 3 ustawy
     *
     * @return float
     */
    public function getP11()
    {
        return $this->p11;
    }

    /**
     * Sets a new p11
     *
     * Wartość dostarczonych towarów lub wykonanych usług, objętych transakcją, bez kwoty podatku (wartość sprzedaży netto). Pole opcjonalne dla przypadków określonych w art. 106e ust. 2 i 3 oraz ust. 5 pkt 3 ustawy
     *
     * @param float $p11
     * @return self
     */
    public function setP11($p11)
    {
        $this->p11 = $p11;
        return $this;
    }

    /**
     * Gets as p11A
     *
     * Wartość sprzedaży brutto, w przypadku zastosowania art. 106e ust. 7 i 8 ustawy
     *
     * @return float
     */
    public function getP11A()
    {
        return $this->p11A;
    }

    /**
     * Sets a new p11A
     *
     * Wartość sprzedaży brutto, w przypadku zastosowania art. 106e ust. 7 i 8 ustawy
     *
     * @param float $p11A
     * @return self
     */
    public function setP11A($p11A)
    {
        $this->p11A = $p11A;
        return $this;
    }

    /**
     * Gets as p12
     *
     * Stawka podatku. Pole opcjonalne dla przypadków określonych w art. 106e ust. 2, 3, 4 pkt 3 i ust. 5 pkt 3 ustawy
     *
     * @return string
     */
    public function getP12()
    {
        return $this->p12;
    }

    /**
     * Sets a new p12
     *
     * Stawka podatku. Pole opcjonalne dla przypadków określonych w art. 106e ust. 2, 3, 4 pkt 3 i ust. 5 pkt 3 ustawy
     *
     * @param string $p12
     * @return self
     */
    public function setP12($p12)
    {
        $this->p12 = $p12;
        return $this;
    }


}

