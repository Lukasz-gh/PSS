<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('calcList'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('loginShow',    'LoginCtrl');
Utils::addRoute('login',        'LoginCtrl');
Utils::addRoute('logout',       'LoginCtrl');
Utils::addRoute('userList',     'UserListCtrl',	        ['admin']);
Utils::addRoute('userNew',      'UserEditCtrl',     	['admin']);
Utils::addRoute('userSave',     'UserEditCtrl',	        ['admin']);
Utils::addRoute('userDelete',   'UserEditCtrl',	        ['admin']);
Utils::addRoute('userEdit',     'UserEditCtrl',	        ['admin']);
Utils::addRoute('calcList',     'CalcListCtrl',         ['admin', 'projectManager', 'engineer', 'expert']);
Utils::addRoute('calcNew',      'CalcCtrl',             ['engineer', 'expert']);
Utils::addRoute('calcEdit',     'CalcCtrl',             ['engineer', 'expert']);
Utils::addRoute('ownerEdit',    'CalcCtrl',             ['expert']);
Utils::addRoute('ownerSave',    'CalcCtrl',             ['expert']);
Utils::addRoute('calcDelete',   'CalcCtrl',             ['engineer', 'expert']);
Utils::addRoute('calcSave',     'CalcCtrl',             ['engineer', 'expert']);
Utils::addRoute('catList',      'CatListCtrl',          ['admin', 'projectManager', 'engineer', 'expert']);
Utils::addRoute('fluidList',    'FluidListCtrl',        ['admin', 'projectManager', 'engineer', 'expert']);
Utils::addRoute('fluidListPa',  'FluidListCtrl',        ['admin', 'projectManager', 'engineer', 'expert']);
Utils::addRoute('fluidSearch',  'FluidListCtrl',        ['admin', 'projectManager', 'engineer', 'expert']);
Utils::addRoute('fluidSearchPa', 'FluidListCtrl',       ['admin', 'projectManager', 'engineer', 'expert']);
Utils::addRoute('fluidNew',     'FluidCtrl',            ['expert']);
Utils::addRoute('fluidSave',    'FluidCtrl',            ['expert']);
Utils::addRoute('fluidEdit',    'FluidCtrl',            ['expert']);
Utils::addRoute('fluidDelete',  'FluidCtrl',            ['expert']);