<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class ProduitsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Produit');
        $this->loadModel('SousCategory');
    }

    public function index(){
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            $this->forbidden();
        }
        $produits = $this->Produit->all();
        $this->render('admin.produits.index', compact('produits'));
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

            if (empty($_POST['description'])) {
                $errors["descriptionError"] = "Veuillez saisir une description.";
                $success = false;
            }

            if (empty($_POST['prix'])) {
                $errors["prixError"] = "Veuillez saisir un prix.";
                $success = false;
            }

            if ($success) {
                $this->add($_POST);
            }
        }
        $sous_categories = $this->SousCategory->extract('id', 'titre');
        $form = new BootstrapForm($_POST);
        $this->render('admin.produits.add', compact('form', 'errors', 'sous_categories'));
    }

    public function add($donnees)
    {
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            $this->forbidden();
        }

        if (!empty($donnees)) {
            $image1 = $this->uploadImage('img1');
            $image2 = $this->uploadImage('img2');
            $image3 = $this->uploadImage('img3');
            $image4 = $this->uploadImage('img4');

            $result = $this->Produit->create([
                'titre' => $_POST['titre'],
                'description' => $_POST['description'],
                'img1' => ($image1)? $image1 : null,
                'img2' => ($image2)? $image2 : null,
                'img3' => ($image3)? $image3 : null,
                'img4' => ($image4)? $image4 : null,
                'prix' => $_POST['prix'],
                'sous_categories_id' => $_POST['sous_categories_id'],
            ]);
            if ($result) {
                header('Location: index.php?p=admin.produits.index');
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
                $errors["titreError"] = "Veuillez saisir un nom de produit.";
                $success = false;
            }

            if (empty($_POST['description'])) {
                $errors["descriptionError"] = "Veuillez saisir une description.";
                $success = false;
            }

            if (empty($_POST['prix'])) {
                $errors["prixError"] = "Veuillez saisir un prix.";
                $success = false;
            }

            if ($success) {
                $this->editer($_POST);
            }
        }
        $sous_categories = $this->SousCategory->extract('id', 'titre');
        $produits = $this->Produit->find($_GET['id']);
        $form = new BootstrapForm($produits);
        $this->render('admin.produits.edit', compact('form', 'errors', 'produits', 'sous_categories'));
    }

    public function editer($donnees)
    {
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            $this->forbidden();
        }

        $produitImg = $this->Produit->find($_GET['id']);

        if (!empty($donnees)) {
            $image1 = $this->uploadImage('img1');
            $image2 = $this->uploadImage('img2');
            $image3 = $this->uploadImage('img3');
            $image4 = $this->uploadImage('img4');

            $result = $this->Produit->update($_GET['id'], [
                'titre' => $_POST['titre'],
                'description' => $_POST['description'],
                'img1' => ($image1)? $image1 : $produitImg->img1,
                'img2' => ($image2)? $image2 : $produitImg->img2,
                'img3' => ($image3)? $image3 : $produitImg->img3,
                'img4' => ($image4)? $image4 : $produitImg->img4,
                'prix' => $_POST['prix'],
                'sous_categories_id' => $_POST['sous_categories_id']
            ]);
            if ($result) {
                header('Location: index.php?p=admin.produits.index');
            }
        }
    }

    public function delete(){
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            $this->forbidden();
        }

        if (!empty($_POST)) {
            $result = $this->Produit->delete($_POST['id']);
            return $this->index();
        }
    }

    /*
    * Fonction d'enregistrement d'image 
    */
    public function uploadImage($img){
        //Vérifier si le formulaire a été soumis
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // Vérifie si le fichier a été uploadé sans erreur.
            if(isset($_FILES[$img]) && $_FILES[$img]["error"] == 0){

                $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                $filename = $_FILES[$img]["name"];
                $filetype = $_FILES[$img]["type"];
                $filesize = $_FILES[$img]["size"];
                
                // Vérifie l'extension du fichier
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

                // Vérifie la taille du fichier - 2Mo maximum
                $maxsize = 2 * 1024 * 1024;
                if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée 2Mo.");

                // Vérifie le type MIME du fichier
                if(in_array($filetype, $allowed)){
                    move_uploaded_file($_FILES[$img]["tmp_name"], "../public/img/upload/" . $_FILES[$img]["name"]);
                    //echo "Votre fichier a été téléchargé avec succès.";
                    return $filename;
                } else{
                    echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
                    return false;
                }
            } else{
               
                return false;
            }
        }
    }

}