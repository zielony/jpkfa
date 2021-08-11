<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TAdres1Type
 *
 * Dane określające adres - bez elementu Poczta w adresie polskim
 * XSD Type: TAdres1
 */
class TAdres1Type
{

    /**
     * @var \JpkFa\DefinicjeTypy\TAdresPolski1Type $adresPol
     */
    private $adresPol = null;

    /**
     * @var \JpkFa\DefinicjeTypy\TAdresZagranicznyType $adresZagr
     */
    private $adresZagr = null;

    /**
     * Gets as adresPol
     *
     * @return \JpkFa\DefinicjeTypy\TAdresPolski1Type
     */
    public function getAdresPol()
    {
        return $this->adresPol;
    }

    /**
     * Sets a new adresPol
     *
     * @param \JpkFa\DefinicjeTypy\TAdresPolski1Type $adresPol
     * @return self
     */
    public function setAdresPol(\JpkFa\DefinicjeTypy\TAdresPolski1Type $adresPol)
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

