<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>iRailway-Book-Ticket</title>
  </head>
  <body>
    <header>
      <a href="index.php" class="logo">iRailway</a>
      <nav>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="book-ticket.php" class="active-nav">BOOK TICKET</a></li>
          <li><a href="about.php">ABOUT US</a></li>
          <li><a href="contact.php">CONTACT US</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section class="section-form">
        <form method="" class="form">
          <h2>Book Your Ticket Now</h2>
          <table>
            <tr>
              <label for="Resevation_Quota">
                <th>Resevation Quota :-</th>
                <td>
                  <select name="Resevation_Quota">
                    <option value="Please Select">Please Select</option>
                    <option value="First Class">First Class</option>
                    <option value="Second Class">Second Class</option>
                    <option value="Third Class">Third Class</option>
                    <option value="Fourth Class">Fourth Class</option>
                  </select>
                </td>
              </label>
            </tr>

            <tr>
              <label for="Train_Name_Number">
                <th>Train Name or Number :-</th>
                <td>
                  <input
                    type="text"
                    name="Train_Name_Number"
                    placeholder="Enter the Train Name or Number"
                  />
                </td>
              </label>
            </tr>

            <tr>
              <label for="Passengers">
                <th>passengers :-</th>
                <td>
                  <input
                    type="text"
                    name="passengers"
                    placeholder="How Many Passengers"
                  />
                </td>
              </label>
            </tr>

            <tr>
              <label for="Journey_From">
                <th>Journey From :-</th>
                <td>
                  <input
                    type="text"
                    name="Journey_From"
                    placeholder="Enter the Journey From"
                  />
                </td>
              </label>
            </tr>

            <tr>
              <label for="Journey_To">
                <th>Journey To :-</th>
                <td>
                  <input
                    type="text"
                    name="Journey_To"
                    placeholder="Enter the Journey To"
                  />
                </td>
              </label>
            </tr>

            <tr>
              <label for="Date">
                <th>Departure/Journey Date :-</th>
                <td><input type="date" name="Date" /></td>
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