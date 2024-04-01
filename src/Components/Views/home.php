<?php

use MyWebsite\Pages\ContactPage;
use MyWebsite\Pages\HomePage;
use MyWebsite\Pages\PsyOfWorkPage;
use MyWebsite\Pages\SkillAssesmentPage;

?>

<section class="hero has-background-success">

    &nbsp;
</section>


<section class="section">
    <div class="container">


        <div class="columns">

            <div class="column content has-text-centered">
                <h1 class="title has-text-primary">Psychologue du travail à Vincennes</h1>

                <div class="block is-size-5  	">
                    <p>Je suis psychologue du travail et consultante en bilan de compétences à Vincennes (94).</p>
                </div>
                <div class="block is-size-5 	">

                    <p>J’accompagne des étudiants, actifs, salariés, demandeurs d’emploi.</p>
                </div>
                <div class="block is-size-5 	">

                    <p>Je vous reçois directement au cabinet situé à Vincennes (94) mais aussi en visio, n’hésitez
                        pas à me <a class="is-primary" href="<?php echo ContactPage::FILENAME ?>">contacter</a> pour plus d’informations.</p>
                </div>

                <div class="block is-size-5  	">

                    <p>Je suis disponible les lundi, mardi, jeudi et vendredi, de 9h à 19h.</p>

                </div>
                <div class="block is-size-5  	">
                    <p>Vous pouvez prendre rendez-vous via <a href="<?php echo HomePage::DOCTOLIB_LINK ?>"><img src="css/images/DoctolibLogo.png" /></a></p>

                </div>


            </div>

        </div>

        <div class="block mt-6">
            <h1 class="title has-text-primary has-text-centered">Mes domaines d'intervention</h1>
        </div>

        <div class="columns">

            <div class="column">


                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="css/images/bandeau_psychoDuTravail.jpg" alt="Placeholder image" />
                        </figure>
                    </div>

                    <footer class="card-footer">
                        <a title="text du Psychologie du travail" class="card-footer-item has-text-primary" href="<?php echo PsyOfWorkPage::FILENAME ?>">
                            Psychologie du travail</a>

                    </footer>
                </div>



            </div>



            <div class="column">

                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="css/images/home_bilanDeCompetences.jpg" alt="Placeholder image" />
                        </figure>
                    </div>

                    <footer class="card-footer">
                        <a title="text du Psychologie du travail" class="card-footer-item has-text-primary" href="<?php echo SkillAssesmentPage::FILENAME ?>">
                            Bilan de compétence
                        </a>

                    </footer>
                </div>


            </div>


        </div>


        <div class="columns mt-6 ">



            <div class="column">



                <article class="message is-success">
                    <div class="message-header is-size-5 has-text-info-dark">
                        <p>Prix des séances :</p>
                    </div>
                    <div class="message-body content is-size-5">
                        <ul>
                            <li>Consultation psychologique : 70€ entre 45 min et 1h (certaines mutuelles prennent en charge un nombre de séances)</li>
                            <li>Bilan de compétences : peut être 100% financé par le CPF</li>
                        </ul>
                    </div>
                </article>

            </div>


        </div>


    </div>



</section>