<?php

namespace JpkFa\DefinicjeTypy\TOsobaNiefizyczna2Type;

use JpkFa\DefinicjeTypy\TAdres1Type;

/**
 * Class representing AdresSiedzibyAType
 */
class AdresSiedzibyAType extends TAdres1Type
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

