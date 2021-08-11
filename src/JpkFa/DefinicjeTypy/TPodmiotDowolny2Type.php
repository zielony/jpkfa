<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TPodmiotDowolny2Type
 *
 * Podstawowy zestaw danych o osobie fizycznej lub niefizycznej - bez elementu Numer REGON oraz bez elementu Poczta w adresie polskim
 * XSD Type: TPodmiotDowolny2
 */
class TPodmiotDowolny2Type extends TPodmiotDowolnyBezAdresu3Type
{

    /**
     * @var \JpkFa\DefinicjeTypy\TPodmiotDowolny2Type\AdresZamieszkaniaSiedzibyAType $adresZamieszkaniaSiedziby
     */
    private $adresZamieszkaniaSiedziby = null;

    /**
     * Gets as adresZamieszkaniaSiedziby
     *
     * @return \JpkFa\DefinicjeTypy\TPodmiotDowolny2Type\AdresZamieszkaniaSiedzibyAType
     */
    public function getAdresZamieszkaniaSiedziby()
    {
        return $this->adresZamieszkaniaSiedziby;
    }

    /**
     * Sets a new adresZamieszkaniaSiedziby
     *
     * @param \JpkFa\DefinicjeTypy\TPodmiotDowolny2Type\AdresZamieszkaniaSiedzibyAType $adresZamieszkaniaSiedziby
     * @return self
     */
    public function setAdresZamieszkaniaSiedziby(\JpkFa\DefinicjeTypy\TPodmiotDowolny2Type\AdresZamieszkaniaSiedzibyAType $adresZamieszkaniaSiedziby)
    {
        $this->adresZamieszkaniaSiedziby = $adresZamieszkaniaSiedziby;
        return $this;
    }


}

