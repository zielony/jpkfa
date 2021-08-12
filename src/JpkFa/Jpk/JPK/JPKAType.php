<?php

namespace JpkFa\Jpk\JPK;

/**
 * Class representing JPKAType
 */
class JPKAType
{

    /**
     * Nagłówek JPK_FA
     *
     * @var \JpkFa\Jpk\JPK\JPKAType\NaglowekAType $naglowek
     */
    private $naglowek = null;

    /**
     * @var \JpkFa\Jpk\JPK\JPKAType\Podmiot1AType $podmiot1
     */
    private $podmiot1 = null;

    /**
     * Na podstawie art. 106 a-q ustawy z 11 marca 2004 r. o podatku od towarów i usług (Dz. U. z 2018 r. poz. 2174 z późn. zm.). Wartości sprzedaży i kwoty podatku wypełnia się w walucie, w której wystawiono fakturę, z wyjątkiem pól, w których kwoty podatku zostały przeliczone zgodnie z art. 31a w związku z art. 106e ust. 11 ustawy
     *
     * @var \JpkFa\Jpk\JPK\JPKAType\FakturaAType[] $faktura
     */
    private $faktura = [
        
    ];

    /**
     * Sumy kontrolne dla faktur
     *
     * @var \JpkFa\Jpk\JPK\JPKAType\FakturaCtrlAType $fakturaCtrl
     */
    private $fakturaCtrl = null;

    /**
     * Szczegółowe pozycje faktur w walucie, w której wystawiono fakturę
     *
     * @var \JpkFa\Jpk\JPK\JPKAType\FakturaWierszAType[] $fakturaWiersz
     */
    private $fakturaWiersz = [
        
    ];

    /**
     * Sumy kontrolne dla wierszy faktur
     *
     * @var \JpkFa\Jpk\JPK\JPKAType\FakturaWierszCtrlAType $fakturaWierszCtrl
     */
    private $fakturaWierszCtrl = null;

    /**
     * Zamówienia lub umowy, o których mowa w art. 106f ust. 1 pkt 4 ustawy (dla faktur zaliczkowych) w walucie, w której wystawiono fakturę zaliczkową
     *
     * @var \JpkFa\Jpk\JPK\JPKAType\ZamowienieAType[] $zamowienie
     */
    private $zamowienie = [
        
    ];

    /**
     * Sumy kontrolne dla zamówień lub umów
     *
     * @var \JpkFa\Jpk\JPK\JPKAType\ZamowienieCtrlAType $zamowienieCtrl
     */
    private $zamowienieCtrl = null;

    /**
     * Gets as naglowek
     *
     * Nagłówek JPK_FA
     *
     * @return \JpkFa\Jpk\JPK\JPKAType\NaglowekAType
     */
    public function getNaglowek()
    {
        return $this->naglowek;
    }

    /**
     * Sets a new naglowek
     *
     * Nagłówek JPK_FA
     *
     * @param \JpkFa\Jpk\JPK\JPKAType\NaglowekAType $naglowek
     * @return self
     */
    public function setNaglowek(\JpkFa\Jpk\JPK\JPKAType\NaglowekAType $naglowek)
    {
        $this->naglowek = $naglowek;
        return $this;
    }

    /**
     * Gets as podmiot1
     *
     * @return \JpkFa\Jpk\JPK\JPKAType\Podmiot1AType
     */
    public function getPodmiot1()
    {
        return $this->podmiot1;
    }

    /**
     * Sets a new podmiot1
     *
     * @param \JpkFa\Jpk\JPK\JPKAType\Podmiot1AType $podmiot1
     * @return self
     */
    public function setPodmiot1(\JpkFa\Jpk\JPK\JPKAType\Podmiot1AType $podmiot1)
    {
        $this->podmiot1 = $podmiot1;
        return $this;
    }

    /**
     * Adds as faktura
     *
     * Na podstawie art. 106 a-q ustawy z 11 marca 2004 r. o podatku od towarów i usług (Dz. U. z 2018 r. poz. 2174 z późn. zm.). Wartości sprzedaży i kwoty podatku wypełnia się w walucie, w której wystawiono fakturę, z wyjątkiem pól, w których kwoty podatku zostały przeliczone zgodnie z art. 31a w związku z art. 106e ust. 11 ustawy
     *
     * @return self
     * @param \JpkFa\Jpk\JPK\JPKAType\FakturaAType $faktura
     */
    public function addToFaktura(\JpkFa\Jpk\JPK\JPKAType\FakturaAType $faktura)
    {
        $this->faktura[] = $faktura;
        return $this;
    }

    /**
     * isset faktura
     *
     * Na podstawie art. 106 a-q ustawy z 11 marca 2004 r. o podatku od towarów i usług (Dz. U. z 2018 r. poz. 2174 z późn. zm.). Wartości sprzedaży i kwoty podatku wypełnia się w walucie, w której wystawiono fakturę, z wyjątkiem pól, w których kwoty podatku zostały przeliczone zgodnie z art. 31a w związku z art. 106e ust. 11 ustawy
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFaktura($index)
    {
        return isset($this->faktura[$index]);
    }

    /**
     * unset faktura
     *
     * Na podstawie art. 106 a-q ustawy z 11 marca 2004 r. o podatku od towarów i usług (Dz. U. z 2018 r. poz. 2174 z późn. zm.). Wartości sprzedaży i kwoty podatku wypełnia się w walucie, w której wystawiono fakturę, z wyjątkiem pól, w których kwoty podatku zostały przeliczone zgodnie z art. 31a w związku z art. 106e ust. 11 ustawy
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFaktura($index)
    {
        unset($this->faktura[$index]);
    }

    /**
     * Gets as faktura
     *
     * Na podstawie art. 106 a-q ustawy z 11 marca 2004 r. o podatku od towarów i usług (Dz. U. z 2018 r. poz. 2174 z późn. zm.). Wartości sprzedaży i kwoty podatku wypełnia się w walucie, w której wystawiono fakturę, z wyjątkiem pól, w których kwoty podatku zostały przeliczone zgodnie z art. 31a w związku z art. 106e ust. 11 ustawy
     *
     * @return \JpkFa\Jpk\JPK\JPKAType\FakturaAType[]
     */
    public function getFaktura()
    {
        return $this->faktura;
    }

    /**
     * Sets a new faktura
     *
     * Na podstawie art. 106 a-q ustawy z 11 marca 2004 r. o podatku od towarów i usług (Dz. U. z 2018 r. poz. 2174 z późn. zm.). Wartości sprzedaży i kwoty podatku wypełnia się w walucie, w której wystawiono fakturę, z wyjątkiem pól, w których kwoty podatku zostały przeliczone zgodnie z art. 31a w związku z art. 106e ust. 11 ustawy
     *
     * @param \JpkFa\Jpk\JPK\JPKAType\FakturaAType[] $faktura
     * @return self
     */
    public function setFaktura(array $faktura)
    {
        $this->faktura = $faktura;
        return $this;
    }

    /**
     * Gets as fakturaCtrl
     *
     * Sumy kontrolne dla faktur
     *
     * @return \JpkFa\Jpk\JPK\JPKAType\FakturaCtrlAType
     */
    public function getFakturaCtrl()
    {
        return $this->fakturaCtrl;
    }

    /**
     * Sets a new fakturaCtrl
     *
     * Sumy kontrolne dla faktur
     *
     * @param \JpkFa\Jpk\JPK\JPKAType\FakturaCtrlAType $fakturaCtrl
     * @return self
     */
    public function setFakturaCtrl(\JpkFa\Jpk\JPK\JPKAType\FakturaCtrlAType $fakturaCtrl)
    {
        $this->fakturaCtrl = $fakturaCtrl;
        return $this;
    }

    /**
     * Adds as fakturaWiersz
     *
     * Szczegółowe pozycje faktur w walucie, w której wystawiono fakturę
     *
     * @return self
     * @param \JpkFa\Jpk\JPK\JPKAType\FakturaWierszAType $fakturaWiersz
     */
    public function addToFakturaWiersz(\JpkFa\Jpk\JPK\JPKAType\FakturaWierszAType $fakturaWiersz)
    {
        $this->fakturaWiersz[] = $fakturaWiersz;
        return $this;
    }

    /**
     * isset fakturaWiersz
     *
     * Szczegółowe pozycje faktur w walucie, w której wystawiono fakturę
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFakturaWiersz($index)
    {
        return isset($this->fakturaWiersz[$index]);
    }

    /**
     * unset fakturaWiersz
     *
     * Szczegółowe pozycje faktur w walucie, w której wystawiono fakturę
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFakturaWiersz($index)
    {
        unset($this->fakturaWiersz[$index]);
    }

    /**
     * Gets as fakturaWiersz
     *
     * Szczegółowe pozycje faktur w walucie, w której wystawiono fakturę
     *
     * @return \JpkFa\Jpk\JPK\JPKAType\FakturaWierszAType[]
     */
    public function getFakturaWiersz()
    {
        return $this->fakturaWiersz;
    }

    /**
     * Sets a new fakturaWiersz
     *
     * Szczegółowe pozycje faktur w walucie, w której wystawiono fakturę
     *
     * @param \JpkFa\Jpk\JPK\JPKAType\FakturaWierszAType[] $fakturaWiersz
     * @return self
     */
    public function setFakturaWiersz(array $fakturaWiersz)
    {
        $this->fakturaWiersz = $fakturaWiersz;
        return $this;
    }

    /**
     * Gets as fakturaWierszCtrl
     *
     * Sumy kontrolne dla wierszy faktur
     *
     * @return \JpkFa\Jpk\JPK\JPKAType\FakturaWierszCtrlAType
     */
    public function getFakturaWierszCtrl()
    {
        return $this->fakturaWierszCtrl;
    }

    /**
     * Sets a new fakturaWierszCtrl
     *
     * Sumy kontrolne dla wierszy faktur
     *
     * @param \JpkFa\Jpk\JPK\JPKAType\FakturaWierszCtrlAType $fakturaWierszCtrl
     * @return self
     */
    public function setFakturaWierszCtrl(\JpkFa\Jpk\JPK\JPKAType\FakturaWierszCtrlAType $fakturaWierszCtrl)
    {
        $this->fakturaWierszCtrl = $fakturaWierszCtrl;
        return $this;
    }

    /**
     * Adds as zamowienie
     *
     * Zamówienia lub umowy, o których mowa w art. 106f ust. 1 pkt 4 ustawy (dla faktur zaliczkowych) w walucie, w której wystawiono fakturę zaliczkową
     *
     * @return self
     * @param \JpkFa\Jpk\JPK\JPKAType\ZamowienieAType $zamowienie
     */
    public function addToZamowienie(\JpkFa\Jpk\JPK\JPKAType\ZamowienieAType $zamowienie)
    {
        $this->zamowienie[] = $zamowienie;
        return $this;
    }

    /**
     * isset zamowienie
     *
     * Zamówienia lub umowy, o których mowa w art. 106f ust. 1 pkt 4 ustawy (dla faktur zaliczkowych) w walucie, w której wystawiono fakturę zaliczkową
     *
     * @param int|string $index
     * @return bool
     */
    public function issetZamowienie($index)
    {
        return isset($this->zamowienie[$index]);
    }

    /**
     * unset zamowienie
     *
     * Zamówienia lub umowy, o których mowa w art. 106f ust. 1 pkt 4 ustawy (dla faktur zaliczkowych) w walucie, w której wystawiono fakturę zaliczkową
     *
     * @param int|string $index
     * @return void
     */
    public function unsetZamowienie($index)
    {
        unset($this->zamowienie[$index]);
    }

    /**
     * Gets as zamowienie
     *
     * Zamówienia lub umowy, o których mowa w art. 106f ust. 1 pkt 4 ustawy (dla faktur zaliczkowych) w walucie, w której wystawiono fakturę zaliczkową
     *
     * @return \JpkFa\Jpk\JPK\JPKAType\ZamowienieAType[]
     */
    public function getZamowienie()
    {
        return $this->zamowienie;
    }

    /**
     * Sets a new zamowienie
     *
     * Zamówienia lub umowy, o których mowa w art. 106f ust. 1 pkt 4 ustawy (dla faktur zaliczkowych) w walucie, w której wystawiono fakturę zaliczkową
     *
     * @param \JpkFa\Jpk\JPK\JPKAType\ZamowienieAType[] $zamowienie
     * @return self
     */
    public function setZamowienie(array $zamowienie)
    {
        $this->zamowienie = $zamowienie;
        return $this;
    }

    /**
     * Gets as zamowienieCtrl
     *
     * Sumy kontrolne dla zamówień lub umów
     *
     * @return \JpkFa\Jpk\JPK\JPKAType\ZamowienieCtrlAType
     */
    public function getZamowienieCtrl()
    {
        return $this->zamowienieCtrl;
    }

    /**
     * Sets a new zamowienieCtrl
     *
     * Sumy kontrolne dla zamówień lub umów
     *
     * @param \JpkFa\Jpk\JPK\JPKAType\ZamowienieCtrlAType $zamowienieCtrl
     * @return self
     */
    public function setZamowienieCtrl(\JpkFa\Jpk\JPK\JPKAType\ZamowienieCtrlAType $zamowienieCtrl)
    {
        $this->zamowienieCtrl = $zamowienieCtrl;
        return $this;
    }


}

