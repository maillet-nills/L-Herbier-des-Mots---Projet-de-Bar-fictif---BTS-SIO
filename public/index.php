<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil - L'Herbier des Mots</title>
    <meta
      name="description"
      content="La page d'accueil du café littéraire 'l'Herbier des mots' localisé à Toulouse. Elle contient les horaires du café."
    />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="../assets/css/global.css" />
    <link
      rel="shortcut icon"
      href="../assets/images/main-logo-emblem.png"
      type="image/x-icon"
    />
    <meta name="robots" content="follow" />
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "L'Herbier des Mots",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "12 rue des Bouquinistes",
          "addressLocality": "Toulouse",
          "postalCode": "31000",
          "addressCountry": "FR"
        }
        "telephone" : +33123456789,
        "url" : "https://www.herbierdesmots.fr"
      }
    </script>
  </head>
  <body class="d-flex flex-column">
    <?php include '../includes/header.php'; ?>

    <main class="flex-grow-1" style="background: #fff0df">
      <section class="py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <h1 class="display-5 fw-bold mb-4">Un refuge pour l'esprit</h1>
              <p class="lead fw-bold">
                <i>L’Herbier des Mots</i> n'est pas qu'un simple café, c'est une
                parenthèse enchantée au cœur de Toulouse ❤️
              </p>
              <p>
                Installez-vous avec un livre de notre bibliothèque et profitez
                d’un moment de lecture et de détente autour d’un café ou d’un
                thé. Un lieu chill et cocooning, pensé pour lire, se poser et
                savourer l’instant.
              </p>
            </div>
            <div class="col-md-6">
              <img
                src="../assets/images/bar-picture1.jpg"
                width="100%"
                height="auto"
                alt="photo du bar plante"
                class="img-fluid rounded shadow"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="py-5 text-white" style="background: #163a14">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <img
                src="../assets/images/bar-picture2.jpg"
                width="100%"
                height="auto"
                alt="photo du bar canapé"
                class="img-fluid rounded shadow"
              />
            </div>
            <div class="col-md-6">
              <h2 class="display-5 fw-bold mb-4">Notre Histoire</h2>
              <p class="lead fw-bold">Une personne, un rêve 📚</p>
              <p>
                Ancien bureaucrate acharné, dépassé par sa carrière
                professionnelle mais passionné par la littérature et les
                plantes, il décide d’ouvrir <i>L’Herbier des Mots</i>, un café
                littéraire à Toulouse. Son ambition : partager ses passions et
                offrir un refuge chaleureux, confortable et protecteur.
              </p>
              <p>
                Il recueille des livres d’occasion et les met au service de
                nouveaux venus, tentés d’explorer cet univers où la lecture
                permet de s’évader. Entre deux pages, le brouhaha du quotidien
                s’efface. Ici, on vient lire, boire, manger, et ralentir.
              </p>
              <p>
                ➤ Apprenez en plus
                <a href="pages/about.php" class="fw-bold">ici</a> !
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <h2 class="display-5 fw-bold mb-4">Notre Carte</h2>
              <p class="lead fw-bold">
                Venez découvrir ce que l'on a à vous offrir ☕
              </p>
              <p>
                Nous proposons un large éventail de boissons chaudes, cafés et
                thés, accompagnés de pâtisseries maison. De quoi savourer
                pleinement votre moment de détente, que ce soit pour une pause
                gourmande, un instant de lecture ou un rendez-vous cocooning.
              </p>
              <p>
                ➤ Retrouvez notre carte
                <a href="pages/menu.php" class="fw-bold">ici</a> !
              </p>
            </div>

            <div class="col-md-6">
              <img
                src="../assets/images/bar-picture3.jpg"
                width="100%"
                height="auto"
                class="img-fluid border rounded"
                alt="photo de cafés"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="py-5 text-white" style="background: #163a14">
        <div class="container">
          <div class="row align-items-center">
            <h2 class="text-center mb-5 fw-bold">Nos Horaires</h2>
            <div class="m-auto mx-auto">
              <ul class="list-unstyled fs-5">
                <li class="d-flex justify-content-between border-bottom py-2">
                  <span>Lundi</span> <span class="fw-bold">12h - 19h</span>
                </li>
                <li class="d-flex justify-content-between border-bottom py-2">
                  <span>Mardi</span> <span class="fw-bold">12h - 19h</span>
                </li>
                <li class="d-flex justify-content-between border-bottom py-2">
                  <span>Mercredi</span> <span class="fw-bold">12h - 19h</span>
                </li>
                <li class="d-flex justify-content-between border-bottom py-2">
                  <span>Jeudi</span> <span class="fw-bold">12h - 19h</span>
                </li>
                <li class="d-flex justify-content-between border-bottom py-2">
                  <span>Vendredi</span> <span class="fw-bold">12h - 19h</span>
                </li>
                <li class="d-flex justify-content-between border-bottom py-2">
                  <span>Samedi</span> <span class="fw-bold">12h - 19h</span>
                </li>
                <li class="d-flex justify-content-between py-2">
                  <span>Dimanche</span>
                  <span class="fw-bold">9h - 17h</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="py-5">
        <div class="container">
          <div class="row align-items-center">
            <h2 class="text-center mb-5 fw-bold">Laissez un avis</h2>
            <div class="m-auto mx-auto">
              <?php include '../includes/review_form.php'; ?>
            </div>
          </div>
        </div>
      </section>
      
    </main>

    <?php include '../includes/footer.php'; ?>
  
    <script src="js/review-form.js"></script>
  </body>
</html>
