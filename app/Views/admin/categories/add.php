<div class="Ajouter"><a href="index.php?p=admin.categories.index" class="CHAKRASemiBold font24">Retour</a></div>
<div class="FormCate">
    <form method="post" action="index.php?p=admin.categories.ajouter">
        <div class="EditCategories">
            <div class="EditLigne">
                <?= $form->input('titre', 'Nom de la catégories', ['type' => 'text'], isset($errors["titreError"]) ? $errors["titreError"] : ""); ?>
            </div>
            <div class="sauvegarderAD"><button class="CHAKRARegular font20">Ajouter</button></div>
        </div>
    </form>
</div>