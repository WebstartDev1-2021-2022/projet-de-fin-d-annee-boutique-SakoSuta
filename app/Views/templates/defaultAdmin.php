<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../public/img/Icon/Black/b.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300;400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">


    <title><?= App::getInstance()->title; ?></title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="../public/css/reset.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">

</head>

<body>
    <main>
        <section>
            <div class="GestionAdmin">
                <div class="TitreAd">
                    <p class="CHAKRASemiBold font48">Back-office d'administration</p>
                </div>
                <div class="TousAdmin">
                    <div class="Admin">
                        <div class="CategorieAdmin">
                            <a href="../public/index.php?p=admin.users.index" class="CHAKRARegular font32 over">Les Utilisateurs</a>
                            <a href="../public/index.php?p=admin.categories.index" class="CHAKRARegular font32 over">Les Catégories</a>
                            <a href="../public/index.php?p=admin.SousCategories.index" class="CHAKRARegular font32 over">Les Sous-catégories</a>
                            <a href="../public/index.php?p=admin.produits.index" class="CHAKRARegular font32 over">Les Produits</a>
                            <a href="../public/index.php?p=admin.commandes.index" class="CHAKRARegular font32 over">Les Commandes</a>
                        </div>
                        <div class="ContenuAdmin">
                            <?= $content; ?>
                        </div>
                        <div class="Deco">
                            <a href="../public/index.php?p=users.logout" class="CHAKRARegular font32 over">Déconnexion</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>