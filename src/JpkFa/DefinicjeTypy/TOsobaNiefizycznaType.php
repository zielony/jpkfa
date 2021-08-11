<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TOsobaNiefizycznaType
 *
 * Podstawowy zestaw danych o osobie niefizycznej
 * XSD Type: TOsobaNiefizyczna
 */
class TOsobaNiefizycznaType
{

    /**
     * @var \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznejType $osobaNiefizyczna
     */
    private $osobaNiefizyczna = null;

    /**
     * @var \JpkFa\DefinicjeTypy\TOsobaNiefizycznaType\AdresSiedzibyAType $adresSiedziby
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
     * @return \JpkFa\DefinicjeTypy\TOsobaNiefizycznaType\AdresSiedzibyAType
     */
    public function getAdresSiedziby()
    {
        return $this->adresSiedziby;
    }

    /**
     * Sets a new adresSiedziby
     *
     * @param \JpkFa\DefinicjeTypy\TOsobaNiefizycznaType\AdresSiedzibyAType $adresSiedziby
     * @return self
     */
    public function setAdresSiedziby(\JpkFa\DefinicjeTypy\TOsobaNiefizycznaType\AdresSiedzibyAType $adresSiedziby)
    {
        $this->adresSiedziby = $adresSiedziby;
        return $this;
    }


}

