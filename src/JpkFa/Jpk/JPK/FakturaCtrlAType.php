<?php

namespace JpkFa\Jpk\JPK;

/**
 * Class representing FakturaCtrlAType
 */
class FakturaCtrlAType
{

    /**
     * Liczba faktur, w okresie którego dotyczy JPK_FA
     *
     * @var int $liczbaFaktur
     */
    private $liczbaFaktur = null;

    /**
     * Łączna wartość kolumny P_15 w tabeli Faktura w okresie, którego dotyczy JPK_FA
     *
     * @var float $wartoscFaktur
     */
    private $wartoscFaktur = null;

    /**
     * Gets as liczbaFaktur
     *
     * Liczba faktur, w okresie którego dotyczy JPK_FA
     *
     * @return int
     */
    public function getLiczbaFaktur()
    {
        return $this->liczbaFaktur;
    }

    /**
     * Sets a new liczbaFaktur
     *
     * Liczba faktur, w okresie którego dotyczy JPK_FA
     *
     * @param int $liczbaFaktur
     * @return self
     */
    public function setLiczbaFaktur($liczbaFaktur)
    {
        $this->liczbaFaktur = $liczbaFaktur;
        return $this;
    }

    /**
     * Gets as wartoscFaktur
     *
     * Łączna wartość kolumny P_15 w tabeli Faktura w okresie, którego dotyczy JPK_FA
     *
     * @return float
     */
    public function getWartoscFaktur()
    {
        return $this->wartoscFaktur;
    }

    /**
     * Sets a new wartoscFaktur
     *
     * Łączna wartość kolumny P_15 w tabeli Faktura w okresie, którego dotyczy JPK_FA
     *
     * @param float $wartoscFaktur
     * @return self
     */
    public function setWartoscFaktur($wartoscFaktur)
    {
        $this->wartoscFaktur = $wartoscFaktur;
        return $this;
    }


}

