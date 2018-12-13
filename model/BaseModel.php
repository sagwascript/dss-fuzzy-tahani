<?php

namespace model;

abstract class BaseModel {

    public static function getDB() {
        return new \PDO("mysql:host=localhost;dbname=db_spk_raskin", "root", "");
    }

}