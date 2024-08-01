<?php
$orderSuccess = false;
session_start();

// Check if the user is logged in
if(!isset($_SESSION['firstname'])) {
  // Redirect to the login page if the user is not logged in
  header("Location: login.php");
  exit();
}

// Retrieve the first name from the session
$firstname = $_SESSION['firstname'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobnum = $_POST['mobnum'];
    $address = $_POST['address'];
    $delivnotes = $_POST['delivnotes'];
    $addresstype = $_POST['addresstype'];
    $promo = $_POST['promo'];
    $booking = $_POST['booking'];
    $productname = $_POST['productname'];
    $productprice = $_POST['productprice'];


    // Your database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Hiccup_Database";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL to insert data into the database
    $sql = "INSERT INTO user_info (firstname, lastname, mobilenumber, useraddress, delivernotes, addresstype, promo, booking, productname, productprice)
    VALUES ('$fname', '$lname', '$mobnum', '$address', '$delivnotes', '$addresstype', '$promo', '$booking', '$productname', '$productprice')";

if ($conn->query($sql) === TRUE) {
  $orderSuccess = true;
} else {
  if ($conn->errno == 1062) {
      echo "Duplicate entry, handle accordingly...";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hiccup - Home</title>
    <link rel="shortcut icon" href="logocircle.png" type="image/x-icon" />
    <link rel="stylesheet" href="cart.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="wrapper">
      <div class="hiccup-logo">
        <img src="logo.png" />
      </div>

      <header class="header1">
        <div class="orderbutton">
        <a href="menu_loggedin.php"><button>ORDER NOW!</button></a>
        </div>
      </header>

      <header class="header2">
        <div class="menu-icon" onclick="toggleMenu()">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
        <nav>
          <ul id="menuItems">
            <li><a href="index_loggedin.php">Home</a></li>
            <li class="dropdownpromos">
        <a href="#" class="dropbtnpromos">Promos ▼</a>
        <div class="dropdownpromos-content">
          <div class="promo-content">
            <img src="kathnielbreakup.png" class="kathniel" alt="Promo Image">
            <div class="promo-text">
              <a href="#">KathNiel's Heartbreak BOGO: <br> <span class="small-text">Indulge in a buy-one-take-one treat
                  <br> to mend your broken heart.</span> </a>
            </div>
          </div>
          <div class="promo-content2">
            <img class="xmaspromo" src="xmaspromo.jpg" alt="Second Promo Image">
            <div class="promo-text2">
              <a href="#">Hiccup's Christmas Deal: <br> <span class="small-text">Sleigh the holidays! Buy 1 milktea,
                  <br>get 1 FREE!</span></p>
            </div>
          </div>
        </div>
        <li><a href="index_loggedin.php#aboutus">About Us</a></li>
      <li class="dropdown">
        <a href="#" class="dropbtn">
          <?php
          // Assuming $firstname holds the first name of the logged-in user
          echo $firstname.' ▼'; // Display the first name and the dropdown indicator
          ?>
        </a>
        <div class="dropdown-content">
        <a href="index.php">Logout</a>
            </li>
          </ul>
        </nav>
      </header>
      <link
        href="https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap"
        rel="stylesheet"
      />

      <div class="container-cart">
        <div class="cart-form">
        <form action="" method="post">
            <div class="text-group">
              <label for="fname">First Name</label>
              <input
                type="text"
                id="fname"
                name="fname"
                placeholder="'Juan'"
                required
              />
            </div>
            <div class="text-group">
              <label for="'lname'">Last Name</label>
              <input
                type="text"
                id="lname"
                name="lname"
                placeholder="'Dela Cruz'"
                required
              />
            </div>
            <div class="text-group">
              <label for="mobnum">Mobile Number</label>
              <input
                type="text"
                id="mobnum"
                name="mobnum"
                placeholder="'09973811338'"
                required
              />
            </div>
            <div class="text-group">
              <label for="address">Address</label>
              <input
                type="text"
                id="address"
                name="address"
                placeholder="Unit B Remedios Bldg. 55 Roces Avenue, 1103, Makati City, Metro Manila"
                required
              />

              <div class="text-group">
  <label for="delivnotes">Notes to rider (optional)</label>
  <input
    type="text"
    id="delivnotes"
    name="delivnotes"
    placeholder="e.g. Special requests, delivery specifications"
  />
</div>


              <div class="text-group">
                <label> Address Type</label>

                <div class="radio-container">
                  <div class="radio-group">
                    <label for="Residential">Residential</label>
                    <input
                      type="radio"
                      id="Residential"
                      name="addresstype"
                      value="Residential"
                      required
                    />
                  </div>
                  <div class="radio-group">
                    <label for="Office">Office</label>
                    <input
                      type="radio"
                      id="Office"
                      name="addresstype"
                      value="Office"
                      required
                    />
                  </div>
                </div>
              </div>

              <div class="text-group">
  <label for="promo">Promos and Discounts (optional)</label>
  <input
    type="text"
    id="promo"
    name="promo"
    placeholder="*C0D3-D1SC0UNT-PR0M0"
  />
</div>

              <div class="text-group">
  <label> Select Booking</label>
  <div class="radio-container">
    <div class="radio-group">
      <label for="Residential">Delivery</label>
      <input
        type="radio"
        id="Residential"
        name="booking"
        value="Delivery"
        required
      />
    </div>
    <div class="radio-group">
      <label for="pickup">Pick-up</label>
      <input
        type="radio"
        id="pickup"
        name="booking"
        value="Pick-up"
        required
      />
    </div>
  </div>
</div>
            </div>
        </div>
        <div class="order-list-container1">
          <div class="order-list-container2">
            <div class="order-list">Order Summary</div>
            <div class="order-item">
            <?php
        // Check if the parameters exist and are set
        if (isset($_GET['productname']) && isset($_GET['productprice'])) {
            // Retrieve the product name and price from the URL parameters
            $productname = $_GET['productname'];
            $productprice = $_GET['productprice'];
            
            echo "<h2>Your Order Summary:</h2>";
            echo "<p>Product: $productname</p>";
            echo "<p>Price: ₱$productprice</p>";
        }
        ?>


            </div>
          </div>
        </div>
      </div>
      <div class="checkout-container">
      <?php
        if ($orderSuccess) {
            // Show "Order Successful" message if the order was successful
            echo '<script>alert("Order Successful");</script>';
        }
        ?>
        <input type="hidden" name="productname" value="<?php echo htmlspecialchars($productname); ?>" />
<input type="hidden" name="productprice" value="<?php echo htmlspecialchars($productprice); ?>" />
      <button type="submit" class="checkoutbutton">Checkout</button>
</form>
      </div>
      <div style="height: 3500px"></div>
    </div>
    <footer class="footer-container">
      <div class="footer-content">
        <div class="circlelogo">
          <img class="logo-circle-image" src="logo_circle.png" />
        </div>

        <div class="text-footer">
          <p>Hiccup - Baliwag City, Bulacan</p>
          <span class="address"
            >764 Benigno S. Aquino Avenue, Poblacion, Baliuag, Philippines</span
          >
        </div>
      </div>

      <div class="socials-container">
        <a
          href="https://www.facebook.com/HiccupBaliwagCityBulacan"
          class="social facebook"
        >
          <svg height="1em" viewBox="0 0 320 512">
            <path
              d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
            ></path>
          </svg>
        </a>

        <a
          href="https://www.instagram.com/hiccupcorp?fbclid=IwAR1pvJFRBIir0WUip2z-H46qHOo2TiZe0ZEptnF1fBl4Twu89tR7mvMN7IU"
          class="social instagram"
        >
          <svg height="1em" viewBox="0 0 448 512">
            <path
              d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
            ></path>
          </svg>
        </a>

        <a href="#" class="social twitter">
          <svg height="1em" viewBox="0 0 512 512">
            <path
              d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
            ></path>
          </svg>
        </a>

        <a href="#" class="social google-plus">
          <svg height="1em" viewBox="0 0 640 512">
            <path
              d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z"
            ></path>
          </svg>
        </a>
      </div>
    </footer>

    <script>
      function toggleMenu() {
        var menu = document.getElementById("menuItems");
        menu.classList.toggle("active");
      }
      src = "https://unpkg.com/leaflet/dist/leaflet.js";
      integrity =
        "sha512-xj12Q1FI9KXD9aDi9vV3rCgfqWVhpMZH66ig+0A0Dq56acEmcevKosdQ4SGe4mCKvDU/xSbnCIbNUA5ez+K+Uw==";
      crossorigin = "";
    </script>
  </body>
</html>