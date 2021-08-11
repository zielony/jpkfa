<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TPodmiotDowolnyBezAdresuType
 *
 * Skrócony zestaw danych o osobie fizycznej lub niefizycznej
 * XSD Type: TPodmiotDowolnyBezAdresu
 */
class TPodmiotDowolnyBezAdresuType
{

    /**
     * @var \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznejType $osobaFizyczna
     */
    private $osobaFizyczna = null;

    /**
     * @var \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznejType $osobaNiefizyczna
     */
    private $osobaNiefizyczna = null;

    /**
     * Gets as osobaFizyczna
     *
     * @return \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznejType
     */
    public function getOsobaFizyczna()
    {
        return $this->osobaFizyczna;
    }

    /**
     * Sets a new osobaFizyczna
     *
     * @param \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznejType $osobaFizyczna
     * @return self
     */
    public function setOsobaFizyczna(\JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznejType $osobaFizyczna)
    {
        $this->osobaFizyczna = $osobaFizyczna;
        return $this;
    }

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


}

