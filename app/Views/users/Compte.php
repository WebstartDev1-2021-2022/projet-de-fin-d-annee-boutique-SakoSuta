<main>
    <section>
        <div class="GestionDeCompte">
            <div class="TitreCompte">
                <p class="CHAKRASemiBold font48">Mon Compte</p>
            </div>
            <div class="TousCompte">
                <div class="ContenuCompte">
                    <div class="CategorieCompte">
                        <a href="" class="CHAKRARegular font32 over">Mes Informations</a>
                        <a href="" class="CHAKRARegular font32 over">Mes Commandes</a>
                        <a href="index.php?p=users.logout" class="CHAKRARegular font32 over">Déconnexion</a>
                    </div>
                    <div class="InfoPerso">
                        <div class="TextInfo">
                            <p class="CHAKRAMedium font32">Informations personnelles</p>
                        </div>
                        <div class="TousInfo">
                            <form method="post" action="index.php?p=users.Modification">
                                <div class="PreNom">
                                    <div class="Contenu">
                                        <div class="Info">
                                            <p class="CHAKRARegular font24">Prénom :</p>
                                        </div>
                                        <div class="InputInfo">
                                            <?= $form->input('firstname', 'Prénom', ['type' => 'text'], isset($errors["firstnameError"]) ? $errors["firstnameError"] : ""); ?>
                                        </div>
                                    </div>
                                    <div class="Contenu">
                                        <div class="Info">
                                            <p class="CHAKRARegular font24">Nom :</p>
                                        </div>
                                        <div class="InputInfo">
                                            <?= $form->input('lastname', 'Nom', ['type' => 'text'], isset($errors["lastnameError"]) ? $errors["lastnameError"] : ""); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="TelMail">
                                    <div class="Contenu">
                                        <div class="Info">
                                            <p class="CHAKRARegular font24">Téléphone :</p>
                                        </div>
                                        <div class="InputInfo">
                                            <img src="../public/img/Icon/White/phone.svg" alt="Phone">
                                            <?= $form->input('tel', 'Téléphone', ['type' => 'tel'],  isset($errors["telError"]) ? $errors["telError"] : ""); ?>
                                        </div>
                                    </div>
                                    <div class="Contenu">
                                        <div class="Info">
                                            <p class="CHAKRARegular font24">Email :</p>
                                        </div>
                                        <div class="InputInfo">
                                            <img src="../public/img/Icon/White/mail.svg" alt="Mail">
                                            <?= $form->input('email', 'Email', ['type' => 'email'],  isset($errors["emailError"]) ? $errors["emailError"] : ""); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="Adresse">
                                    <div class="Contenu">
                                        <div class="Info">
                                            <p class="CHAKRARegular font24">Adresse :</p>
                                        </div>
                                        <div class="InputInfo">
                                            <?= $form->input('adresse', 'Adresse', ['type' => 'textarea']); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="BoutonSauve">
                                    <button class="CHAKRARegular font20">Sauver les modifications</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>