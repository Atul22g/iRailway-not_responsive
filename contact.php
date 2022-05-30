<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>iRailway-Contact Me</title>
  </head>
  <body>
    <header>
      <a href="index.php" class="logo">iRailway</a>
      <nav>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="book-ticket.php">BOOK TICKET</a></li>
          <li><a href="about.php">ABOUT US</a></li>
          <li><a href="contact.php" class="active-nav">CONTACT US</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section class="section-form">
        <form method="">
          <h2>Contact Me</h2>
          <table class="form2">
            <tr>
              <label for="name">
                <th>Name :-</th>
                <td>
                  <input
                    type="text"
                    name="name"
                    placeholder="Enter Your Name"
                  />
                </td>
              </label>
            </tr>

            <tr>
              <label for="Email">
                <th>Email id :-</th>
                <td>
                  <input
                    type="email"
                    name="Email"
                    placeholder="example@gmail.com"
                  />
                </td>
              </label>
            </tr>

            <tr>
              <label for="phone">
                <th>Phone No :-</th>
                <td>
                  <input
                    type="tel"
                    name="phone"
                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                    placeholder="Enter The Phone no"
                    maxlength="10"
                  />
                </td>
              </label>
            </tr>

            <tr>
              <label for="message">
                <th>message :-</th>
                <td>
                  <textarea
                    name="massage"
                    cols="50"
                    rows="10"
                    placeholder="Enter The Your Message"
                  ></textarea>
                </td>
              </label>
            </tr>

            <tr>
              <th colspan="2">
                <input class="submit" type="submit" name="submit" />
              </th>
            </tr>
          </table>
        </form>
      </section>
    </main>
    <footer>
      <p>&#169; Copyright All rights reserved</p>
    </footer>
  </body>
</html>
