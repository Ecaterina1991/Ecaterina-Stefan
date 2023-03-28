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
      href="../assets/style/principal.css"
      type="text/css"
    />

    <title>Contact</title>
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

        <h2 class="main_title">Contact</h2>
      </header>

      <nav class="nav_bar">
        <ul>
          <li>
            <a href="../index.html">Acasă</a>
            <a href="./despre_mine.html">Despre mine</a>
            <a href="./portofoliu.html">Portofoliu</a>
            <a href="./registru.html">Inregistrare</a>
          </li>
        </ul>
      </nav>
    </div>

    <hr />

    <div id="form">
      <form action="#" method="get">
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
        <label class="subiect_contact" for="text">Subiect:</label>
        <textarea
          class="textarea_subiect_contact"
          name="text"
          id="text"
          cols="10"
          rows="5"
        ></textarea>
        <br />
        <input class="submit_contact" type="submit" value="Trimite" />
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
            <span
              ><a
                class="linkedin_link"
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