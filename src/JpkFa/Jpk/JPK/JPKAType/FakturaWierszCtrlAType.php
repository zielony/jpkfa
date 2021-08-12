<?php

namespace JpkFa\Jpk\JPK\JPKAType;

/**
 * Class representing FakturaWierszCtrlAType
 */
class FakturaWierszCtrlAType
{

    /**
     * Liczba wierszy faktur, w okresie którego dotyczy JPK_FA
     *
     * @var int $liczbaWierszyFaktur
     */
    private $liczbaWierszyFaktur = null;

    /**
     * Łączna wartość kolumny P_11 tabeli FakturaWiersz w okresie, którego dotyczy JPK_FA
     *
     * @var float $wartoscWierszyFaktur
     */
    private $wartoscWierszyFaktur = null;

    /**
     * Gets as liczbaWierszyFaktur
     *
     * Liczba wierszy faktur, w okresie którego dotyczy JPK_FA
     *
     * @return int
     */
    public function getLiczbaWierszyFaktur()
    {
        return $this->liczbaWierszyFaktur;
    }

    /**
     * Sets a new liczbaWierszyFaktur
     *
     * Liczba wierszy faktur, w okresie którego dotyczy JPK_FA
     *
     * @param int $liczbaWierszyFaktur
     * @return self
     */
    public function setLiczbaWierszyFaktur($liczbaWierszyFaktur)
    {
        $this->liczbaWierszyFaktur = $liczbaWierszyFaktur;
        return $this;
    }

    /**
     * Gets as wartoscWierszyFaktur
     *
     * Łączna wartość kolumny P_11 tabeli FakturaWiersz w okresie, którego dotyczy JPK_FA
     *
     * @return float
     */
    public function getWartoscWierszyFaktur()
    {
        return $this->wartoscWierszyFaktur;
    }

    /**
     * Sets a new wartoscWierszyFaktur
     *
     * Łączna wartość kolumny P_11 tabeli FakturaWiersz w okresie, którego dotyczy JPK_FA
     *
     * @param float $wartoscWierszyFaktur
     * @return self
     */
    public function setWartoscWierszyFaktur($wartoscWierszyFaktur)
    {
        $this->wartoscWierszyFaktur = $wartoscWierszyFaktur;
        return $this;
    }


}

