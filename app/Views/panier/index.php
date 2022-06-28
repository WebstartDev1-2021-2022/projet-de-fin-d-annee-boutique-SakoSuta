
<main>
    <section>
      <div class="Panier">
        <div class="InfoPanier">
          <p class="CHAKRASemiBold font48">Mon Panier</p>
        </div>
        <form action="index.php?p=panier.confirmation" method="POST">
          <?php 
          if(!empty($_SESSION['auth'])){
            ?>
            <input type="hidden" name="user_id" value="<?=$_SESSION['auth']?>">
            <?php
          }
          ?>
          <div class="ContenuPanier">
            <?php if(!empty($panier)){ ?>
            <div class="TableauPanier">
              <div class="Colonne">
                <div class="TProduits">
                  <p class="CHAKRASemiBold font24">Produits</p>
                </div>
                <?php foreach ($panier as $idProduit => $champs) : ?>
                  <input type="hidden" id="produit-id-<?= $idProduit ?>" name="produit-id-<?= $idProduit ?>" class="form-control" value="<?= $idProduit ?>">
                  <input type="hidden" id="produit-<?= $idProduit ?>-total" name="produit-<?= $idProduit ?>-total" class="form-control" value="<?= $champs['prix'] * $champs['nbr'] ?>">
                  <div class="Produit">
                    <div class="ImgProduit">
                      <img src="..\public\img\Article\<?= $champs['img'] ?>" alt="Image Produit">
                    </div>
                    <div class="InfoProduit">
                      <div class="TitreProduit">
                        <p class="CHAKRASemiBold font24" id="produit-<?= $idProduit ?>-titre-disabled"><?= $champs['titre'] ?></p>
                      </div>
                      <p class="policeCHAKRA font24">Catégories :</p>
                      <p class="policeCHAKRA font24"><?= $champs['souscategories'] ?></p>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
              <div class="Colonne">
                <div class="TProduits">
                  <p class="CHAKRASemiBold font24">Quantité</p>
                </div>
                <?php foreach ($panier as $idProduit => $champs) : ?>
                  <div class="Produit">
                    <div class="InfoProduit">
                      <input type="number" id="produit-<?= $idProduit ?>-nbr" name="produit-<?= $idProduit ?>-nbr" class="policeCHAKRA font24 form-control produit-nbr" min="1" max="20" value="<?= $champs['nbr'] ?>" data-produit="<?= $idProduit ?>" data-prix="<?= $champs['prix'] ?>">
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
              <div class="Colonne">
                <div class="TProduits">
                  <p class="CHAKRASemiBold font24">Prix</p>
                </div>
                <?php foreach ($panier as $idProduit => $champs) : ?>
                  <div class="Produit">
                    <div class="InfoProduit">
                      <div class="prixTOTO">
                        <input type="hidden" id="produit-<?= $idProduit ?>-unite-disabled" name="produit-<?= $idProduit ?>-unite-disabled" value="<?= $champs['prix']?> €" disabled="disabled">
                        <input type="text" id="produit-<?= $idProduit ?>-total-disabled" name="produit-<?= $idProduit ?>-total-disabled" class="policeCHAKRA font24 produit-total" value="<?= $champs['prix'] * $champs['nbr'] ?>€" disabled="disabled">
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
              <div class="Colonne">
                <div class="TProduits">
                  <p class="CHAKRASemiBold font24">Supprimer</p>
                </div>
                <?php foreach ($panier as $idProduit => $champs) : ?>
                <div class="Produit">
                  <div class="InfoProduit">
                    
                    <a href="">
                      <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.66663 11.6667H33.3333M31.6666 11.6667L30.2216 31.9033C30.1618 32.7443 29.7855 33.5314 29.1685 34.106C28.5515 34.6806 27.7397 35 26.8966 35H13.1033C12.2602 35 11.4484 34.6806 10.8314 34.106C10.2145 33.5314 9.83815 32.7443 9.77829 31.9033L8.33329 11.6667H31.6666ZM16.6666 18.3333V28.3333V18.3333ZM23.3333 18.3333V28.3333V18.3333ZM25 11.6667V6.66667C25 6.22464 24.8244 5.80072 24.5118 5.48816C24.1992 5.17559 23.7753 5 23.3333 5H16.6666C16.2246 5 15.8007 5.17559 15.4881 5.48816C15.1756 5.80072 15 6.22464 15 6.66667V11.6667H25Z" stroke="#112B3D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </a>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="Resum">
              <div class="Titre">
                <p class="CHAKRAMedium font32">Résumé du panier</p>
              </div>
              <div class="ContenuResume">
                <div class="Resumee">
                <?php foreach ($panier as $idProduit => $champs) : ?>
                  <div class="Objet">
                    <p class="CHAKRARegular font24"><?= $champs['titre'] ?></p>
                  </div>
                <?php endforeach; ?>
                  <div class="Objet">
                    <p class="CHAKRARegular font24">Frais de Livraison</p>
                    <p class="CHAKRAMedium font24">4,99 €</p>
                  </div>
                </div>
                <div class="Total">
                  <p class="CHAKRASemiBold font24">Total du panier</p>
                  <input type="hidden" id="commande-total" name="commande-total" value="<?= $prixTotalCommande + 4.99?>">
                  <input type="text" id="commande-total-disabled" name="commande-total-disabled" step=".01" value="<?= $prixTotalCommande + 4.99?> €" disabled="disabled" class="CHAKRASemiBold font24">
                </div>
                <div class="Commande"><button class="CHAKRARegular font20">Commander</button></div>
              </div>
            </div>
            <?php
            } else{
              ?>
              <div class="TableauPanier">
                <div class="Colonne">
                  <div class="TProduits">
                    <p class="CHAKRASemiBold font24">Produits</p> <div class="Produit">
                  </div>
                  </div>
                </div>
                <div class="Colonne">
                  <div class="TProduits">
                    <p class="CHAKRASemiBold font24">Quantité</p>
                  </div>
                </div>
                <div class="Colonne">
                  <div class="TProduits">
                    <p class="CHAKRASemiBold font24">Prix</p>
                  </div>
                </div>
                <div class="Colonne">
                  <div class="TProduits">
                    <p class="CHAKRASemiBold font24">Supprimer</p>
                  </div>
                </div>
              </div>
              <div class="Resum">
              <div class="Titre">
                <p class="CHAKRAMedium font32">Résumé du panier</p>
              </div>
              <div class="ContenuResume">
                <div class="Resumee">
                </div>
                <div class="Total">
                  <p class="CHAKRASemiBold font24">Total du panier</p>
                  <input type="text" value="0 €" disabled="disabled" class="CHAKRASemiBold font24">
                </div>
                <div class="Commande"><button class="CHAKRARegular font20">Commander</button></div>
              </div>
            </div>
            <?php
            }
            ?>
          </div>
        </form>
      </div>
    </section>
  </main>


<script>
  var elements = document.getElementsByClassName('produit-nbr');
  var prixCommande = document.getElementById('commande-total');
  var prixCommandeDisabled = document.getElementById('commande-total-disabled');
  var prixTotalCommande = 0;
  if (elements) {
    window.addEventListener('change', changePrix)
  }

  function changePrix() {
    prixTotalCommande = 0;
    for (var i = 0; i < elements.length; i++) {

      var valeur = elements[i].value;
      var produit = elements[i].dataset.produit;
      var prix = elements[i].dataset.prix;

      var prixUnite = document.getElementById('produit-' + produit + '-total');
      var prixUniteDisabled = document.getElementById('produit-' + produit + '-total-disabled');

      var resulatPrixtotal = prix * valeur;

      prixUniteDisabled.setAttribute('value', resulatPrixtotal + "€")
      prixUnite.setAttribute('value', resulatPrixtotal)


      prixTotalCommande = prixTotalCommande + resulatPrixtotal;

      prixCommandeDisabled.setAttribute('value', prixTotalCommande + "€")
      prixCommande.setAttribute('value', prixTotalCommande)

    }

  }
</script>