<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class SousCategoriesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('SousCategory');
        $this->loadModel('Category');
    }

    public function index(){
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            $this->forbidden();
        }
        $sous_categories = $this->SousCategory->all();
        $this->render('admin.souscategories.index', compact('sous_categories'));
    }

    public function Ajouter()
    {
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            $this->forbidden();
        }
        $errors = array();

        if ($_POST) {
            $success = true;

            if (empty($_POST['titre'])) {
                $errors["titreError"] = "Veuillez saisir un nom de sous-catégorie.";
                $success = false;
            }

            if ($success) {
                $this->add($_POST);
            }
        }
        $categories = $this->Category->extract('id', 'titre');
        $form = new BootstrapForm($_POST);
        $this->render('admin.souscategories.add', compact('form', 'errors', 'categories'));
    }

    public function add($donnees)
    {
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            $this->forbidden();
        }
        if (!empty($donnees)) {
            $result = $this->SousCategory->create([
                'titre' => $_POST['titre'],
                'categories_id' => $_POST['categories_id'],
            ]);
            if ($result) {
                header('Location: index.php?p=admin.souscategories.index');
            }
        }
    }

    public function Modif()
    {
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            $this->forbidden();
        }
        $errors = array();

        if ($_POST) {
            $success = true;

            if (empty($_POST['titre'])) {
                $errors["titreError"] = "Veuillez saisir un nom de sous-catégorie.";
                $success = false;
            }

            if ($success) {
                $this->editer($_POST);
            }
        }
        $categories = $this->Category->extract('id', 'titre');
        $sous_categories = $this->SousCategory->find($_GET['id']);
        $form = new BootstrapForm($sous_categories);
        $this->render('admin.souscategories.edit', compact('form', 'errors', 'sous_categories', 'categories'));
    }

    public function editer($donnees)
    {
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            $this->forbidden();
        }
        if (!empty($donnees)) {
            $result = $this->SousCategory->update($_GET['id'], [
                'titre' => $_POST['titre'],
                'categories_id' => $_POST['categories_id'],
            ]);
            if ($result) {
                header('Location: index.php?p=admin.souscategories.index');
            }
        }
    }

    public function delete(){
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            $this->forbidden();
        }
        if (!empty($_POST)) {
            $result = $this->SousCategory->delete($_POST['id']);
            return $this->index();
        }
    }

}