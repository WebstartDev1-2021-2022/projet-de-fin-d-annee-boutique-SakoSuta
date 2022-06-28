<div class="AdminTable">
    <div class="Title">
        <p class="CHAKRAMedium font32">Administrer les Sous-catégories</p>
    </div>
    
    <table>
        <thead>
        <tr>
            <td class="CHAKRASemiBold font24">ID</td>
            <td class="CHAKRASemiBold font24">Titre</td>
            <td class="CHAKRASemiBold font24">Categories_id</td>
            <td class="CHAKRASemiBold font24">Actions</td>
        </tr>
        </thead>
        <tbody>
            <?php foreach($sous_categories as $sous_categorie): ?>
            <tr>
                <td class="policeCHAKRA font20"><?= $sous_categorie->id; ?></td>
                <td class="policeCHAKRA font20"><?= $sous_categorie->titre; ?></td>
                <td class="policeCHAKRA font20"><?= $sous_categorie->categories_id; ?></td>
                <td>
                    <a class="policeCHAKRA font16" href="?p=admin.SousCategories.modif&id=<?= $sous_categorie->id; ?>">Editer</a>
                    <form action="?p=admin.SousCategories.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $sous_categorie->id ?>">
                        <button type="submit" class="policeCHAKRA font16">Supprimer</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="Ajouter"><a href="?p=admin.SousCategories.ajouter" class="CHAKRASemiBold font24">Ajouter</a></div>
</div>