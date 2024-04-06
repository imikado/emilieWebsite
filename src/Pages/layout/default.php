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

    }

    body {
      background: white;
      background-repeat: repeat;
    }
  </style>

</head>

<body>
  <?php echo $this->paramList['nav']->render() ?>

  <?php foreach ($this->paramList['contentList'] as $contentLoop) :
    echo $contentLoop->render();
  endforeach; ?>

  <footer class="footer">
    <div class="content has-text-centered">
      <p>
        <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>.
        The source code is licensed
        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The
        website content is licensed
        <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
      </p>
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