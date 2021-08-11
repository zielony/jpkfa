<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TAdresPolski1Type
 *
 * Informacje opisujące adres polski - bez elementu Poczta
 * XSD Type: TAdresPolski1
 */
class TAdresPolski1Type
{

    /**
     * Kraj
     *
     * @var string $kodKraju
     */
    private $kodKraju = null;

    /**
     * Województwo
     *
     * @var string $wojewodztwo
     */
    private $wojewodztwo = null;

    /**
     * Powiat
     *
     * @var string $powiat
     */
    private $powiat = null;

    /**
     * Gmina
     *
     * @var string $gmina
     */
    private $gmina = null;

    /**
     * Nazwa ulicy
     *
     * @var string $ulica
     */
    private $ulica = null;

    /**
     * Numer budynku
     *
     * @var string $nrDomu
     */
    private $nrDomu = null;

    /**
     * Numer lokalu
     *
     * @var string $nrLokalu
     */
    private $nrLokalu = null;

    /**
     * Nazwa miejscowości
     *
     * @var string $miejscowosc
     */
    private $miejscowosc = null;

    /**
     * Kod pocztowy
     *
     * @var string $kodPocztowy
     */
    private $kodPocztowy = null;

    /**
     * Gets as kodKraju
     *
     * Kraj
     *
     * @return string
     */
    public function getKodKraju()
    {
        return $this->kodKraju;
    }

    /**
     * Sets a new kodKraju
     *
     * Kraj
     *
     * @param string $kodKraju
     * @return self
     */
    public function setKodKraju($kodKraju)
    {
        $this->kodKraju = $kodKraju;
        return $this;
    }

    /**
     * Gets as wojewodztwo
     *
     * Województwo
     *
     * @return string
     */
    public function getWojewodztwo()
    {
        return $this->wojewodztwo;
    }

    /**
     * Sets a new wojewodztwo
     *
     * Województwo
     *
     * @param string $wojewodztwo
     * @return self
     */
    public function setWojewodztwo($wojewodztwo)
    {
        $this->wojewodztwo = $wojewodztwo;
        return $this;
    }

    /**
     * Gets as powiat
     *
     * Powiat
     *
     * @return string
     */
    public function getPowiat()
    {
        return $this->powiat;
    }

    /**
     * Sets a new powiat
     *
     * Powiat
     *
     * @param string $powiat
     * @return self
     */
    public function setPowiat($powiat)
    {
        $this->powiat = $powiat;
        return $this;
    }

    /**
     * Gets as gmina
     *
     * Gmina
     *
     * @return string
     */
    public function getGmina()
    {
        return $this->gmina;
    }

    /**
     * Sets a new gmina
     *
     * Gmina
     *
     * @param string $gmina
     * @return self
     */
    public function setGmina($gmina)
    {
        $this->gmina = $gmina;
        return $this;
    }

    /**
     * Gets as ulica
     *
     * Nazwa ulicy
     *
     * @return string
     */
    public function getUlica()
    {
        return $this->ulica;
    }

    /**
     * Sets a new ulica
     *
     * Nazwa ulicy
     *
     * @param string $ulica
     * @return self
     */
    public function setUlica($ulica)
    {
        $this->ulica = $ulica;
        return $this;
    }

    /**
     * Gets as nrDomu
     *
     * Numer budynku
     *
     * @return string
     */
    public function getNrDomu()
    {
        return $this->nrDomu;
    }

    /**
     * Sets a new nrDomu
     *
     * Numer budynku
     *
     * @param string $nrDomu
     * @return self
     */
    public function setNrDomu($nrDomu)
    {
        $this->nrDomu = $nrDomu;
        return $this;
    }

    /**
     * Gets as nrLokalu
     *
     * Numer lokalu
     *
     * @return string
     */
    public function getNrLokalu()
    {
        return $this->nrLokalu;
    }

    /**
     * Sets a new nrLokalu
     *
     * Numer lokalu
     *
     * @param string $nrLokalu
     * @return self
     */
    public function setNrLokalu($nrLokalu)
    {
        $this->nrLokalu = $nrLokalu;
        return $this;
    }

    /**
     * Gets as miejscowosc
     *
     * Nazwa miejscowości
     *
     * @return string
     */
    public function getMiejscowosc()
    {
        return $this->miejscowosc;
    }

    /**
     * Sets a new miejscowosc
     *
     * Nazwa miejscowości
     *
     * @param string $miejscowosc
     * @return self
     */
    public function setMiejscowosc($miejscowosc)
    {
        $this->miejscowosc = $miejscowosc;
        return $this;
    }

    /**
     * Gets as kodPocztowy
     *
     * Kod pocztowy
     *
     * @return string
     */
    public function getKodPocztowy()
    {
        return $this->kodPocztowy;
    }

    /**
     * Sets a new kodPocztowy
     *
     * Kod pocztowy
     *
     * @param string $kodPocztowy
     * @return self
     */
    public function setKodPocztowy($kodPocztowy)
    {
        $this->kodPocztowy = $kodPocztowy;
        return $this;
    }


}

