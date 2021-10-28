
<?php 
include '../website-backend/config.php';
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Gir Wildlife Sanctuary</title>
  </head>

  <body onload="preloader(); slider()">
    <div id="loading"></div>

    <div class="container">
      <div class="slider">
        <div class="slide current"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
      </div>
      <header class="header row">
        <div class="header__logo--box">
          <img src="resources/images/logo2.png" alt="grey-logo" class="header__logo" />
        </div>
        <nav class="nav">
          <ul class="nav__meanu">
            <li class="nav__item">
              <a href="#home" class="nav__link">Home</a>
            </li>
            <li class="nav__item">
              <a href="#tourplan"  class="nav__link">Tour Plan</a>
            </li>
            <li class="nav__item">
              <a href="../website-backend/login.php" class="nav__link" target="_blank">Shopping</a>
            </li>
            <li class="nav__item">
              <a href="../website-backend/register.php" class="nav__link" target="_blank">Sign Up</a>
            </li>
        </nav>
      </header>
    </div>
    <section class="section" id="#home">
      <div class="content">
        <div class="content__heading">
          <h1 class="content__heading--h1 primary-h1">
            Gir Wildlife Sanctuary
          </h1>
        </div>
        <div class="content__text">
          <p class="content__text--detail para">
            Gir National Park and Gir Wildlife Sanctuary, also known as Sasan
            Gir, is a forest, national park, and wildlife sanctuary near Talala
            Gir in Gujarat, India. It is located 43 km (27 mi) north-east of
            Somnath, 65 km (40 mi) south-east of Junagadh and 60 km (37 mi)
            south-west of Amreli. It was established in 1965 in the erstwhile
            Nawab of Junagarh's private hunting area, with a total area of 1,412
            km2 (545 sq mi), of which 258 km2 (100 sq mi) is fully protected as
            national park and 1,153 km2 (445 sq mi) as wildlife sanctuary.It is
            part of the Khathiar-Gir dry deciduous forests ecoregion.<br /><br />
            The count of 2,375 distinct fauna species of Gir includes about 38
            species of mammals, around 300 species of birds, 37 species of
            reptiles and more than 2,000 species of insects. The carnivores
            group mainly comprises the Asiatic lion, Indian leopard, jungle cat,
            striped hyena, golden jackal, Bengal fox,Indian gray mongoose and
            ruddy mongoose, and honey badger. Asiatic wildcat and rusty-spotted
            cat occur, but are rarely seen.
            <br /><br />
            The main herbivores of Gir are chital, nilgai, sambar, four-horned
            antelope, chinkara and wild boar. Blackbucks from the surrounding
            area are sometimes seen in the sanctuary.Among the smaller mammals,
            porcupine and hare are common, but the pangolin is rare.
            <br /><br />
            The reptiles are represented by the mugger crocodile,Indian cobra,
            tortoise and monitor lizard which inhabit the sanctuary's bodies of
            water. Snakes are found in the bush and forest. Pythons are sighted
            at times along the stream banks. Gir has been used by the Gujarat
            State Forest Department which formed the Indian Crocodile
            Conservation Project in 1977 and released close to 1000 marsh
            crocodiles into Lake Kamaleshwar and other small bodies of water in
            and around Gir.
            <br /><br />
            The plentiful avifauna population has more than 300 species of
            birds, most of which are resident. The scavenger group of birds has
            6 recorded species of vultures. Some of the typical species of Gir
            include crested serpent eagle, endangered Bonelli's eagle,
            changeable hawk-eagle, brown fish owl, Indian eagle-owl, rock
            bush-quail, Indian peafowl, brown-capped pygmy woodpecker,
            black-headed oriole, crested treeswift and Indian pitta. The Indian
            grey hornbill was not found from the last census of 2001.
          </p>
        </div>
        <div class="content__gallery">
          <figure class="content__gallery--item content__gallery--item-1">
            <img src="resources/images/gallery1.png" alt="" srcset="" class="content__gallery--img" />
          </figure>
          <figure class="content__gallery--item content__gallery--item-2">
            <img src="resources/images/gallery2.png" alt="" srcset="" class="content__gallery--img" />
          </figure>
          <figure class="content__gallery--item content__gallery--item-3">
            <img src="resources/images/gallery3.png" alt="" srcset="" class="content__gallery--img" />
          </figure>
          <figure class="content__gallery--item content__gallery--item-4">
            <img src="resources/images/gallery4.png" alt="" srcset="" class="content__gallery--img" />
          </figure>
          <figure class="content__gallery--item content__gallery--item-5">
            <img src="resources/images/gallery5.png" alt="" srcset="" class="content__gallery--img" />
          </figure>
          <figure class="content__gallery--item content__gallery--item-6">
            <img src="resources/images/gallery6.png" alt="" srcset="" class="content__gallery--img" />
          </figure>
          <figure class="content__gallery--item content__gallery--item-7">
            <img src="resources/images/gallery7.png" alt="" srcset="" class="content__gallery--img" />
          </figure>
          <figure class="content__gallery--item content__gallery--item-8">
            <img src="resources/images/gallery8.png" alt="" srcset="" class="content__gallery--img" />
          </figure>
          <figure class="content__gallery--item content__gallery--item-9">
            <img src="resources/images/gallery14.png" alt="" srcset="" class="content__gallery--img" />
          </figure>
          <figure class="content__gallery--item content__gallery--item-10">
            <img src="resources/images/gallery9.png" alt="" srcset="" class="content__gallery--img" />
          </figure>
          <figure class="content__gallery--item content__gallery--item-11">
            <img src="resources/images/gallery15.png" alt="" srcset="" class="content__gallery--img" />
          </figure>
          <figure class="content__gallery--item content__gallery--item-12">
            <img src="resources/images/gallery11.png" alt="" srcset="" class="content__gallery--img" />
          </figure>
          <figure class="content__gallery--item content__gallery--item-13">
            <img src="resources/images/gallery12.png" alt="" srcset="" class="content__gallery--img" />
          </figure>
          <figure class="content__gallery--item content__gallery--item-14">
            <img src="resources/images/gallery13.png" alt="" srcset="" class="content__gallery--img" />
          </figure>
        </div>
      </div>
      </div>
    </section>
    <section class="tour" id="#tourplan">
      <h1 class="tour__heading primary-h1">Gir Tour Packages</h1>
      <div class="tour__box tour__box-1">
        <img src="resources/images/Saputara.jpg" alt="hello" class="tour__box--img">
        <div class="tour__box--head">Incredible Gujarat<span><i class="fas fa-rupee-sign">28,500</i></span></div>
        <div class="tour__box--detail"><i class="fas fa-map-marked-alt"><span>Saputara</span></i>
          <i class="fas fa-calendar-day"><span>7N/6D</span></i>
        </div>
        <div class="tour__box--icon">
          <i class="fas fa-hotel"><span>Hotels</span></i>
          <i class="fas fa-car-alt"><span>Transfers</span></i>
          <i class="fas fa-hiking"><span>Activities</span></i>
        </div>
        <a href="../website-backend/booking.php" name="submit1" target="_blank" class="tour__box--btn">Book Now</a>
      </div>
      <div class="tour__box tour__box-2">
        <img src="resources/images/Explore-gujarat.jpg" alt="hello" class="tour__box--img">
        <div class="tour__box--head">Explore Gujarat<span><i class="fas fa-rupee-sign">32,200</i></span></div>
        <div class="tour__box--detail"><i class="fas fa-map-marked-alt"><span> Sasan, Diu & Gir</span></i>
          <i class="fas fa-calendar-day"><span>9N/10D</span></i>
        </div>
        <div class="tour__box--icon">
          <i class="fas fa-hotel"><span>Hotels</span></i>
          <i class="fas fa-car-alt"><span>Transfers</span></i>
          <i class="fas fa-hiking"><span>Activities</span></i>
        </div>
        <a href="../website-backend/booking.php" name="submit1" target="_blank" class="tour__box--btn">Book Now</a>
      </div>
      <div class="tour__box tour__box-3">
        <img src="resources/images/Gujarat-temples.jpg" alt="hello" class="tour__box--img">
        <div class="tour__box--head">Gujarat Temples<span><i class="fas fa-rupee-sign">10,500</i></span></div>
        <div class="tour__box--detail"><i class="fas fa-map-marked-alt"><span> All Temples</span></i>
          <i class="fas fa-calendar-day"><span>1N/2D</span></i>
        </div>
        <div class="tour__box--icon">
          <i class="fas fa-hotel"><span>Hotels</span></i>
          <i class="fas fa-car-alt"><span>Transfers</span></i>
          <i class="fas fa-hiking"><span>Activities</span></i>
        </div>
        <a href="../website-backend/booking.php" name="submit1" target="_blank" class="tour__box--btn">Book Now</a>
      </div>
      <div class="tour__box tour__box-4">
        <img src="resources/images/finest-Gujarat.jpg" alt="hello" class="tour__box--img">
        <div class="tour__box--head">Finest Gujarat<span><i class="fas fa-rupee-sign">35,500</i></span></div>
        <div class="tour__box--detail"><i class="fas fa-map-marked-alt"><span>Explore All Places</span></i>
          <i class="fas fa-calendar-day"><span>7N/8D</span></i>
        </div>
        <div class="tour__box--icon">
          <i class="fas fa-hotel"><span>Hotels</span></i>
          <i class="fas fa-car-alt"><span>Transfers</span></i>
          <i class="fas fa-hiking"><span>Activities</span></i>
        </div>
        <a href="../website-backend/booking.php" name="submit1" target="_blank" class="tour__box--btn">Book Now</a>
      </div>
      <div class="tour__box tour__box-5">
        <img src="resources/images/Glorious-Wildlife.jpg" alt="hello" class="tour__box--img">
        <div class="tour__box--head">Glorious Wildlife<span><i class="fas fa-rupee-sign">5,500</i></span></div>
        <div class="tour__box--detail"><i class="fas fa-map-marked-alt"><span>Explore Jeep Ride </span></i>
          <i class="fas fa-calendar-day"><span>1D</span></i>
        </div>
        <div class="tour__box--icon">
          <i class="fas fa-hotel"><span>Hotels</span></i>
          <i class="fas fa-car-alt"><span>Transfers</span></i>
          <i class="fas fa-hiking"><span>Activities</span></i>
        </div>
        <a href="../website-backend/booking.php" name="submit1" target="_blank" class="tour__box--btn">Book Now</a>
            </div>
      <div class="tour__box tour__box-6">
        <img src="resources/images/national-park.jpg" alt="hello" class="tour__box--img">
        <div class="tour__box--head">Gir National Park<span><i class="fas fa-rupee-sign">10,500</i></span></div>
        <div class="tour__box--detail"><i class="fas fa-map-marked-alt"><span>Sasan Gir</span></i>
          <i class="fas fa-calendar-day"><span>2N/3D</span></i>
        </div>
        <div class="tour__box--icon">
          <i class="fas fa-hotel"><span>Hotels</span></i>
          <i class="fas fa-car-alt"><span>Transfers</span></i>
          <i class="fas fa-hiking"><span>Activities</span></i>
        </div>
        <a href="../website-backend/booking.php" name="submit1" target="_blank" class="tour__box--btn">Book Now</a>
      </div>
      <div class="tour__box tour__box-7">
        <img src="resources/images/sasan-safari.jpg" alt="hello" class="tour__box--img">
        <div class="tour__box--head">Safari Ride<span><i class="fas fa-rupee-sign">15,300</i></span></div>
        <div class="tour__box--detail"><i class="fas fa-map-marked-alt"><span>Sasan Gir</span></i>
          <i class="fas fa-calendar-day"><span>2N/3D</span></i>
        </div>
        <div class="tour__box--icon">
          <i class="fas fa-hotel tour__box--icon"><span>Hotels</span></i>
          <i class="fas fa-car-alt tour__box--icon"><span>Transfers</span></i>
          <i class="fas fa-hiking tour__box--icon"><span>Activities</span></i>
        </div>
        <a href="../website-backend/booking.php" name="submit1" class="tour__box--btn">Book Now</a>
      </div>
      <a href="https://www.makemytrip.com/holidays-india/sasan_gir-travel-packages.html"
        class="tour__box--btn tour__box--a margin" target="_blank">
        <p> For More
          Packages</p>
      </a>
    </section>
    <footer class="foot">
      <div class="footer">
        <div class="footer__links">
          <h1 class="primary-h1 footer__links--heading">Important Links</h1>
          <ul>
            <li><a href="https://www.gujarattourism.com/saurashtra/amreli/ambardi-safari-park.html" class="link">Ambardi
                Safari Park </a></li>
            <li><a href="https://www.girnationalpark.in/devalia-safari-park-sasan-gir.html" class="link">Devalia Safari
                Park</a></li>
            <li><a href="https://www.gujarattourism.com/central-zone/ahmedabad/nalsarovar-bird-sanctuary1.html"
                class="link">Nalsarovar Bird Sanctuary</a></li>
            <li><a href="https://www.girnationalpark.in/gujarat-tourism.html" class="link">Gujarat Tourism</a></li>
          </ul>
        </div>
        <div class="footer__map">
          <h1 class="primary-h1 footer__links--heading footer__links--heading--1">Location</h1>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.5855162594135!2d70.59623161476583!3d21.168887085922627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be2b73807379f17%3A0x811be3f30669f920!2sGir%20National%20Park!5e0!3m2!1sen!2sin!4v1633343465098!5m2!1sen!2sin"
            width="500" height="300" style="border: 0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="footer__contact ">
          <h1 class="primary-h1 footer__links--heading footer__links--heading--2">Contact Us</h1>
          <ul>
            <li><i class="fas fa-phone fa-rotate-90"></i><a class="link" href="tel:9315517530">+91-9315517530</a></li>
            <li><i class="fas fa-phone fa-rotate-90"></i><a class="link" href="tel:8826678881">+91-8826678881</a></li>
            <li><i class="fas fa-phone fa-rotate-90"></i><a class="link" href="tel:45586430">+011-45586430</a></li>
          </ul>
          <div class="footer__social">
            <a href="https://www.facebook.com/girnationalparkindia" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/thegirforest/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/gir_park?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>
      <div class="foot__copyright">
        <p class="para">
          This is a Registered Gir Wildlife Sanctuary under the name of "GWS" which organizes Gir
          Packages & Jeep Safari Packages.</p>
        <p class="para">
          Copyright 2021 © Gir National Park All rights reserved.
        </p>
      </div>
    </footer>
    <script>
      var loader = document.getElementById('loading');
       function preloader(){
        loader.style.display='none';
      }
    </script>
    <script src="js/sliderImage.js"></script>
  </body>
</html>