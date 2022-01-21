<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YZGen | Accountant Officer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&family=Noto+Serif+Khmer:wght@200;300;400&family=Sansita:ital,wght@0,400;1,400;1,700;1,800&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&family=Noto+Serif+Khmer:wght@200;300;400&family=Sansita:ital,wght@0,400;1,400;1,700;1,800&display=swap');

        a,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Noto Serif Khmer', serif;
            font-weight: bold;
        }

        .bg-pink {
            background-color: #ED1E7F;
        }

        .text-pink {
            font-family: 'Noto Serif Khmer', serif;
            color: #ED1E7F;
        }

        .header-logo {
            width: 3rem;
        }

        .about-logo {
            width: 2.5rem;
        }

        .contact-map {
            width: 100%;
            height: auto;
            flex: 50%;
        }

        .contact-map iframe {
            width: 100%;
            height: 100%;
        }

        .about-icon {
            width: 1.5rem;
            border: 2px solid #ED1E7F;
            border-radius: 50%;
        }

        .shadow-slideshow {
            content: '';
            box-shadow: 0px 4px 2px #ED1E7F;
            opacity: 1;
            z-index: 0;
        }

        .about-logo-icon {
            width: 24rem;
        }

        .corrent-pic {
            width: 24rem;
        }

    </style>
</head>

<body>

    {{-- Header --}}
    <nav class="navbar navbar-expand-lg bg-pink navbar-dark shadow-lg">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img class="header-logo rounded-circle"
                    src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.6435-9/80050669_117199743100226_7961876245791113216_n.png?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeGPX9TcTwUXRThxuqiLsNYQEnpxbK9xgQ8SenFsr3GBD8gjFSntyGfhISOR5cENi8zBmqF9p1UgJ4KBBI0bOSeJ&_nc_ohc=LTenTQY_4yMAX_EAB-g&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8pWi9yYF1f7jL572dYqfx6FXKdr0szIxpXgVwgI3kX4g&oe=62061D98"
                    alt="">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ route('frontend.homepage') }}" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('frontend.product') }}" class="nav-link active">Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('frontend.corrent') }}" class="nav-link active">Career</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('frontend.aboutus') }}" class="nav-link active">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="p-4 bg-light">
        <div class="container">
            <div class="row d-flex bg-white rounded-3 p-2 shadow-slideshow mb-5">
                <h1 class="text-pink p-2">Job Announcement</h1>
                <hr class="text-pink shadow-slideshow">
                <div class="row d-flex col-md-12 col-lg-12 col-xl-12 mx-auto">
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <div class="list-group shadow-slideshow">
                            <a href="{{ route('frontend.corrent') }}"
                                class="list-group-item list-group-item-action bg-pink text-white">Accountant Officer</a>
                            <a href="{{ route('frontend.corrent-one') }}"
                                class="list-group-item list-group-item-action">Creative Designer (Photography Specialist)</a>
                            <a href="{{ route('frontend.corrent-two') }}"
                                class="list-group-item list-group-item-action">Graphic Designer</a>
                            <a href="{{ route('frontend.corrent-three') }}"
                                class="list-group-item list-group-item-action">IT Officer</a>
                            <a href="{{ route('frontend.corrent-four') }}"
                                class="list-group-item list-group-item-action">Stock Controller </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-3">
                        <div class="text-center justify-content-center">
                            <h4>JOB DESCRIPTION</h4>
                            <h4>Position: Accountant Officer</h4>
                        </div>
                        <br>
                        <div>
                            <h5 class="font-bold">Position Summary</h5>
                            <br>
                            <p>Accounting Assistant responsibilities include managing expense reports and
                                reimbursements, entering financial transactions into our internal databases and
                                reconciling invoices. If you have an Accounting degree and are interested in gaining
                                experience in bookkeeping procedures, we’d like to meet you.</p>
                            <br>
                            <p>Ultimately, you will help our Accounting department run smoothly, ensuring transparency and efficiency in all transactions.</p>
                            <br>
                            <h5>Duties and Responsibilities:</h5>
                            <br>
                            <ul>
                              <li>Reconcile invoices and identify discrepancies</li>
                              <li>Create and update expense reports</li>
                              <li>Process reimbursement forms</li>
                              <li>Prepare bank deposits</li>
                              <li>Enter financial transactions into internal databases</li>
                              <li>Check spreadsheets for accuracy</li>
                              <li>Maintain digital and physical financial records</li>
                              <li>Issue invoices to customers and external partners, as needed</li>
                              <li>Review and file payroll documents</li>
                              <li>Participate in quarterly and annual audits</li>
                            </ul>
                            <br>
                            <h5>Qualifications and Requirements:</h5>
                            <br>
                            <ul>
                              <li>Work experience as an Accounting Assistant or Accounting Clerk</li>
                              <li>Knowledge of basic bookkeeping procedures</li>
                              <li>Familiarity with finance regulations</li>
                              <li>Good math skills and the ability to spot numerical errors</li>
                              <li>Hands-on experience with MS Excel and accounting software (e.g. QuickBooks)</li>
                              <li>Organization skills</li>
                              <li>Ability to handle sensitive, confidential information</li>
                              <li>BSc/Ba in Accounting, Finance or relevant field</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3" data-aos="fade-down-left" data-aos-duration="3000">
                        <img class="w-100 shadow-slideshow" src="../assets/img/corrent-pic.jpg" alt="">
                    </div>
                </div>
            </div>

            {{-- <div class="row d-flex bg-white rounded-3 p-2 shadow-slideshow">
        <h1 class="text-pink">ដំណឹងជ្រើសរើសបុគ្គលិក</h1>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <img class="header-logo rounded-circle" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.6435-9/80050669_117199743100226_7961876245791113216_n.png?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeGPX9TcTwUXRThxuqiLsNYQEnpxbK9xgQ8SenFsr3GBD8gjFSntyGfhISOR5cENi8zBmqF9p1UgJ4KBBI0bOSeJ&_nc_ohc=LTenTQY_4yMAX_EAB-g&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8pWi9yYF1f7jL572dYqfx6FXKdr0szIxpXgVwgI3kX4g&oe=62061D98" alt="">
                    <h4 class="ml-5">ឱកាសការងារ</h4>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="row col-md-12 col-lg-12 col-xl-12 mx-auto d-flex">
                        <div class="col-md-6 col-lg-6 col-xl-6 mx-auto">
                            <img class="w-100" src="../assets/img/corrent-pic.jpg" alt="">
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6 mx-auto">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <img class="header-logo rounded-circle" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.6435-9/80050669_117199743100226_7961876245791113216_n.png?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeGPX9TcTwUXRThxuqiLsNYQEnpxbK9xgQ8SenFsr3GBD8gjFSntyGfhISOR5cENi8zBmqF9p1UgJ4KBBI0bOSeJ&_nc_ohc=LTenTQY_4yMAX_EAB-g&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8pWi9yYF1f7jL572dYqfx6FXKdr0szIxpXgVwgI3kX4g&oe=62061D98" alt="">
                    <h4 class="ml-5">Tap 2</h4>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <img class="header-logo rounded-circle" src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.6435-9/80050669_117199743100226_7961876245791113216_n.png?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeGPX9TcTwUXRThxuqiLsNYQEnpxbK9xgQ8SenFsr3GBD8gjFSntyGfhISOR5cENi8zBmqF9p1UgJ4KBBI0bOSeJ&_nc_ohc=LTenTQY_4yMAX_EAB-g&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8pWi9yYF1f7jL572dYqfx6FXKdr0szIxpXgVwgI3kX4g&oe=62061D98" alt="">
                    <h4 class="ml-5">Tap 3</h4>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
      </div> --}}
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-pink text-dark pt-5 p-4" data-aos="fade-up" data-aos-duration="3000">
        <div class="container text-md-left">
            <div class="row text-md-left text-white">
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-white">About Us</h5>
                    <hr class="mb-4">
                    <p class="text-white">YZ Gen Store mission is to provide Authentic, Quality and Affordable
                        cosmetic products for all Cambodians.
                        YZ Gen Store is also known as YZ GEN Business & Investment Co,.LTD that was incorporated with
                        Ministry of Commerce of Cambodia on 10 July 2019.</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-white">Let Us Help</h5>
                    <hr class="mb-4">
                    <p>
                        <a href="https://g.page/yz-gen-store?share" class="text-white" style="text-decoration: none;">Find</a>
                    </p>
                    <p>
                        <a href="{{ route('frontend.corrent') }}" class="text-white"
                            style="text-decoration: none;">Career</a>
                    </p>
                    <p>
                        <a href="{{ route('frontend.product') }}" class="text-white"
                            style="text-decoration: none;">Product</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Help</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 text-white">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Contact</h5>
                    <hr class="mb-4">
                    <p>
                        <li class="fas fa-home mr-3"></li> #32, St. 330 corner Street 113, Boeng Keng Kong III, Phnom
                        Penh
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
                                    <a href="{{ route('frontend.homepage') }}" class="text-white"><img
                                            class="about-icon"
                                            src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.6435-9/80050669_117199743100226_7961876245791113216_n.png?_nc_cat=109&ccb=1-5&_nc_sid=174925&_nc_eui2=AeGPX9TcTwUXRThxuqiLsNYQEnpxbK9xgQ8SenFsr3GBD8gjFSntyGfhISOR5cENi8zBmqF9p1UgJ4KBBI0bOSeJ&_nc_ohc=LTenTQY_4yMAX_EAB-g&_nc_ht=scontent.fpnh11-1.fna&oh=00_AT8pWi9yYF1f7jL572dYqfx6FXKdr0szIxpXgVwgI3kX4g&oe=62061D98"
                                            alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            // nav:true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });

        AOS.init();
    </script>

</body>

</html>
