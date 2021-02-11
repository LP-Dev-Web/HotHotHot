<main class="container-fluid mt-4">
    <!-- Connexion -->
    <section class="box small-w">
        <!-- Titre et redirection vers inscription -->
        <h1 class="box-title text-center">Connexion</h1>
        <p class="box-subtitle">Vous n'avez pas de compte ?
            <br>
            <a href="<?= ROOT ?>register">Créer un compte</a>
        </p>
        <!-- Formulaire -->
        <form id="login_form" action="" method="post">
            <hr>
            <!-- Email -->
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="exemple@exemple.com" autofocus required>
            <!-- Mot de passe -->
            <label for="password">Mot de passe</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="*************" required>
            <a id="oublie-mdp" href="#" onclick="show()">Mot de passe oublié ?</a>
            <section id="error_messages"></section>
            <hr>
            <!-- Se connecter -->
            <button type="submit" id="login" name="login">Se connecter</button>
        </form>
        <article id="overlay">
            <section class="box medium-w">
                <!-- Titre -->
                <h1 class="box-title text-center">Récupération du compte</h1>
                <!-- Formulaire -->
                <form action="" method="post">
                    <hr>
                    <!-- Email -->
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="exemple@exemple.com" required>
                    <!-- Valider -->
                    <section>
                        <button type="submit">Valider</button>
                        <button type="button" onclick="hide()">Fermer</button>
                    </section>
                </form>
            </section>
        </article>
    </section>
</main>