<div class="AdminTable">
    <div class="Title">
        <p class="CHAKRAMedium font32">Administrer les Catégories</p>
    </div>
    
    <table>
        <thead>
        <tr>
            <td class="CHAKRASemiBold font24">ID</td>
            <td class="CHAKRASemiBold font24">Titre</td>
            <td class="CHAKRASemiBold font24">Actions</td>
        </tr>
        </thead>
        <tbody>
            <?php foreach($categories as $categorie): ?>
            <tr>
                <td class="policeCHAKRA font20"><?= $categorie->id; ?></td>
                <td class="policeCHAKRA font20"><?= $categorie->titre; ?></td>
                <td>
                    <a class="policeCHAKRA font16" href="?p=admin.categories.modif&id=<?= $categorie->id; ?>">Editer</a>
                    <form action="?p=admin.categories.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $categorie->id ?>">
                        <button type="submit" class="policeCHAKRA font16">Supprimer</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="Ajouter"><a href="?p=admin.categories.ajouter" class="CHAKRASemiBold font24">Ajouter</a></div>
</div>
