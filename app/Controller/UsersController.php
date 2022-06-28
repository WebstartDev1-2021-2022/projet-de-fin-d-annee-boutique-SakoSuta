<?php

namespace App\Controller;

use Core\Auth\DBAuth;
use Core\HTML\BootstrapForm;
use \App;

class UsersController extends AppController {

    public function __construct(){
        parent::__construct();
        $this->loadModel('User');
        $this->loadModel('Category');
    }

    public function login(){
        $categories = $this->Category->all();
        $errorss = false;
        if(!empty($_POST)){
            $auth = new DBAuth(App::getInstance()->getDb());
            if($auth->login($_POST['email'], $_POST['password'])){
                if($_SESSION['user']->role === 'ROLE_ADMIN'){
                    // champ user 'role' administrateur
                    header('Location: index.php?p=admin.users.index');
                    // champ user 'user'
                }else{
                    header('Location: index.php?p=users.Compte');
                }
            } else {
                $errorss = true;
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('users.login', compact('categories', 'form', 'errorss'));
    }

    /*
    * fonction de déconnexion de l'utilisateur
    */
    public function logout(){
  
        $this->render('users.logout');
    }


    /*
    * fonction d'inscription de l'utilisateur
    */
    public function inscription(){
        $categories = $this->Category->all();
        $errors = array();
        $success = true;
        $errorss = false;

        if(empty($_POST['firstname'])){
            $errors["firstnameError"] = "Veuillez saisir votre prénom.";
            $success = false;
        }

        if(empty($_POST['lastname'])){
            $errors["lastnameError"] = "Veuillez saisir votre nom.";
            $success = false;
        }

        if(empty($_POST["email"])){
            $errors["emailError"] = "Veuillez saisir votre e-mail.";
            $success = false;
        } else if(!empty($_POST["email"]) && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
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

        if($_POST['password'] != $_POST['passwordVerif']){
            $errors["passwordVerifError"] = "Les deux mots de passe ne correspondent pas.";
            $success = false;
        }

        if($success){
            $this->registration($_POST);
        }
        $form = new BootstrapForm($_POST);
        $this->render('users.login', compact('categories', 'form', 'errors', 'success','errorss'));
    }

    /*
    * fonction de modifier un utilisateur depuis Compte
    */

    public function Modification(){
        $categories = $this->Category->all();
        $errors = array();
        $success = true;

        if(empty($_POST['firstname'])){
            $errors["firstnameError"] = "Veuillez saisir votre prénom.";
            $success = false;
        }

        if(empty($_POST['lastname'])){
            $errors["lastnameError"] = "Veuillez saisir votre nom.";
            $success = false;
        }

        if(!empty($_POST["tel"]) && (!filter_var( $_POST["tel"]) || strlen($_POST["tel"]) != 10)){
            $errors["telError"] = "Veuillez saisir un numéro valide.";
            $success = false;
        }

        if(empty($_POST["email"])){
            $errors["emailError"] = "Veuillez saisir votre e-mail.";
            $success = false;
        } else if(!empty($_POST["email"]) && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $errors["emailError"] = "Veuillez saisir un email valide.";
            $success = false;
        }

        if($success){
            $this->editCompte($_POST);
        }
        $form = new BootstrapForm($_POST);
        $this->render('users.Compte', compact('categories', 'form', 'errors', 'success'));
    }

    /*
    * fonction d'enregistrement de l'utilisateur
    */
    public function registration($donnees){
        if (!empty($donnees)) {
            $result = $this->User->create([
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'email' => $_POST['email'],
                'role' => 'ROLE_USER',
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            ]);
            if($result){
                header('Location: index.php?p=users.login');
            }
        }
    }

    /*
    * fonction d'enregistrement des modifs de l'utilisateur
    */

    public function editCompte($donnees){
        if (!empty($donnees)) {
            $result = $this->User->update($_SESSION['auth'], [
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'tel' => $_POST['tel'],
                'email' => $_POST['email'],
                'adresse' => $_POST['adresse'],
            ]);
            if($result){
                header('Location: index.php?p=users.Compte');
            }
        }
    }

    public function compte(){
        if(empty($_SESSION['user'])){
            $this->forbidden();
        }
        $categories = $this->Category->all();
        $Utilisateur = $this->User->find($_SESSION['auth']);
        $form = new BootstrapForm($Utilisateur);
        if($_SESSION['user']->role === 'ROLE_ADMIN'){
            // champ user 'role' administrateur
            header('Location: index.php?p=admin.users.index');
            // champ user 'user'
        }
        $this->render('users.Compte', compact('categories', 'form','Utilisateur'));
    }
}