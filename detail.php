<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?= $_GET['firstName']; ?></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Montserrat|Oswald" rel="stylesheet">
</head>
<body>
<?php
include 'includes/_header.php';
?>


<div class="main-page">

    <?php


    $csvFile = fopen('equipes.csv', 'r');
    $photos = scandir('img/imgdetails');
    $photos = array_diff($photos, array('..', '.'));


    $wilder = [];
    while ($data = fgetcsv($csvFile)) {
        if (trim($data[0]) == $_GET['firstName']) {
            $wilder = $data;

            break;
        }
    }

    ?>


    <h1><?php echo $wilder[0];
        ?></h1>


    <div class="bloc-image-detail"><img src='<?php echo "img/imgdetails/" . strtolower(trim($wilder[0])) . ".jpeg" ?>'
                                        alt="<?= $data[0]; ?>"></div>
    <h2>BIOGRAPHIE</h2>
    <p class="detail-paragraphe">Nordiste pure souche, <?= $data[0]; ?> est originaire de Boulogne-sur-mer dans le Pas
        de
        Calais.
        Après avoir travaillé en tant qu’enseignant de la conduite et de la sécurité routière pendant six années, sa
        passion pour le web et les nouvelles technologies a pritsle dessus aujourd’hui.
        Wilder de février 2019 spécialisé en PHP, il aime partager et échanger avec les autres.

    </p>
    <h2>COMPETENCES</h2>
    <div class="bloc-liste">
        <div class="bloc-liste-competence">
            <ul>
                <li>HTML 5</li>
                <li>Css</li>
                <li>PHP</li>
            </ul>
        </div>
        <div class="bloc-liste-competence">
            <ul>
                <li>Symphony 4</li>
                <li>Bootstrap</li>
                <li>React</li>
            </ul>
        </div>
    </div>
    <h2>LOCALISATION</h2>
    <p class="detail-paragraphe">Bordeaux</p>
    <div class="bloc-reseau-social">
        <a href="<?= $data[2]; ?>"><img class="logo-reseau-social-courriel"
                                        src="https://i.postimg.cc/zvjCsbP7/email.png" alt="email"></a>
        <a href="https://github.com/<?= $data[4]; ?>" target="_blank"><img class="logo-reseau-social"
                                                                           src="https://i.postimg.cc/Dyps1TVS/Git-Hub-Mark.png"
                                                                           alt="github"></a>
        <a href="https://www.linkedin.com/in/geoffrey-bedle-57551116a/" target="_blank"><img class="logo-reseau-social"
                                                                                             src="https://i.postimg.cc/yYGgky99/linkedin.png"
                                                                                             alt="linkedin"></a>
    </div>

</div>

<?php include 'includes/_footer.php'; ?>
</body>
</html>