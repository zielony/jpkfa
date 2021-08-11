<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TOsobaFizyczna5Type
 *
 * Podstawowy zestaw danych o osobie fizycznej - bez elementu Poczta w adresie polskim
 * XSD Type: TOsobaFizyczna5
 */
class TOsobaFizyczna5Type
{

    /**
     * @var \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznejType $osobaFizyczna
     */
    private $osobaFizyczna = null;

    /**
     * @var \JpkFa\DefinicjeTypy\TOsobaFizyczna5Type\AdresZamieszkaniaAType $adresZamieszkania
     */
    private $adresZamieszkania = null;

    /**
     * Gets as osobaFizyczna
     *
     * @return \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznejType
     */
    public function getOsobaFizyczna()
    {
        return $this->osobaFizyczna;
    }

    /**
     * Sets a new osobaFizyczna
     *
     * @param \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznejType $osobaFizyczna
     * @return self
     */
    public function setOsobaFizyczna(\JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznejType $osobaFizyczna)
    {
        $this->osobaFizyczna = $osobaFizyczna;
        return $this;
    }

    /**
     * Gets as adresZamieszkania
     *
     * @return \JpkFa\DefinicjeTypy\TOsobaFizyczna5Type\AdresZamieszkaniaAType
     */
    public function getAdresZamieszkania()
    {
        return $this->adresZamieszkania;
    }

    /**
     * Sets a new adresZamieszkania
     *
     * @param \JpkFa\DefinicjeTypy\TOsobaFizyczna5Type\AdresZamieszkaniaAType $adresZamieszkania
     * @return self
     */
    public function setAdresZamieszkania(\JpkFa\DefinicjeTypy\TOsobaFizyczna5Type\AdresZamieszkaniaAType $adresZamieszkania)
    {
        $this->adresZamieszkania = $adresZamieszkania;
        return $this;
    }


}

