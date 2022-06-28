<main>
    <section>
        <div class="FicheProduit">
            <div class="ContenuFP">
                <div class="ImageProduit">
                    <img src="..\public\img\upload\<?=$produits->img4?>" alt="Image Produit">
                </div>
                <div class="FicheInfo">
                    <form method="post" action="index.php?p=panier.add">
                        <div class="haut">
                            <div class="Produit">
                                <input type="hidden" name="img" id="img" value="<?=$produits->img4;?>">
                                <p class="CHAKRASemiBold font40"><?=$produits->titre?></p>
                                <input type="hidden" name="idProduit" id="idProduit" value="<?=$produits->id;?>">
                                <input type="hidden" name="titre" id="titre" value="<?=$produits->titre;?>">
                                <p class="Play CHAKRARegular font24"><?=$souscategories->titre?></p>
                                <input type="hidden" name="souscategories" id="souscategories" value="<?=$souscategories->titre?>">
                                <p class="CHAKRAMedium font32"><?=$produits->prix?> €</p>
                                <input type="hidden" name="prix" id="prix" value="<?=$produits->prix;?>">
                            </div>
                            <div class="quanti">
                                <div class="ContenuQuanti">
                                    <p class="CHAKRAMedium font20">Quantité :</p>
                                    <div class="InputQuanti">
                                        <div class="Aligne">
                                            <input type="number" name="nbr" id="nbr" min="1" max="20" value="1" class="policeCHAKRA font20">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="descrip">
                            <p class="CHAKRAMedium font24">Description</p>
                            <div class="ContenuDescrip">
                                <p class="policeCHAKRA font20"><?=$produits->description?></p>
                            </div>
                        </div>
                        <div class="AjoutPanier">
                            <button class="CHAKRAMedium font24">Ajouter au panier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>