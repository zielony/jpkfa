<?php

namespace JpkFa\DefinicjeTypy\TOsobaFizycznaType;

use JpkFa\DefinicjeTypy\TAdresType;

/**
 * Class representing AdresZamieszkaniaAType
 */
class AdresZamieszkaniaAType extends TAdresType
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

