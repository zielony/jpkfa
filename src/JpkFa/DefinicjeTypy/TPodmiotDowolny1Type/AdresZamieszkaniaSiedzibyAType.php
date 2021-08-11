<?php

namespace JpkFa\DefinicjeTypy\TPodmiotDowolny1Type;

use JpkFa\DefinicjeTypy\TAdres1Type;

/**
 * Class representing AdresZamieszkaniaSiedzibyAType
 */
class AdresZamieszkaniaSiedzibyAType extends TAdres1Type
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

