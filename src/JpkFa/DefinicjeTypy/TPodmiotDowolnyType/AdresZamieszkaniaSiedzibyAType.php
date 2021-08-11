<?php

namespace JpkFa\DefinicjeTypy\TPodmiotDowolnyType;

use JpkFa\DefinicjeTypy\TAdresType;

/**
 * Class representing AdresZamieszkaniaSiedzibyAType
 */
class AdresZamieszkaniaSiedzibyAType extends TAdresType
{

    /**
     * @var string $rodzajAdresu
     */
    private $rodzajAdresu = null;

    /**
     * Gets as rodzajAdresu
     *
     * @return string
     */
    public function getRodzajAdresu()
    {
        return $this->rodzajAdresu;
    }

    /**
     * Sets a new rodzajAdresu
     *
     * @param string $rodzajAdresu
     * @return self
     */
    public function setRodzajAdresu($rodzajAdresu)
    {
        $this->rodzajAdresu = $rodzajAdresu;
        return $this;
    }


}

