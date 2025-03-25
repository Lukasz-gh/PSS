<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\Validator;
use app\forms\User;
use app\forms\LoginForm;

class LoginCtrl {

    private $form;
    private $records;
    private $role;
    private $roles;

    public function __construct() {
        $this->form = new LoginForm();
    }

    public function validate() {
        $v = new Validator();

        $this->form->login = $v->validateFromRequest('login', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj login',
        ]);

        $this->form->pass = $v->validateFromRequest('pass', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Nie podano hasła',
        ]);

        if (App::getMessages()->isError())
            return false;

        if ($this->checkDB()) {
        } else {
            Utils::addErrorMessage('Niepoprawny login lub hasło');
            return false;
        }

        return !App::getMessages()->isError();
    }

    public function checkDB() {
        try {      
            if(
                $this->records = App::getDB()->select("users", [
                    "login",
                    "password",
                    "active",
                ], [
                    "login" => $this->form->login,
                    "password" => $this->form->pass,
                ])
            ) {
                if($this->records[0]['active'] == 2){
                    Utils::addInfoMessage('Dane poprawne');
                    $this->getRole();
                    return true;
                }
                else {
                    Utils::addErrorMessage('Użytkownik ma nieaktywne konto');
                    return false;
                }
            } else {
                return false;
            }
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    public function getRole() {
        try {
            $this->roles = App::getDB()->select("users", [
                "[>]roles" => "idroles"
            ], [
                "roles[String]",
            ], [
                "login" => $this->form->login,
            ]);

            $this->role = $this->roles[0]['roles'];
            Utils::addInfoMessage('Rola odczytana');

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {

            $user = new User($this->form->login, $this->role);

            // $_SESSION['userObj'];
            $userObj = 'userObj';
            SessionUtils::storeObject($userObj, $user);

            RoleUtils::addRole($this->role);
            
            Utils::addInfoMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("calcList");
        } else {
            $this->generateView();
        }
    }

    public function action_logout() {
        session_destroy();
        App::getRouter()->redirectTo('login');
    }

    public function generateView() {
        
        App::getSmarty()->assign('roles', $this->roles); 
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('Login.tpl');
    }

}