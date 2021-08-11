<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TOsobaNiefizycznaPelnaType
 *
 * Pełny zestaw danych o niefizycznej
 * XSD Type: TOsobaNiefizycznaPelna
 */
class TOsobaNiefizycznaPelnaType
{

    /**
     * @var \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznejPelnyType $osobaNiefizyczna
     */
    private $osobaNiefizyczna = null;

    /**
     * @var \JpkFa\DefinicjeTypy\TOsobaNiefizycznaPelnaType\AdresSiedzibyAType $adresSiedziby
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
     * @return \JpkFa\DefinicjeTypy\TOsobaNiefizycznaPelnaType\AdresSiedzibyAType
     */
    public function getAdresSiedziby()
    {
        return $this->adresSiedziby;
    }

    /**
     * Sets a new adresSiedziby
     *
     * @param \JpkFa\DefinicjeTypy\TOsobaNiefizycznaPelnaType\AdresSiedzibyAType $adresSiedziby
     * @return self
     */
    public function setAdresSiedziby(\JpkFa\DefinicjeTypy\TOsobaNiefizycznaPelnaType\AdresSiedzibyAType $adresSiedziby)
    {
        $this->adresSiedziby = $adresSiedziby;
        return $this;
    }


}

