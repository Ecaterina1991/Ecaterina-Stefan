<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Pagina de inregistrare" />
    <meta name="keywords" content="Inregistrare, form" />
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
    <title>Înregistrare</title>
  </head>

  <body>
    <div class="header_nav_wrapper">
      <header class="header_logo_main_title">
        <a href="../index.html"
          ><img
            class="logo"
            src="../assets/img/es.png"
            alt="logo"
            title="logo"
            width="150px"
        /></a>

        <h1 class="main_title">Înregistrare</h1>
      </header>

      <nav class="nav_bar">
        <ul class="ul-index">
          <li class="li-index"> 
            <a href="./contact.php" class="nav-a">Contact</a>
            <a href="./portofoliu.php" class="nav-a">Portofoliu</a>     
            <a href="./despre_mine.php" class="nav-a">Despre mine</a>
            <a href="../index.php" class="nav-a">Acasă</a>
          </li>
        </ul>
      </nav>
    </div>

   

    <div class="formular_inregistrare_wrapper">
      <!-- <h2 class="formular_inregistrare_nume">Formular de înregistrare</h2> -->
      <br>
      <form action="script.php" method="Post" enctype="application/x-www-form-urlencoded" name="form-inregistrare" class="form-inregistrare">
        <label class="nume_inregistrare" for="nume">Nume:</label>
        <input
          class="input_nume_inregistrare"
          type="text"
          id="nume"
          name="nume"
          placeholder="Introduceti numele!"
          required
        />
        <br />
        <label class="prenume_inregistrare" for="prenume">Prenume:</label>
        <input
          class="input_prenume_inregistrare"
          type="text"
          id="prenume"
          name="prenume"
          placeholder="Introduceti prenumele!"
          required
        />
        <br />
        <div>
        <h3>Scrie sexul</h3>
        <select name="selected">
          <option value="m">Masculin</option>
          <option value="f">Feminin</option>
          <option value="n">Neutru</option>
        </select>
      </div>
        <br>
        <br />
        <label class="email_inregistrare" for="email">Email:</label>
        <input
          class="input_email_inregistrare"
          type="email"
          id="email"
          name="email"
          placeholder="Introduceti emailul!"
          required
        />
        <br />
        <label class="parola_inregistrare" for="parola">Parola:</label>
        <input
          class="input_parola_inregistrare"
          type="password"
          id="parola"
          name="parola"
          placeholder="Parola cu minim 7 caractere"
          required
        />
        <br />
        <label class="confirm_parola" for="confirm_parola"
          >Confirma parola:</label
        >
        <input
          class="input_confirm_parola"
          type="password"
          id="confirm_parola"
          name="confirm-parola"
          placeholder="Repetati parola"
          required
        />
        <br />
         <input class="submit_inregistrare" type="submit" value="Inregistrare" />
       
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
  </body>
</html>
