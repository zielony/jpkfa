<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TOsobaFizycznaPelna1Type
 *
 * Pełny zestaw danych o osobie fizycznej - bez elementu Poczta w adresie polskim
 * XSD Type: TOsobaFizycznaPelna1
 */
class TOsobaFizycznaPelna1Type
{

    /**
     * @var \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznejPelnyType $osobaFizyczna
     */
    private $osobaFizyczna = null;

    /**
     * @var \JpkFa\DefinicjeTypy\TOsobaFizycznaPelna1Type\AdresZamieszkaniaAType $adresZamieszkania
     */
    private $adresZamieszkania = null;

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
     * Gets as adresZamieszkania
     *
     * @return \JpkFa\DefinicjeTypy\TOsobaFizycznaPelna1Type\AdresZamieszkaniaAType
     */
    public function getAdresZamieszkania()
    {
        return $this->adresZamieszkania;
    }

    /**
     * Sets a new adresZamieszkania
     *
     * @param \JpkFa\DefinicjeTypy\TOsobaFizycznaPelna1Type\AdresZamieszkaniaAType $adresZamieszkania
     * @return self
     */
    public function setAdresZamieszkania(\JpkFa\DefinicjeTypy\TOsobaFizycznaPelna1Type\AdresZamieszkaniaAType $adresZamieszkania)
    {
        $this->adresZamieszkania = $adresZamieszkania;
        return $this;
    }


}

