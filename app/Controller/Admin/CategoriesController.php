<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class CategoriesController extends AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Category');
    }

    public function index()
    {
        if ($_SESSION['user']->role != 'ROLE_ADMIN') {
            $this->forbidden();
        }
        $categories = $this->Category->all();
        $this->render('admin.categories.index', compact('categories'));
    }

    public function Ajouter()
    {
        if ($_SESSION['user']->role != 'ROLE_ADMIN') {
            $this->forbidden();
        }
        $errors = array();

        if ($_POST) {
            $success = true;

            if (empty($_POST['titre'])) {
                $errors["titreError"] = "Veuillez saisir un nom catégorie.";
                $success = false;
            }

            if ($success) {
                $this->add($_POST);
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('admin.categories.add', compact('form', 'errors'));
    }

    public function add($donnees)
    {
        if ($_SESSION['user']->role != 'ROLE_ADMIN') {
            $this->forbidden();
        }
        if (!empty($donnees)) {
            $result = $this->Category->create([
                'titre' => $_POST['titre'],
            ]);
            if ($result) {
                header('Location: index.php?p=admin.categories.index');
            }
        }
    }

    public function Modif()
    {
        if ($_SESSION['user']->role != 'ROLE_ADMIN') {
            $this->forbidden();
        }
        $errors = array();

        if ($_POST) {
            $success = true;

            if (empty($_POST['titre'])) {
                $errors["titreError"] = "Veuillez saisir un nom catégories.";
                $success = false;
            }
            if ($success) {
                $this->editer($_POST);
            }
        }
        $categories = $this->Category->find($_GET['id']);
        $form = new BootstrapForm($categories);
        $this->render('admin.categories.edit', compact('form', 'errors', 'categories'));
    }

    public function editer($donnees)
    {
        if ($_SESSION['user']->role != 'ROLE_ADMIN') {
            $this->forbidden();
        }
        if (!empty($donnees)) {
            $result = $this->Category->update($_GET['id'], [
                'titre' => $_POST['titre'],
            ]);
            if ($result) {
                header('Location: index.php?p=admin.categories.index');
            }
        }
    }

    public function delete()
    {
        if ($_SESSION['user']->role != 'ROLE_ADMIN') {
            $this->forbidden();
        }
        if (!empty($_POST)) {
            $result = $this->Category->delete($_POST['id']);
            return $this->index();
        }
    }
}
