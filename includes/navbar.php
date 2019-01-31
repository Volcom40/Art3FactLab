    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" data-toggle="affix">
        <div class="mx-auto d-lg-flex">
            <a class="navbar-brand js-scroll-trigger" href="#Accueil">Art3FactLab Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse text-center" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Equipe">Notre communauté</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index-machines.php">Nos machines</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Activites">Nos secteurs d'activité</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Projet">Les projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Videos">Espace vidéos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Partenaires">Nos partenaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Footer">Documents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Contact">Nous contacter</a>
                    </li>
                    <li>
                    <?php
                    if($admin){
                    ?>
                        <form action="script/deconnexion.php" method="POST">
                            <button type="submit" class="btn btn-danger" value="Delete Projet" name="submit">Deconnexion</button>
                        </form>
                    <?php
                    }
                    ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>