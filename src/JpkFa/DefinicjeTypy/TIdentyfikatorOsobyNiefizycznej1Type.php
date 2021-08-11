<?php

namespace JpkFa\DefinicjeTypy;

/**
 * Class representing TIdentyfikatorOsobyNiefizycznej1Type
 *
 * Podstawowy zestaw danych identyfikacyjnych o osobie niefizycznej - bez elementu Numer REGON
 * XSD Type: TIdentyfikatorOsobyNiefizycznej1
 */
class TIdentyfikatorOsobyNiefizycznej1Type
{

    /**
     * Identyfikator podatkowy NIP
     *
     * @var string $nIP
     */
    private $nIP = null;

    /**
     * Pełna nazwa
     *
     * @var string $pelnaNazwa
     */
    private $pelnaNazwa = null;

    /**
     * Gets as nIP
     *
     * Identyfikator podatkowy NIP
     *
     * @return string
     */
    public function getNIP()
    {
        return $this->nIP;
    }

    /**
     * Sets a new nIP
     *
     * Identyfikator podatkowy NIP
     *
     * @param string $nIP
     * @return self
     */
    public function setNIP($nIP)
    {
        $this->nIP = $nIP;
        return $this;
    }

    /**
     * Gets as pelnaNazwa
     *
     * Pełna nazwa
     *
     * @return string
     */
    public function getPelnaNazwa()
    {
        return $this->pelnaNazwa;
    }

    /**
     * Sets a new pelnaNazwa
     *
     * Pełna nazwa
     *
     * @param string $pelnaNazwa
     * @return self
     */
    public function setPelnaNazwa($pelnaNazwa)
    {
        $this->pelnaNazwa = $pelnaNazwa;
        return $this;
    }


}

