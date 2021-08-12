<?php

namespace JpkFa\Jpk\JPK\JPKAType;

/**
 * Class representing ZamowienieCtrlAType
 */
class ZamowienieCtrlAType
{

    /**
     * Liczba zamówień lub umów, w okresie którego dotyczy JPK_FA
     *
     * @var int $liczbaZamowien
     */
    private $liczbaZamowien = null;

    /**
     * Łączna wartość kolumny WartoscZamowienia w Tabeli Zamowienie w okresie, którego dotyczy JPK_FA
     *
     * @var float $wartoscZamowien
     */
    private $wartoscZamowien = null;

    /**
     * Gets as liczbaZamowien
     *
     * Liczba zamówień lub umów, w okresie którego dotyczy JPK_FA
     *
     * @return int
     */
    public function getLiczbaZamowien()
    {
        return $this->liczbaZamowien;
    }

    /**
     * Sets a new liczbaZamowien
     *
     * Liczba zamówień lub umów, w okresie którego dotyczy JPK_FA
     *
     * @param int $liczbaZamowien
     * @return self
     */
    public function setLiczbaZamowien($liczbaZamowien)
    {
        $this->liczbaZamowien = $liczbaZamowien;
        return $this;
    }

    /**
     * Gets as wartoscZamowien
     *
     * Łączna wartość kolumny WartoscZamowienia w Tabeli Zamowienie w okresie, którego dotyczy JPK_FA
     *
     * @return float
     */
    public function getWartoscZamowien()
    {
        return $this->wartoscZamowien;
    }

    /**
     * Sets a new wartoscZamowien
     *
     * Łączna wartość kolumny WartoscZamowienia w Tabeli Zamowienie w okresie, którego dotyczy JPK_FA
     *
     * @param float $wartoscZamowien
     * @return self
     */
    public function setWartoscZamowien($wartoscZamowien)
    {
        $this->wartoscZamowien = $wartoscZamowien;
        return $this;
    }


}

