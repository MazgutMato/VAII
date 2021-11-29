<?php

class DBStorage
{
    private $con;

    public function __construct()
    {
        try {
            $this->con = new PDO("mysql:host=localhost;dbname=filmy", "root", "dtb456");
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            die("Chyba:" . $e->getMessage());
        }
    }

    public function getAllFilms()
    {
        $stmt = $this->con->prepare("SELECT * FROM film");
        $stmt->execute();
        $filmy = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Film::class);
        $stmt = $this->con->prepare("SELECT * FROM obrazok WHERE film_id = ?");
        foreach ($filmy as $film) {
            $stmt->execute([intval($film->getId())]);
            $obrazky = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Obrazok::class);
            $film->setObrazky($obrazky);
        }
        return $filmy;
    }

    public function getFilm($id) {
        $stmt = $this->con->prepare("SELECT * FROM film WHERE id = ?");
        $stmt->execute([intval($id)]);
        $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Film');
        $film = $stmt->fetch();
        //ziskanie vsetkych obrazkov
        $stmt = $this->con->prepare("SELECT * FROM obrazok WHERE film_id = ?");
        $stmt->execute([intval($film->getId())]);
        $obrazky = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Obrazok::class);
        $film->setObrazky($obrazky);
        //ziskanie vsetkych komentov
        $stmt = $this->con->prepare("SELECT * FROM komentare WHERE film_id = ?");
        $stmt->execute([intval($film->getId())]);
        $komenty = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Komment::class);
        $film->setKomentare($komenty);
        return $film;
    }

    public function getNajviacHodFilm() {
        $stmt = $this->con->prepare("SELECT * FROM film WHERE pocetHodnoteni = (SELECT MAX(pocetHodnoteni) from film)");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Film');
        $film = $stmt->fetch();
        $stmt = $this->con->prepare("SELECT * FROM obrazok WHERE film_id = ?");
        $stmt->execute([intval($film->getId())]);
        $obrazky = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Obrazok::class);
        $film->setObrazky($obrazky);
        return $film;
    }

}