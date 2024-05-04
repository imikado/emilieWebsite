<?php

use MyWebsite\Pages\ContactPage;
use MyWebsite\Pages\HomePage;

?><style>
    body {
        background-color: #eee9e4;
    }
</style>
<section class="hero is-success pt-6 pb-6" style="background-image:url('css/images/bandeau_bilandecompetences.jpg?t=2024-04-06_1716');background-repeat:no-repeat" ;>
    <div class="hero-body has-text-centered  ">
        <p class="subtitle ">"Choisis un travail que tu aimes et tu n'auras pas à travailler un seul jour de ta vie"</p>
        <p class="subtitle is-size-3">Confucius</p>

    </div>
</section>

<section class="section">
    <div class="container content is-size-5">




        <div class="columns ml-2 mr-2 ">


            <div class="column content">

                <div class="block has-text-justified	">
                    <p>Il s'agit de faire un travail sur vous, pour vous et de redéfinir votre travail.</p>

                    <p>
                        Le bilan de compétences est avant tout une démarche individuelle, personnelle et
                        personnalisée.</p>

                    <h2 class="subtitle has-text-primary">Les objectifs du bilan</h2>

                    <ul>
                        <li> Vous permettre d'analyser vos
                            compétences professionnelles et personnelles ainsi que vos aptitudes et motivations afin
                            de définir un projet professionnel ou de formation (Article L6313-10 du Code du
                            travail).</li>
                        <li>Vous recentrer et vous aligner avec un projet professionnel épanouissant
                            qui vous ressemble et qui fasse sens pour vous.</li>
                    </ul>

                </div>

            </div>

            <div class="column ">

                <div class="card">
                    <div class="card-image">
                        <figure class="image ">
                            <img src="css/images/bilandecompetences_image1.jpg" alt="Placeholder image" />
                        </figure>
                    </div>
                </div>
            </div>

        </div>

        <div class="block content ml-2 mr-2">

            <h2 class="subtitle has-text-primary">Un bilan de compétences sur mesure</h2>


            <p>
                Je vous propose un bilan adapté à vos besoins, vos attentes et
                vos objectifs, tout en instaurant un espace d’échange pour vous permettre d’écouter votre
                petite voix et vous révéler à vous-même.
            </p>

            <p>
                <span class="emphase"> D’une part</span>, je vous aide à prendre conscience de votre potentiel et de vos compétences.
            </p>
            <p>
                <span class="emphase">D’autre part</span>, je vous accompagne à analyser et à explorer votre histoire personnelle, ainsi
                qu’à comprendre ce qui fait sens pour vous.
            </p>
            <p><span class="emphase">Ensemble</span>, nous construisons un projet
                personnalisé, épanouissant et aligné avec vos valeurs, vos motivations et vos aspirations.
                Nous identifions vos leviers et vos ressources pour concrétiser votre projet, tout en
                considérant le contexte socio-économique et le marché de l’emploi dans lequel il prend
                place.
            </p>

        </div>





        <div class="block content ml-2 mr-2 mt-6">
            <h2 class="subtitle has-text-primary">Mes outils</h2>
        </div>


        <div class="block  has-text-justified	ml-2 mr-2">
            <p>
                Pour mener à bien votre bilan de compétences, j’utilise une méthodologie précise, des
                techniques d’entretien, l’écoute active, le questionnement, des exercices, des tests,
                questionnaires portant sur votre personnalité, vos intérêts professionnels, vos valeurs, vos
                moteurs, votre parcours, vos savoirs, savoir-faire, savoir-être, des référentiels métiers, des
                enquêtes métiers, des études de marché…</p>
            <p>
                En fin d’accompagnement, je vous remets un document de synthèse qui est confidentiel et
                dont vous êtes le seul destinataire.

            </p>
        </div>

        <div class="block mt-5">
            <h2 class="subtitle has-text-primary">La 1<sup>ère</sup> séance</h2>
        </div>



        <div class="block has-text-justified	">

            <p>Elle permet d'analyser votre situation et d'analyser votre besoin.
            </p>
            <p>L'objectif est de construire ensemble un projet dont vous êtes acteur / actrice, afin de dépasser votre problématique.</p>
            <p>Ce premier échange est gratuit et permet d'établir un programme de suivi sur plusieurs séances.</p>

        </div>

        <p class="mt-4 has-text-centered"><a class="button is-primary has-text-white" href="<?php echo HomePage::DOCTOLIB_LINK ?>">Prendre rendez-vous</a></p>



        <div class="block mt-5">
            <h2 class="subtitle has-text-primary">Mes partenaires</h2>
        </div>




        <div class="columns">
            <div class="column ">
                <?php foreach ([
                    'partenaireOPYXIS.png',
                    'partenaireArtusRH.png',
                    'partenaire_sprintFormation.png'
                ] as $partnerLoop) : ?>
                    <img class="mr-2 ml-2" src="css/images/<?php echo $partnerLoop ?>?time=<?php echo date('Ymdhi') ?>" />
                <?php endforeach; ?>

            </div>

        </div>







    </div>
</section>