<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;
use \App;

class ProduitsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Produit');
        $this->loadModel('Category');

    }

    public function index(){
        $produits = $this->Produit->last();
        $categories = $this->Category->all();
        
        $this->render('produits.index', compact('produits', 'categories'));
    }
    

    public function category(){
        $categorie = $this->Category->find($_GET['id']);
        if($categorie === false){
            $this->notFound();
        }
        $categories = $this->Category->all();
        $this->render('posts.category', compact('categories', 'categorie'));
    }

    public function show(){

        $produit = $this->Produit->findWithCategory($_GET['id']);
        App::getInstance()->title = $produit->titre;

        $form = new BootstrapForm();
        $this->render('produits.show', compact('produit', 'form'));
    }

}