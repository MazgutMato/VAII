<?php

require "Film.php";
require "Komment.php";
require "Obrazok.php";
require "DBStorage.php";

class App
{
    private $storage;

    public function __construct()
    {
        $this->storage = new DBStorage();
    }

    public function getAllFilms() {
        return $this->storage->getAllFilms();
    }

    public function getFilm($id) {
        return $this->storage->getFilm($id);
    }
    public function getNajviacHodFilm() {
        return $this->storage->getNajviacHodFilm();
    }
}