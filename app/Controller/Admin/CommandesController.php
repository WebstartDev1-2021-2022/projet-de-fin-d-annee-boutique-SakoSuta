<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class CommandesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Commande');
    }

    public function index(){
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            $this->forbidden();
        }
        $commandes = $this->Commande->all();
        $this->render('admin.commandes.index', compact('commandes'));
    }
}