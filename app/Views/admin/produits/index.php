<div class="AdminTable">
    <div class="Title">
        <p class="CHAKRAMedium font32">Administrer les Produits</p>
    </div>
    
    <table>
        <thead>
        <tr>
            <td class="CHAKRASemiBold font24">ID</td>
            <td class="CHAKRASemiBold font24">Titre</td>
            <td class="CHAKRASemiBold font24">Description</td>
            <td class="CHAKRASemiBold font24">img1</td>
            <td class="CHAKRASemiBold font24">img2</td>
            <td class="CHAKRASemiBold font24">img3</td>
            <td class="CHAKRASemiBold font24">img4</td>
            <td class="CHAKRASemiBold font24">Prix</td>
            <td class="CHAKRASemiBold font24">Sous-categories_id</td>
            <td class="CHAKRASemiBold font24">Actions</td>
        </tr>
        </thead>
        <tbody>
            <?php foreach($produits as $produit): ?>
            <tr>
                <td class="policeCHAKRA font20"><?= $produit->id; ?></td>
                <td class="policeCHAKRA font20"><?= $produit->titre; ?></td>
                <td class="policeCHAKRA font20"><?= $produit->description; ?></td>
                <td class="policeCHAKRA font20"><img src="..\public\img\upload\<?=$produit->img1?>" alt="Image Produit"></td>
                <td class="policeCHAKRA font20"><img src="..\public\img\upload\<?=$produit->img2?>" alt="Image Produit"></td>
                <td class="policeCHAKRA font20"><img src="..\public\img\upload\<?=$produit->img3?>" alt="Image Produit"></td>
                <td class="policeCHAKRA font20"><img src="..\public\img\upload\<?=$produit->img4?>" alt="Image Produit"></td>
                <td class="policeCHAKRA font20"><?= $produit->prix ?></td>
                <td class="policeCHAKRA font20"><?= $produit->sous_categories_id; ?></td>
                <td>
                    <a class="policeCHAKRA font16" href="?p=admin.produits.modif&id=<?= $produit->id; ?>">Editer</a>
                    <form action="?p=admin.produits.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $produit->id ?>">
                        <button type="submit" class="policeCHAKRA font16">Supprimer</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="Ajouter"><a href="?p=admin.produits.ajouter" class="CHAKRASemiBold font24">Ajouter</a></div>
</div>