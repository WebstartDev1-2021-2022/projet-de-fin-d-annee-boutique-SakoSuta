<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;

class CategoriesController extends AppController
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
        $this->render('categories.index', compact('categories'));
    }

    public function souscategory()
    {
        $categories = $this->Category->all();
        $souscategories = $this->SousCategory->find($_GET['id']);
        if ($souscategories === false) {
            $this->notFound();
        }
        $produits = $this->Produit->lastBySousCategory($_GET['id']);
        $this->render('categories.souscategory', compact('categories', 'souscategories', 'produits'));
    }

    public function PlayStation()
    {
        $categories = $this->Category->all();
        $produits4 = $this->Produit->lastBySousCategorylim(1);
        $produits5 = $this->Produit->lastBySousCategorylim(2);
        $this->render('categories.PlayStation', compact('categories', 'produits4','produits5'));
    }

    public function Xbox()
    {
        $categories = $this->Category->all();
        $produits4 = $this->Produit->lastBySousCategorylim(3);
        $produits5 = $this->Produit->lastBySousCategorylim(4);
        $this->render('categories.Xbox', compact('categories', 'produits4','produits5'));
    }

    public function Nintendo()
    {
        $categories = $this->Category->all();
        $produits4 = $this->Produit->lastBySousCategorylim(3);
        $produits5 = $this->Produit->lastBySousCategorylim(4);
        $this->render('categories.Nintendo', compact('categories', 'produits4','produits5'));
    }

}