<div class="Ajouter"><a href="index.php?p=admin.users.index" class="CHAKRASemiBold font24">Retour</a></div>
<div class="FormUser">
    <form method="post" action="index.php?p=admin.users.modif&id=<?=$users->id?>">
        <div class="EditUsers">
            <div class="EditLigne">
                <?= $form->input('firstname', 'Prénom', ['type' => 'text'], isset($errors["firstnameError"]) ? $errors["firstnameError"] : ""); ?>
                <?= $form->input('lastname', 'Nom', ['type' => 'text'], isset($errors["lastnameError"]) ? $errors["lastnameError"] : ""); ?>
            </div>
            <div class="EditLigne">
                <?= $form->input('email', 'Email', ['type' => 'email'], isset($errors["emailError"]) ? $errors["emailError"] : ""); ?>
                <?= $form->input('tel', 'Téléphone', ['type' => 'tel'], isset($errors["telError"]) ? $errors["telError"] : ""); ?>
            </div>
            <div class="EditLigne">
            <?= $form->input('password', 'Mot de passe', ['type' => 'password'],  isset($errors["passwordError"]) ? $errors["passwordError"] : ""); ?>
            </div>
            <?php
            if($users->role === 'ROLE_ADMIN'){
            ?>
                <div class="Aligne">
                    <input type="radio" name="role" class="font20 policeCHAKRA" value="ROLE_USER">
                    <label>User</label>
                    </input>
                    <input type="radio" name="role" class="font20 policeCHAKRA" value="ROLE_ADMIN" checked>
                    <label>Admin</label>
                    </input>
                </div>
            <?php
                }else{
            ?>
                    <div class="Aligne">
                        <input type="radio" name="role" class="font20 policeCHAKRA" value="ROLE_USER" checked>
                        <label>User</label>
                        </input>
                        <input type="radio" name="role" class="font20 policeCHAKRA" value="ROLE_ADMIN">
                        <label>Admin</label>
                        </input>
                    </div>
            <?php
                }
            ?>
            <div class="AREA">
                <?= $form->input('adresse', 'Adresse', ['type' => 'textarea']); ?>
            </div>
            <div class="sauvegarderAD"><button class="CHAKRARegular font20">Sauvegarder</button></div>
        </div>
    </form>
</div>