<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;

class PostsController extends AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Category');
        $this->loadModel('SousCategory');
        $this->loadModel('Produit');
    }

    public function index()
    {
        $categories = $this->Category->all();
        $this->render('posts.index', compact('categories'));
    }

    public function show()
    {
        $categories = $this->Category->all();
        $produits = $this->Produit->find($_GET['id']);
        $souscategories = $this->SousCategory->findWithProduit($produits->id);
        if ($produits === false) {
            $this->notFound();
        }
        $form = new BootstrapForm($_POST);
        $this->render('posts.show', compact('categories', 'produits', 'form','souscategories'));
    }

    public function contact()
    {
        $categories = $this->Category->all();
        $errors = array();
        $success = true;

        if (!empty($_POST)) {
            if (empty($_POST['firstname'])) {
                $errors["firstnameError"] = "Veuillez saisir votre prénom.";
                $success = false;
            }
            if (empty($_POST['lastname'])) {
                $errors["lastnameError"] = "Veuillez saisir votre nom.";
                $success = false;
            }
            if (empty($_POST["tel"])) {
                $errors["telError"] = "Veuillez saisir votre numéro.";
                $success = false;
            } else if (!empty($_POST["tel"]) && (!filter_var($_POST["tel"]) || strlen($_POST["tel"]) != 10)) {
                $errors["telError"] = "Veuillez saisir un numéro valide.";
                $success = false;
            }
            if (empty($_POST["email"])) {
                $errors["emailError"] = "Veuillez saisir votre e-mail.";
                $success = false;
            } else if (!empty($_POST["email"]) && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $errors["emailError"] = "Veuillez saisir un email valide.";
                $success = false;
            }
            if (empty($_POST['message'])) {
                $errors["messageError"] = "Veuillez saisir votre message.";
                $success = false;
            }
            if ($success) {
                $message = 'From : ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . '<br>
                            Email : ' . $_POST['email'] . '<br>
                            Téléphone : ' . $_POST['tel'] . '<br><br>
                            Messsage : ' . $_POST['message'] . '';
                mail(
                    "mimidevel@gmail.com",
                    "Contacte d'un utilistateur",
                    $message
                );
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('posts.contact', compact('categories', 'form', 'errors', 'success'));
    }

    public function Error()
    {
        $categories = $this->Category->all();
        $this->render('posts.Error', compact('categories'));
    }

    public function Interdit()
    {
        $this->render('posts.Interdit');
    }
}
