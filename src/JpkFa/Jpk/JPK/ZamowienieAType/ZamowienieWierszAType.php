<?php

namespace JpkFa\Jpk\JPK\ZamowienieAType;

/**
 * Class representing ZamowienieWierszAType
 */
class ZamowienieWierszAType
{

    /**
     * Nazwa (rodzaj) towaru lub usługi
     *
     * @var string $p7Z
     */
    private $p7Z = null;

    /**
     * Miara zamówionego towaru lub zakres usługi
     *
     * @var string $p8AZ
     */
    private $p8AZ = null;

    /**
     * Ilość zamówionego towaru lub zakres usługi
     *
     * @var float $p8BZ
     */
    private $p8BZ = null;

    /**
     * Cena jednostkowa netto
     *
     * @var float $p9AZ
     */
    private $p9AZ = null;

    /**
     * Wartość zamówionego towaru lub usługi bez kwoty podatku
     *
     * @var float $p11NettoZ
     */
    private $p11NettoZ = null;

    /**
     * Kwota podatku od zamówionego towaru lub usługi
     *
     * @var float $p11VatZ
     */
    private $p11VatZ = null;

    /**
     * Stawka podatku
     *
     * @var string $p12Z
     */
    private $p12Z = null;

    /**
     * Gets as p7Z
     *
     * Nazwa (rodzaj) towaru lub usługi
     *
     * @return string
     */
    public function getP7Z()
    {
        return $this->p7Z;
    }

    /**
     * Sets a new p7Z
     *
     * Nazwa (rodzaj) towaru lub usługi
     *
     * @param string $p7Z
     * @return self
     */
    public function setP7Z($p7Z)
    {
        $this->p7Z = $p7Z;
        return $this;
    }

    /**
     * Gets as p8AZ
     *
     * Miara zamówionego towaru lub zakres usługi
     *
     * @return string
     */
    public function getP8AZ()
    {
        return $this->p8AZ;
    }

    /**
     * Sets a new p8AZ
     *
     * Miara zamówionego towaru lub zakres usługi
     *
     * @param string $p8AZ
     * @return self
     */
    public function setP8AZ($p8AZ)
    {
        $this->p8AZ = $p8AZ;
        return $this;
    }

    /**
     * Gets as p8BZ
     *
     * Ilość zamówionego towaru lub zakres usługi
     *
     * @return float
     */
    public function getP8BZ()
    {
        return $this->p8BZ;
    }

    /**
     * Sets a new p8BZ
     *
     * Ilość zamówionego towaru lub zakres usługi
     *
     * @param float $p8BZ
     * @return self
     */
    public function setP8BZ($p8BZ)
    {
        $this->p8BZ = $p8BZ;
        return $this;
    }

    /**
     * Gets as p9AZ
     *
     * Cena jednostkowa netto
     *
     * @return float
     */
    public function getP9AZ()
    {
        return $this->p9AZ;
    }

    /**
     * Sets a new p9AZ
     *
     * Cena jednostkowa netto
     *
     * @param float $p9AZ
     * @return self
     */
    public function setP9AZ($p9AZ)
    {
        $this->p9AZ = $p9AZ;
        return $this;
    }

    /**
     * Gets as p11NettoZ
     *
     * Wartość zamówionego towaru lub usługi bez kwoty podatku
     *
     * @return float
     */
    public function getP11NettoZ()
    {
        return $this->p11NettoZ;
    }

    /**
     * Sets a new p11NettoZ
     *
     * Wartość zamówionego towaru lub usługi bez kwoty podatku
     *
     * @param float $p11NettoZ
     * @return self
     */
    public function setP11NettoZ($p11NettoZ)
    {
        $this->p11NettoZ = $p11NettoZ;
        return $this;
    }

    /**
     * Gets as p11VatZ
     *
     * Kwota podatku od zamówionego towaru lub usługi
     *
     * @return float
     */
    public function getP11VatZ()
    {
        return $this->p11VatZ;
    }

    /**
     * Sets a new p11VatZ
     *
     * Kwota podatku od zamówionego towaru lub usługi
     *
     * @param float $p11VatZ
     * @return self
     */
    public function setP11VatZ($p11VatZ)
    {
        $this->p11VatZ = $p11VatZ;
        return $this;
    }

    /**
     * Gets as p12Z
     *
     * Stawka podatku
     *
     * @return string
     */
    public function getP12Z()
    {
        return $this->p12Z;
    }

    /**
     * Sets a new p12Z
     *
     * Stawka podatku
     *
     * @param string $p12Z
     * @return self
     */
    public function setP12Z($p12Z)
    {
        $this->p12Z = $p12Z;
        return $this;
    }


}

