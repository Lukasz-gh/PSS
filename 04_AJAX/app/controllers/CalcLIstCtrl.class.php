<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\User;
use app\forms\CalcListForm;
use app\forms\CalcSearch;

class CalcListCtrl {

    private $records;
    private $logins;
    private $roles;
    private $user;
    private $save;
    private $users;
    private $form;

    public function __construct() {
        $this->form = new CalcSearch();
    }

    public function validate() {
        $this->form->calcSearch = ParamUtils::getFromRequest('calcSearch');
        return !App::getMessages()->isError();
    }

    public function action_calcList() {
        $this->validate();

        $search_params = [];
        if (isset($this->form->calcSearch) && strlen($this->form->calcSearch) > 0) {
            $search_params['fluid[~]'] = $this->form->calcSearch . '%'; //
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }

        $where ["ORDER"] = "fluid";

        try {
            $this->records = App::getDB()->select("calulations", [
                "[>]users" => ["idusers"],
                "[>]steel" => ["idsteel"],
                "[>]diameter" => ["iddiameter"],
                "[>]wallThickness" => ["idwallThickness"],
                "[>]fluids" => ["idfluids"],

            ], [
                "fluid",
                "cisObliczeniowe",
                "tempObliczeniowa",
                "login",
                "gatunek",
                "idcalulations",
                "wallThickness",
                "real",
                "najmniejszaGrubosc",
                "pocienienie",
                "tolerancjaScianki",
                "korozja",
                "wytrzymaloscZlacza",
                "naprezeniaProjektowe",
            ]            
            , $where
        );
                
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                 Utils::addErrorMessage($e->getMessage());
        }

        $this->user = SessionUtils::loadObject('userObj', $keep = true);
    
        App::getSmarty()->assign('userObj', $this->user);
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('calculation', $this->records);
        App::getSmarty()->display("CalcList.tpl");
    
    }

}