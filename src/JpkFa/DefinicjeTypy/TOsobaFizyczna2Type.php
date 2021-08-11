<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TOsobaFizyczna2Type
 *
 * Podstawowy zestaw danych o osobie fizycznej z identyfikatorem NIP
 * XSD Type: TOsobaFizyczna2
 */
class TOsobaFizyczna2Type
{

    /**
     * @var \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznej2Type $osobaFizyczna
     */
    private $osobaFizyczna = null;

    /**
     * @var \JpkFa\DefinicjeTypy\TOsobaFizyczna2Type\AdresZamieszkaniaAType $adresZamieszkania
     */
    private $adresZamieszkania = null;

    /**
     * Gets as osobaFizyczna
     *
     * @return \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznej2Type
     */
    public function getOsobaFizyczna()
    {
        return $this->osobaFizyczna;
    }

    /**
     * Sets a new osobaFizyczna
     *
     * @param \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznej2Type $osobaFizyczna
     * @return self
     */
    public function setOsobaFizyczna(\JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznej2Type $osobaFizyczna)
    {
        $this->osobaFizyczna = $osobaFizyczna;
        return $this;
    }

    /**
     * Gets as adresZamieszkania
     *
     * @return \JpkFa\DefinicjeTypy\TOsobaFizyczna2Type\AdresZamieszkaniaAType
     */
    public function getAdresZamieszkania()
    {
        return $this->adresZamieszkania;
    }

    /**
     * Sets a new adresZamieszkania
     *
     * @param \JpkFa\DefinicjeTypy\TOsobaFizyczna2Type\AdresZamieszkaniaAType $adresZamieszkania
     * @return self
     */
    public function setAdresZamieszkania(\JpkFa\DefinicjeTypy\TOsobaFizyczna2Type\AdresZamieszkaniaAType $adresZamieszkania)
    {
        $this->adresZamieszkania = $adresZamieszkania;
        return $this;
    }


}

