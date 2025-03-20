<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\CatListForm;

class CatListCtrl {

    private $recordsSteel;
    private $recordsDiameter;
    private $recordsWall;
    private $wallNumber;

    public function action_catList() {  
        try {
            $this->recordsSteel = App::getDB()->select("steel", [
                "gatunek",
                "granicaPlastycznosci",
                "granicaWytrzymalosci",
                "idsteel",
            ]);

            $this->recordsDiameter = App::getDB()->select("diameter", [
                "real",
                "dn",
            ]);

            $this->recordsWall = App::getDB()->select("wallThickness", [
                "wallThickness",
            ]);

            $this->wallNumber = App::getDB()->count("wallThickness", '*');

            
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('wallNumber', $this->wallNumber); 
        App::getSmarty()->assign('diameter', $this->recordsDiameter); 
        App::getSmarty()->assign('wall', $this->recordsWall); 
        App::getSmarty()->assign('steel', $this->recordsSteel); 
        App::getSmarty()->display("CatalogueList.tpl");
    }
}