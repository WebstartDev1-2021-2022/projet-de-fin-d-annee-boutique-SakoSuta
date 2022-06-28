<div class="Compte">
  <div class="Titre">
    <p class="MonCompte font48 policeCHAKRA CHAKRASemiBold">Mon Compte</p>
  </div>

  <?php if ($errorss) : ?>
    <div class="Erreur font16 policeIBM">
      Identifiants incorrects
    </div>
  <?php endif; ?>

  <div class="TousCompte">

    <div class="signUp">
      <p class="TitreSignUp-In font40 CHAKRABold">S'inscrire</p>
      <div class="FormSignUp">
        <form method="post" action="index.php?p=users.inscription">
          <div class="FNameLName">
            <div class="InfoInput">
              <?= $form->input('firstname', 'Prénom', ['type' => 'text'], isset($errors["firstnameError"]) ? $errors["firstnameError"] : ""); ?>
            </div>
            <div class="InfoInput">
              <?= $form->input('lastname', 'Nom', ['type' => 'text'], isset($errors["lastnameError"]) ? $errors["lastnameError"] : ""); ?>
            </div>
          </div>
          <div class="AutreInfo">
            <div class="InfoInput">
              <img src="../public/img/Icon/Black/Mail.svg" alt="Mail">
              <?= $form->input('email', 'Email', ['type' => 'email'],  isset($errors["emailError"]) ? $errors["emailError"] : ""); ?>
            </div>
            <div class="InfoInput">
              <img src="../public/img/Icon/Black/Lock.svg" alt="Lock">
              <?= $form->input('password', 'Mot de passe', ['type' => 'password'],  isset($errors["passwordError"]) ? $errors["passwordError"] : ""); ?>
            </div>
            <div class="InfoInput">
              <img src="../public/img/Icon/Black/Lock.svg" alt="Lock">
              <?= $form->input('passwordVerif', 'Confirmez Mot de passe', ['type' => 'password'],  isset($errors["passwordVerifError"]) ? $errors["passwordVerifError"] : ""); ?>
            </div>
          </div>
          <button class="sinscrire font20 policeCHAKRA">S'inscrire</button>
        </form>
      </div>
    </div>

    <div class="signIn">
      <p class="TitreSignUp-In font40 CHAKRABold">Se Connecter</p>
      <div class="FormSignIn">
        <form method="post" action="index.php?p=users.login">
          <div class="InfoInput">
            <img src="../public/img/Icon/White/Mail.svg" alt="Mail">
            <?= $form->input('email', 'Adresse Email', ['type' => 'email']); ?>
          </div>
          <div class="InfoInput">
            <img src="../public/img/Icon/White/Lock.svg" alt="Lock">
            <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
          </div>
          <button class="Connected font20 policeCHAKRA">Se Connecter</button>
        </form>
      </div>
    </div>

  </div>

</div>