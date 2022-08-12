<?php
session_start();
echo '<pre>';
print_r($_SESSION['mobile']);
echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Phone Services center</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" type="text/css" href="phone-page.css" /> -->
  </head>
  <body>
    <header>
        <nav>
          <input type="checkbox" id="check">
          <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
          </label>
          <ul>
              <li><a class="active" href="#">Home</a></li>
              <li><a href="#section">Services</a><span></span></li>
              <li><a href="#">Contact </a></li>
          </ul>
        </nav>
    </header>
    <div id="heading"><h1>Kasimu's Phone Services Center</h1></div>
    <section id="section">
      <div id="screen_replacement">
        <h2>SCREEN REPLACEMENT</h2>
        <figure id="screen_section">
            <div id="screens">
              <img src="./phone_page/s9 plus.jpg" alt="samsung S9 Plus" width="300px" />
              <img
                src="./phone_page/Note 20 Ultra.jpg"
                alt="Samsung Note 20 Ultra"
                width="300px"
              />
              <img src="./phone_page/oppo a12.jpg" alt="oppo A12" width="300px" />
              <img src="./phone_page/samsung AO25.jpg" alt="Samsung A025f" width="300px" />
            </div>
        </figure>
        <p>
          If your phone or tablet needs a new screen, here at Kasimu's service
          Center we have the expertise to change screens for most popular brands
          of phones and tablets. The screens that we use are brands of phones
          and tablets. The screens that we use are the highest quality in the
          market, where available we will use genuine screens. We do a full
          suite of quality checks after a repair.
        </p>
      </div>
      <div id="battery_replacement">
        <h2>BATTERY REPLACEMENT</h2>
        <figure id="battery">
            <img src="./phone_page/oppo.jpg" alt="Oppo" width="200px" />
            <img src="./phone_page/iphone.jfif" alt="Iphone" width="200px" />
            <img src="./phone_page/samsung.jfif" alt="samsung" width="200px" />
            <img src="./phone_page/huawei.jfif" alt="Huawei" width="200px" />
        </figure>
        <p>
          If your phone or tablet needs a battery service, we are here to help.
          We use the highest quality batteries in the market, where available we
          will use genuine batteries. Our team wil check your device after
          battery replacement for battery life and charging process.
        </p>
      </div>
      <div class="div">
        <figure>
          <img src="" alt="" />
        </figure>
        <h2>BACK COVER REPLACEMENT</h2>
        <p>
          Here at Kasimu's service center, we are one of the only companies in
          the Juba to offer back glass replacemment Services on iphones. Using
          our specialised laser machine to safely remove the broken glass
          without damaging the wireless charging circuit. We also offer a back
          cover replacement service for most popular phone model like Samsung,
          nokia huawei etc....
        </p>
        <div class="diagnostics">
          <h2>DIAGNOSTICS SERVICE</h2>
          <p>
            If something is wrong with your device but you are not sure what,
            then we have a diagnostic service. Our experinced techicians can
            diagnose and quote for the work required to fix your device.
          </p>
        </div>
      </div>
    </section>
    <footer>
      <p>
        Located in Konyo-Konyo behind Star supermarket, on the same building
        where is star supermarket located. room No.2
      </p>
      Thank you our customers. &copy; 2022 Kasimu's phone center Ltd.
    </footer>
    <style>
      <?php
      require ("css/phone-page.scss");
      ?>
    </style>
  </body>
</html>
