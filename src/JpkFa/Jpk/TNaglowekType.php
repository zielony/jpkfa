<?php

namespace JpkFa\Jpk;

/**
 * Class representing TNaglowekType
 *
 * Nagłówek JPK_FA
 * XSD Type: TNaglowek
 */
class TNaglowekType
{

    /**
     * @var \JpkFa\Jpk\TNaglowekType\KodFormularzaAType $kodFormularza
     */
    private $kodFormularza = null;

    /**
     * @var string $wariantFormularza
     */
    private $wariantFormularza = null;

    /**
     * @var string $celZlozenia
     */
    private $celZlozenia = null;

    /**
     * Data i czas wytworzenia JPK_FA
     *
     * @var \DateTime $dataWytworzeniaJPK
     */
    private $dataWytworzeniaJPK = null;

    /**
     * Data początkowa okresu, którego dotyczy JPK_FA
     *
     * @var \DateTime $dataOd
     */
    private $dataOd = null;

    /**
     * Data końcowa okresu, którego dotyczy JPK_FA
     *
     * @var \DateTime $dataDo
     */
    private $dataDo = null;

    /**
     * Kod urzędu skarbowego, właściwy dla podatnika przekazującego JPK_FA
     *
     * @var string $kodUrzedu
     */
    private $kodUrzedu = null;

    /**
     * Gets as kodFormularza
     *
     * @return \JpkFa\Jpk\TNaglowekType\KodFormularzaAType
     */
    public function getKodFormularza()
    {
        return $this->kodFormularza;
    }

    /**
     * Sets a new kodFormularza
     *
     * @param \JpkFa\Jpk\TNaglowekType\KodFormularzaAType $kodFormularza
     * @return self
     */
    public function setKodFormularza(\JpkFa\Jpk\TNaglowekType\KodFormularzaAType $kodFormularza)
    {
        $this->kodFormularza = $kodFormularza;
        return $this;
    }

    /**
     * Gets as wariantFormularza
     *
     * @return string
     */
    public function getWariantFormularza()
    {
        return $this->wariantFormularza;
    }

    /**
     * Sets a new wariantFormularza
     *
     * @param string $wariantFormularza
     * @return self
     */
    public function setWariantFormularza($wariantFormularza)
    {
        $this->wariantFormularza = $wariantFormularza;
        return $this;
    }

    /**
     * Gets as celZlozenia
     *
     * @return string
     */
    public function getCelZlozenia()
    {
        return $this->celZlozenia;
    }

    /**
     * Sets a new celZlozenia
     *
     * @param string $celZlozenia
     * @return self
     */
    public function setCelZlozenia($celZlozenia)
    {
        $this->celZlozenia = $celZlozenia;
        return $this;
    }

    /**
     * Gets as dataWytworzeniaJPK
     *
     * Data i czas wytworzenia JPK_FA
     *
     * @return \DateTime
     */
    public function getDataWytworzeniaJPK()
    {
        return $this->dataWytworzeniaJPK;
    }

    /**
     * Sets a new dataWytworzeniaJPK
     *
     * Data i czas wytworzenia JPK_FA
     *
     * @param \DateTime $dataWytworzeniaJPK
     * @return self
     */
    public function setDataWytworzeniaJPK(\DateTime $dataWytworzeniaJPK)
    {
        $this->dataWytworzeniaJPK = $dataWytworzeniaJPK;
        return $this;
    }

    /**
     * Gets as dataOd
     *
     * Data początkowa okresu, którego dotyczy JPK_FA
     *
     * @return \DateTime
     */
    public function getDataOd()
    {
        return $this->dataOd;
    }

    /**
     * Sets a new dataOd
     *
     * Data początkowa okresu, którego dotyczy JPK_FA
     *
     * @param \DateTime $dataOd
     * @return self
     */
    public function setDataOd(\DateTime $dataOd)
    {
        $this->dataOd = $dataOd;
        return $this;
    }

    /**
     * Gets as dataDo
     *
     * Data końcowa okresu, którego dotyczy JPK_FA
     *
     * @return \DateTime
     */
    public function getDataDo()
    {
        return $this->dataDo;
    }

    /**
     * Sets a new dataDo
     *
     * Data końcowa okresu, którego dotyczy JPK_FA
     *
     * @param \DateTime $dataDo
     * @return self
     */
    public function setDataDo(\DateTime $dataDo)
    {
        $this->dataDo = $dataDo;
        return $this;
    }

    /**
     * Gets as kodUrzedu
     *
     * Kod urzędu skarbowego, właściwy dla podatnika przekazującego JPK_FA
     *
     * @return string
     */
    public function getKodUrzedu()
    {
        return $this->kodUrzedu;
    }

    /**
     * Sets a new kodUrzedu
     *
     * Kod urzędu skarbowego, właściwy dla podatnika przekazującego JPK_FA
     *
     * @param string $kodUrzedu
     * @return self
     */
    public function setKodUrzedu($kodUrzedu)
    {
        $this->kodUrzedu = $kodUrzedu;
        return $this;
    }


}

