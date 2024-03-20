<?php

class Mahasiswa {

    public static function setNama(string $nama) {

        return $nama;

    }
}

// Instantiation with Scope resolution operator
// PaamayinNekudotayim

echo Mahasiswa::setNama('Faiza');