<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Pagina mea de contact" />
    <meta name="keywords" content="Contact" />
    <meta name="author" content="Ecaterina Stefan" />
    <link
      rel="icon"
      href="../assets/img/Vector.png"
      type="image/png"
      sizes="16*16"
    />
    <link
      rel="stylesheet"
      href="../assets/style/register_contact.css"
      type="text/css"
    />

    <title>Contact</title>
  </head>
  <body>
    <section class="main-container">
    <div class="header_nav_wrapper ">
      <header class="header_logo_main_title header-contact">
        <a href="../index.html"
          ><img
            class="logo"
            src="../assets/img/es.png"
            alt="logo"
            title="logo"
            width="150px"
        /></a>

        <h1 class="main_title">Contact</h1>
      </header>

      <nav class="nav_bar nav-contact">
        <ul class="ul-index">
          <li class="li-index"> 
            <a href="./registru.php" class="nav-a">Inregistrare</a> 
            <a href="./portofoliu.php" class="nav-a">Portofoliu</a>
            <a href="./despre_mine.php" class="nav-a">Despre mine</a>
            <a href="../index.php" class="nav-a">Acasă</a>
            
           
           
          </li>
        </ul>
      </nav>
    </div>



    <div id="form">
      <form action="#" method="get" name="contact-form">
        <label class="utilizator_contact" for="user">Utilizator:</label>
        <input
          class="input_utilizator_contact"
          type="text"
          name="user"
          id="user"
          placeholder="Scrie numele!"
          required
        />
        <br />
        <br>
        <label class="email_contact" for="email"> Email:</label>
        <input
          class="input_email_contact"
          type="email"
          name="email"
          id="email"
          placeholder="Scrie emailul!"
          required
        />
        <br />
        <br>
        <label class="subiect_contact" for="text">Subiect:</label> <br>
        <textarea
          class="textarea_subiect_contact"
          name="text"
          id="text"
          cols="30"
          rows="10"
        ></textarea>
        <br />
        <br>
        <input class="submit_contact" type="submit" value="Trimite" />
      </form>
    </div>

  
    <div>
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
              <a href="termeni.php" class="footer-a">Termeni si conditii de utilizare</a>
            </li>
          </ul>
          <p></p>
            <p><?php echo "Copyright &copy; Learn PHP - " . date("Y"); ?></p>
          </p>
        </footer>
      </section>
   </div>
  </section>
  </body>
</html>
