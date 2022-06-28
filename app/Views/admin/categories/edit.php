<div class="Ajouter"><a href="index.php?p=admin.categories.index" class="CHAKRASemiBold font24">Retour</a></div>
<div class="FormCate">
    <form method="post" action="index.php?p=admin.categories.modif&id=<?=$categories->id?>">
        <div class="EditCategories">
            <div class="EditLigne">
                <?= $form->input('titre', 'Nom de la catégorie', ['type' => 'text'], isset($errors["categoriesError"]) ? $errors["categoriesError"] : ""); ?>
                <div class="sauvegarderAD"><button class="CHAKRARegular font20">Sauvegarder</button></div>
            </div>
        </div>
    </form>
</div>