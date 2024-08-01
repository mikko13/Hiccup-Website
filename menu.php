<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Hiccup - Menu</title>
  <link rel="shortcut icon" href="logo_circle.png" type="image/x-icon">
  <link rel="stylesheet" href="menu_styles.css" />
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<div class="hiccup-logo">
  <img src="logo.png" />
</div>

<header class="header1">

  <div class="orderbutton">
    <a href="menu.php"><button>ORDER NOW!</button></a>
  </div>

</header>

<header class="header2">

  <div class="menu-toggle" onclick="toggleMenu()">

    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
  </div>

  <nav>
    <ul id="menuItems">
      <li><a href="index.php">Home</a></li>
      <li class="dropdownpromos">
        <a href="#" class="dropbtnpromos">Promos ▼</a>
        <div class="dropdownpromos-content">
          <div class="promo-content">
            <img src="kathnielbreakup.png" class="kathniel" alt="Promo Image">
            <div class="promo-text">
              <a href="#">KathNiel's Heartbreak BOGO: <br> <span class="small-text">Indulge in a
                  buy-one-take-one treat
                  <br> to mend your broken heart.</span> </a>
            </div>
          </div>
          <div class="promo-content2">
            <img class="xmaspromo" src="xmaspromo.jpg" alt="Second Promo Image">
            <div class="promo-text2">
              <a href="#">Hiccup's Christmas Deal: <br> <span class="small-text">Sleigh the holidays! Buy
                  1 milktea,
                  <br>get 1 FREE!</span></p>
            </div>
          </div>
        </div>
      <li><a href="index.php" onclick="scrollToSection('aboutus')">About Us</a></li>
      <li><a href="login.php">Login</a></li>
      </li>
    </ul>
  </nav>
</header>

<body>
  <div class="menu">
    <div class="heading">
      <h1>&mdash;Menu&mdash;</h1>
    </div>

    <div class="bacon-carbonara-container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="bacon-carbonara">
              <img src="bacon-carbonara.jpg" alt="bc" class="baconcarbonara" />
              <div class="details">
                <div class="details-sub">
                  <h5>Bacon Carbonara</h5>
                  <h5 class="price">₱159</h5>
                  <p>A classic Italian creamy pasta. Bacon, mushrooms, and onions are cooked together with a creamy
                    sauce.</p>
                  <div class="menu-order-button"><a href="login.php"><button>Add to Cart</button></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="crab-rangoon-container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="crab-rangoon">
              <img src="crab-rangoon.jpg" alt="crab" class="crab-rangoon" />
              <div class="details">
                <div class="details-sub">
                  <h5>Crab Rangoon</h5>
                  <h5 class="price">₱139</h5>
                  <p>Are crispy dumpling appetizers commonly served in American Chinese restaurants.</p>
                  <div class="menu-order-button"><a href="login.php"><button>Add to Cart</button></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="cheesy-spagh-container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="cheesy-spagh">
              <img src="cheesy-spagh.jpg" alt="bc" class="cheesy" />
              <div class="details">
                <div class="details-sub">
                  <h5>Cheesy Spaghetti</h5>
                  <h5 class="price">₱149</h5>
                  <p>The classic appeal of perfectly cooked spaghetti with a rich and indulgent cheese sauce.</p>
                  <div class="menu-order-button"><a href="login.php"><button>Add to Cart</button></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="loco-moco-container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="loco-moco">
              <img src="loco-moco.jpg" alt="bc" class="loco-moco" />
              <div class="details">
                <div class="details-sub">
                  <h5>Loco Moco</h5>
                  <h5 class="price">₱120</h5>
                  <p>Typically features white rice topped with a hamburger, with various variations.</p>
                  <div class="menu-order-button"><a href="login.php"><button>Add to Cart</button></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="nachos-container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="nachos">
              <img src="potato-nachos.jpg" alt="bc" class="nachos" />
              <div class="details">
                <div class="details-sub">
                  <h5>Potato Nachos</h5>
                  <h5 class="price">
                    ₱149</h5>
                  <p>Mexican twist: oven-baked potatoes replace tortilla chips.</p>
                  <div class="menu-order-button"><a href="login.php"><button>Add to Cart</button></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="beef-noodles-container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="beef-noodles">
              <img src="beef-noodles.jpg" alt="bc" class="beef-noodles" />
              <div class="details">
                <div class="details-sub">
                  <h5>Mongolian Beef Noodles</h5>
                  <h5 class="price">
                    ₱159</h5>
                  <p>Savory Mongolian-Chinese fusion: tender beef stir-fried and tossed in a delicious sauce.</p>
                  <div class="menu-order-button"><a href="login.php"><button>Add to Cart</button></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="fish-container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="fish">
              <img src="fish.jpg" />
              <div class="details">
                <div class="details-sub">
                  <h5>Sweet & Sour Fish</h5>
                  <h5 class="price">
                    ₱179
                  </h5>
                  <p>Crispy, golden-fried fish with a delightful tangy-sweet sauce..</p>
                  <div class="menu-order-button"><a href="login.php"><button>Add to Cart</button></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="burger-steak-container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="burger-steak">
              <img src="burger-steak.jpg" alt="bc" class="burger-steak" />
              <div class="details">
                <div class="details-sub">
                  <h5>Burger Steak</h5>
                  <h5 class="price">
                    ₱109 - 1pc | ₱129 - 2pcs
                  </h5>
                  <p>Hearty, savory dish with a hamburger twist in steak form.</p>
                  <div class="menu-order-button"><a href="login.php"><button>Add to Cart</button></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="wings-container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="chicken-wings">
              <img src="chicken-wings.png" alt="bc" class="chicken-wings" />
              <div class="details">
                <div class="details-sub">
                  <h5>Chicken Wings</h5>
                  <h5 class="price">
                    ₱149</h5>
                  <p>Mexican twist: oven-baked potatoes replace tortilla chips.</p>
                  <div class="menu-order-button"><a href="login.php"><button>Add to Cart</button></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="drinks-container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="milktea">
              <img src="milktea.jpg" alt="bc" class="milktea" />
              <div class="details">
                <div class="details-sub">
                  <h5>Milkteas</h5>
                  <h5 class="price">₱149</h5>
                  <p>Delicious milktea flavors to choose from.</p>

                  <label for="flavor">Choose Flavor:</label>
                  <select id="flavor" name="flavor">
                    <option value="original">Mango</option>
                    <option value="strawberry">Strawberry</option>
                    <option value="chocolate">Pandan</option>
                    <option value="chocolate">Ube</option>
                    <option value="strawberry">Chocolate</option>

                  </select>
                  <br>
                  <div class="menu-order-button"><a href="login.php"><button>Add to Cart</button></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>

</html>