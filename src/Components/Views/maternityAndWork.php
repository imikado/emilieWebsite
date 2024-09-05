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
        <p class="subtitle ">"Toute mère travaille dur, et toute femme mérite d'être respectée"</p>
        <p class="subtitle is-size-3">Michèle Obama</p>

    </div>
</section>

<section class="section">
    <div class="container content is-size-5">




        <div class="columns ml-2 mr-2 ">


            <div class="column content">

                <div class="block has-text-justified	">

                    <p>
                        <span class="emphase">Enfant</span>, on joue à la maman et on joue à travailler. On regarde ses propres parents travailler.
                    </p>

                    <p>
                        <span class="emphase">En grandissant</span>, on nous dit de "bien apprendre à l'école" car cela nous permettra de touver un "bon travail plus tard"; on nous prépare peu à vivre ces choses là.
                    </p>

                    <p>
                        A l'entrée dans la <span class="emphase"> vie active</span>, on comprend vite qu'on nous demande d'être de plus en plus performante.
                    </p>

                    <p>
                        <span class="emphase">Quand on devient mère</span>, on comprend que l'on va devoir composer et jongler avec ce nouveau rôle: comment faire pour tout concilier ? comment s'organiser ? comment faire face aux injonctions et obligations que notre entorage nous impose ou qu'on s'impose ?
                    </p>






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

        <div class="block content">

            <p>
                <span class="emphase">Concilier sa grossesse, son (nouveau) rôle de maman avec son travail n'est pas toujours simple !</span>
            </p>

        </div>

        <div class="block content ml-2 mr-2">

            <h2 class="subtitle has-text-primary">De nombreuses questions se posent</h2>

            <ul>

                <li>Est-ce que je veux être maman ou est-ce que c’est la société qui me pousse à le devenir ? </li>
                <li>Est-ce qu’être enceinte, est un frein pour travailler, pour évoluer dans ma carrière ? </li>
                <li>Est-ce que je dois choisir entre une grossesse et mon travail ? </li>
                <li>Est-ce que je dois choisir entre mes enfants et ma carrière ? </li>
                <li>Est-ce que je dois m’arrêter de travailler si je veux avoir des enfants ? </li>
                <li>Est-ce que je dois me contenter d’un travail qui ne me plaît pas vraiment mais qui reste compatible avec une vie de famille ?</li>
                <li>Est-ce qu’être mère, c’est faire abstraction de ses envies de carrière ?</li>
                <li>Avant d’être une mère, qui suis-je ?</li>

            </ul>

        </div>





        <div class="block content ml-2 mr-2 mt-6">
            <h2 class="subtitle has-text-primary">Parité & Maternité</h2>
        </div>


        <div class="block  has-text-justified	ml-2 mr-2">
            <p>

                Hommes et femmes, suivons les mêmes études, obtenons les mêmes diplômes et travaillons dans les mêmes entreprises. Pourtant, des <strong class="has-text-primary">inégalités</strong> et des <strong class="has-text-primary">discriminations</strong> à l’encontre des femmes se manifestent dès la 1ère grossesse. Et comme le souligne cet article de Les Echos, « Les femmes doivent encore choisir entre leur carrière et leur maternité ! » (2022).

            </p>
            <p>

                La grossesse ne devrait en aucun cas, entraver votre carrière. Être enceinte, devenir parent, ne remet pas en question votre performance, votre implication au travail, mais les <strong class="has-text-primary">conditions</strong> dans lesquelles vous travaillez.

            </p>
        </div>

        <div class="block mt-5">
            <h2 class="subtitle has-text-primary">Être mère, c’est avant tout prendre soin de soi ! </h2>
        </div>

        <div class="block has-text-justified	">

            <p>Face à vos inquiétudes, vos peurs, vos angoisses, ne restez pas seule.
                <a href="<?php echo HomePage::DOCTOLIB_LINK ?>" class="emphase has-text-primary"> Consultez</a>, parlez-en à des professionnels !
            </p>
            <p> Ensemble et ce, dans un espace d’écoute et de bienveillance, nous trouvons des solutions pour que vous puissiez mener plus sereinement votre grossesse, votre maternité et votre carrière,
                en visant un épanouissement personnel et professionnel.
            </p>

        </div>



        <div class="block mt-5">
            <h2 class="subtitle has-text-primary">Je vous propose</h2>
        </div>

        <div class="block has-text-justified	">

            <ul>
                <li>Un accompagnement individuel et personnalisé pour franchir ce cap, vous soutenir durant cette période de transition de votre vie, pendant et suite à votre grossesse, ainsi qu’à votre reprise du travail, tout en vous préparant à assumer pleinement votre rôle de parent. Cet accompagnement inclut un suivi psychologique, voir un bilan de compétences. </li>
                <li>Des ateliers collectifs pour vous informer sur vos droits et vous sensibiliser à ces enjeux, partager et échanger sur ce sujet, tout en mettant en place des actions concrètes pour vous aider à mieux vivre votre grossesse et votre maternité au travail. </li>

            </ul>

            <p class="is-italic">Les co-parents sont bien entendu les bienvenus ;)</p>

        </div>




        <p class="mt-4 has-text-centered"><a class="button is-primary has-text-white" href="<?php echo HomePage::DOCTOLIB_LINK ?>">Prendre rendez-vous</a></p>



        <div class="block mt-6">
            <h2 class="subtitle has-text-primary">Mon partenaire</h2>
        </div>




        <div class="columns">
            <div class="column ">
                <?php foreach (
                    [
                        'partenaireOPYXIS.png',

                    ] as $partnerLoop
                ) : ?>
                    <img class="mr-2 ml-2" src="css/images/<?php echo $partnerLoop ?>?time=<?php echo date('Ymdhi') ?>" />
                <?php endforeach; ?>

            </div>

        </div>







    </div>
</section>