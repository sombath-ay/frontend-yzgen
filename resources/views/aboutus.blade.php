<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YZGen | About Us</title>
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
      width: 2.5rem;
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
    .about-logo-icon{
      width: 24rem;
    }
  </style>
</head>

<body>

  {{-- Header --}}
  <nav class="navbar navbar-expand-lg bg-pink navbar-dark shadow-lg">
    <div class="container">
      <a href="#" class="navbar-brand" data-aos="zoom-out-up" data-aos-duration="3000">
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

  <section class="p-4 bg-light">
    <div class="container">
      <div class="row d-flex bg-white rounded-3 p-3 shadow-slideshow" data-aos="fade-up" data-aos-duration="3000">
        <div class="col-md-6 col-lg-6 col-xl-5 mx-auto mt-3">
          <h3 class="text-pink">Overview</h3>
          <br>
          <p>YZ Gen Business & Investment Co., LTD was incorporated with Ministry of Commerce of Cambodia on 10 July 2019.
            <br>
            <br>
            with vision to grow and become Asia’s most customer centricity company in cosmetic industry by building
             a strong company culture and stay true with our core values as guidance. 
             <br>
             <br>
            Core values are considered commandments that the organization will try to abide to achieve its mission and vision 
            statement. Most important of all, core values are the principles in which decision making will be base upon, 
            and with great execution will lead the organization to achieve.</p>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-3" data-aos="fade-left" data-aos-duration="3000">
          <div>
            <img class="w-100" src="https://scontent.fpnh20-1.fna.fbcdn.net/v/t1.6435-9/82268399_129892851830915_267585400367742976_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=e3f864&_nc_eui2=AeFqomqyfJukzaL9u54TeW_kGcLDLewwrdIZwsMt7DCt0idSk68qsBu0xdYwIEHcv04f_qtKy6l-dE6GUDhG5gYz&_nc_ohc=I3hsdomKye8AX_PjlbT&_nc_ht=scontent.fpnh20-1.fna&oh=00_AT8tIHFRQy-vg18ZNlQ5sMGNLVWl_AwGiqMO4m1nCR0L2A&oe=620773A5" alt="">
          </div>
          <div class="mt-2">
            <img class="w-100" src="../assets/img/logo_1.png" alt="">
          </div>
        </div>
      </div>
      <div class="row d-flex bg-white rounded-3 p-3 shadow-slideshow mt-3" data-aos="fade-up" data-aos-duration="3000">
        <h3 class="text-pink text-uppercase">Authenticity</h3>
        <div class="col-md-6 col-lg-6 col-xl-5 mx-auto mt-3" data-aos="fade-right" data-aos-duration="3000">
          <img class="w-100" src="https://scontent.fpnh20-1.fna.fbcdn.net/v/t1.6435-9/84052766_136060261214174_789406394775240704_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeE2dc6Jt01OrGksoqJAwKuia9pPTzjUfyxr2k9PONR_LIy4pPNWM9775UKUDTTj7QP37J9dwvcO-JW15Y757Guw&_nc_ohc=bOn9WYbJ1RYAX8XIHF5&tn=bapvcmN6JAp3FtrM&_nc_ht=scontent.fpnh20-1.fna&oh=00_AT8xQuVc1lyoprZEFU97DBl9m-ulqSxnqXOkgNTpDSbTdQ&oe=6207F990" alt="">
        </div>
        <div class="col-md-6 col-lg-6 col-xl-5 mx-auto mt-3" data-aos="fade-left" data-aos-duration="3000">
          <img class="w-100" src="https://scontent.fpnh20-1.fna.fbcdn.net/v/t1.6435-9/84052766_136060261214174_789406394775240704_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeE2dc6Jt01OrGksoqJAwKuia9pPTzjUfyxr2k9PONR_LIy4pPNWM9775UKUDTTj7QP37J9dwvcO-JW15Y757Guw&_nc_ohc=bOn9WYbJ1RYAX8XIHF5&tn=bapvcmN6JAp3FtrM&_nc_ht=scontent.fpnh20-1.fna&oh=00_AT8xQuVc1lyoprZEFU97DBl9m-ulqSxnqXOkgNTpDSbTdQ&oe=6207F990" alt="">
        </div>
      </div>
      <div class="row d-flex bg-white rounded-3 p-3 shadow-slideshow mt-3" data-aos="fade-up" data-aos-duration="3000">
        <div class="col-md-6 col-lg-6 col-xl-5 mx-auto mt-3" data-aos="fade-right" data-aos-duration="3000">
          <img class="w-100" src="../assets/img/logo_1.png" alt="">
        </div>
        <div class="col-md-6 col-lg-6 col-xl-5 mx-auto mt-3">
          <h3 class="text-pink text-uppercase">VISION</h3>
          <br>
          <p>Our vision is to be Asia’s most customer centricity company; to build a brand 
            where people can trust by offering quality assurance products that 
            are affordable to all with <span class="text-pink">excellence interactive customer service.</span></p>
        </div>
      </div>
      <div class="row d-flex bg-white rounded-3 p-3 shadow-slideshow mt-3" data-aos="fade-up" data-aos-duration="3000">
        <div class="col-md-6 col-lg-6 col-xl-5 mx-auto mt-3" data-aos="fade-right" data-aos-duration="3000">
          <h3 class="text-pink text-uppercase">MISSION</h3>
          <img class="w-100" src="../assets/img/logo_2.png" alt="">
        </div>
        <div class="col-md-6 col-lg-6 col-xl-5 mx-auto mt-3" data-aos="fade-left" data-aos-duration="3000">
          <h3 class="text-pink text-uppercase">CORE VALUES OF THE BUSINESS</h3>
          <img class="w-100" src="../assets/img/logo_5.png" alt="">
        </div>
      </div>
      <div class="row d-flex bg-white rounded-3 p-3 shadow-slideshow mt-3" data-aos="fade-up" data-aos-duration="3000">
        <div class="col-md-6 col-lg-6 col-xl-5 mx-auto mt-3" data-aos="fade-right" data-aos-duration="3000">
          <h3 class="text-pink text-uppercase">HERE WE ARE…</h3>
          <img class="w-100" src="../assets/img/logo_3.png" alt="">
        </div>
        <div class="col-md-6 col-lg-6 col-xl-5 mx-auto mt-3" data-aos="fade-left" data-aos-duration="3000">
          <h3 class="text-pink text-uppercase">TARGET CUSTOMER & SEGMENT</h3>
          <img class="w-100" src="../assets/img/logo_4.png" alt="">
        </div>
      </div>
    </div>
  </section>

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