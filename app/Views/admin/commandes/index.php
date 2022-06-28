<div class="AdminTable">
    <div class="Title">
        <p class="CHAKRAMedium font32">Administrer les Commandes</p>
    </div>
    
    <table>
        <thead>
        <tr>
            <td class="CHAKRASemiBold font24">ID</td>
            <td class="CHAKRASemiBold font24">User_ID</td>
            <td class="CHAKRASemiBold font24">Prix_total</td>
        </tr>
        </thead>
        <tbody>
            <?php foreach($commandes as $commande): ?>
            <tr>
                <td class="policeCHAKRA font20"><?= $commande->id; ?></td>
                <td class="policeCHAKRA font20"><?= $commande->user_id; ?></td>
                <td class="policeCHAKRA font20"><?= $commande->prix_total; ?> €</td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
