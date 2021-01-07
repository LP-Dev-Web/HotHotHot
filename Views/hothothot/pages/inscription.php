<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Meta pour l'encodage et l'affichage mobile -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Titre de la page -->
        <title>Inscription | Hothothot</title>
        <!-- CSS -->
        <link rel="icon" href="../images/favicon.ico">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <!-- Haut de page -->
        <header>
            <!-- Menu -->
            <nav>
                <ul>
                    <!-- Logo -->
                    <li><a href="../index.php"><img src="../images/logo.png" alt="Logo Hothothot."></a></li>
                    <li><hr></li>
                    <!-- Navigation -->
                    <li><a href="../index.php">Accueil</a></li>
                    <li><a href="../pages/parametrage.php">Paramétrage</a></li>
                    <!-- Compte utilisateur -->
                    <li class="right"><a href="../pages/profil.php"><img src="../images/profil-picture.png" alt="Image de profil du compte."></a></li>
                    <li class="right" id="nom-menu"><a href="../pages/profil.php">Prénom NOM</a></li>
                </ul>
            </nav>
        </header>
        <!-- Contenu de la page -->
        <main class="flex-container-identification decoration-top">
            <!-- Inscription -->
            <section>
                <!-- Titre et redirection vers connexion -->
                <h1>Inscription</h1>
                <p>Vous avez un compte ?<br><a href="connexion.php">Se connecter</a></p>
                <hr id="separateur">
                <!-- Formulaire -->
                <form class="flex-container-identification-vertical" action="#" method="post">
                    <!-- Nom -->
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Dupont" required>
                    <!-- Prénom -->
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" placeholder="Jean" required>
                    <!-- Email -->
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="exemple@exemple.com" required>
                    <!-- Mot de passe -->
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" placeholder="*************" required>
                    <!-- Vérification du mot de passe -->
                    <label for="password-verif">Vérification du mot de passe</label>
                    <input type="password" name="password-verif" id="password-verif" placeholder="*************" required>
                    <!-- Bouton de validation -->
                    <section>
                        <button type="submit">Inscription</button>
                    </section>
                </form>
            </section>
        </main>
        <!-- Bas de page -->
        <footer>
            <p>&copy; HotHotHot 2020</p>
        </footer>
    </body>
</html>
