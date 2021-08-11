<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TOsobaNiefizycznaPelna1Type
 *
 * Pełny zestaw danych o osobie niefizycznej - bez elementu Poczta w adresie polskim
 * XSD Type: TOsobaNiefizycznaPelna1
 */
class TOsobaNiefizycznaPelna1Type
{

    /**
     * @var \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznejPelnyType $osobaNiefizyczna
     */
    private $osobaNiefizyczna = null;

    /**
     * @var \JpkFa\DefinicjeTypy\TOsobaNiefizycznaPelna1Type\AdresSiedzibyAType $adresSiedziby
     */
    private $adresSiedziby = null;

    /**
     * Gets as osobaNiefizyczna
     *
     * @return \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznejPelnyType
     */
    public function getOsobaNiefizyczna()
    {
        return $this->osobaNiefizyczna;
    }

    /**
     * Sets a new osobaNiefizyczna
     *
     * @param \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznejPelnyType $osobaNiefizyczna
     * @return self
     */
    public function setOsobaNiefizyczna(\JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznejPelnyType $osobaNiefizyczna)
    {
        $this->osobaNiefizyczna = $osobaNiefizyczna;
        return $this;
    }

    /**
     * Gets as adresSiedziby
     *
     * @return \JpkFa\DefinicjeTypy\TOsobaNiefizycznaPelna1Type\AdresSiedzibyAType
     */
    public function getAdresSiedziby()
    {
        return $this->adresSiedziby;
    }

    /**
     * Sets a new adresSiedziby
     *
     * @param \JpkFa\DefinicjeTypy\TOsobaNiefizycznaPelna1Type\AdresSiedzibyAType $adresSiedziby
     * @return self
     */
    public function setAdresSiedziby(\JpkFa\DefinicjeTypy\TOsobaNiefizycznaPelna1Type\AdresSiedzibyAType $adresSiedziby)
    {
        $this->adresSiedziby = $adresSiedziby;
        return $this;
    }


}

