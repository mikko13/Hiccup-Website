<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Hiccup - Home</title>
  <link rel="shortcut icon" href="logo_circle.png" type="image/x-icon">
  <link rel="stylesheet" href="index.css" />
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
      <li><a href="#" onclick="scrollToSection('aboutus')">About Us</a></li>
      <li><a href="login.php">Login</a></li>
      </li>
    </ul>
  </nav>
</header>

<body>
  <div class="slogan">
    <p>Where Fusion Flavors Meet</p>
  </div>

  <div class="description">
    <p>Welcome to Hiccup, where fusion flavors come together in a delightful culinary symphony. Nestled in the heart of
      Baliwag City, Hiccup is a gastronomic haven that seamlessly blends diverse culinary traditions, creating a unique
      and unforgettable dining experience. Our chefs artfully combine the best elements from around the world, crafting
      dishes that tantalize the taste buds with unexpected and harmonious fusions.</p>
  </div>

  <div class="pagkain">
    <img src="pagkain.png" />
  </div>

  <div class="secondheader">
    <div class="customers">
      <img src="customers.png" />
    </div>
    <div class="customersdescription">
      "In Every Bite, in Every Sip, Our Tapestry Unfolds: Hiccup Cafe, Uniting Taste-Seekers"
    </div>
  </div>

  <div class="aboutus" id="aboutus">
  <p>- ABOUT US -</p>
</div>

  <div class="firstrowcard">
    <div class="card card-5">
      <div class="card__header">Information</div>
      <div class="text">Hiccup Cafe is located at Baliwag City, Bulacan. It also has a dedicated section on their
        official website that
        provides details about franchise opportunities. This section might include information on how to apply,
        investment requirements,
        and the benefits of becoming a franchisee. They offers coffee, milktea, ice cream and different variety of foods
        like Bacon
        Carbonara, Mongolian Beef Noodles, Crab Rangoon and many more. Based on our research, it is evident that a
        significant number of
        customers express high levels of satisfaction with their experience. The reviews mostly focus on the highly
        accommodating staff,
        the admirable ambiance, and the consistently positive feedback on the quality of both food and beverages served.
        The positive
        sentiment expressed in these reviews reflects a significant appreciation for the overall experience provided by
        Hiccup Cafe.</div>
    </div>

    <div class="card2 card-6">
      <div class="card__header2">Meals</div>
      <div class="text2">Hiccup Cafe's meal selection offers a fusion of traditional and innovative dishes. The rice
        meals showcase
        Filipino influences with options like Sweet & Sour Fish and Tapsilog. Best sellers include Burger Steak and
        Mongolian Beef Noodles.
        The burger and fries section presents a mix of classic and adventurous options, catering to various tastes.
        Chicken wings with
        diverse flavors provide a satisfying savory experience. Personal favorites like Spaghetti and Carbonara add a
        familiar touch to
        the menu.</div>
    </div>
  </div>

  <div class="secondrowcard">
    <div class="card card-5">
      <div class="card__header">Snacks</div>
      <div class="text">The snacks menu at Hiccup Cafe is diverse, ranging from Soft Serve Ice Cream with customizable
        options like
        waffle tuile and waffle crisp to Funcakes and Waffles & Pancakes. The beverage selection includes a variety of
        coffee and latte
        options, milk series, milk teas, and teas. The extensive frappe collection and fruit tea offerings contribute to
        a comprehensive
        and refreshing beverage menu.</div>
    </div>

    <div class="card2 card-6">
      <div class="card__header2">Drinks</div>
      <div class="text">Hiccup Cafe's drinks menu is a highlight, featuring an extensive selection of coffee and latte
        options in T-Cup
        and G-Cup sizes. The Milk Series offers unique soda flavors, and the milk tea selection spans various flavors
        and cup sizes.
        Classic tea choices provide a refreshing alternative. Frappes introduce indulgent frozen beverages with diverse
        flavors, appealing
        to a broad audience.</div>
    </div>
  </div>

  <div class="thirdrowcard">
    <div class="card card-5">
      <div class="card__header">Desserts</div>
      <div class="text">The dessert menu at Hiccup Cafe is a delightful conclusion to the dining experience. Soft serve
        ice cream
        options, including swirls and combinations with waffle tuile or waffle crisp, cater to varied preferences. Ice
        cream boba
        adds a trendy twist, while extra toppings like waffle tuile and waffle crisp allow for customization. Waffles &
        Pancakes
        offer versatility in portion sizes. Fruit teas provide a refreshing and diverse alternative, and the frappe
        selection introduces
        a range of indulgent frozen beverages.</div>
    </div>
  </div>

  <div style="height: 300px;"></div>
</body>

<footer class="footer-container">

  <div class="footer-content">

    <div class="circlelogo">
      <img class="logo-circle-image" src="logo_circle.png">
    </div>

    <div class="text-footer">
      <p>Hiccup - Baliwag City, Bulacan</p>
      <span class="address">764 Benigno S. Aquino Avenue, Poblacion, Baliuag, Philippines</span>
    </div>

  </div>

  <div class="socials-container">
    <a href="https://www.facebook.com/HiccupBaliwagCityBulacan" class="social facebook">
      <svg height="1em" viewBox="0 0 320 512">
        <path
          d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
        </path>
      </svg>
    </a>

    <a href="https://www.instagram.com/hiccupcorp?fbclid=IwAR1pvJFRBIir0WUip2z-H46qHOo2TiZe0ZEptnF1fBl4Twu89tR7mvMN7IU"
      class="social instagram">
      <svg height="1em" viewBox="0 0 448 512">
        <path
          d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
        </path>
      </svg>
    </a>

    <a href="#" class="social twitter">
      <svg height="1em" viewBox="0 0 512 512">
        <path
          d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
        </path>
      </svg>
    </a>

    <a href="#" class="social google-plus">
      <svg height="1em" viewBox="0 0 640 512">
        <path
          d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z">
        </path>
      </svg>
    </a>
  </div>

</footer>

<script>
  function toggleMenu() {
    var menu = document.getElementById("menu");
    if (menu.style.display === "none" || menu.style.display === "") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }

  function scrollToSection(sectionId) {
    var section = document.getElementById(sectionId);
    if (section) {
      section.scrollIntoView({ behavior: "smooth" });
    }
  }
</script>

</html>