<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <title> Burger House</title>
  </head>
  <body>


  <?php 
  include('connexion.php');

  session_start();
  if(isset($_SESSION['identifiant_client'])){

  }else{

  }
  
  ?>

    <header class="header">
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#">
            <img
              src="assets/logo-dark.png"
              alt="logo"
              class="nav__logo-dark"
            />
            <img
              src="assets/logo-white.png"
              alt="logo"
              class="nav__logo-white"
            />
          </a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#home">ACCUEIL</a></li>
        <li><a href="#special">SPECIAL</a></li>
        <li><a href="#menu">MENU</a></li>
        <li><a href="#event">EVENEMENTS</a></li>
        <li><a href="#contact">CONTACT </a></li>
        <div class="icon">
          <?php 
          $compte_user = $cnx->prepare(	"SELECT * from 'commande' where identifiant_client=?");

          ?>
        <li><i class="ri-user-fill"></i></li>
        <li>        <i class="ri-shopping-cart-2-fill"></i>
        </li>
        </div>
      </ul>
    </nav>
    <div class="section__container header__container" id="home">
      <div class="header__image">
        <img src="assets/header.png" alt="header" />
      </div>
      <div class="header__content">
        <h2>C’EST LE BON MOMENT POUR LE BON GOÛT DU BURGER</h2>
        <h1>BURGER<br /><span>WEEK</span></h1>
      </div>
    </div>
  </header>

  <section class="section__container banner__container" id="special">
    <div class="banner__card">
      <p>ESSAYEZ-LE DÈS AUJOURD’HUI</p>
<h4>BURGER LE PLUS POPULAIRE</h4>
    </div>
    <div class="banner__card">
      <p>ESSAYEZ-LE DÈS AUJOURD’HUI</p>
<h4>PLUS AMUSANT<BR />PLUS DE GOÛT</h4>
    </div>
    <div class="banner__card">
      <p>ESSAYEZ-LE DÈS AUJOURD’HUI</p>
<h4>FRAIS & CHILI</h4>
    </div>
  </section>

  <section class="section__container order__container" id="menu">
    <h3>BURGER TOUJOURS SAVOUREUX</h3>
    <h2 class="section__header">CHOISISSEZ VOTRE PROFIL</h2>
    <p class="section__description">
      Que vous ayez envie de saveurs classiques ou de combinaisons audacieuses, c’est ici que vous
      Votre voyage culinaire commence. Comblez vos envies et savourez chaque bouchée
      lorsque vous créez votre expérience de burger personnalisée avec Burger Company.
    </p>

    <a href="loglivreur.php">        <button class="btn">LIVREUR</button>
    </a>
    
        <a href="logclient.php"><button class="btn">CLIENT</button></a>

      
      
    </div>
  </section>

  <section class="section__container event__container" id="event">
    <div class="event__content">
      <div class="event__image">
        <img src="assets/event.png" alt="event" />
      </div>
      <div class="event__details">
        <h3>Découverte</h3>
        <h2 class="section__header">ÉVÉNEMENTS À VENIR</h2>
        <p class="section__description">
          Des dégustations de hamburgers exclusives et des collaborations de chefs à la communauté
          initiatives de sensibilisation et de fêtes saisonnières, il y a toujours
          quelque chose de spécial à l’horizon chez Burger Company. Soyez le premier à
          Informez-vous de nos événements, promotions et rassemblements à venir
          continuer à apporter de la joie et de la saveur à nos chers clients. Rejoignez-nous
          en créant des moments mémorables et de délicieux souvenirs ensemble !
        </p>
      </div>
    </div>
  </section>

  <section class="reservation" id="contact">
    
    <img
      src="assets/reservation-bg-1.png"
      alt="reservation"
      class="reservation__bg-1"
    />
    <img
      src="assets/reservation-bg-2.png"
      alt="reservation"
      class="reservation__bg-2"
    />
  </section>

  <footer class="footer">
    <div class="section__container footer__container">
      <div class="footer__logo">
        <img src="assets/logo-white.png" alt="logo" />
      </div>
      <div class="footer__content">
        <p>
        Bienvenue chez Burger Company, où la passion pour la nourriture exceptionnelle et
L’hospitalité authentique se réunit. Notre histoire est une histoire de dévouement
Créer l’expérience de burger parfaite, en s’approvisionnant en
ingrédients pour offrir un goût inégalé à chaque bouchée.
        </p>
        <div>
          <ul class="footer__links">
            <li>
              <span><i class="ri-map-pin-2-fill"></i></span>
+ 225 05 75 65 93 63            </li>
            <li>
              <span><i class="ri-mail-fill"></i></span>
              info@burgerhouse.com
            </li>
          </ul>
          <div class="footer__socials">
            <a href="#"><i class="ri-facebook-circle-fill"></i></a>
            <a href="#"><i class="ri-instagram-fill"></i></a>
            <a href="#"><i class="ri-twitter-fill"></i></a>
            <a href="#"><i class="ri-whatsapp-fill"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__bar">
    Copyright © 2025 NEYL  . All rights reserved.
    </div>
  </footer>

  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="main.js"></script>
    
  </body>
</html>
