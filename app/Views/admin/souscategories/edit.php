<div class="Ajouter"><a href="index.php?p=admin.SousCategories.index" class="CHAKRASemiBold font24">Retour</a></div>
<div class="FormSous">
    <form method="post" action="index.php?p=admin.SousCategories.modif&id=<?=$sous_categories->id?>">
        <div class="EditSousCategories">
            <div class="EditLigne">
                <?= $form->input('titre', 'Nom de la sous-catégories', ['type' => 'text'], isset($errors["titreError"]) ? $errors["titreError"] : ""); ?>
            </div>
            <div class="EditLigne">
                <?= $form->select('categories_id', 'Catégories : ', $categories); ?>
            </div>
            <div class="sauvegarderAD"><button class="CHAKRARegular font20">Sauvegarder</button></div>
        </div>
    </form>
</div>