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

        <h2 class="main_title">Înregistrare</h2>
      </header>

      <nav class="nav_bar">
        <ul>
          <li>
            <a href="../index.php">Acasă</a>
            <a href="./despre_mine.php">Despre mine</a>
            <a href="./portofoliu.php">Portofoliu</a>
            <a href="./contact.php">Contact</a>
          </li>
        </ul>
      </nav>
    </div>

    <hr />

    <div class="formular_inregistrare_wrapper">
      <h2 class="formular_inregistrare_nume">Formular de înregistrare</h2>
      <form action="script.php" method="Post">
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
        <label class="prenume_inregistrare" for="prenume">Prenume</label>
        <input
          class="input_prenume_inregistrare"
          type="text"
          id="prenume"
          name="prenume"
          placeholder="Introduceti prenumele!"
          required
        />
        <br />
        <h3>Scrie sexul</h3>
        <select name="selected">
          <option value="m">Masculin</option>
          <option value="f">Feminin</option>
          <option value="n">Neutru</option>
        </select>
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
        <label class="parola_inregistrare" for="parola">Parola</label>
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
          >Confirma parola</label
        >
        <input
          class="input_confirm_parola"
          type="password"
          id="confirm_parola"
          name="confirm-parola"
          placeholder="Repetati introducerea parolei"
          required
        />
        <br />
        <input class="submit_inregistrare" type="submit" value="Inregistrare" />
      </form>
    </div>

    <hr />

    <div>
      <section class="footer">
        <footer>
          <p>
            <span class="titlu_footer"><strong>Să ne conectăm!</strong></span>
            <br />
            <br />

            Dacă aveți întrebări sau dacă doriți să revizuiți mai multe din
            munca mea, vă rog să nu ezitați să mă contactați prin formularul din
            pagina ”Contact” sau prin e-mail la barganecaterina@yahoo.com. De
            asemenea, puteți găsi portofoliul meu și alte informații de contact
            pe contul meu
            <span class="github_link"
              ><a href=" https://github.com/Ecaterina1991" target="_blank"
                >GitHub</a
              ></span
            >
            și contul meu
            <span class="linkedin_link"
              ><a
                href="https://www.linkedin.com/in/ecaterina-stefan-01a05b58/"
                target="_blank"
              >
                linkedin</a
              ></span
            >. Vă mulțumesc pentru că m-ați luat în considerare pentru proiectul
            dumneavoastră!
          </p>
          <p class="copyright">Copyright &copy; Learn PHP 2023</p>
        </footer>
      </section>
    </div>
  </body>
</html>
