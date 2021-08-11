<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TOsobaFizyczna3Type
 *
 * Podstawowy zestaw danych o osobie fizycznej z identyfikatorem NIP albo PESEL - bez elementu Poczta w adresie polskim
 * XSD Type: TOsobaFizyczna3
 */
class TOsobaFizyczna3Type
{

    /**
     * @var \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznej1Type $osobaFizyczna
     */
    private $osobaFizyczna = null;

    /**
     * @var \JpkFa\DefinicjeTypy\TOsobaFizyczna3Type\AdresZamieszkaniaAType $adresZamieszkania
     */
    private $adresZamieszkania = null;

    /**
     * Gets as osobaFizyczna
     *
     * @return \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznej1Type
     */
    public function getOsobaFizyczna()
    {
        return $this->osobaFizyczna;
    }

    /**
     * Sets a new osobaFizyczna
     *
     * @param \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznej1Type $osobaFizyczna
     * @return self
     */
    public function setOsobaFizyczna(\JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznej1Type $osobaFizyczna)
    {
        $this->osobaFizyczna = $osobaFizyczna;
        return $this;
    }

    /**
     * Gets as adresZamieszkania
     *
     * @return \JpkFa\DefinicjeTypy\TOsobaFizyczna3Type\AdresZamieszkaniaAType
     */
    public function getAdresZamieszkania()
    {
        return $this->adresZamieszkania;
    }

    /**
     * Sets a new adresZamieszkania
     *
     * @param \JpkFa\DefinicjeTypy\TOsobaFizyczna3Type\AdresZamieszkaniaAType $adresZamieszkania
     * @return self
     */
    public function setAdresZamieszkania(\JpkFa\DefinicjeTypy\TOsobaFizyczna3Type\AdresZamieszkaniaAType $adresZamieszkania)
    {
        $this->adresZamieszkania = $adresZamieszkania;
        return $this;
    }


}

