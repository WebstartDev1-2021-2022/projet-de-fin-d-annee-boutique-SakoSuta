<div class="AdminTable">
    <div class="Title">
        <p class="CHAKRAMedium font32">Administrer les Utilisateurs</p>
    </div>

    <table>
        <thead>
        <tr>
            <td class="CHAKRASemiBold font24">ID</td>
            <td class="CHAKRASemiBold font24">Nom</td>
            <td class="CHAKRASemiBold font24">Prénom</td>
            <td class="CHAKRASemiBold font24">Email</td>
            <td class="CHAKRASemiBold font24">Numéro de téléphone</td>
            <td class="CHAKRASemiBold font24">Adresse</td>
            <td class="CHAKRASemiBold font24">Rôle</td>
            <td class="CHAKRASemiBold font24">Actions</td>
        </tr>
        </thead>
        <tbody>
            <?php foreach($Users as $user): ?>
            <tr>
                <td class="policeCHAKRA font20"><?=$user->id;?></td>
                <td class="policeCHAKRA font20"><?=$user->firstname;?></td>
                <td class="policeCHAKRA font20"><?=$user->lastname;?></td>
                <td class="policeCHAKRA font20"><?=$user->email;?></td>
                <td class="policeCHAKRA font20"><?=$user->tel;?></td>
                <td class="policeCHAKRA font20"><?=$user->adresse;?></td>
                <td class="policeCHAKRA font20"><?=$user->role;?></td>
                <td>
                    <a class="policeCHAKRA font16" href="?p=admin.users.modif&id=<?= $user->id; ?>">Editer</a>
                    <form action="?p=admin.users.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $user->id ?>">
                        <button type="submit" class="policeCHAKRA font16">Supprimer</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="Ajouter"><a href="?p=admin.users.ajouter" class="CHAKRASemiBold font24">Ajouter</a></div>
</div>