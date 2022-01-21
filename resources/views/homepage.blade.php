<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YZGen | HomePage</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    .bg-pink{
      background-color: #ED1E7F;
    }

    .text-pink{
      color: #ED1E7F;
    }
    .header-logo{
      width: 3rem;
    }

    .about-logo{
      width: 1.5rem;
    }

    .contact-map{
      width: 100%;
      height:auto;
      flex: 50%;
    }
    .contact-map iframe{
      width: 100%;
      height: 100%;
    }

    .about-icon{
      width: 1.5rem;
      border: 2px solid #ED1E7F;
      border-radius: 50%;
    }

    .shadow-slideshow{
      content: '';
      box-shadow: 0px 4px 2px #ED1E7F;
      opacity: 1;
      z-index: 0;
    }
    
  </style>
</head>

<body>

  <!-- Header -->
  <nav class="navbar navbar-expand-lg bg-pink navbar-dark shadow-lg">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img class="header-logo rounded-circle" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.6435-9/80050669_117199743100226_7961876245791113216_n.png?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeGPX9TcTwUXRThxuqiLsNYQEnpxbK9xgQ8SenFsr3GBD8gjFSntyGfhISOR5cENi8zBmqF9p1UgJ4KBBI0bOSeJ&_nc_ohc=LTenTQY_4yMAX_EAB-g&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8pWi9yYF1f7jL572dYqfx6FXKdr0szIxpXgVwgI3kX4g&oe=62061D98" alt="">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="{{route('frontend.homepage')}}" class="nav-link active">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{route('frontend.product')}}" class="nav-link active">Product</a>
          </li>
          <li class="nav-item">
            <a href="{{route('frontend.corrent')}}" class="nav-link active">Career</a>
          </li>
          <li class="nav-item">
            <a href="{{route('frontend.aboutus')}}" class="nav-link active">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- SlideShow -->
  <div class="container p-4 shadow-slideshow" data-aos="fade-up" data-aos-duration="3000">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.6435-9/82268399_129892851830915_267585400367742976_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=e3f864&_nc_eui2=AeFvl8OQ9wdyE687kzIfDrysGcLDLewwrdIZwsMt7DCt0kJq7F20eAFi4jj59CkLGx1zBUWIUdHagudYfYo4Wi9B&_nc_ohc=I3hsdomKye8AX9Sm0p7&tn=lURjOCA_cUppxWV4&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT_XE0b4SvF5HdLwEyf-U_Ken0CererHs8tuiEboQ6ZvtQ&oe=620773A5" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.6435-9/82268399_129892851830915_267585400367742976_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=e3f864&_nc_eui2=AeFvl8OQ9wdyE687kzIfDrysGcLDLewwrdIZwsMt7DCt0kJq7F20eAFi4jj59CkLGx1zBUWIUdHagudYfYo4Wi9B&_nc_ohc=I3hsdomKye8AX9Sm0p7&tn=lURjOCA_cUppxWV4&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT_XE0b4SvF5HdLwEyf-U_Ken0CererHs8tuiEboQ6ZvtQ&oe=620773A5" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.6435-9/82268399_129892851830915_267585400367742976_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=e3f864&_nc_eui2=AeFvl8OQ9wdyE687kzIfDrysGcLDLewwrdIZwsMt7DCt0kJq7F20eAFi4jj59CkLGx1zBUWIUdHagudYfYo4Wi9B&_nc_ohc=I3hsdomKye8AX9Sm0p7&tn=lURjOCA_cUppxWV4&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT_XE0b4SvF5HdLwEyf-U_Ken0CererHs8tuiEboQ6ZvtQ&oe=620773A5" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- Product -->
  <div class="p-3" id="product">
    <div class="container my-3">
      <h3 class="text-center mb-3">Product <span class="text-pink">YZGen Store</span></h3>
      <div class="row mt-5"  data-aos="fade-up" data-aos-duration="3000">
        <div class="owl-carousel owl-theme">
          <div class="item mb-4">
            <div class="card border-0 shadow-slideshow">
              <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/p960x960/121871657_4651449474926477_3848143865937786554_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeG6gxel7kXUnE_v08aazzoe0WtoKoxIQJzRa2gqjEhAnLZ_r5p1hak3dfqNAP_wElYGmrZfSmO00RS-rpH-SPzf&_nc_ohc=mWU-_C96HSUAX8VFV3-&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8pXLdEJ-XyMGzVplsTLIbe_cYIVvYzqx9Kq3XkYAMyJA&oe=61E5A219" alt="">
              <div class="card-body">
                <h5>DEARMAY Green Line Roll on Eye Serum</h5>
                <p class="text-pink">$ 16.00</p>
              </div>
            </div>
          </div>
          <!-- Items End -->
          <div class="item mb-4">
            <div class="card border-0 shadow-slideshow">
              <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/180555777_3809421819170822_3473348068005120936_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeHLtCG2YApT_AFxh24BSBxbKMo4v5tPeGcoyji_m094Z5Sz33EjPIDmxLAArbRFIOggtRxTG3prYTIifQP6Ig6W&_nc_ohc=e3ooARkX7_EAX_Da5aj&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8DkXHOEPoasctAaGtNT7GsPfWe4A5U7N4ndb4sMHDvZA&oe=61E6A8DA" alt="">
              <div class="card-body">
                <h5>DEARMAY Green Line Roll on Eye Serum</h5>
                <p class="text-pink">$ 16.00</p>
              </div>
            </div>
          </div>
          <!-- Items End -->
          <div class="item mb-4">
            <div class="card border-0 shadow-slideshow">
              <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/p960x960/121906960_4556639927739423_8552580500912268925_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeFC2JNYTFjh1Znv7ZLM7WLyxWjsVgG14FPFaOxWAbXgU3HaWiyj16onoPximMVZIScqsPuWJMPRxfbXZohWb2QI&_nc_ohc=M97yqIycMfoAX-fJgOO&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT-Ja8gQ725ls2WfpZbv9bWo_jd_qLHXz0-xnxDRvyHU5A&oe=61E5567A" alt="">
              <div class="card-body">
                <h5>DEARMAY Green Line Roll on Eye Serum</h5>
                <p class="text-pink">$ 16.00</p>
              </div>
            </div>
          </div>
          <!-- Items End -->
          <div class="item mb-4">
            <div class="card border-0 shadow-slideshow">
              <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/182415275_3932522213510399_8607364692644995290_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeEu9B7gZrE-2xpqsUnmDJtJ2iZlQxFnRlHaJmVDEWdGUSFTu24bpOonU_A3LQUDXyvuIVVe9Dv5SGc9yFQynIlI&_nc_ohc=lP00Bmdos6kAX8V-6iC&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT9Wlr5SwraoNgxSBLQdOjwoLL07WLM2IP3ev9N4xA5IXw&oe=61E63BC7" alt="">
              <div class="card-body">
                <h5>DEARMAY Green Line Roll on Eye Serum</h5>
                <p class="text-pink">$ 16.00</p>
              </div>
            </div>
          </div>
          <!-- Items End -->
          <div class="item mb-4">
            <div class="card border-0 shadow-slideshow">
              <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/p960x960/118937140_3390025614353018_5536410223269198255_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeFmUacHdsJxAMYTZTyLTsmOd69n-e7z_613r2f57vP_rSeDMlBUGytlAQFOMM7DQburswf8JiCI-3lvhMtmSRi3&_nc_ohc=DrYfFZ-9NdgAX8piMdP&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT-_eP6tpFQSTdkMFjya-uhlCbbQVYajX3FPqRwC_KfFSg&oe=61E728BE" alt="">
              <div class="card-body">
                <h5>DEARMAY Green Line Roll on Eye Serum</h5>
                <p class="text-pink">$ 16.00</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- About Us -->
  <div class="container mb-5" id="about-us">
    <h3 class="text-center mb-3">About Us <span class="text-pink">YZGen Store</span></h3>
    <div class="row"  data-aos="fade-up" data-aos-duration="3000">
      <div class="row p-3 d-flex">
        <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-3 contact-map">
          <iframe class="shadow-slideshow" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.7937348834066!2d104.89214071411239!3d11.566639391788254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095116c1a39dff%3A0xef3ecbe834a627d3!2sYZ%20Gen%20Store!5e0!3m2!1sen!2skh!4v1642169445334!5m2!1sen!2skh" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-3">
          <p class="">
            <img class="about-icon" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.6435-9/80050669_117199743100226_7961876245791113216_n.png?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeGPX9TcTwUXRThxuqiLsNYQEnpxbK9xgQ8SenFsr3GBD8gjFSntyGfhISOR5cENi8zBmqF9p1UgJ4KBBI0bOSeJ&_nc_ohc=LTenTQY_4yMAX_EAB-g&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8pWi9yYF1f7jL572dYqfx6FXKdr0szIxpXgVwgI3kX4g&oe=62061D98" alt=""> YZGen Store <span class="text-pink">( Kampuchea Krom Blvd (128) )</span>
          </p>
          <p>
            <img class="about-icon" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.6435-9/80050669_117199743100226_7961876245791113216_n.png?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeGPX9TcTwUXRThxuqiLsNYQEnpxbK9xgQ8SenFsr3GBD8gjFSntyGfhISOR5cENi8zBmqF9p1UgJ4KBBI0bOSeJ&_nc_ohc=LTenTQY_4yMAX_EAB-g&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8pWi9yYF1f7jL572dYqfx6FXKdr0szIxpXgVwgI3kX4g&oe=62061D98" alt=""> Mini Store <span class="text-pink">( YZ Gen Mini Store Stueng Mean Chey )</span>
          </p>
          <p>
            <img class="about-icon" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.6435-9/80050669_117199743100226_7961876245791113216_n.png?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeGPX9TcTwUXRThxuqiLsNYQEnpxbK9xgQ8SenFsr3GBD8gjFSntyGfhISOR5cENi8zBmqF9p1UgJ4KBBI0bOSeJ&_nc_ohc=LTenTQY_4yMAX_EAB-g&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8pWi9yYF1f7jL572dYqfx6FXKdr0szIxpXgVwgI3kX4g&oe=62061D98" alt=""> Mobile Express 1 <span class="text-pink">( Tasty Restaurant @ Olympia )</span>
          </p>  
          <p>
            <img class="about-icon" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.6435-9/80050669_117199743100226_7961876245791113216_n.png?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeGPX9TcTwUXRThxuqiLsNYQEnpxbK9xgQ8SenFsr3GBD8gjFSntyGfhISOR5cENi8zBmqF9p1UgJ4KBBI0bOSeJ&_nc_ohc=LTenTQY_4yMAX_EAB-g&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8pWi9yYF1f7jL572dYqfx6FXKdr0szIxpXgVwgI3kX4g&oe=62061D98" alt=""> Mobile Express 2 <span class="text-pink">( Caring Heart Daycare Orkide Villa )</span>
          </p>
          <p>
            <img class="about-icon" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.6435-9/80050669_117199743100226_7961876245791113216_n.png?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeGPX9TcTwUXRThxuqiLsNYQEnpxbK9xgQ8SenFsr3GBD8gjFSntyGfhISOR5cENi8zBmqF9p1UgJ4KBBI0bOSeJ&_nc_ohc=LTenTQY_4yMAX_EAB-g&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8pWi9yYF1f7jL572dYqfx6FXKdr0szIxpXgVwgI3kX4g&oe=62061D98" alt=""> Mobile Express 3 <span class="text-pink">(Baby Care Chba Ampov )</span>
          </p>
          <p>
            <img class="about-icon" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.6435-9/80050669_117199743100226_7961876245791113216_n.png?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeGPX9TcTwUXRThxuqiLsNYQEnpxbK9xgQ8SenFsr3GBD8gjFSntyGfhISOR5cENi8zBmqF9p1UgJ4KBBI0bOSeJ&_nc_ohc=LTenTQY_4yMAX_EAB-g&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8pWi9yYF1f7jL572dYqfx6FXKdr0szIxpXgVwgI3kX4g&oe=62061D98" alt=""> Mobile Express 4 <span class="text-pink">( Baby Care Russey Keo )</span>
          </p>
          <p>
            <img class="about-icon" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.6435-9/80050669_117199743100226_7961876245791113216_n.png?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeGPX9TcTwUXRThxuqiLsNYQEnpxbK9xgQ8SenFsr3GBD8gjFSntyGfhISOR5cENi8zBmqF9p1UgJ4KBBI0bOSeJ&_nc_ohc=LTenTQY_4yMAX_EAB-g&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8pWi9yYF1f7jL572dYqfx6FXKdr0szIxpXgVwgI3kX4g&oe=62061D98" alt=""> Mobile Express 5 <span class="text-pink">( Baby Care 6A )</span>
          </p>
            <div class="d-flex align-items-center">
              <a href="https://www.facebook.com/YZGenStore">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Facebook_icon_2013.svg/768px-Facebook_icon_2013.svg.png" class="about-logo mx-4" alt="">
              </a>
              <a href="https://www.instagram.com/yz_gen_store/?hl=en">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1200px-Instagram_logo_2016.svg.png" class="about-logo" alt="">
              </a>
            </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-pink text-dark pt-5 p-4" data-aos="fade-up" data-aos-duration="3000">
    <div class="container text-md-left">
      <div class="row text-md-left text-white">
        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-white">About Us</h5>
          <hr class="mb-4">
          <p class="text-white">YZ Gen Store mission is to provide Authentic, Quality and Affordable cosmetic products for all Cambodians.
            YZ Gen Store is also known as YZ GEN Business & Investment Co,.LTD that was incorporated with Ministry of Commerce of Cambodia on 10 July 2019.</p>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-white">Let Us Help</h5>
          <hr class="mb-4">
          <p>
            <a href="https://g.page/yz-gen-store?share" class="text-white" style="text-decoration: none;">Find</a>
          </p>
          <p>
            <a href="{{route('frontend.corrent')}}" class="text-white" style="text-decoration: none;">Career</a>
          </p>
          <p>
            <a href="{{route('frontend.product')}}" class="text-white" style="text-decoration: none;">Product</a>
          </p>
          <p>
            <a href="#" class="text-white" style="text-decoration: none;">Help</a>
          </p>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 text-white">
          <h5 class="text-uppercase mb-4 font-weight-bold">Contact</h5>
          <hr class="mb-4">
          <p>
            <li class="fas fa-home mr-3"></li> #32, St. 330 corner Street 113, Boeng Keng Kong III, Phnom Penh
          </p>
          <p>
            <li class="fas fa-envelope mr-3"></li> info@yzgencorp.com
          </p>
          <p>
            <li class="fas fa-phone mr-3"></li> +855 93348999
          </p>
        </div>
        <hr class="mb-4">
        <div class="d-flex align-content-center justify-content-between">
          <div class="row d-flex justify-content-center">
            <div class="d-flex">
              <p class="text-white">Copyright 2022 All Rights Reserved By :</p>
              <a href="home" style="text-decoration: none;">
                <strong class="text-white">YZGen Store</strong>
              </a>
            </div>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="text-center">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <a href="{{route('frontend.homepage')}}" class="text-white"><img class="about-icon" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.6435-9/80050669_117199743100226_7961876245791113216_n.png?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeGPX9TcTwUXRThxuqiLsNYQEnpxbK9xgQ8SenFsr3GBD8gjFSntyGfhISOR5cENi8zBmqF9p1UgJ4KBBI0bOSeJ&_nc_ohc=LTenTQY_4yMAX_EAB-g&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8pWi9yYF1f7jL572dYqfx6FXKdr0szIxpXgVwgI3kX4g&oe=62061D98" alt=""></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> --}}
    {{-- <script>
	    var botmanWidget = {
          title: 'YZGen Store',
	        aboutText: 'YZGen',
          aboutLink: 'https://www.facebook.com/YZGenStore',
          mainColor: '#ED1E7F',
          bubbleBackground: '#ED1E7F',
          bubbleAvatarUrl: 'https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.6435-9/80050669_117199743100226_7961876245791113216_n.png?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeHoZPgLP1vJpLBNkVnF8RFrEnpxbK9xgQ8SenFsr3GBD33i4ERC0Ju_BBX5EQmh6F0ql1ncSUuXx_r2id9Lvg04&_nc_ohc=EoQAOh8dFGEAX9sBPSH&_nc_oc=AQnK5-LFJuLjQ9240bN9tcGXeL9V0BkjmCJmR4bPYwRqSQvfZiOqxo1cY1Sj50OIm_M&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8jFOK6aofA_KiO7v2Z_MK-i77mVfYNZTausdwR2P0i5Q&oe=620A1218',
          // placeholderText: 'YZGen',
	        introMessage: "✋ Hi! I'm form ItSolutionStuff.com"
	    };
    </script>
  
  <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script> --}}

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      // nav:true,
      responsive:{
          0:{
              items:2
          },
          600:{
              items:3
          },
          1000:{
              items:5
          }
      }
    });

    AOS.init();
  </script>

</body>

</html>