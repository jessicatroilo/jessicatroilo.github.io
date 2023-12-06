<!-- template pour toutes les formations du CV
Les données ont été rentrées dans un tableau associatif : data.php
les deux fichiers : form.tpl.php et data.php ont été inclue dans index.php
Données du tableau $education recupérer à l'aide d'un foreach
Affichage des données dans le HTML-->

<main class ="main__page">

    <img src="" alt="">
    <h3> Formations</h3>
    <br>
    <div class = "wrapper__education">
        <?php
        foreach ($education as $educationKeys => $educationValue) {
        ?>
        <section>
            <img src="" alt=""/>
            <p> <?= $educationValue['nameSchool'] ?> </p> 
            <h4><?= $educationValue['titleFormation']?> </h4>
            <p> <?= $educationValue['typeDiplome'] ?> </p>
            <p> <?= $educationValue['yearFormation'] ?> </p>
            <p> <?= $educationValue['notion'] ?> </p>
            
            <br>

        </section>


        <?php
        };
        ?>
    </div>