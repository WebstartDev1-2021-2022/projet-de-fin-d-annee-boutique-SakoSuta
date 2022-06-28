<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;

class PanierController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Category');
        $this->loadModel('Produit');
        $this->loadModel('Commande');
    }

    /**
     * Page de rectification des produits 
     */
    public function index(){
        $categories = $this->Category->all();

        $panier =  (!empty($_SESSION['panier']['produit']))? $_SESSION['panier']['produit'] : null ;
        $prixTotalCommande = 0;

        if($panier){
            foreach($panier as $prix){
                $resultat = $prix["prix"] * $prix["nbr"];
                $prixTotalCommande += $resultat;
            }
        }
        $this->render('panier.index', compact('categories', 'panier', 'prixTotalCommande'));
    }    
    /**
     * Ajout dans le panier
     */
    public function add(){

        if($_POST['nbr'] > 0 ){
            $_SESSION['panier']['produit'][$_POST['idProduit']]['titre'] = $_POST['titre'];
            $_SESSION['panier']['produit'][$_POST['idProduit']]['souscategories'] = $_POST['souscategories'];
            $_SESSION['panier']['produit'][$_POST['idProduit']]['prix'] = $_POST['prix'];
            $_SESSION['panier']['produit'][$_POST['idProduit']]['nbr'] += $_POST['nbr'];
            $_SESSION['panier']['produit'][$_POST['idProduit']]['img'] = $_POST['img'];
        } 
        header('Location: index.php?p=panier.index');
       
    }

    /**
     * Page de recapitulatif Liste du panier
     */
    public function recapitulatif(){

        $produits = $_POST;
        $produitsAll = array();

         foreach($produits as $key => $produit){
            $produitSelect = '';
            if(!empty($produits['produit-id-'.$produit])){

                $produitSelect = $this->Produit->findWithCategory($produit);
                $produitsAll['produit'][$produitSelect->id]['produit-id'] = $produits['produit-id-'.$produit];
                $produitsAll['produit'][$produitSelect->id]['produit-nbr'] = $produits['produit-'.$produit.'-nbr'];
                $produitsAll['produit'][$produitSelect->id]['produit-total'] = $produits['produit-'.$produit.'-total'];
                $produitsAll['produit'][$produitSelect->id]['produit'] = $produitSelect;

            }   
            $produitsAll['commande']['commande-total']=  $produits['commande-total'];
         }
        $this->render('panier.recapitulatif', compact('produitsAll'));
    }

    /**
     * Page de confirmation ajout dans table commande et détruire le panier
     */
    public function confirmation(){
        $categories = $this->Category->all();

        if(!empty($_POST['user_id'])){

            $donnees = serialize($_POST);

            $result = $this->Commande->create([
                'user_id' => $_POST['user_id'],
                'donnees' => $donnees,
                'prix_total' => $_POST['commande-total'],
            ]);

            // Détruire session panier
            unset($_SESSION['panier']);

            $this->render('panier.confirmation', compact('categories'));
        }else{

            header('Location: index.php?p=users.login');
        }

    }

}