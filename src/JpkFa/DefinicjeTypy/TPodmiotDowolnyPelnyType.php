<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TPodmiotDowolnyPelnyType
 *
 * Pełny zestaw danych o osobie fizycznej lub niefizycznej
 * XSD Type: TPodmiotDowolnyPelny
 */
class TPodmiotDowolnyPelnyType
{

    /**
     * @var \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznejPelnyType $osobaFizyczna
     */
    private $osobaFizyczna = null;

    /**
     * @var \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznejPelnyType $osobaNiefizyczna
     */
    private $osobaNiefizyczna = null;

    /**
     * @var \JpkFa\DefinicjeTypy\TPodmiotDowolnyPelnyType\AdresZamieszkaniaSiedzibyAType $adresZamieszkaniaSiedziby
     */
    private $adresZamieszkaniaSiedziby = null;

    /**
     * Gets as osobaFizyczna
     *
     * @return \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznejPelnyType
     */
    public function getOsobaFizyczna()
    {
        return $this->osobaFizyczna;
    }

    /**
     * Sets a new osobaFizyczna
     *
     * @param \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznejPelnyType $osobaFizyczna
     * @return self
     */
    public function setOsobaFizyczna(\JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznejPelnyType $osobaFizyczna)
    {
        $this->osobaFizyczna = $osobaFizyczna;
        return $this;
    }

    /**
     * Gets as osobaNiefizyczna
     *
     * @return \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznejPelnyType
     */
    public function getOsobaNiefizyczna()
    {
        return $this->osobaNiefizyczna;
    }

    /**
     * Sets a new osobaNiefizyczna
     *
     * @param \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznejPelnyType $osobaNiefizyczna
     * @return self
     */
    public function setOsobaNiefizyczna(\JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznejPelnyType $osobaNiefizyczna)
    {
        $this->osobaNiefizyczna = $osobaNiefizyczna;
        return $this;
    }

    /**
     * Gets as adresZamieszkaniaSiedziby
     *
     * @return \JpkFa\DefinicjeTypy\TPodmiotDowolnyPelnyType\AdresZamieszkaniaSiedzibyAType
     */
    public function getAdresZamieszkaniaSiedziby()
    {
        return $this->adresZamieszkaniaSiedziby;
    }

    /**
     * Sets a new adresZamieszkaniaSiedziby
     *
     * @param \JpkFa\DefinicjeTypy\TPodmiotDowolnyPelnyType\AdresZamieszkaniaSiedzibyAType $adresZamieszkaniaSiedziby
     * @return self
     */
    public function setAdresZamieszkaniaSiedziby(\JpkFa\DefinicjeTypy\TPodmiotDowolnyPelnyType\AdresZamieszkaniaSiedzibyAType $adresZamieszkaniaSiedziby)
    {
        $this->adresZamieszkaniaSiedziby = $adresZamieszkaniaSiedziby;
        return $this;
    }


}

