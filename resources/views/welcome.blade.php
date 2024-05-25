<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive zoo website</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <!-- header -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-paw"></i> zoo</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#gallery">gallery</a>
            <a href="#app">app</a>
            <a href="#feature">feature</a>
            <a href="#ticket">ticket</a>
            <a href="#tim">tim</a>
        </nav>

    </header>


    <!-- end -->

    <!-- home -->

    <section class="home" id="home">

        <div class="content">
            <h3>Zoo!</h3>
        </div>
        <div class="text-container">
            <h6>Discover the wonders of nature
                and explore the animal world 
                with us. Join us on an
                unforgettable adventure 
                at the Zoo!</h6>
        </div>
        <div class="wrapper">
            <a href="#" class="learn">learn more</a>
        </div>
    </section>

    <!-- end -->

    <!-- about -->

    <section class="about" id="about">
        
        <style>
            .heading {
                font-size: 80px; 
            } 
            .about {
                background-color: #86A789;
            }

        </style>
        <h2 class="heading">about</h2>
    
        <div class="box-container">
            <div class="image">
                <img src="images/about.png" alt="">
            </div>
    
            <div class="content">
                <h2 class="title">"An enchanting destination where the beauty of nature and 
                    the diversity of living creatures come together. Since its establishment, 
                    the Zoo has been a place that showcases natural wonders and serves as a window 
                    opening to the world of animals for thousands of visitors each year."</h2>
                    </div>
                    </div>
                    <style>
                        .boxijo {
                            font-size: 23px;
                        }
                    </style>
                    <h2 class ="boxijo">"In this amazing Zoo! habitat, there is an extraordinary life. Proudly,
                        Zoo! is home to 25 animals with their own charm and characteristics."</h2>
                </div>
            </div>
    
        </div>
    
    </section>
    
    <!-- end -->

    <!-- gallery -->

    <section class="gallery" id="gallery">

        <h2 class="heading">gallery</h2>

        <div class="swiper gallery-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>ZEBRA || Scientific name: Equus zebra.</h1>
                        <img src="images/zebra.jpg" alt=" ">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>ANOA || Scientific name: Bubalus depressicornis.</h1>
                        <img src="images/anoa.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>ELEPHANT || Scientific name: Elephas maximus.</h1>
                        <img src="images/elephant.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>TIGER || Scientific name: Panthera tigris.</h1>
                        <img src="images/tiger.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>GIRAFFE || Scientific name: Giraffa camelopardalis.</h1>
                        <img src="images/giraffe.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>KOMODO || Scientific name: Varanus komodoensis.</h1>
                        <img src="images/komodo.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>HIPPOPOTAMUS || Scientific name: Hippopotamus amphibius.</h1>
                        <img src="images/hippopotamus.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>DEER || Scientific name: Cervus elaphus.</h1>
                        <img src="images/deer.jpg" alt="">
                    </div>
                </div>
                
                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>LION || Scientific name: Panthera leo.</h1>
                        <img src="images/lion.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>TAPIR || Scientific name: Tapirus</h1>
                        <img src="images/tapir.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>OWL || Scientific name: Strigiformes</h1>
                        <img src="images/owl.jpg" alt=" ">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>FLAMINGO || Scientific name: Phoenicopteridae</h1>
                        <img src="images/flamingo.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>COCKATOO || Scientific name: Cacatuidae</h1>
                        <img src="images/cockatoo.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>WILDBOAR || Scientific name: Sus scrofa.</h1>
                        <img src="images/wildboar.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>CROCODILE || Scientific name: Crocodylus niloticus.</h1>
                        <img src="images/crocodile.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>SNAKE || Scientific name: Serpentes</h1>
                        <img src="images/snake.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>PEACOCK || Scientific name: Pavo cristatus.</h1>
                        <img src="images/peacock.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>KANGAROO || Scientific name: Macropus</h1>
                        <img src="images/kangaroo.jpg" alt="">
                    </div>
                </div>
                
                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>KOOKABURRA || Scientific name: Dacelo novaeguineae.</h1>
                        <img src="images/kookaburra.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <h1>ORANGUTAN || Scientific name: Pongo pygmaeus.</h1>
                        <img src="images/orangutan.jpg" alt="">
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- end -->

    <!-- intro -->

    <section id="app" class="app">
        {{-- <h1>Introducing Our App </h1> --}}

        <div class="row">
          <div class="content">
            <h1>Introducing Our App </h1>

            <h3>ZOOPEDIA</h3>
            <p>
                Zoopedia is an application powered by Zoo! as a platform for information and online ticket purchases. <br> <br>

                Through the integration of modern technology, Zoopedia has emerged as a user-friendly solution, simplifying the process of exploring Zoo! experiences and facilitating seamless ticket purchases at the touch of a screen.
            </p>
          </div>
          <div class="intro-img">
            <img src="./images/zoopedia.png" />
          </div>
        </div>
      </section>

    <!-- end -->

    <!-- animals -->
    <section class="feature" id="feature">
        <div class="box-container">

            <div class="box">
                <img src="images/hijau.jpg" alt="">
                <div class="content">
                    <h3>A control center ensuring a comprehensive and organized user experience in one easily accessible interface.
                        Here, users can view login information, store status, shopping cart details, purchased tickets, and 
                        informative content.</h3>
                </div>
            </div>

            <div class="box">
                <img src="images/hiuser.png" alt="">
                <div class="content">
                    <a href="#feature2" class="details">see details</a>
                </div>
            </div>
            <div class="box">
                <img src="images/mamalia.png" alt="">
                <div class="content">
                    <a href="#feature2" class="details">see details</a>
                </div>
            </div>

            <div class="box">
                <img src="images/hijau.jpg" alt="">
                <div class="content">
                    <h3>A page displaying a complete list and details of various animals at the Zoo!
                        Users can explore species, descriptions, interesting facts, and images that enrich 
                        their knowledge of the diversity of wildlife at the zoo!</h3>
                </div>
            </div>
        </div>
     
        <div class="content">
            <h4 class="title"></h4>
        </div>
        <style>
        </style>
            <div class="content">
                <a center href="#feature2" class="bts">EXPLORE APP</a>
            </div>
    </section>

    <!-- end -->

    <!-- banner -->

    <!-- pagge 5 section start -->
    <section id="feature2" class="feature2">
        {{-- <div class="outer-box"> --}}
            <div class="container">
            <div class="inner-box">
                <div class="row">
                  <div class="feature2-card">
                    <img src="./images/shop.png"/>
                    <img src="./images/mycart.png"/>
                    <img src="./images/myticket.png"/>
                </div>
                <p>
                    Users can easily purchase tickets through the shop feature, allowing ticket additions to the cart.
                    Users can also edit the cart contents before making a purchase.
                    Once the transaction is complete, this page displays the list of purchased tickets,
                    facilitating tracking and management of owned tickets.
                  </p>
            </div>
        </div>
          {{-- </div> --}}

      </section>
      <!-- menu section end -->

    <!-- end -->

    <!-- Ticket -->
    <section class="ticket" id="ticket">
        <h2 class="heading">ticket</h2>

        <div class="kotak1">
            <h1>NEW TICKET DESIGN</h1> 
            <div class="box">
                <img src="images/ticket.png" class="tiketcuy" alt="">
            </div>
            <div class="tulisan">
                <img src="images/tulisan.png" class="gatau" alt="">
            </div>

        </div>
    </section>
    <!-- end -->

    <!-- tim -->

    

    <section class="tim" id="tim">
        <div class="container-fluid">
            <div class="row">
                <h2>tim zoo!<br><p class="top-text">Behind the success of Zoo!, there is a team with exceptional commitment.</p>
                </h2>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="images/Syahid.jpg" alt="">
                    <div class="content">
                        <h3>Syahid Ashabul Fikri</h3>
                        <p>3337220006</p>
                    </div>
                </div>
                        
                <div class="box">
                    <img src="images/ainun.jpg" alt="">
                    <div class="content">
                        <h3>Ainun Najwa</h3>
                        <p>3337220010</p>
                    </div>
                </div>
                        
                <div class="box">
                    <img src="images/nur.jpg" alt="">
                    <div class="content">
                        <h3>Nur Rohmah Risqiani</h3>
                        <p>3337220014</p>
                    </div>
                </div>
                        
                <div class="box">
                    <img src="images/Dicky.jpg" alt="">
                    <div class="content">
                        <h3>Dicky Aryadi</h3>
                        <p>3337220015</p>
                    </div>
                </div>  
                <div class="box">
                    <img src="images/Ridho.jpg" alt="">
                    <div class="content">
                        <h3>Ridho Abdul Aziz</h3>
                        <p>3337220039</p>
                    </div>
                </div>  
                <div class="box">
                    <img src="images/Dzaki.jpg" alt="">
                    <div class="content">
                        <h3>M Dzaky Al jabbar</h3>
                        <p>3337220043</p>
                    </div>
                </div>  
                <div class="box">
                    <img src="images/Fina.jpg" alt="">
                    <div class="content">
                        <h3>Fina Febrianti</h3>
                        <p>3337220061</p>
                    </div>
                </div>  
                <div class="box">
                    <img src="images/kucing.jpg" alt="">
                    <div class="content">
                        <h3>Dalilah Nur Khaila</h3>
                        <p>3337220070</p>
                    </div>
                </div>  
                <div class="box">
                    <img src="images/elisa.jpg" alt="">
                    <div class="content">
                        <h3>Elisa Febriyani</h3>
                        <p>3337220074</p>
                    </div>
                </div>  
                <div class="box">
                    <img src="images/Raihan.jpg" alt="">
                    <div class="content">
                        <h3>M Raihan Ramadansyah</h3>
                        <p>3337220076</p>
                    </div>
                </div>  
                <div class="box">
                    <img src="images/kucing.jpg" alt="">
                    <div class="content">
                        <h3>Laveno Lusiadi</h3>
                        <p>3337220077</p>
                    </div>
                </div>  
                <div class="box">
                    <img src="images/oktaa.jpg" alt="">
                    <div class="content">
                        <h3>Hikayati Oktaviyani</h3>
                        <p>3337220088</p>
                    </div>
                </div>
            </div>  
            <div class="gatau justify-content-around">
                <div class="list-title justify-content-center">
                    <h3>Zoo!</h3>
                </div>
                <div class="row justify-content-around">
                    <div class="col-3">
                        <p>Syahid Ashabul Fikri</p> 
                        <p>Ainun Najwa</p>
                        <p>Nur Rohmah Risqiani</p>
                    </div>
                    <div class="col-3">
                        <p>Dicky Aryadi</p> 
                        <p>Ridho Abdul Aziz</p>
                        <p>M Dzaky Aljabbar</p>
                    </div>
                    <div class="col-3">
                        <p>Fina Febrianti</p> 
                        <p>Dalilah Nur Khaila</p>
                        <p>Elliza Febriyani</p>
                    </div>
                    <div class="col-3"> 
                        <p>Laveno Lusiadi</p>
                        <p>M Raihan Ramadansyah</p>
                        <p>Hikayati Oktaviyani</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- end -->


    <script src="{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
</body>
</html>