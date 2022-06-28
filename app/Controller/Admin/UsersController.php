<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class UsersController extends AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('User');
    }

    public function index()
    {
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            $this->forbidden();
        }
        $Users = $this->User->all();
        $this->render('admin.users.index', compact('Users'));
    }

    public function Ajouter()
    {
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            $this->forbidden();
        }
        $errors = array();

        if ($_POST) {
            $success = true;

            if (empty($_POST['firstname'])) {
                $errors["firstnameError"] = "Veuillez saisir un prénom.";
                $success = false;
            }

            if (empty($_POST['lastname'])) {
                $errors["lastnameError"] = "Veuillez saisir un nom.";
                $success = false;
            }

            if (!empty($_POST["tel"]) && (!filter_var($_POST["tel"]) || strlen($_POST["tel"]) != 10)) {
                $errors["telError"] = "Veuillez saisir un numéro valide.";
                $success = false;
            }

            if (empty($_POST["email"])) {
                $errors["emailError"] = "Veuillez saisir un e-mail.";
                $success = false;
            } else if (!empty($_POST["email"]) && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $errors["emailError"] = "Veuillez saisir un email valide.";
                $success = false;
            }

            if(empty($_POST["password"])){
                $errors["passwordError"] = "Veuillez saisir votre mot de passe.";
                $success = false;
            }
            else if(!preg_match('@[A-Z]@', $_POST["password"]) || !preg_match('@[a-z]@', $_POST["password"]) || !preg_match('@[0-9]@', $_POST["password"]) || !strlen($_POST["password"]) >= 8){
                $errors["passwordError"] = "Votre mot de passe doit contenir: au moins 8 caractères, au moins une lettre majuscule et au moins une lettre miniscule.";
                $success = false;
            }

            if ($success) {
                $this->add($_POST);
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('admin.users.add', compact('form', 'errors'));
    }

    public function add($donnees)
    {
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            $this->forbidden();
        }
        if (!empty($donnees)) {
            $result = $this->User->create([
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'role' => $_POST['role'],
                'email' => $_POST['email'],
                'tel' => $_POST['tel'],
                'adresse' => $_POST['adresse'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            ]);
            if ($result) {
                header('Location: index.php?p=admin.users.index');
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

            if (empty($_POST['firstname'])) {
                $errors["firstnameError"] = "Veuillez saisir un prénom.";
                $success = false;
            }

            if (empty($_POST['lastname'])) {
                $errors["lastnameError"] = "Veuillez saisir un nom.";
                $success = false;
            }

            if (!empty($_POST["tel"]) && (!filter_var($_POST["tel"]) || strlen($_POST["tel"]) != 10)) {
                $errors["telError"] = "Veuillez saisir un numéro valide.";
                $success = false;
            }

            if (empty($_POST["email"])) {
                $errors["emailError"] = "Veuillez saisir un e-mail.";
                $success = false;
            } else if (!empty($_POST["email"]) && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $errors["emailError"] = "Veuillez saisir un email valide.";
                $success = false;
            }
            if ($success) {
                $this->editer($_POST);
            }
        }
        $users = $this->User->find($_GET['id']);
        $form = new BootstrapForm($users);
        $this->render('admin.users.edit', compact('form', 'errors', 'users'));
    }

    public function editer($donnees)
    {
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            $this->forbidden();
        }
        if (!empty($donnees)) {
            $result = $this->User->update($_GET['id'], [
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'role' => $_POST['role'],
                'email' => $_POST['email'],
                'tel' => $_POST['tel'],
                'adresse' => $_POST['adresse'],
            ]);
            if ($result) {
                header('Location: index.php?p=admin.users.index');
            }
        }
    }

    public function delete()
    {
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            $this->forbidden();
        }
        if (!empty($_POST)) {
            $result = $this->User->delete($_POST['id']);
            return $this->index();
        }
    }
}
