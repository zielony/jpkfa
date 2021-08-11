<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TAdresType
 *
 * Dane określające adres
 * XSD Type: TAdres
 */
class TAdresType
{

    /**
     * @var \JpkFa\DefinicjeTypy\TAdresPolskiType $adresPol
     */
    private $adresPol = null;

    /**
     * @var \JpkFa\DefinicjeTypy\TAdresZagranicznyType $adresZagr
     */
    private $adresZagr = null;

    /**
     * Gets as adresPol
     *
     * @return \JpkFa\DefinicjeTypy\TAdresPolskiType
     */
    public function getAdresPol()
    {
        return $this->adresPol;
    }

    /**
     * Sets a new adresPol
     *
     * @param \JpkFa\DefinicjeTypy\TAdresPolskiType $adresPol
     * @return self
     */
    public function setAdresPol(\JpkFa\DefinicjeTypy\TAdresPolskiType $adresPol)
    {
        $this->adresPol = $adresPol;
        return $this;
    }

    /**
     * Gets as adresZagr
     *
     * @return \JpkFa\DefinicjeTypy\TAdresZagranicznyType
     */
    public function getAdresZagr()
    {
        return $this->adresZagr;
    }

    /**
     * Sets a new adresZagr
     *
     * @param \JpkFa\DefinicjeTypy\TAdresZagranicznyType $adresZagr
     * @return self
     */
    public function setAdresZagr(\JpkFa\DefinicjeTypy\TAdresZagranicznyType $adresZagr)
    {
        $this->adresZagr = $adresZagr;
        return $this;
    }


}

