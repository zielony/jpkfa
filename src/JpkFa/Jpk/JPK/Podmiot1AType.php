<?php

namespace JpkFa\Jpk\JPK;

/**
 * Class representing Podmiot1AType
 */
class Podmiot1AType
{

    /**
     * Dane identyfikujące podmiot
     *
     * @var \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznej1Type $identyfikatorPodmiotu
     */
    private $identyfikatorPodmiotu = null;

    /**
     * Adres podmiotu w Polsce
     *
     * @var \JpkFa\DefinicjeTypy\TAdresPolski1Type $adresPodmiotu
     */
    private $adresPodmiotu = null;

    /**
     * Adres podmiotu zagraniczny
     *
     * @var \JpkFa\DefinicjeTypy\TAdresZagranicznyType $adresPodmiotu2
     */
    private $adresPodmiotu2 = null;

    /**
     * Gets as identyfikatorPodmiotu
     *
     * Dane identyfikujące podmiot
     *
     * @return \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznej1Type
     */
    public function getIdentyfikatorPodmiotu()
    {
        return $this->identyfikatorPodmiotu;
    }

    /**
     * Sets a new identyfikatorPodmiotu
     *
     * Dane identyfikujące podmiot
     *
     * @param \JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznej1Type $identyfikatorPodmiotu
     * @return self
     */
    public function setIdentyfikatorPodmiotu(\JpkFa\DefinicjeTypy\TIdentyfikatorOsobyNiefizycznej1Type $identyfikatorPodmiotu)
    {
        $this->identyfikatorPodmiotu = $identyfikatorPodmiotu;
        return $this;
    }

    /**
     * Gets as adresPodmiotu
     *
     * Adres podmiotu w Polsce
     *
     * @return \JpkFa\DefinicjeTypy\TAdresPolski1Type
     */
    public function getAdresPodmiotu()
    {
        return $this->adresPodmiotu;
    }

    /**
     * Sets a new adresPodmiotu
     *
     * Adres podmiotu w Polsce
     *
     * @param \JpkFa\DefinicjeTypy\TAdresPolski1Type $adresPodmiotu
     * @return self
     */
    public function setAdresPodmiotu(\JpkFa\DefinicjeTypy\TAdresPolski1Type $adresPodmiotu)
    {
        $this->adresPodmiotu = $adresPodmiotu;
        return $this;
    }

    /**
     * Gets as adresPodmiotu2
     *
     * Adres podmiotu zagraniczny
     *
     * @return \JpkFa\DefinicjeTypy\TAdresZagranicznyType
     */
    public function getAdresPodmiotu2()
    {
        return $this->adresPodmiotu2;
    }

    /**
     * Sets a new adresPodmiotu2
     *
     * Adres podmiotu zagraniczny
     *
     * @param \JpkFa\DefinicjeTypy\TAdresZagranicznyType $adresPodmiotu2
     * @return self
     */
    public function setAdresPodmiotu2(\JpkFa\DefinicjeTypy\TAdresZagranicznyType $adresPodmiotu2)
    {
        $this->adresPodmiotu2 = $adresPodmiotu2;
        return $this;
    }


}

