<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TOsobaFizycznaType
 *
 * Podstawowy zestaw danych o osobie fizycznej
 * XSD Type: TOsobaFizyczna
 */
class TOsobaFizycznaType
{

    /**
     * @var \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznejType $osobaFizyczna
     */
    private $osobaFizyczna = null;

    /**
     * @var \JpkFa\DefinicjeTypy\TOsobaFizycznaType\AdresZamieszkaniaAType $adresZamieszkania
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
     * @return \JpkFa\DefinicjeTypy\TOsobaFizycznaType\AdresZamieszkaniaAType
     */
    public function getAdresZamieszkania()
    {
        return $this->adresZamieszkania;
    }

    /**
     * Sets a new adresZamieszkania
     *
     * @param \JpkFa\DefinicjeTypy\TOsobaFizycznaType\AdresZamieszkaniaAType $adresZamieszkania
     * @return self
     */
    public function setAdresZamieszkania(\JpkFa\DefinicjeTypy\TOsobaFizycznaType\AdresZamieszkaniaAType $adresZamieszkania)
    {
        $this->adresZamieszkania = $adresZamieszkania;
        return $this;
    }


}

