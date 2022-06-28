<main>
    <section>
        <div>
            <video autoplay muted loop>
            <source src="../public/img/Video/PS5.mp4" type="video/mp4">
            </video>
        </div>
    </section>
    <section>
        <div class="CategoryAppareil">
            <div class="InfoCategoryApp">
                <p class="CHAKRARegular font32">Toutes nos manette Switch Pro</p>
                <p class="policeCHAKRA font20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim</p>
            </div>
            <div class="ContenuCategoryApp">
                <div class="passe"><img src="../public/img/Icon/Black/Précedent.svg" alt="Précedent"></div>
                <div class="Articles">
                    <?php foreach($produits4 as $produit): ?>
                        <a href="../public/index.php?p=posts.show&id=<?=$produit->id?>"><img src="../public/img/Article/<?=$produit->img3?>" alt="Image Produit"></a>
                    <?php endforeach; ?>
                </div>
                <div class="passe"><img src="../public/img/Icon/Black/Suivant.svg" alt="Suivant"></div>
            </div>
            <div class="VoirPlusApp">
                <a href="../public/index.php?p=categories.souscategory&id=1" class="policeCHAKRA font20">Voir plus</a>
            </div>
        </div>
    </section>
</main>