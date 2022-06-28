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
    <link href="../public/css/reset.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">

    <script>
        /* --------- Sticky Navbar --------- */

        function stickyNavbar() {
            if (window.scrollY > 300) {
                nav.classList.add("scrolled");
            } else {
                nav.classList.remove("scrolled");
            }
        }
        window.addEventListener("scroll", stickyNavbar);

        /* --------- Scrolling check --------- */

        if (document.location.toString().match("#categorie")) {
            $("html, body").animate({
                    scrollTop: $("#categorie").offset().top - 1000
                },
                speed
            );
        }
    </script>

</head>

<body>

    <nav class="navig">
        <div class="contenuNav">
            <a href="index.php">
                <img class="LogoNav" src="../public/img/Logo/JoyW.svg" alt="logo">
            </a>
            <div class="categorieNav font24 policeIBM">
                <?php foreach ($categories as $categorie) : ?>
                    <a class="over" href="../public/index.php?p=categories.<?= $categorie->titre; ?>"><?= $categorie->titre; ?></a>
                <?php endforeach; ?>
            </div>
            <div class="iconNAV">
                <a href="">
                    <img class="overimg" src="../public/img/Icon/White/heart.svg" alt="icon coeur">
                </a>
                <a href="../public/index.php?p=panier.index">
                    <img class="overimg" src="../public/img/Icon/White/shopping-basket.svg" alt="icon panier">
                </a>
                <?php
                if (isset($_SESSION['auth'])) { ?>
                    <a href="../public/index.php?p=users.Compte">
                        <img class="overimg" src="../public/img/Icon/White/user.svg" alt="icon utilisateur">
                    </a>
                <?php
                } else {
                ?>
                    <a href="../public/index.php?p=users.login">
                        <img class="overimg" src="../public/img/Icon/White/user.svg" alt="icon utilisateur">
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    </nav>

    <div>

        <?= $content; ?>

    </div>

    <footer class="Footerrr">
        <div class="LogoAndNew">
            <img class="LogoFoot" src="../public/img/Logo/JoyW.svg" alt="logo">
            <div class="News font24">
                <p class="font20 policeCHAKRA">Rejoingnez-nous</p>
                <div class="mail">
                    <img src="../public/img/Icon/White/mail.svg" alt="icon-mail">
                    <p class="font16 policeCHAKRA">Entrer votre email</p>
                </div>
                <a class="boutonFooter font16 policeCHAKRA" href="">
                    S’inscrire
                </a>
            </div>
        </div>
        <div class="en-savoir-plus">
            <div class="contenuFoot">
                <p class="titreFoot font20 CHAKRAMedium">Informations</p>
                <div class="infoSecurity font16 policeCHAKRA">
                    <a class="over" href="">Qui sommes-nous ?</a>
                    <a class="over" href="">Conditions générales</a>
                    <a class="over" href="">Mentions légales</a>
                    <a class="over" href="">Aide</a>
                    <a class="over" href="">CGV</a>
                </div>
            </div>
            <div class="contenuFoot">
                <p class="titreFoot font20 CHAKRAMedium">Nos Engagements</p>
                <div class="infoSecurity font16 policeCHAKRA">
                    <a class="over" href="">Paiement sécuriser</a>
                    <a class="over" href="">Livraison en 48h</a>
                    <a class="over" href="">Frais de port</a>
                    <a class="over" href="">Contact 7j/7</a>
                </div>
            </div>
            <div class="contenuFoot">
                <p class="titreFoot font20 CHAKRAMedium">Moyens de paiements</p>
                <div class="infoPaiement font16 policeCHAKRA">
                    <img src="../public/img/Icon/White/paypal.svg" alt="icon-paypal">
                    <img src="../public/img/Icon/White/visa.svg" alt="icon-visa">
                    <img src="../public/img/Icon/White/mastercard.svg" alt="icon-mastercard">
                </div>
            </div>
            <div class="Contacter">
                <p class="CHAKRAMedium font20">Contactez-nous</p>
                <div class="contact policeCHAKRA font16">
                    <img src="../public/img/Icon/White/Phone.svg" alt="Phone">
                    <p>+33 2 22 22 22 22</p>
                </div>
                <div class="contact policeCHAKRA font16">
                    <img src="../public/img/Icon/White/mail.svg" alt="mail">
                    <p>CeciEstUn@Email.com</p>
                </div>
                <div class="Btn-contact">
                    <a href="../public/index.php?p=posts.contact" class="boutonFooter policeCHAKRA font16">Contacter</a>
                </div>
                <div class="reseau">
                    <a href="">
                        <svg class="overimg" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.32 0C7.3072 0 0 7.35131 0 16.4185C0 24.6122 5.96719 31.4036 13.7706 32.64V21.1656H9.62487V16.4185H13.7706V12.8012C13.7706 8.68298 16.2074 6.41207 19.9336 6.41207C21.7192 6.41207 23.5897 6.73227 23.5897 6.73227V10.77H21.5266C19.5027 10.77 18.8694 12.0376 18.8694 13.3365V16.4152H23.3922L22.6691 21.1623H18.8694V32.6367C26.6728 31.4068 32.64 24.6138 32.64 16.4185C32.64 7.35131 25.3328 0 16.32 0Z" fill="#CED8E2" />
                        </svg>
                    </a>
                    </a>
                    <a href="">
                        <svg class="overimg" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.7251 16.7163L15.9069 14.9347C15.5737 14.78 15.3 14.9534 15.3 15.3223V18.6781C15.3 19.047 15.5737 19.2204 15.9069 19.0657L19.7234 17.2841C20.0583 17.1277 20.0583 16.8727 19.7251 16.7163ZM17 0.680176C7.98659 0.680176 0.679993 7.98678 0.679993 17.0002C0.679993 26.0136 7.98659 33.3202 17 33.3202C26.0134 33.3202 33.32 26.0136 33.32 17.0002C33.32 7.98678 26.0134 0.680176 17 0.680176ZM17 23.6302C8.64619 23.6302 8.49999 22.8771 8.49999 17.0002C8.49999 11.1233 8.64619 10.3702 17 10.3702C25.3538 10.3702 25.5 11.1233 25.5 17.0002C25.5 22.8771 25.3538 23.6302 17 23.6302Z" fill="#CED8E2" />
                        </svg>
                    </a>
                    <a href="">
                        <svg class="overimg" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.1 17.0002C22.1 18.3528 21.5627 19.65 20.6062 20.6064C19.6498 21.5629 18.3526 22.1002 17 22.1002C15.6474 22.1002 14.3502 21.5629 13.3937 20.6064C12.4373 19.65 11.9 18.3528 11.9 17.0002C11.9 16.7095 11.9306 16.4256 11.9833 16.1502H10.2V22.9451C10.2 23.4177 10.5825 23.8002 11.0551 23.8002H22.9466C23.1731 23.7997 23.3901 23.7094 23.5501 23.5491C23.7101 23.3888 23.8 23.1716 23.8 22.9451V16.1502H22.0167C22.0694 16.4256 22.1 16.7095 22.1 17.0002ZM17 20.4002C17.4466 20.4001 17.8888 20.312 18.3014 20.141C18.7139 19.97 19.0888 19.7194 19.4045 19.4035C19.7202 19.0876 19.9706 18.7126 20.1414 18.3C20.3123 17.8873 20.4001 17.4451 20.4 16.9985C20.3999 16.5519 20.3118 16.1097 20.1408 15.6971C19.9698 15.2845 19.7192 14.9097 19.4033 14.594C19.0874 14.2782 18.7125 14.0278 18.2998 13.857C17.8872 13.6862 17.4449 13.5984 16.9983 13.5985C16.0963 13.5987 15.2314 13.9572 14.5938 14.5952C13.9562 15.2331 13.5981 16.0982 13.5983 17.0002C13.5985 17.9021 13.957 18.7671 14.595 19.4047C15.2329 20.0423 16.098 20.4004 17 20.4002ZM21.08 13.4302H23.1183C23.2537 13.4302 23.3836 13.3765 23.4795 13.2809C23.5754 13.1853 23.6295 13.0556 23.63 12.9202V10.8819C23.63 10.7462 23.5761 10.616 23.4801 10.52C23.3842 10.4241 23.254 10.3702 23.1183 10.3702H21.08C20.9443 10.3702 20.8141 10.4241 20.7182 10.52C20.6222 10.616 20.5683 10.7462 20.5683 10.8819V12.9202C20.57 13.2007 20.7995 13.4302 21.08 13.4302ZM17 0.680176C12.6717 0.680176 8.5206 2.3996 5.46001 5.46019C2.39942 8.52079 0.679993 12.6718 0.679993 17.0002C0.679993 21.3285 2.39942 25.4796 5.46001 28.5402C8.5206 31.6008 12.6717 33.3202 17 33.3202C19.1432 33.3202 21.2654 32.898 23.2454 32.0779C25.2254 31.2577 27.0245 30.0556 28.54 28.5402C30.0554 27.0247 31.2576 25.2256 32.0777 23.2456C32.8979 21.2655 33.32 19.1434 33.32 17.0002C33.32 14.857 32.8979 12.7348 32.0777 10.7548C31.2576 8.77475 30.0554 6.97565 28.54 5.46019C27.0245 3.94474 25.2254 2.74262 23.2454 1.92246C21.2654 1.10231 19.1432 0.680176 17 0.680176ZM25.5 23.6115C25.5 24.6502 24.65 25.5002 23.6113 25.5002H10.3887C9.34999 25.5002 8.49999 24.6502 8.49999 23.6115V10.3889C8.49999 9.35018 9.34999 8.50018 10.3887 8.50018H23.6113C24.65 8.50018 25.5 9.35018 25.5 10.3889V23.6115Z" fill="#CED8E2" />
                        </svg>
                    </a>
                    <a href="">
                        <svg class="overimg" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 0.680176C7.98659 0.680176 0.679993 7.98678 0.679993 17.0002C0.679993 26.0136 7.98659 33.3202 17 33.3202C26.0134 33.3202 33.32 26.0136 33.32 17.0002C33.32 7.98678 26.0134 0.680176 17 0.680176ZM23.6385 14.049C23.6453 14.1884 23.647 14.3278 23.647 14.4638C23.647 18.7138 20.4153 23.6115 14.5027 23.6115C12.7556 23.6144 11.0448 23.1126 9.57609 22.1665C9.82599 22.1971 10.0827 22.209 10.3428 22.209C11.849 22.209 13.2345 21.6973 14.3344 20.8337C13.6641 20.8205 13.0146 20.5986 12.4765 20.1988C11.9383 19.799 11.5383 19.2412 11.3322 18.6033C11.8136 18.6948 12.3094 18.6756 12.7823 18.5472C12.0548 18.4001 11.4005 18.0059 10.9305 17.4314C10.4605 16.857 10.2036 16.1376 10.2034 15.3954V15.3563C10.6369 15.596 11.1333 15.7422 11.6603 15.7592C10.9783 15.3052 10.4954 14.6077 10.3106 13.8095C10.1257 13.0113 10.2528 12.1726 10.6658 11.465C11.4732 12.4578 12.4801 13.2699 13.6214 13.8489C14.7626 14.4279 16.0127 14.7607 17.2907 14.8259C17.1282 14.1362 17.1981 13.4122 17.4896 12.7663C17.7811 12.1205 18.2777 11.5891 18.9024 11.2546C19.5271 10.9202 20.2447 10.8015 20.9438 10.917C21.6429 11.0325 22.2842 11.3758 22.7681 11.8934C23.4875 11.751 24.1774 11.4872 24.8081 11.1131C24.5683 11.8579 24.0663 12.4904 23.3954 12.893C24.0326 12.8162 24.6549 12.6449 25.2416 12.3847C24.8106 13.0305 24.2677 13.5941 23.6385 14.049Z" fill="#CED8E2" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </footer>


</body>

</html>