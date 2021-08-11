<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TIdentyfikatorOsobyFizycznejPelnyType
 *
 * Pełny zestaw danych identyfikacyjnych o osobie fizycznej
 * XSD Type: TIdentyfikatorOsobyFizycznejPelny
 */
class TIdentyfikatorOsobyFizycznejPelnyType
{

    /**
     * Identyfikator podatkowy NIP
     *
     * @var string $nIP
     */
    private $nIP = null;

    /**
     * Pierwsze imię
     *
     * @var string $imiePierwsze
     */
    private $imiePierwsze = null;

    /**
     * Nazwisko
     *
     * @var string $nazwisko
     */
    private $nazwisko = null;

    /**
     * Data urodzenia
     *
     * @var \DateTime $dataUrodzenia
     */
    private $dataUrodzenia = null;

    /**
     * Imię ojca
     *
     * @var string $imieOjca
     */
    private $imieOjca = null;

    /**
     * Imię matki
     *
     * @var string $imieMatki
     */
    private $imieMatki = null;

    /**
     * Identyfikator podatkowy numer PESEL
     *
     * @var string $pESEL
     */
    private $pESEL = null;

    /**
     * Gets as nIP
     *
     * Identyfikator podatkowy NIP
     *
     * @return string
     */
    public function getNIP()
    {
        return $this->nIP;
    }

    /**
     * Sets a new nIP
     *
     * Identyfikator podatkowy NIP
     *
     * @param string $nIP
     * @return self
     */
    public function setNIP($nIP)
    {
        $this->nIP = $nIP;
        return $this;
    }

    /**
     * Gets as imiePierwsze
     *
     * Pierwsze imię
     *
     * @return string
     */
    public function getImiePierwsze()
    {
        return $this->imiePierwsze;
    }

    /**
     * Sets a new imiePierwsze
     *
     * Pierwsze imię
     *
     * @param string $imiePierwsze
     * @return self
     */
    public function setImiePierwsze($imiePierwsze)
    {
        $this->imiePierwsze = $imiePierwsze;
        return $this;
    }

    /**
     * Gets as nazwisko
     *
     * Nazwisko
     *
     * @return string
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * Sets a new nazwisko
     *
     * Nazwisko
     *
     * @param string $nazwisko
     * @return self
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;
        return $this;
    }

    /**
     * Gets as dataUrodzenia
     *
     * Data urodzenia
     *
     * @return \DateTime
     */
    public function getDataUrodzenia()
    {
        return $this->dataUrodzenia;
    }

    /**
     * Sets a new dataUrodzenia
     *
     * Data urodzenia
     *
     * @param \DateTime $dataUrodzenia
     * @return self
     */
    public function setDataUrodzenia(\DateTime $dataUrodzenia)
    {
        $this->dataUrodzenia = $dataUrodzenia;
        return $this;
    }

    /**
     * Gets as imieOjca
     *
     * Imię ojca
     *
     * @return string
     */
    public function getImieOjca()
    {
        return $this->imieOjca;
    }

    /**
     * Sets a new imieOjca
     *
     * Imię ojca
     *
     * @param string $imieOjca
     * @return self
     */
    public function setImieOjca($imieOjca)
    {
        $this->imieOjca = $imieOjca;
        return $this;
    }

    /**
     * Gets as imieMatki
     *
     * Imię matki
     *
     * @return string
     */
    public function getImieMatki()
    {
        return $this->imieMatki;
    }

    /**
     * Sets a new imieMatki
     *
     * Imię matki
     *
     * @param string $imieMatki
     * @return self
     */
    public function setImieMatki($imieMatki)
    {
        $this->imieMatki = $imieMatki;
        return $this;
    }

    /**
     * Gets as pESEL
     *
     * Identyfikator podatkowy numer PESEL
     *
     * @return string
     */
    public function getPESEL()
    {
        return $this->pESEL;
    }

    /**
     * Sets a new pESEL
     *
     * Identyfikator podatkowy numer PESEL
     *
     * @param string $pESEL
     * @return self
     */
    public function setPESEL($pESEL)
    {
        $this->pESEL = $pESEL;
        return $this;
    }


}

