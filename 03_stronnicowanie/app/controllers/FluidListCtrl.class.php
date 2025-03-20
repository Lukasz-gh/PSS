<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\FluidListForm;
use app\forms\FluidSearch;

class FluidListCtrl {

    private $records;
    private $form;
    private $offset;
    private $pageSize;
    private $pages;
    private $page;


    public function __construct() {
        $this->form = new FluidSearch();
        $this->pageSize = 3;
    }

    public function validate() {
        $this->form->fluidSearch = ParamUtils::getFromRequest('fluidSearch');
        $this->page = ParamUtils::getFromGet('page');
        return !App::getMessages()->isError();
    }

    public function action_fluidSearch() {
        $this->validate();
        $this->page = 1;
        $this->searchValues();
    }

    public function action_fluidSearchPa(){
        $this->validate();
        $this->searchValues();
    }

    public function searchValues(){
        $search_params = [];
        if (isset($this->form->fluidSearch) && strlen($this->form->fluidSearch) > 0) {
            $search_params['fluid[~]'] = $this->form->fluidSearch . '%'; //
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }

        $this->pages = App::getDB()->count("fluids", $where);
        $this->pages = CEIL($this->pages / $this->pageSize);
        $offset = $this->pageSize * ($this->page - 1);
        $where ["ORDER"] = "fluid";
        $where ["LIMIT"] = [$offset, $this->pageSize];

        try {
            $this->records = App::getDB()->select("fluids", [
                "idfluids",
                "fluid",
                "cisOperacyjne",
                "cisObliczeniowe",
                "tempOperacyjna",
                "tempObliczeniowa",
            ], $where,
        );

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        
        $this->generateView();
    }

    public function action_fluidList() {
        $this->validate();
        $this->page = 1;
        $this->getValues();
    }

    public function action_fluidListPa() { 
        $this->validate();
        $this->getValues();
    }

    public function getValues() {
        $offset = $this->pageSize * ($this->page - 1);

        try {
            $this->records = App::getDB()->select("fluids", [
                "idfluids",
                "fluid",
                "cisOperacyjne",
                "cisObliczeniowe",
                "tempOperacyjna",
                "tempObliczeniowa",
            ],[
			"LIMIT" => [$offset, $this->pageSize]
			]
        );

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        $this->getPages();
        $this->generateView();
    }

    public function getPages() {
        $this->pages = App::getDB()->count("fluids");
        $this->pages = CEIL($this->pages / $this->pageSize);
    }

    public function generateView() {
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('fluids', $this->records); 
        App::getSmarty()->assign('pages', $this->pages);
        App::getSmarty()->assign('page', $this->page); 
        App::getSmarty()->display("FluidList.tpl");
    }

}