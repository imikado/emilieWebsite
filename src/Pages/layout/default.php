<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Emilie Pereira</title>


  <link rel="stylesheet" href="css/bulma.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Licorice&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Licorice&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://bulma.io/vendor/fontawesome-free-5.15.2-web/css/all.min.css">

  <style>
    :root {
      /* CSS Variables */

      /*hsl(134, 19%, 79%) */
      --custom-color1: hsla(139, 26%, 38%, 1);
      --custom-color2: hsla(178, 31%, 55%, 1);
      --custom-color3: hsl(154, 28%, 65%);

      --custom-color5: hsl(46, 72%, 92%);

      --bulma-primary: hsla(var(--bulma-primary-h), var(--bulma-primary-s), var(--bulma-primary-l), 1);
      /* hsl(23.23, 25.83%, 52.94%)  */
      --bulma-primary-h: 23.23;
      --bulma-primary-s: 25.83%;
      --bulma-primary-l: 52.94%;

      /* hsl(34.29, 28.57%, 80.78%) */
      --bulma-success: hsla(var(--bulma-success-h), var(--bulma-success-s), var(--bulma-success-l), 1);
      --bulma-success-h: 34.29;
      --bulma-success-s: 28.57%;
      --bulma-success-l: 80.78%;

      --bulma-info: hsla(var(--bulma-info-h), var(--bulma-info-s), var(--bulma-info-l), 1);
      --bulma-info-h: 46;
      --bulma-info-s: 72%;
      --bulma-info-l: 92%;


      --bulma-info: var(--custom-color3);
      --bulma-info-base: var(bulma-info);

      --bulma-link: var(--custom-color3);


      --bulma-text-strong: var(--custom-color2);

      --bulma-body-family: "Lora";

    }

    .title {
      font-family: "Licorice";
      font-size: 4em;
    }

    .subtitle {
      font-family: "Licorice";
      font-size: 3em;

    }

    body {
      background: white;
      background-repeat: repeat;
    }

    .emphase {
      font-family: "Licorice";
      font-size: 2em;
    }
  </style>

</head>

<body>
  <?php

  use MyWebsite\Pages\HomePage;

  echo $this->paramList['nav']->render() ?>

  <?php foreach ($this->paramList['contentList'] as $contentLoop) :
    echo $contentLoop->render();
  endforeach; ?>

  <footer class="footer">


    <div class="columns content is-size-7 ml-4">
      <div class="column">

        <h2 class="has-text-primary">Emilie Pereira</h2>

        <p>Psychologue du travail</p>

        <p>Adeli: 949334213</p>

        <p><a class="button is-default has-text-default is-small" href="https://www.codededeontologiedespsychologues.fr/IMG/pdf/Code_deontologie_psychologue_9-09-2021.pdf" class="is-link">Code de déontologie</a></p>


      </div>
      <div class="column">
        <h2 class="has-text-primary">Consultations</h2>

        <p>Psychologie du travail</p>
        <p>Bilan de compétences</p>

        <p class="mt-2"><a class="button is-default has-text-primary is-small" href="<?php echo HomePage::DOCTOLIB_LINK ?>">Prendre rendez-vous</a></p>


      </div>
      <div class="column">

        <h2 class="has-text-primary">Contact</h2>

        <p><span class="icon-text">
            <span class="icon">
              <i class="fas fa-phone"></i>
            </span>
            <span>07 56 83 31 49</span>
          </span></p>

        <p><span class="icon-text">
            <span class="icon">
              <i class="fas fa-envelope"></i>
            </span>
            <span> <a class="is-link has-text-default" style="color:#333" href="mailto:emilie.pereira.lam.pro@gmail.com">emilie.pereira.lam.pro@gmail.com</a></span>
          </span></p>

        <p>
          <a class="button is-default has-text-default is-small" href="https://www.linkedin.com/in/pereiraemilie/">Linkedin</a>
        </p>


      </div>

    </div>


  </footer>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      // Get all "navbar-burger" elements
      const $navbarBurgers = Array.prototype.slice.call(
        document.querySelectorAll(".navbar-burger"),
        0
      );

      // Check if there are any navbar burgers
      if ($navbarBurgers.length > 0) {
        // Add a click event on each of them
        $navbarBurgers.forEach((el) => {
          el.addEventListener("click", () => {
            // Get the target from the "data-target" attribute
            const target = el.dataset.target;
            const $target = document.getElementById(target);

            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
            el.classList.toggle("is-active");
            $target.classList.toggle("is-active");
          });
        });
      }
    });
  </script>
</body>

</html>