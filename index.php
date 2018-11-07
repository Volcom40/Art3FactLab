<!DOCTYPE html>

<html lang="fr">

<head>
    <?php
        include 'includes/header.php';
    ?>
</head>

<body>
    <?php

    // On récupère les fichiers dao...
    include 'includes/all-dao-body.php';

    // Petit script qui permet d'afficher dynamiquement les images en arrière plan de chaque section
    echo '<style>';
    for ($sectionID = 1; $sectionID < 7; $sectionID++) { 
        $image = getBackground($sectionID);
        echo ".container-bg$sectionID{ background-image: url(./img/background/" . $image["background"] . ")}";
    }
    echo '</style>';

    $sectionID = 0;

    include 'includes/navbar.php';
    include 'includes/carousel.php';
    $sectionID++;
    include 'includes/activites.php';
    $sectionID++;
    include 'includes/projets.php';
    $sectionID++;
    include 'includes/videos.php';
    $sectionID++;
    include 'includes/equipe.php';
    $sectionID++;
    include 'includes/partenaires.php';
    $sectionID++;
    include 'includes/contact.php';
    include 'includes/footer.php';
    ?>

    <?php
    include 'includes/end-body.php';
    ?>

    <?php 
    if($admin){
    ?>
    <!-- Script qui permet de confirmer la suppression d'un élément -->
    <script>
    function envoiFormConfirm(form, text) {
        if(confirm(text)){
            console.log(form);
            form.submit();   
        }
    }
    </script>
    <?php
    }
    ?>

</body>
</html>