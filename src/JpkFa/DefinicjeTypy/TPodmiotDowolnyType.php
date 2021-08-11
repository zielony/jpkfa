<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TPodmiotDowolnyType
 *
 * Podstawowy zestaw danych o osobie fizycznej lub niefizycznej
 * XSD Type: TPodmiotDowolny
 */
class TPodmiotDowolnyType extends TPodmiotDowolnyBezAdresuType
{

    /**
     * @var \JpkFa\DefinicjeTypy\TPodmiotDowolnyType\AdresZamieszkaniaSiedzibyAType $adresZamieszkaniaSiedziby
     */
    private $adresZamieszkaniaSiedziby = null;

    /**
     * Gets as adresZamieszkaniaSiedziby
     *
     * @return \JpkFa\DefinicjeTypy\TPodmiotDowolnyType\AdresZamieszkaniaSiedzibyAType
     */
    public function getAdresZamieszkaniaSiedziby()
    {
        return $this->adresZamieszkaniaSiedziby;
    }

    /**
     * Sets a new adresZamieszkaniaSiedziby
     *
     * @param \JpkFa\DefinicjeTypy\TPodmiotDowolnyType\AdresZamieszkaniaSiedzibyAType $adresZamieszkaniaSiedziby
     * @return self
     */
    public function setAdresZamieszkaniaSiedziby(\JpkFa\DefinicjeTypy\TPodmiotDowolnyType\AdresZamieszkaniaSiedzibyAType $adresZamieszkaniaSiedziby)
    {
        $this->adresZamieszkaniaSiedziby = $adresZamieszkaniaSiedziby;
        return $this;
    }


}

