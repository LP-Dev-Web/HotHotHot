<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Meta pour l'encodage et l'affichage mobile -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Titre de la page -->
        <title>Connexion | Hothothot</title>
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
            <!-- Connexion -->
            <section>
                <!-- Titre et redirection vers inscription -->
                <h1>Connexion</h1>
                <p>Vous n'avez pas de compte ?<br><a href="inscription.php">Créer un compte</a></p>
                <hr id="separateur">
                <!-- Formulaire -->
                <form class="flex-container-identification-vertical" action="#" method="post">
                    <!-- Email -->
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="exemple@exemple.com" required>
                    <!-- Mot de passe -->
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" placeholder="*************" required>
                    <a id="oublie-mdp" href="#">Mot de passe oublié ?</a>
                    <!-- Se connecter -->
                    <section>
                        <button type="submit">Se connecter</button>
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
