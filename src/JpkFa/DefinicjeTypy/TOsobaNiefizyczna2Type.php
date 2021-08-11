<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TOsobaNiefizyczna2Type
 *
 * Podstawowy zestaw danych o osobie niefizycznej - bez elementu Numer REGON oraz bez elementu Poczta w adresie polskim
 * XSD Type: TOsobaNiefizyczna2
 */
class TOsobaNiefizyczna2Type
{

    /**
     * @var \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznej1Type $osobaNiefizyczna
     */
    private $osobaNiefizyczna = null;

    /**
     * @var \JpkFa\DefinicjeTypy\TOsobaNiefizyczna2Type\AdresSiedzibyAType $adresSiedziby
     */
    private $adresSiedziby = null;

    /**
     * Gets as osobaNiefizyczna
     *
     * @return \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznej1Type
     */
    public function getOsobaNiefizyczna()
    {
        return $this->osobaNiefizyczna;
    }

    /**
     * Sets a new osobaNiefizyczna
     *
     * @param \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznej1Type $osobaNiefizyczna
     * @return self
     */
    public function setOsobaNiefizyczna(\JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznej1Type $osobaNiefizyczna)
    {
        $this->osobaNiefizyczna = $osobaNiefizyczna;
        return $this;
    }

    /**
     * Gets as adresSiedziby
     *
     * @return \JpkFa\DefinicjeTypy\TOsobaNiefizyczna2Type\AdresSiedzibyAType
     */
    public function getAdresSiedziby()
    {
        return $this->adresSiedziby;
    }

    /**
     * Sets a new adresSiedziby
     *
     * @param \JpkFa\DefinicjeTypy\TOsobaNiefizyczna2Type\AdresSiedzibyAType $adresSiedziby
     * @return self
     */
    public function setAdresSiedziby(\JpkFa\DefinicjeTypy\TOsobaNiefizyczna2Type\AdresSiedzibyAType $adresSiedziby)
    {
        $this->adresSiedziby = $adresSiedziby;
        return $this;
    }


}

