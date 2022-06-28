<div class="Ajouter"><a href="index.php?p=admin.produits.index" class="CHAKRASemiBold font24">Retour</a></div>
<div class="FormPro">
    <form method="post" action="index.php?p=admin.produits.ajouter" enctype="multipart/form-data">
        <div class="EditProduits">
            <div class="EditLigne">
                <?= $form->input('titre', 'Nom du produit', ['type' => 'text'], isset($errors["titreError"]) ? $errors["titreError"] : ""); ?>
            </div>
            <div class="EditLigne">
                <?= $form->input('img1', 'Image du produit', ['type' => 'file']); ?>
                <?= $form->input('img2', 'Image du produit', ['type' => 'file']); ?>
            </div>
            <div class="EditLigne">
                <?= $form->input('img3', 'Image du produit', ['type' => 'file']); ?>
                <?= $form->input('img4', 'Image du produit', ['type' => 'file']); ?>
            </div>
            <div class="EditLigne">
                <?= $form->input('prix', 'Prix du produit', ['type' => 'number'], isset($errors["prixError"]) ? $errors["prixError"] : ""); ?>
                <?= $form->select('sous_categories_id', 'Sous_catégories : ', $sous_categories); ?>
            </div>
            <div class="EditLigne">
                <?= $form->input('description', 'Descriptions', ['type' => 'textarea'], isset($errors["descriptionError"]) ? $errors["descriptionError"] : ""); ?>
            </div>
            <div class="sauvegarderAD"><button class="CHAKRARegular font20">Sauvegarder</button></div>
        </div>
    </form>
</div>