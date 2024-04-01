<?php

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

            <div class="column content">
                <h1 class="title has-text-primary">Psychologue du travail à Vincennes</h1>

                <div class="block is-size-5 has-text-justified	">
                    <p>Je suis psychologue du travail et consultante en bilan de compétences à Vincennes (94).</p>
                </div>
                <div class="block is-size-5 has-text-justified	">

                    <p>J’accompagne des étudiants, actifs, salariés, demandeurs d’emploi.</p>
                </div>
                <div class="block is-size-5 has-text-justified	">


                </div>


            </div>
            <div class="column">

                <div class="block">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image">
                                <img src="css/images/sided-view-young-girl-talking-therapist.jpg" alt="Placeholder image" />
                            </figure>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="block">
            <h1 class="title has-text-primary has-text-centered">Mes domaines d'intervention</h1>
        </div>

        <div class="columns">

            <div class="column">



                <div class="block">
                    <figure class="image is-4by3">
                        <img src="css/images/home_pyschologieDuTravail.jpg" alt="Placeholder image" />
                    </figure>
                </div>


                <div class="block buttons is-centered">
                    <a class="button is-primary has-text-info" href="<?php echo PsyOfWorkPage::FILENAME ?>">
                        Psychologie du travail</a>
                </div>

            </div>



            <div class="column">


                <div class="block">

                    <figure class="image is-4by3">
                        <img src="css/images/home_bilanCompetences.jpg" alt="Placeholder image" />
                    </figure>
                </div>

                <div class="block buttons is-centered">
                    <a class="button is-primary  has-text-info" href="<?php echo SkillAssesmentPage::FILENAME ?>">
                        Bilan de compétence
                    </a>
                </div>
            </div>


        </div>


        <div class="columns">

            <div class="column">


                <article class="message is-info">
                    <div class="message-body is-size-5 has-text-justified	">


                        <div class="block">
                            <p>Je vous reçois directement au cabinet situé à Vincennes (94) mais aussi en visio, n’hésitez
                                pas à me contacter pour plus d’informations.</p>

                        </div>
                        <div class="block">

                            <p>Je suis disponible les lundi, mardi, jeudi et vendredi, de 9h à 19h.</p>

                        </div>
                        <div class="block">
                            <p>Vous pouvez prendre rendez-vous via <a href="<?php echo HomePage::DOCTOLIB_LINK ?>"><img src="/css/images/DoctolibLogo.png" /></a></p>

                        </div>
                    </div>
                </article>


            </div>


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