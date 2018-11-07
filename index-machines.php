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

    // Petit script qui permet d'afficher dynamiquement l'image en arrière plan de la page réservée aux machines
    $sectionID = 7;
    echo "<style>";
    $image = getBackground($sectionID);
    echo " .container-bg$sectionID{ background-image: url(./img/Background/" . $image["background"] . ")}";
    echo "</style>";
    ?>

    <?php
    include 'includes/navbar-machines.php';
    include 'includes/machines.php';
    include 'includes/footer.php';
    include 'includes/end-body.php';
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