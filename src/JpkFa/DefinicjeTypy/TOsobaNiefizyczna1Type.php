<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TOsobaNiefizyczna1Type
 *
 * Podstawowy zestaw danych o osobie niefizycznej - bez elementu Poczta w adresie polskim
 * XSD Type: TOsobaNiefizyczna1
 */
class TOsobaNiefizyczna1Type
{

    /**
     * @var \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznejType $osobaNiefizyczna
     */
    private $osobaNiefizyczna = null;

    /**
     * @var \JpkFa\DefinicjeTypy\TOsobaNiefizyczna1Type\AdresSiedzibyAType $adresSiedziby
     */
    private $adresSiedziby = null;

    /**
     * Gets as osobaNiefizyczna
     *
     * @return \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznejType
     */
    public function getOsobaNiefizyczna()
    {
        return $this->osobaNiefizyczna;
    }

    /**
     * Sets a new osobaNiefizyczna
     *
     * @param \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznejType $osobaNiefizyczna
     * @return self
     */
    public function setOsobaNiefizyczna(\JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznejType $osobaNiefizyczna)
    {
        $this->osobaNiefizyczna = $osobaNiefizyczna;
        return $this;
    }

    /**
     * Gets as adresSiedziby
     *
     * @return \JpkFa\DefinicjeTypy\TOsobaNiefizyczna1Type\AdresSiedzibyAType
     */
    public function getAdresSiedziby()
    {
        return $this->adresSiedziby;
    }

    /**
     * Sets a new adresSiedziby
     *
     * @param \JpkFa\DefinicjeTypy\TOsobaNiefizyczna1Type\AdresSiedzibyAType $adresSiedziby
     * @return self
     */
    public function setAdresSiedziby(\JpkFa\DefinicjeTypy\TOsobaNiefizyczna1Type\AdresSiedzibyAType $adresSiedziby)
    {
        $this->adresSiedziby = $adresSiedziby;
        return $this;
    }


}

