<?php

namespace JpkFa\Jpk\JPK;

/**
 * Class representing StawkiPodatkuAType
 */
class StawkiPodatkuAType
{

    /**
     * Wartość stawki podstawowej
     *
     * @var float $stawka1
     */
    private $stawka1 = null;

    /**
     * Wartość stawki obniżonej pierwszej
     *
     * @var float $stawka2
     */
    private $stawka2 = null;

    /**
     * Wartość stawki obniżonej drugiej
     *
     * @var float $stawka3
     */
    private $stawka3 = null;

    /**
     * Wartość stawki obniżonej trzeciej - pole rezerwowe
     *
     * @var float $stawka4
     */
    private $stawka4 = null;

    /**
     * Wartość stawki obniżonej czwartej - pole rezerwowe
     *
     * @var float $stawka5
     */
    private $stawka5 = null;

    /**
     * Gets as stawka1
     *
     * Wartość stawki podstawowej
     *
     * @return float
     */
    public function getStawka1()
    {
        return $this->stawka1;
    }

    /**
     * Sets a new stawka1
     *
     * Wartość stawki podstawowej
     *
     * @param float $stawka1
     * @return self
     */
    public function setStawka1($stawka1)
    {
        $this->stawka1 = $stawka1;
        return $this;
    }

    /**
     * Gets as stawka2
     *
     * Wartość stawki obniżonej pierwszej
     *
     * @return float
     */
    public function getStawka2()
    {
        return $this->stawka2;
    }

    /**
     * Sets a new stawka2
     *
     * Wartość stawki obniżonej pierwszej
     *
     * @param float $stawka2
     * @return self
     */
    public function setStawka2($stawka2)
    {
        $this->stawka2 = $stawka2;
        return $this;
    }

    /**
     * Gets as stawka3
     *
     * Wartość stawki obniżonej drugiej
     *
     * @return float
     */
    public function getStawka3()
    {
        return $this->stawka3;
    }

    /**
     * Sets a new stawka3
     *
     * Wartość stawki obniżonej drugiej
     *
     * @param float $stawka3
     * @return self
     */
    public function setStawka3($stawka3)
    {
        $this->stawka3 = $stawka3;
        return $this;
    }

    /**
     * Gets as stawka4
     *
     * Wartość stawki obniżonej trzeciej - pole rezerwowe
     *
     * @return float
     */
    public function getStawka4()
    {
        return $this->stawka4;
    }

    /**
     * Sets a new stawka4
     *
     * Wartość stawki obniżonej trzeciej - pole rezerwowe
     *
     * @param float $stawka4
     * @return self
     */
    public function setStawka4($stawka4)
    {
        $this->stawka4 = $stawka4;
        return $this;
    }

    /**
     * Gets as stawka5
     *
     * Wartość stawki obniżonej czwartej - pole rezerwowe
     *
     * @return float
     */
    public function getStawka5()
    {
        return $this->stawka5;
    }

    /**
     * Sets a new stawka5
     *
     * Wartość stawki obniżonej czwartej - pole rezerwowe
     *
     * @param float $stawka5
     * @return self
     */
    public function setStawka5($stawka5)
    {
        $this->stawka5 = $stawka5;
        return $this;
    }


}

