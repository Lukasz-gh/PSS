<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use core\SessionUtils;
use app\forms\UserEditForm;

class UserEditCtrl {

    private $form;
    private $roles;
    private $admins;
    private $actives;
    private $user;

    public function __construct() {
        $this->form = new UserEditForm();
    }

    public function validateSave() {
        $this->form->id = ParamUtils::getFromRequest('id', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
        return false;

        $v = new Validator();

        $this->form->login = $v->validateFromRequest('login', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Wprowadź login',
            'min_length' => 2,
            'validator_message' => 'Login musi mieć minimum 2 znaki'
        ]);

        $this->form->password = $v->validateFromRequest('password', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Wprowadź hasło',
            'min_length' => 2,
            'validator_message' => 'Hasło musi mieć minimum 2 znaki'
        ]);

        $this->form->role = $v->validateFromRequest('role', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Wprowadź role',
        ]);

        $this->form->active = $v->validateFromRequest('active', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Wprowadź aktywność konta',
        ]);

        if (App::getMessages()->isError())
        return false;

        if ($this->form->id == '') {
            if(
                $records = App::getDB()->select("users", [
                    "login",
                ], [
                    "login" => $this->form->login,
                ])
                ) {
                    Utils::addErrorMessage('Istniejej już użytkownik o takim loginie');
                    return false;
                }
        }

        return !App::getMessages()->isError();
    }

    public function validateEdit() {
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_userNew() {
        $this->generateView();
    }

    public function getRolesActiveForm() {
        try {
            $this->roles = App::getDB()->select("roles", [
                "idroles",
                "roles",
                ]
            );
            $this->actives = App::getDB()->select("users", [
                "active",
                ], [
                "idusers" => $this->form->id
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    public function action_userEdit() {
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("users", "*", [
                    "idusers" => $this->form->id
                ]);
                $this->form->id = $record['idusers'];
                $this->form->login = $record['login'];
                $this->form->password = $record['password'];
                $this->form->role = $record['idroles'];
                $this->form->active = $record['active'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        } 

        $this->generateView();
    }

    public function action_userDelete() {
        $this->lastAdmin();
        $this->user = SessionUtils::loadObject('userObj', $keep = true)->login;

        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("users", [
                    "[>]roles" => "idroles"
                ], [
                    "login",
                    "roles"
                ], [
                    "idusers" => $this->form->id
                ]);
                $this->form->login = $record['login'];
                $this->form->role = $record['roles'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            if ($this->form->role == 'admin' AND $this->admins > 2) {
                try {
                    App::getDB()->delete("users", [
                        "idusers" => $this->form->id
                    ]);
                    Utils::addInfoMessage('Pomyślnie usunięto rekord');
                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }
                if($this->user == $this->form->login) {
                    session_destroy();
                    App::getRouter()->redirectTo('login');
                }
            } else if ($this->form->role != 'admin'){
                try {
                    App::getDB()->delete("users", [
                        "idusers" => $this->form->id
                    ]);
                    Utils::addInfoMessage('Pomyślnie usunięto rekord');
                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }
                if($this->user == $this->form->login) {
                    session_destroy();
                    App::getRouter()->redirectTo('login');
                }
            } else {
                Utils::addErrorMessage('W systemie musi pozostać 2-óch administratorów');
            }
        }
        App::getRouter()->forwardTo('userList');
    }

    public function lastAdmin() {
        try {
            $this->admins = App::getDB()->count("users", [
                "[>]roles" => "idroles"
            ], [
                "idroles"
            ], [
                "roles" => 'admin'
            ]
            );
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    public function action_userSave() {
        if ($this->validateSave()) {
            try {
                if ($this->form->id == '') {
                    App::getDB()->insert("users", [
                        "login" => $this->form->login,
                        "password" => $this->form->password,
                        "idroles" => $this->form->role,
                        "active" => $this->form->active
                    ]);
                    Utils::addInfoMessage('Pomyślnie zapisano rekord');
                } else {
                    App::getDB()->update("users", [
                        "login" => $this->form->login,
                        "password" => $this->form->password,
                        "idroles" => $this->form->role,
                        "active" => $this->form->active
                        ], [
                        "idusers" => $this->form->id
                        ]);
                }
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            App::getRouter()->forwardTo('userList');
        } else {
            $this->generateView();
        }
    }

    public function generateView() {
        $this->getRolesActiveForm();
        $this->lastAdmin();

        App::getSmarty()->assign('roles', $this->roles);
        App::getSmarty()->assign('actives', $this->actives);
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('userNew.tpl');
    }

}