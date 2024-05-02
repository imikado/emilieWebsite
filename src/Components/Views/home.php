<?php

use MyWebsite\Pages\ContactPage;
use MyWebsite\Pages\HomePage;
use MyWebsite\Pages\PsyOfWorkPage;
use MyWebsite\Pages\SkillAssesmentPage;

?>

<section class="hero is-success pt-6 pb-6" style="background-image:url('css/images/bandeau_home.jpg?t=2024-04-06_1728');background-repeat:no-repeat" ;>
    <div class="hero-body has-text-centered  ">
        <p class="subtitle">Bien dans sa vie! Bien au travail!</p>

    </div>
</section>


<section class="section">
    <div class="container">


        <div class="columns">

            <div class="column"></div>

            <div class="column is-three-fifths has-text-centered">
                <h1 class="title has-text-primary">Bienvenue !</h1>

                <div class="block is-size-2 content emphase">
                    <p>Je m'appelle <span class="has-text-primary">Emilie</span>,
                        je suis psychologue</p>
                </div>


                <div class="block is-size-5 content has-text-justified">

                    <p>Je vous écoute, vous oriente, et vous accompagne vers un mieux-être au travail.</p>
                    <p>Je vous aide à trouver la voie de votre équilibre et de votre épanouissement.</p>
                    <p>J'interviens sur des problématiques en lien avec la sphère professionnelle, que ce soit sur la souffrance au travail,
                        ou encore pour surmonter une situation complexe, franchir un cap, amorcer une transition.</p>
                </div>




            </div>

            <div class="column"></div>

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
                        <a title="text du Psychologie du travail" class="card-footer-item has-text-primary has-text-weight-bold is-size-4" href="<?php echo PsyOfWorkPage::FILENAME ?>">
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
                        <a title="text du Psychologie du travail" class="card-footer-item has-text-primary has-text-weight-bold is-size-4" href="<?php echo SkillAssesmentPage::FILENAME ?>">
                            Bilan de compétence
                        </a>

                    </footer>
                </div>


            </div>


        </div>


        <div class="block mt-6">
            <h1 class="title has-text-primary has-text-centered">Pourquoi consulter ?</h1>
        </div>


        <div class="columns">

            <div class="column"></div>

            <div class="column is-half has-text-justified">

                <div class="block is-size-5 content has-text-justified">

                    <p>Vous êtes en situation d'emploi ou en période d'inactivité :</p>
                    <ul>
                        <li>Vous traversez une phase difficile liée au travail</li>
                        <li>Vous avez besoin de donner un nouveau sens à votre vie</li>
                        <li>Vous ressentez l'envie de donner un nouvel élan à votre carrière</li>
                    </ul>
                    <p class="mt-4 has-text-centered"><a class="button is-primary has-text-white" href="<?php echo HomePage::DOCTOLIB_LINK ?>">Prendre rendez-vous</a></p>
                </div>

            </div>

            <div class="column"></div>
        </div>



        <div class="columns mt-2">



            <div class="column">
                <article class="message is-success">
                    <div class="message-header is-size-5 has-text-white">
                        <p>Informations pratiques</p>
                    </div>
                    <div class="message-body has-primary-background content is-size-5" style="min-height: 300px;background-color:#f8f5f2">

                        <ul class="mt-0 has-text-justified">
                            <li>Je vous reçois au cabinet situé à Vincennes (94) mais aussi en visio, n’hésitez
                                pas à me <a class="has-text-primary" style="text-decoration: none" href="<?php echo ContactPage::FILENAME ?>">contacter</a> pour plus d’informations.</li>


                            <li>Je suis disponible les lundi, mardi, jeudi et vendredi, de 9h à 19h.</li>

                            <li>Vous pouvez prendre rendez-vous via <a href="<?php echo HomePage::DOCTOLIB_LINK ?>"><img src="css/images/DoctolibLogo.png" /></a></li>


                        </ul>

                    </div>
                </article>

            </div>

            <div class="column">



                <article class="message is-success">
                    <div class="message-header is-size-5 has-text-white">
                        <p>Prix des séances</p>
                    </div>
                    <div class="message-body content is-size-5" style="min-height: 300px;background-color:#f8f5f2">
                        <ul class="mt-0 has-text-justified">
                            <li>Consultation psychologique : 70€ entre 45 min et 1h (prise en charge possible par certaines mutuelles)</li>
                            <li>Bilan de compétences : peut être 100% financé par le CPF</li>
                        </ul>
                        <p>&nbsp;</p>
                    </div>
                </article>

            </div>

        </div>









    </div>



</section>