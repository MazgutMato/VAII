<?php

class Film
{
    public function __construct(private int $id = 0, private ?string $nazov = null, private ?string $orgNazov = null,
                                private ?string $zaner = null,private ?string $krajina = null,private ?string $rezia = null,
                                private ?string $scenar = null,private ?string $hraju = null,private ?string $obsah = null,
                                private int $pocetHviezd = 0, private int $pocetHodnoteni = 0)
    {
    }

    private array $komentare;
    private array $obrazky;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getNazov(): ?string
    {
        return $this->nazov;
    }

    /**
     * @param string|null $nazov
     */
    public function setNazov(?string $nazov): void
    {
        $this->nazov = $nazov;
    }

    /**
     * @return string|null
     */
    public function getOrgNazov(): ?string
    {
        return $this->orgNazov;
    }

    /**
     * @param string|null $orgNazov
     */
    public function setOrgNazov(?string $orgNazov): void
    {
        $this->orgNazov = $orgNazov;
    }

    /**
     * @return string|null
     */
    public function getZaner(): ?string
    {
        return $this->zaner;
    }

    /**
     * @param string|null $zaner
     */
    public function setZaner(?string $zaner): void
    {
        $this->zaner = $zaner;
    }

    /**
     * @return string|null
     */
    public function getKrajina(): ?string
    {
        return $this->krajina;
    }

    /**
     * @param string|null $krajina
     */
    public function setKrajina(?string $krajina): void
    {
        $this->krajina = $krajina;
    }

    /**
     * @return string|null
     */
    public function getRezia(): ?string
    {
        return $this->rezia;
    }

    /**
     * @param string|null $rezia
     */
    public function setRezia(?string $rezia): void
    {
        $this->rezia = $rezia;
    }

    /**
     * @return string|null
     */
    public function getScenar(): ?string
    {
        return $this->scenar;
    }

    /**
     * @param string|null $scenar
     */
    public function setScenar(?string $scenar): void
    {
        $this->scenar = $scenar;
    }

    /**
     * @return string|null
     */
    public function getHraju(): ?string
    {
        return $this->hraju;
    }

    /**
     * @param string|null $hraju
     */
    public function setHraju(?string $hraju): void
    {
        $this->hraju = $hraju;
    }

    /**
     * @return string|null
     */
    public function getObsah(): ?string
    {
        return $this->obsah;
    }

    /**
     * @param string|null $obsah
     */
    public function setObsah(?string $obsah): void
    {
        $this->obsah = $obsah;
    }

    /**
     * @return array
     */
    public function getObrazky(): array
    {
        return $this->obrazky;
    }

    /**
     * @param array $obrazky
     */
    public function setObrazky(array $obrazky): void
    {
        $this->obrazky = $obrazky;
    }

    /**
     * @return int
     */
    public function getPocetHviezd(): int
    {
        return $this->pocetHviezd;
    }

    /**
     * @param int $pocetHviezd
     */
    public function setPocetHviezd(int $pocetHviezd): void
    {
        $this->pocetHviezd = $pocetHviezd;
    }

    /**
     * @return int
     */
    public function getPocetHodnoteni(): int
    {
        return $this->pocetHodnoteni;
    }

    /**
     * @param int $pocetHodnoteni
     */
    public function setPocetHodnoteni(int $pocetHodnoteni): void
    {
        $this->pocetHodnoteni = $pocetHodnoteni;
    }

    public function getPriemerneHodnotenie() {
        $priemer = $this->pocetHviezd/$this->pocetHodnoteni;
        return $priemer;
    }

    /**
     * @return array
     */
    public function getKomentare(): array
    {
        return $this->komentare;
    }

    /**
     * @param array $komentare
     */
    public function setKomentare(array $komentare): void
    {
        $this->komentare = $komentare;
    }
}