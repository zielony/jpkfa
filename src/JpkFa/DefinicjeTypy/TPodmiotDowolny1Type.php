<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TPodmiotDowolny1Type
 *
 * Podstawowy zestaw danych o osobie fizycznej lub niefizycznej - bez elementu Poczta w adresie polskim
 * XSD Type: TPodmiotDowolny1
 */
class TPodmiotDowolny1Type extends TPodmiotDowolnyBezAdresuType
{

    /**
     * @var \JpkFa\DefinicjeTypy\TPodmiotDowolny1Type\AdresZamieszkaniaSiedzibyAType $adresZamieszkaniaSiedziby
     */
    private $adresZamieszkaniaSiedziby = null;

    /**
     * Gets as adresZamieszkaniaSiedziby
     *
     * @return \JpkFa\DefinicjeTypy\TPodmiotDowolny1Type\AdresZamieszkaniaSiedzibyAType
     */
    public function getAdresZamieszkaniaSiedziby()
    {
        return $this->adresZamieszkaniaSiedziby;
    }

    /**
     * Sets a new adresZamieszkaniaSiedziby
     *
     * @param \JpkFa\DefinicjeTypy\TPodmiotDowolny1Type\AdresZamieszkaniaSiedzibyAType $adresZamieszkaniaSiedziby
     * @return self
     */
    public function setAdresZamieszkaniaSiedziby(\JpkFa\DefinicjeTypy\TPodmiotDowolny1Type\AdresZamieszkaniaSiedzibyAType $adresZamieszkaniaSiedziby)
    {
        $this->adresZamieszkaniaSiedziby = $adresZamieszkaniaSiedziby;
        return $this;
    }


}

