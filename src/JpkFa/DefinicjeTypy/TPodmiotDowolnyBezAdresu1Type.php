<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TPodmiotDowolnyBezAdresu1Type
 *
 * Skrócony zestaw danych o osobie fizycznej lub niefizycznej z identyfikatorem NIP albo PESEL
 * XSD Type: TPodmiotDowolnyBezAdresu1
 */
class TPodmiotDowolnyBezAdresu1Type
{

    /**
     * @var \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznej1Type $osobaFizyczna
     */
    private $osobaFizyczna = null;

    /**
     * @var \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznejType $osobaNiefizyczna
     */
    private $osobaNiefizyczna = null;

    /**
     * Gets as osobaFizyczna
     *
     * @return \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznej1Type
     */
    public function getOsobaFizyczna()
    {
        return $this->osobaFizyczna;
    }

    /**
     * Sets a new osobaFizyczna
     *
     * @param \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznej1Type $osobaFizyczna
     * @return self
     */
    public function setOsobaFizyczna(\JpkFa\DefinicjeTypy\TIdentyfikatorOsobyFizycznej1Type $osobaFizyczna)
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

