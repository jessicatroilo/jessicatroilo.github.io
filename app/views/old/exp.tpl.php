<!-- template pour toutes les expériences professionnelles du CV
Les données ont été rentrées dans un tableau associatif : data.php
les deux fichiers : exp.tpl.php et data.php ont été inclue dans index.php
Données du tableau $experience recupérer à l'aide d'un foreach
Affichage des données dans le HTML-->


    <div class="title">
        <img src="" alt="">
        <h3 id="experiences"> Expériences professionnelles</h3>
        <br>
    </div>
    
    <div class="wrapper__experience">
        <?php
        foreach ($experience as $experienceKeys => $experienceValue) {
        ?>

        <section>
            <p> <?= $experienceValue['yearWork']; ?>
            <h4><?= $experienceValue['titlePoste']; ?> </h4>
            <h5> <?= $experienceValue ['titleMissions']; ?>

            <p><?= $experienceValue['nameEntreprise']; 
                if ($experienceValue['villeEntreprise']==true) {
                $ville = $experienceValue['villeEntreprise'];
                echo " - $ville";
                } else {
                    echo "";
                }?>
            </p>

            <p>
                <?= $experienceValue['missions'];?>
            
            </p>
            <br>
            <p>
                <?= $experienceValue['skills'];?>
            
            </p>
            <br>
            <p>
                <?= $experienceValue['software'];?>
            
            </p>

        </section>

        <br>
        <?php
        } ;
        ?>
    </div>

