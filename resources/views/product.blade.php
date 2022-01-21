<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YZGen | Product</title>
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
    
  </style>
</head>

<body>

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
  <div class="container p-4 shadow-slideshow" data-aos="zoom-in-down" data-aos-duration="3000">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t39.33118-6/s720x720/258536003_1029541511157836_6934889300951335488_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=4419ee&_nc_eui2=AeEAY5uXWyxIZTd-XuVpvou8gDl1zf4ZqLCAOXXN_hmosEdunuGU9V4VIDICzmwsQhwOIqSOzkAgH27fS0GNz0tp&_nc_ohc=c45MUllEvGwAX-fLVNp&_nc_oc=AQkWzxy9StV06ufAFb7vYlqcZAuymIE10r2DdQJhpj9fTqjXYsXCqC551lKdi9Kd88c&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT-q2La7FWLlaRdK0DE6skwqivcMk7Cd4g12_00RZOaA4A&oe=61E689A8" class="d-block w-100" alt="...">
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
  <div class="p-3" id="product" data-aos="fade-up" data-aos-duration="3000">
    <div class="container my-3">
      <h3 class="text-center mb-3">Product <span class="text-pink">YZGen Store</span></h3>
      <div class="row mt-5">
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

  {{-- All Product --}}
  <div class="p-3" data-aos="fade-up" data-aos-duration="3000">
      <div class="container my-3">
        {{-- SKIN1004 --}}
        <div class="text-center"><h3 class="text-uppercase text-pink">Skin1004 Products</h3></div>
        <div class="d-flex align-content-center justify-content-between text-pink">
            <h6>SKIN1004</h6>
            <h6>All Products</h6>
        </div>
        <div class="row mt-2">
            <div class="owl-carousel owl-theme">
              <div class="item mb-4">
                <div class="card border-0 shadow-slideshow">
                  <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/p960x960/247885236_7042693212423657_5503199710184484376_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeFn5ia3WhisdVtqMiSFogSKNgqmGxCUkio2CqYbEJSSKjMpCtqs626gvRvrtrmnzIJ5Sx321ErW3d7byNBem8e_&_nc_ohc=g9As-mNP1CgAX8cAG37&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT_aaSaIlmwjblWK0wVGWdRIQ7FtnVutOnXWAFrR-Y_esg&oe=61E82DB9" alt="">
                  <div class="card-body">
                    <p>SKIN1004 Madagascar CENTELLA AMPOULE 55ml</p>
                    <p class="text-pink">$ 22.00</p>
                  </div>
                </div>
              </div>
              <!-- Items End -->
              <div class="item mb-4">
                <div class="card border-0 shadow-slideshow">
                  <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/248946307_4344592952274433_3315739539474328532_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeE1VfkwVCyghVPkxiT3m2tsKTUvrDRMRjApNS-sNExGMMM6NV4mpLFJrWyWqkw_gm7QEHYbcRTkOsK9Mtk-d_1I&_nc_ohc=Gh8uboJOBDQAX_kGDYh&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT_w2WHr9Eg04hyCUl77EyopAvpeXiiha29-4V3pMkEhTQ&oe=61E6A208" alt="">
                  <div class="card-body">
                    <p>SKIN1004 Madagascar CENTELLA AMPOULE 30ml</p>
                    <p class="text-pink">$ 14.00</p>
                  </div>
                </div>
              </div>
              <!-- Items End -->
              <div class="item mb-4">
                <div class="card border-0 shadow-slideshow">
                  <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/p960x960/249222464_4682509518472624_503954927422997611_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeGo7107BU8L4Ixme29TIzJBWSwACewoMaBZLAAJ7CgxoLBjbQSz5n0sn3QHdcCzr9ZsghF_13B6wrpgjhtfXGB5&_nc_ohc=dmxua1afYx8AX_8AFej&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT9JM_GtpGVxTjD7bTTqcS2ZFJyFtDZRkgNKWloxCkm3qg&oe=61E726F8" alt="">
                  <div class="card-body">
                    <p>SKIN1004 Madagascar CENTELLA WATERGEL SHEET AMPOULE MASK</p>
                    <p class="text-pink">$ 3.00</p>
                  </div>
                </div>
              </div>
              <!-- Items End -->
              <div class="item mb-4">
                <div class="card border-0 shadow-slideshow">
                  <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/s960x960/249222540_6356174784453730_1566669164600005414_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeHGhrnwtZKF1sjKFPg-Kz0LIHldiwnTYwUgeV2LCdNjBSgqx_WI81-YEA7sDmpRZlZf5H5nMmAwu9QNC3FQz4Re&_nc_ohc=ydrOgW0XFp8AX8ehto_&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT_WExmPmeEqXKSXT2gA9tBEEJhpzFFOUPZJZBHfJZIMQw&oe=61E70BFB" alt="">
                  <div class="card-body">
                    <p>ZOMBIE BEAUTY by SKIN1004 Bloody Peel</p>
                    <p class="text-pink">$ 18.00</p>
                  </div>
                </div>
              </div>
              <!-- Items End -->
              <div class="item mb-4">
                <div class="card border-0 shadow-slideshow">
                  <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/p960x960/249256309_4401875553230209_8475932421272503022_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeHrRaGM07Bb4EXdAvA1ZfE8zM0gH1TKJt7MzSAfVMom3mWydVuQlxlJPIsO4XlRxuPBjeWVE63cuEhg8L6cLMGq&_nc_ohc=4MdLh--Zl8gAX8dO_VW&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT-yU9j77lyPbcAI0yL3zymy0CcbxFZ9vbPLaLPOTBqhGw&oe=61E64D84" alt="">
                  <div class="card-body">
                    <p>SKIN1004 Madagascar CENTELLA TONING TONER 30 ml</p>
                    <p class="text-pink">$ 10.00</p>
                  </div>
                </div>
              </div>
            </div>
        </div>

        {{-- Dearmay --}}
        <div class="text-center"><h3 class="text-uppercase text-pink">Dearmay Products</h3></div>
        <div class="d-flex align-content-center justify-content-between text-pink">
            <h6>Dearmay</h6>
            <h6>All Products</h6>
        </div>
        <div class="row mt-2">
            <div class="owl-carousel owl-theme">
              <div class="item mb-4">
                <div class="card border-0 shadow-slideshow">
                  <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/p960x960/121871657_4651449474926477_3848143865937786554_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeG6gxel7kXUnE_v08aazzoe0WtoKoxIQJzRa2gqjEhAnLZ_r5p1hak3dfqNAP_wElYGmrZfSmO00RS-rpH-SPzf&_nc_ohc=mWU-_C96HSUAX8VFV3-&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8pXLdEJ-XyMGzVplsTLIbe_cYIVvYzqx9Kq3XkYAMyJA&oe=61E5A219" alt="">
                  <div class="card-body">
                    <p>DEARMAY Green Line Roll on Eye Serum</p>
                    <p class="text-pink">$ 16.00</p>
                  </div>
                </div>
              </div>
              <!-- Items End -->
              <div class="item mb-4">
                <div class="card border-0 shadow-slideshow">
                  <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/180555777_3809421819170822_3473348068005120936_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeHLtCG2YApT_AFxh24BSBxbKMo4v5tPeGcoyji_m094Z5Sz33EjPIDmxLAArbRFIOggtRxTG3prYTIifQP6Ig6W&_nc_ohc=e3ooARkX7_EAX_Da5aj&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8DkXHOEPoasctAaGtNT7GsPfWe4A5U7N4ndb4sMHDvZA&oe=61E6A8DA" alt="">
                  <div class="card-body">
                    <p>Dearmay Green Line Miracle Mild Toner</p>
                    <p class="text-pink">$ 21.00</p>
                  </div>
                </div>
              </div>
              <!-- Items End -->
              <div class="item mb-4">
                <div class="card border-0 shadow-slideshow">
                  <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/p960x960/121906960_4556639927739423_8552580500912268925_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeFC2JNYTFjh1Znv7ZLM7WLyxWjsVgG14FPFaOxWAbXgU3HaWiyj16onoPximMVZIScqsPuWJMPRxfbXZohWb2QI&_nc_ohc=M97yqIycMfoAX-fJgOO&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT-Ja8gQ725ls2WfpZbv9bWo_jd_qLHXz0-xnxDRvyHU5A&oe=61E5567A" alt="">
                  <div class="card-body">
                    <p>DEARMAY Fixtay Brush Liner</p>
                    <p class="text-pink">$ 9.00</p>
                  </div>
                </div>
              </div>
              <!-- Items End -->
              <div class="item mb-4">
                <div class="card border-0 shadow-slideshow">
                  <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/182415275_3932522213510399_8607364692644995290_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeEu9B7gZrE-2xpqsUnmDJtJ2iZlQxFnRlHaJmVDEWdGUSFTu24bpOonU_A3LQUDXyvuIVVe9Dv5SGc9yFQynIlI&_nc_ohc=lP00Bmdos6kAX8V-6iC&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT9Wlr5SwraoNgxSBLQdOjwoLL07WLM2IP3ev9N4xA5IXw&oe=61E63BC7" alt="">
                  <div class="card-body">
                    <p>Dearmay Green Line Miracle Mild Serum</p>
                    <p class="text-pink">$ 21.00</p>
                  </div>
                </div>
              </div>
              <!-- Items End -->
              <div class="item mb-4">
                <div class="card border-0 shadow-slideshow">
                  <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/p960x960/118937140_3390025614353018_5536410223269198255_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeFmUacHdsJxAMYTZTyLTsmOd69n-e7z_613r2f57vP_rSeDMlBUGytlAQFOMM7DQburswf8JiCI-3lvhMtmSRi3&_nc_ohc=DrYfFZ-9NdgAX8piMdP&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT-_eP6tpFQSTdkMFjya-uhlCbbQVYajX3FPqRwC_KfFSg&oe=61E728BE" alt="">
                  <div class="card-body">
                    <p>DEARMAY Breeze Matte Lipstick</p>
                    <p class="text-pink">$ 13.00</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        {{-- Meilinda --}}
        {{-- <div class="d-flex align-content-center justify-content-between text-pink">
            <h6>Meilinda</h6>
            <h6>All Products</h6>
        </div>
        <div class="row mt-2">
            <div class="owl-carousel owl-theme">
              <div class="item mb-4">
                <div class="card border-0 shadow-slideshow">
                  <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/p960x960/208743755_4167501263298422_4990427093887264743_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeGlTyG3zOdXUibR2Ig-GGJJfPuu6pwhWw58-67qnCFbDsL00vFiLXN_PdOFB8JRBTV98-Rcj5PgwKbGcrrkB7X2&_nc_ohc=_TodB_mik6sAX-vpYJO&_nc_oc=AQndYh_zOOI12ZALf_DKpQDzQIhu8eyhpepxH18r02T_Z1k8bQB6PVIz9znQ_NXkA4c&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8rpxAuAEcaAg5gFryMmTB7DfFM9SI6WRTAtjV1PZfb3w&oe=61E6B80B" alt="">
                  <div class="card-body">
                    <p>Meilinda VELVET Blending Matte Lip</p>
                    <p class="text-pink">$ 6.00</p>
                  </div>
                </div>
              </div>
              <!-- Items End -->
              <div class="item mb-4">
                <div class="card border-0 shadow-slideshow">
                  <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/180555777_3809421819170822_3473348068005120936_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeHLtCG2YApT_AFxh24BSBxbKMo4v5tPeGcoyji_m094Z5Sz33EjPIDmxLAArbRFIOggtRxTG3prYTIifQP6Ig6W&_nc_ohc=e3ooARkX7_EAX_Da5aj&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8DkXHOEPoasctAaGtNT7GsPfWe4A5U7N4ndb4sMHDvZA&oe=61E6A8DA" alt="">
                  <div class="card-body">
                    <p>Dearmay Green Line Miracle Mild Toner</p>
                    <p class="text-pink">$ 21.00</p>
                  </div>
                </div>
              </div>
              <!-- Items End -->
              <div class="item mb-4">
                <div class="card border-0 shadow-slideshow">
                  <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/p960x960/121906960_4556639927739423_8552580500912268925_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeFC2JNYTFjh1Znv7ZLM7WLyxWjsVgG14FPFaOxWAbXgU3HaWiyj16onoPximMVZIScqsPuWJMPRxfbXZohWb2QI&_nc_ohc=M97yqIycMfoAX-fJgOO&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT-Ja8gQ725ls2WfpZbv9bWo_jd_qLHXz0-xnxDRvyHU5A&oe=61E5567A" alt="">
                  <div class="card-body">
                    <p>DEARMAY Fixtay Brush Liner</p>
                    <p class="text-pink">$ 9.00</p>
                  </div>
                </div>
              </div>
              <!-- Items End -->
              <div class="item mb-4">
                <div class="card border-0 shadow-slideshow">
                  <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/182415275_3932522213510399_8607364692644995290_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeEu9B7gZrE-2xpqsUnmDJtJ2iZlQxFnRlHaJmVDEWdGUSFTu24bpOonU_A3LQUDXyvuIVVe9Dv5SGc9yFQynIlI&_nc_ohc=lP00Bmdos6kAX8V-6iC&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT9Wlr5SwraoNgxSBLQdOjwoLL07WLM2IP3ev9N4xA5IXw&oe=61E63BC7" alt="">
                  <div class="card-body">
                    <p>Dearmay Green Line Miracle Mild Serum</p>
                    <p class="text-pink">$ 21.00</p>
                  </div>
                </div>
              </div>
              <!-- Items End -->
              <div class="item mb-4">
                <div class="card border-0 shadow-slideshow">
                  <img class="card-img-top" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t45.5328-4/p960x960/118937140_3390025614353018_5536410223269198255_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=c48759&_nc_eui2=AeFmUacHdsJxAMYTZTyLTsmOd69n-e7z_613r2f57vP_rSeDMlBUGytlAQFOMM7DQburswf8JiCI-3lvhMtmSRi3&_nc_ohc=DrYfFZ-9NdgAX8piMdP&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT-_eP6tpFQSTdkMFjya-uhlCbbQVYajX3FPqRwC_KfFSg&oe=61E728BE" alt="">
                  <div class="card-body">
                    <p>DEARMAY Breeze Matte Lipstick</p>
                    <p class="text-pink">$ 13.00</p>
                  </div>
                </div>
              </div>
            </div>
        </div> --}}
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