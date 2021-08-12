<?php

namespace JpkFa\Jpk\JPK\JPKAType;

/**
 * Class representing ZamowienieAType
 */
class ZamowienieAType
{

    /**
     * Numer faktury, z którym związane jest zamówienie lub umowa, identyczny jak w polu P_2A
     *
     * @var string $p2AZ
     */
    private $p2AZ = null;

    /**
     * Wartość zamówienia lub umowy z uwzględnieniem kwoty podatku
     *
     * @var float $wartoscZamowienia
     */
    private $wartoscZamowienia = null;

    /**
     * Szczegółowe pozycje zamówienia lub umowy w walucie, w której wystawiono fakturę zaliczkową
     *
     * @var \JpkFa\Jpk\JPK\JPKAType\ZamowienieAType\ZamowienieWierszAType[] $zamowienieWiersz
     */
    private $zamowienieWiersz = [
        
    ];

    /**
     * Gets as p2AZ
     *
     * Numer faktury, z którym związane jest zamówienie lub umowa, identyczny jak w polu P_2A
     *
     * @return string
     */
    public function getP2AZ()
    {
        return $this->p2AZ;
    }

    /**
     * Sets a new p2AZ
     *
     * Numer faktury, z którym związane jest zamówienie lub umowa, identyczny jak w polu P_2A
     *
     * @param string $p2AZ
     * @return self
     */
    public function setP2AZ($p2AZ)
    {
        $this->p2AZ = $p2AZ;
        return $this;
    }

    /**
     * Gets as wartoscZamowienia
     *
     * Wartość zamówienia lub umowy z uwzględnieniem kwoty podatku
     *
     * @return float
     */
    public function getWartoscZamowienia()
    {
        return $this->wartoscZamowienia;
    }

    /**
     * Sets a new wartoscZamowienia
     *
     * Wartość zamówienia lub umowy z uwzględnieniem kwoty podatku
     *
     * @param float $wartoscZamowienia
     * @return self
     */
    public function setWartoscZamowienia($wartoscZamowienia)
    {
        $this->wartoscZamowienia = $wartoscZamowienia;
        return $this;
    }

    /**
     * Adds as zamowienieWiersz
     *
     * Szczegółowe pozycje zamówienia lub umowy w walucie, w której wystawiono fakturę zaliczkową
     *
     * @return self
     * @param \JpkFa\Jpk\JPK\JPKAType\ZamowienieAType\ZamowienieWierszAType $zamowienieWiersz
     */
    public function addToZamowienieWiersz(\JpkFa\Jpk\JPK\JPKAType\ZamowienieAType\ZamowienieWierszAType $zamowienieWiersz)
    {
        $this->zamowienieWiersz[] = $zamowienieWiersz;
        return $this;
    }

    /**
     * isset zamowienieWiersz
     *
     * Szczegółowe pozycje zamówienia lub umowy w walucie, w której wystawiono fakturę zaliczkową
     *
     * @param int|string $index
     * @return bool
     */
    public function issetZamowienieWiersz($index)
    {
        return isset($this->zamowienieWiersz[$index]);
    }

    /**
     * unset zamowienieWiersz
     *
     * Szczegółowe pozycje zamówienia lub umowy w walucie, w której wystawiono fakturę zaliczkową
     *
     * @param int|string $index
     * @return void
     */
    public function unsetZamowienieWiersz($index)
    {
        unset($this->zamowienieWiersz[$index]);
    }

    /**
     * Gets as zamowienieWiersz
     *
     * Szczegółowe pozycje zamówienia lub umowy w walucie, w której wystawiono fakturę zaliczkową
     *
     * @return \JpkFa\Jpk\JPK\JPKAType\ZamowienieAType\ZamowienieWierszAType[]
     */
    public function getZamowienieWiersz()
    {
        return $this->zamowienieWiersz;
    }

    /**
     * Sets a new zamowienieWiersz
     *
     * Szczegółowe pozycje zamówienia lub umowy w walucie, w której wystawiono fakturę zaliczkową
     *
     * @param \JpkFa\Jpk\JPK\JPKAType\ZamowienieAType\ZamowienieWierszAType[] $zamowienieWiersz
     * @return self
     */
    public function setZamowienieWiersz(array $zamowienieWiersz)
    {
        $this->zamowienieWiersz = $zamowienieWiersz;
        return $this;
    }


}

