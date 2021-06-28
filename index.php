<!DOCTYPE html>
<html lang="fr">
  <?php include('mvc/controller/googleAnalytics.php');?>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- les trois liens suivants sont des liens de google font: css => font-family: 'Skranji', cursive;  -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Skranji&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="mvc/view/css/styles.css" />
    <link rel="stylesheet" href="mvc/view/css/responsive.css" />
    <!-- lien bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <title>Mymachocolat</title>
  </head>
  <body id="body">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-choco">
      <a class="navbar-brand" href="#"
        ><img
          class="d-block logo-img"
          src="./src/img/logo.png"
          alt="Mymachocolat"
      /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarColor01"
        aria-controls="navbarColor01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#" id="toHome">Accueil </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#articles" id="toCata">Catalogue</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#commander" id="toOrder">Commander</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#quiSommeNous" id="toBio"
              >Qui sommes-nous ?</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact" id="toContact">Contact</a>
          </li>
        </ul>
        <a href="#commander"
          ><i class="fa fa-shopping-bag" aria-hidden="true"></i
        ></a>
      </div>
    </nav>

    <header>
      <div
        id="carouselExampleControls"
        class="carousel slide"
        data-ride="carousel"
      >
        <div class="carousel-inner">
          <div
            class="carousel-item active"
            style="background-image: url('./src/img/slider/slider1.jpg')"
          >
            <div class="carousel-caption d-md-block">
              <h1>(Myma Chocolat)</h1>
              <a class="btn btn-lg" href="#commander">Commander</a>
            </div>
          </div>
          <div
            class="carousel-item"
            style="background-image: url('./src/img/slider/slider5.jpg')"
          >
            <div class="carousel-caption d-md-block">
              <h1>(Myma Chocolat)</h1>
              <a class="btn btn-lg" href="#commander">Commander</a>
            </div>
          </div>
          <div
            class="carousel-item"
            style="background-image: url('./src/img/slider/slider3.jpg')"
          >
            <div class="carousel-caption d-md-block">
              <h1>(Myma Chocolat)</h1>
              <a class="btn btn-lg" href="#commander">Commander</a>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleControls"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleControls"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <div id="main" class="container-fluid">
      <div id="presentation-card-block" class="row card">
        <img
          class="overlayImag img-fluid"
          src="./src/img/bg-img/wood-11.jpg"
          alt="Mymachocolat"
        />
        <div class="col-lg card-img-overlay">
          <div id="presentation" class="row align-items-center">
            <div class="col-md-12">
              <div id="newsBlock" class="row news  align-items-center">
                <div class="col-md-3 col-2">
                  <div class="img-news-block first">
                    <div class="img-news-container"><span class="img-news">(</span></div>
                  </div>
                </div>  
                <div class="col-md-6 col-8">
                Pour préserver la qualité de nos chocolats, Mymachocolat mets en pause la fabrication de chocolat pendant cette période estivale. Nous souhaitons un bel été. Nous serons de retour en Septembre sur les marchés
                </div>
                <div class="col-md-3 col-2">
                  <div class="img-news-block">
                    <div class="img-news-container"><span class="img-news">)</span></div>
                  </div>
                </div> 
              </div>
            </div>
            <div class="col-lg-3 offset-lg-1 col-md-5">
              <div class="img-container">
                <img
                  class="card-img-left img-fluid"
                  src="./src/img/logo.png"
                  alt="logo Myma Chocolat "
                />
              </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-7">
              <div class="card-body">
                <div class="jumbotron">
                  <h1 class="display-4">Chocolats Artisanaux et Gourmands</h1>
                  <p class="row p-5">
                    Vous voulez commander ? Envoyez-nous le bon de commande
                    complété ou un simple email avec votre commande. Nous sommes
                    une jeune chocolaterie, nous ne sommes pas encore présents
                    en boutique. Nous proposons de vous livrer sur Paris ou de
                    récupérer votre commande à côté de notre atelier à chocolats
                    à Montreuil Croix-de-chavaux.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="commander" class="row align-items-center">
        <div class="col-12">
          <h1 class="text-dark text-center">Vous voulez commander ?</h1>
        </div>
        <div class="col-lg-6 offset-lg-1 col-md-7">
          <div class="text">
            <p>
              On vous propose des boîtes de
              <strong>Pralinés</strong> (<em>Amande Noisette</em> et
              <em>Amande Graines de Courge</em>), des
              <strong>tablettes de puzzles</strong>, des
              <strong>œufs en chocolat</strong> et des
              <strong>sachets "craquants"</strong> !
            </p>
            <p>
              Notre gamme est présente dans notre catalogue que vous
              pouvez télécharger
              <a href="src/pdf/Menu Pâques.pdf">ici</a>. Envoyez-nous le bon
              de commande complété ou un simple email avec votre commande. Une
              fois rempli, vous pouvez nous le renvoyer par mail à cette
              adresse:
              <a href="mailto:mymachocolat@gmail.com">mymachocolat@gmail.com</a
              >.
            </p>
            <p>
              Nous sommes une jeune chocolaterie, nous ne sommes pas encore
              présents en boutique. Nous proposons de vous
              <strong>livrer sur Paris</strong> ou de
              <strong>récupérer votre commande</strong> à côté de notre atelier
              à chocolats à <strong>Montreuil Croix-de-chavaux.</strong>
            </p>
            <p>
              N'hésitez pas à nous écrire et nous pourrons trouver un
              arrangement ensemble.
            </p>
            <div class="btn-container">
              <a
                class="btn btn-lg"
                href="src/pdf/bon_de_commande_printemps.pdf" target="_blank"
                >Bon de commande</a
              >
              <a class="btn btn-lg" href="mailto:mymachocolat@gmail.com"
                >Nous contacter</a
              >
            </div>
          </div>
        </div>
        <div class="col-lg-3 offset-lg-1 col-md-5">
          <div class="img-container">
            <img
              class="card-img-left img-fluid"
              src="src/img/commander/chocolats-flyer.jpg"
              alt="Card image cap"
            />
          </div>
        </div>
      </div>

      <!-- <hr> -->

      <div id="articles" class="card-deck bg-white">
        <div class="col-12">
          <h1 class="text-dark text-center">Catalogue Printemps</h1>
          <h2 class="text-center">Friture en chocolat</h2>
        </div>
        <div class="card col-lg-3 p-0 h-100">
          <a class="" href="src/pdf/bon_de_commande_printemps.pdf" target="_blank"
            ><img
              class="card-img-top index-card-img img-fluid"
              src="src/img/article/chocolats-craquant.jpg"
              alt="Card image cap"
          /></a>
          <div class="card-body text-center">
            <h5 class="card-title">Sachet de craquants</h5>
            <p class="card-text">
              Sachet trois couleurs<br />
              Sachet deux couleurs<br />
              Sachet une couleur au choix<br />
              Sachet noir fleurs de sel de l’île d’Oléron
            </p>
          </div>
          <div class="card-footer text-center">
            <a
              href="src/pdf/bon_de_commande_printemps.pdf" target="_blank"
              class="card-text"
              ><button type="button" class="btn btn-dark">4,00 €</button></a
            >
          </div>
        </div>
        <!-- <div class="card">
          <a class="" href="src/pdf/bon_de_commande_printemps.pdf" target="_blank"
            ><img
              class="card-img-top index-card-img img-fluid"
              src="src/img/article/oeufs-t-web.jpg"
              alt="Card image cap"
          /></a>
          <div class="card-body text-center">
            <h5 class="card-title">Oeuf de Pâques</h5>
            <p class="card-text">
              70gr<br />
              Chocolat lait<br />
              Chocolat noir
            </p>
          </div>
          <div class="card-footer text-center">
            <a
              href="src/pdf/bon_de_commande_printemps.pdf" target="_blank"
              class="card-text"
              ><button type="button" class="btn btn-dark">5,00 €</button></a
            >
          </div>
        </div> -->
        <div class="card col-lg-3 p-0">
          <a class="" href="src/pdf/bon_de_commande_printemps.pdf" target="_blank"
            ><img
              class="card-img-top index-card-img img-fluid"
              src="src\img\article\puzzle.jpg"
              alt="Card image cap"
          /></a>
          <div class="card-body text-center">
            <h5 class="card-title">Puzzle</h5>
            <p class="card-text">
              <!-- Tablette de 150gr<br /> -->
              Tablette trois couleurs<br />
              Tablette deux couleurs<br />
              Tablette une couleur au choix
            </p>
          </div>
          <div class="card-footer text-center">
            <a
              href="src/pdf/bon_de_commande_printemps.pdf" target="_blank"
              class="card-text"
              ><button type="button" class="btn btn-dark">9,50 €</button></a
            >
          </div>
        </div>
        <div class="col-12">
          <h2 class="text-center">Les Boîtes</h2>
        </div>
        <div class="card col-lg-3 p-0">
          <a class="" href="src/pdf/bon_de_commande_printemps.pdf" target="_blank"
            ><img
              class="card-img-top index-card-img img-fluid"
              src="src/img/article/praline_noisette_courge_9-2.jpg"
              alt="Card image cap"
          /></a>
          <div class="card-body text-center">
            <h5 class="card-title">Boîte 9 Pralinés</h5>
            <p class="card-text">
              Assortiment lait et noir<br />ou <br />couleur de chocolat selon
              votre préférence
            </p>
          </div>
          <div class="card-footer text-center">
            <a
              href="src/pdf/bon_de_commande_printemps.pdf" target="_blank"
              class="card-text"
              ><button type="button" class="btn btn-dark">8,00 €</button></a
            >
          </div>
        </div>
        <div class="card col-lg-3 p-0">
          <a class="" href="src/pdf/bon_de_commande_printemps.pdf" target="_blank"
            ><img
              class="card-img-top index-card-img img-fluid"
              src="src/img/article/praline_noisette_courge_16.jpg"
              alt="Card image cap"
          /></a>
          <div class="card-body text-center">
            <h5 class="card-title">Boîte 16 Pralinés</h5>
            <p class="card-text">
              Assortiment lait et noir<br />ou <br />couleur de chocolat selon
              votre préférence
            </p>
          </div>
          <div class="card-footer text-center">
            <a
              href="src/pdf/bon_de_commande_printemps.pdf" target="_blank"
              class="card-text"
              ><button type="button" class="btn btn-dark">14,00 €</button></a
            >
          </div>
        </div>
        <div class="card col-lg-3 p-0">
          <a class="" href="src/pdf/bon_de_commande_printemps.pdf" target="_blank"
            ><img
              class="card-img-top index-card-img img-fluid"
              src="src/img/article/praline_noisette_courge_36.jpg"
              alt="Card image cap"
          /></a>
          <div class="card-body text-center">
            <h5 class="card-title">Boîte 36 Pralinés</h5>
            <p class="card-text">
              Assortiment lait et noir <br />ou <br />couleur de chocolat selon
              votre préférence
            </p>
          </div>
          <div class="card-footer text-center">
            <a
              href="src/pdf/bon_de_commande_printemps.pdf" target="_blank"
              class="card-text"
              ><button type="button" class="btn btn-dark">28,00 €</button></a
            >
          </div>
        </div>
      </div>

      <div id="quiSommeNous" class="row bg-light">
        <h1 class="col-lg-12 text-center">Qui sommes-nous ?</h1>
        <div class="col-lg">
          <img
            class="card-img-top index-card-img img-fluid"
            src="./src/img/bg-img/tas-dechocolat.jpg"
            alt="Card image cap"
          />
        </div>
        <div class="col-lg biographie">
          <span class="lettrine">M</span
          ><strong class="orange-gras">yma Chocolat</strong> est une
          chocolaterie artisanale située à
          <strong class="orange-gras">Montreuil</strong>. <br />
          Les chocolats sont élaborés avec un chocolat de qualité. <br /><br />
          Chocolat noir, 66% pur beurre de cacao et chocolat lait, 40% pur
          beurre de cacao.<br />
          Sans matière grasse ajoutée et sans additifs.<br />
          <strong class="orange-gras">Que du bon !</strong>
        </div>
      </div>

      <div id="contact" class="row">
        <h1 class="col-lg-12 text-center">Nous Contacter</h1>
        <div class="card-deck">
          <div class="card">
            <a
              href="https://www.google.fr/maps/place/Croix+de+Chavaux/@48.8621304,2.4319354,15z/data=!4m8!1m2!2m1!1scroix+de+chevaux       +montreuil!3m4!1s0x47e66d5e3e1675b9:0x7c81665f5204872c!8m2!3d48.8579153!4d2.4356676" target="_blank"
            >
              <i class="fas fa-home"></i>
            </a>
            <div class="card-body">
              <h5 class="card-title">NOS LOCAUX</h5>
              <p class="card-text">
                <small class="text-muted">Atelier situé à Montreuil, </small>
              </p>
              <p class="card-text">
                <a
                  href="https://www.google.fr/maps/place/Croix+de+Chavaux/@48.8621304,2.4319354,15z/data=!4m8!1m2!2m1!1scroix+de+chevaux+montreuil!3m4!1s0x47e66d5e3e1675b9:0x7c81665f5204872c!8m2!3d48.8579153!4d2.4356676" target="_blank"
                >
                  Retrait des chocolats à Croix de chavaux</a
                >
              </p>
            </div>
          </div>
          <div class="card">
            <a href="tel:+330147022314" href="tel:+330147022314">
              <i class="fas fa-phone"></i>
            </a>
            <div class="card-body">
              <h5 class="card-title">APPELEZ NOUS</h5>
              <p class="card-text">
                <small class="text-muted"
                  >Pour tous renseignements, vous pouvez nous appeler du lundi
                  au samedi de 10h à 18h
                </small>
              </p>
              <p class="card-text">
                <a href="tel:+33768758252">+33768758252</a>
              </p>
            </div>
          </div>
          <div class="card">
            <a href="mailto:mymachocolat@gmail.com">
              <i class="fas fa-envelope"></i>
            </a>
            <div class="card-body">
              <h5 class="card-title">PAR E-MAIL</h5>
              <p class="card-text">
                <small class="text-muted"
                  >Un devis, une idée, une commande ? Nous vous répondons le
                  plus rapidement possible</small
                >
              </p>
              <p class="card-text">
                <a href="mailto:mymachocolat@gmail.com"
                  >mymachocolat@gmail.com</a
                >
              </p>
            </div>
          </div>
          <div class="card">
            <a href="https://www.facebook.com/mymachocolat" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
            <div class="card-body">
              <h5 class="card-title">SUIVEZ NOUS</h5>
              <p class="card-text">
                <small class="text-muted"
                  >Toutes nos actualités son aussi disponibles sur notre page
                  facebook</small
                >
              </p>
              <p class="card-text">
                <a href="https://www.facebook.com/mymachocolat" target="_blank"
                  >@mymachocolat</a
                >
              </p>
            </div>
          </div>
        </div>
      </div>

      <div id="plus-d-information">
        <p>
          * Nous vous recommandons de manger les chocolats sous
          <strong>4 semaines pour la brillance</strong>, et vous pouvez les
          <strong>conserver jusqu'à 7 semaines</strong>.
        </p>
        <p>
          <em
            >Liste des allergènes : Fruits à Coque, Crème, Lait, Sésame,
            Clémentine, Orange</em
          >
        </p>
      </div>

      <footer class="row footer" id="footerBlock">
        <p class="col-lg mt-5 text-center text-light">
          © Myma Chocolat 2021 - Tous droits réservés
        </p>
        <p class="col-lg-12 text-center text-light">
          <a
            href="https://www.facebook.com/mymachocolat" target="_blank"
            class="text-center text-light"
            ><i class="fab fa-facebook p-2"></i
          ></a>
          <a href="mailto:mymachocolat@gmail.com" class="text-center text-light"
            ><i class="fas fa-envelope-open-text p-2"></i
          ></a>
          <a href="tel:+33768758252" class="text-center text-light"
            ><i class="fas fa-phone-volume p-2"></i
          ></a>
        </p>
        <div class="">
          <i
            id="goTopIcone"
            class="fa fa-arrow-circle-up"
            aria-hidden="true"
            onclick="goTopFunction()"
            title="Go to top"
          ></i>
        </div>
      </footer>
    </div>
    <script>
      //On cible l'icone par l'intermédiare de son id="goTopIcone" dans le DOM
      var myIcone = document.getElementById("goTopIcone");

      // Quand l'utilisateur scroll vers le bas de 20px partant du haut de la page, on fait apparaitre le bouton en appelant la fonction scrollFunction() qu'on a créer plus
      window.onscroll = function () {
        scrollFunction();
      };

      //On créer la fonctio, scrollFunction qui va nous permettre de faire apparaitre l'icone lorsque la zonne scrollée dépasse 20px. (du haut vers le bas ou du bas vers le haut). dans le cas contraire on ne l'affiche pas.
      function scrollFunction() {
        if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 20
        ) {
          myIcone.style.display = "block";
        } else {
          myIcone.style.display = "none";
        }
      }

      // Cette fonction nous permet à l'utilisateur de faire un retours au début de la page lors d'un click sur l'icone gotopIcone.
      function goTopFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }

      //fonction pour activer et désactiver le passage en gras des lien du menu de navigation (dans la navbar)
      const toHomeElt = document.getElementById("toHome");
      const toOrderElt = document.getElementById("toOrder");
      const toCataElt = document.getElementById("toCata");
      const toBioElt = document.getElementById("toBio");
      const toContactElt = document.getElementById("toContact");

      const setLinkActive = function (event) {
        if (event.currentTarget.id === "toHome") {
          toHomeElt.parentNode.classList.add("active");
          toOrderElt.parentNode.classList.remove("active");
          toCataElt.parentNode.classList.remove("active");
          toBioElt.parentNode.classList.remove("active");
          toContactElt.parentNode.classList.remove("active");
        } else if (event.currentTarget.id === "toOrder") {
          toHomeElt.parentNode.classList.remove("active");
          toOrderElt.parentNode.classList.add("active");
          toCataElt.parentNode.classList.remove("active");
          toBioElt.parentNode.classList.remove("active");
          toContactElt.parentNode.classList.remove("active");
        } else if (event.currentTarget.id === "toCata") {
          toHomeElt.parentNode.classList.remove("active");
          toOrderElt.parentNode.classList.remove("active");
          toCataElt.parentNode.classList.add("active");
          toBioElt.parentNode.classList.remove("active");
          toContactElt.parentNode.classList.remove("active");
        } else if (event.currentTarget.id === "toBio") {
          toHomeElt.parentNode.classList.remove("active");
          toOrderElt.parentNode.classList.remove("active");
          toCataElt.parentNode.classList.remove("active");
          toBioElt.parentNode.classList.add("active");
          toContactElt.parentNode.classList.remove("active");
        } else if (event.currentTarget.id === "toContact") {
          toHomeElt.parentNode.classList.remove("active");
          toOrderElt.parentNode.classList.remove("active");
          toCataElt.parentNode.classList.remove("active");
          toBioElt.parentNode.classList.remove("active");
          toContactElt.parentNode.classList.add("active");
        }
      };

      toHomeElt.addEventListener("click", setLinkActive);
      toOrderElt.addEventListener("click", setLinkActive);
      toCataElt.addEventListener("click", setLinkActive);
      toBioElt.addEventListener("click", setLinkActive);
      toContactElt.addEventListener("click", setLinkActive);


        //Fonction pour tester les valeurs des champs de saisie
        function verifyInput(variable){
                $("#"+variable+"span").addClass("errorMessage");
                $("#"+variable).css("border", "1px solid black");
                //On teste voir si le champ est vide
            if ($("#"+variable).val()==""){
                $("#"+variable+"+span").css("color", "red").removeClass("errorMessage");
                $("#"+variable).css("border", "1px solid red");
            }else{
                //On va tester la validité de l'email
                if (variable=="email"){
                    if (!validateEmail($("#"+variable).val())){
                        $("#"+variable+"+span").css("color", "red").html("Votre email n'est pas valide");
                        $("#"+variable+"+span").removeClass("errorMessage");
                        $("#"+variable).css("border", "1px solid red");
                    }
                }
                //On va tester la validité du téléphone
                if (variable=="telephone"){
                    if (!validateTel($("#"+variable).val())){
                        $("#"+variable+"+span").css("color", "red").html("Votre numéro n'est pas valide");
                        $("#"+variable+"+span").removeClass("errorMessage");
                        $("#"+variable).css("border", "1px solid red");
                    }
                }
            }
        }
            //Fonction pour valider telephone
        function validateTel(telephone){
            var pattern=/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
            return pattern.test(telephone);
        }
            //Fonction pour valider l'email
        function validateEmail(email){
            var pattern =/^([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/;
            return pattern.test(email);
        }
    </script>
    <!-- le script suivant est un lien qui charge les icones fontawesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Ce fichier script de jquery ci dessou nous permet de faire fonctionner le code script qui permet d'afficher le contenu de nos liens de la page lors d'un click en utilisant la methode click et la methode preventedefault de javascript -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj "
      crossorigin="anonymous "
    ></script>
    <!-- fichier du package bootstrap  -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx "
      crossorigin="anonymous "
    ></script>
  </body>
</html>

