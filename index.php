<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Prima pagina a frumosului meu blog" />
    <meta name="keywords" content="Ecaterina Stefan, blog" />
    <meta name="author" content="Ecaterina Stefan" />
    <link
      rel="icon"
      href="assets/img/Vector.png"
      type="image/png"
      sizes="16*16"
    />
    <!--  CSS-->
    <link rel="stylesheet" href="assets/style/principal.css" type="text/css" />

    <title>Pagina de Blog</title>
  </head>
  
  <body>
    <section class="main-container">
    <div class="header_nav_wrapper">
      <header class="header_logo_main_title">
        <img
          class="logo"
          src="assets/img/es.png"
          alt="logo"
          title="logo"
          width="120px"
        />
        <h1 class="main_title">Primul meu blog</h1>
      </header>

      <nav class="nav_bar">
        <ul class="ul-index">
          <li class="li-index">
            <a href="pages/contact.php" class="nav-a">Contact</a> 
            <a href="pages/registru.php" class="nav-a">Inregistrare</a> 
            <a href="pages/portofoliu.php" class="nav-a">Portofoliu</a>
            <a href="pages/despre_mine.php" class="nav-a">Despre mine</a>
          </li>
        </ul>
      </nav>
    </div>

    <div class="2_sectiuni_index_wrapper">
      <section id="prima_sectiune">
        <p>
          Numele meu este
          <span class="nume_sectiune">Ecaterina</span>
          <span class="nume_statut">și sunt studenta</span> unui curs foarte
          bine structurat și profesionist - "Learn PHP".
        </p>
      </section>

      <!-- //////////////////////////////////////////////////////////////////////// -->

      <section id="a_doua_sectiune" class="row content-container section-2-column">
       
        <div class="text_a_doua_sectiune first-col-right section-2-column-item">
        <p >
          Am crescut iubind frumosul sub toate formele sale și având o intuiție
          înnăscută pentru armonie. În fiecare proiect pun pasiune, găsind cheia
          de mijloc între ceea ce își dorește utilizatorul și cea mai bună formă
          de prezentare din lumea Web-Developmentului și a Web Designului. Ador
          latura perfect logică și intelectuală din spatele programării. Mă
          delectez cu frumusețea rezultată de pe urma cunoștințelor mele de
          <br />
          Front-End-Development și Web Design. <br />
          <br />
          Îmi doresc să ajung unul dintre cei mai buni programatori din lume și
          acest curs cred că este pasul cel mai important în traseul meu,
          oferindu-mi mai mult decât mi-am imaginat vreodată că aș putea avea.
        </p>
      </div>
      <div class="prima-foto first-col-left section-2-column-item">
        <img
          src="assets/img/foto1.jpg"
          alt="O fotografie cu mine"
          title="Eu"
        />
      </div>
      </section>
    </div>

    <!-- ............................................................. -->

    
      <section class="footer">
        <footer>
          <span class="titlu_footer"><strong>Link-uri utile:</strong></span>
          <br />
          <br />
          <ul class="ul">
            <li class="li">
              <a
                href="https://www.anaf.ro/anaf/internet/ANAF/acasa/!ut/p/a1/hc6xDoIwEAbgZ2Ho2jtRCHHDhUocxEXoYkpSCgZbUiq8vtU4OCjedn--y3_AoQSuxdQp4TqjRf_ceXxhKxazMAlzZAViEe32pyg7ImYbDyoP8Mek-O_-DHyRYPwGCxU5cNWb-vVulep6nSjgVjbSSkvv1setc8O4JUhwnmcqtGioNQS_-daMDsoPBsOtxGvUT4c0CB5h5prT/dl5/d5/L2dBISEvZ0FBIS9nQSEh/"
                class="footer-a"
                >ANAF</a
              >
              <a href="https://www.google.com/" class="footer-a">Google</a>
              <a href="pages/termeni.php" class="footer-a">Termeni si conditii de utilizare</a>
            </li>
          </ul>
          <p></p>
            <p><?php echo "Copyright &copy; Learn PHP - " . date("Y"); ?></p>
          </p>
        </footer>
      </section>
    </section>
    
  </body>
</html>
