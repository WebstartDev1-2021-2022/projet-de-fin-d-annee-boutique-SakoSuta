<main>
    <section>
        <div class="Category">
            <div class="InfoCategory">
                <p class="CHAKRARegular font40">Tous nos manettes <?=$souscategories->titre?></p>
            </div>
            <div class="ContenuCategory">
                <div class="TousArticles">
                    
                    <?php foreach($produits as $produit): ?>
                        <div class="Articles">
                            <a href="../public/index.php?p=posts.show&id=<?=$produit->id?>"><img src="..\public\img\upload\<?=$produit->img2?>" alt="Image Produit"></a>
                            <a href="../public/index.php?p=posts.show&id=<?=$produit->id?>" class="NomArticle policeCHAKRA font24"><?=$produit->titre?> - <?=$produit->prix?> €</a>
                            <a href="../public/index.php?p=posts.show&id=<?=$produit->id?>" class="btnAcheter policeCHAKRA font20">Acheter</a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</main>