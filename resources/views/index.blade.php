<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthCare</title>

    <!-- aos css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- magnific popup css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <i class="fa-solid fa-user-doctor"></i>
    <!-- header section starts  -->

    <header>

        <div class="container">

            <a href="#" class="logo"><span>H</span>ealth<span>C</span>are.</a>

            <nav class="nav">
                <ul>
                    <li><a href="#home">home</a></li>
                    <li><a href="#about">about</a></li>
                    <li><a href="#facility">facility</a></li>
                    <li><a href="#review">review</a></li>
                    <li><a href="#contact">contact</a></li>
                    <li><a href="#post">post</a></li>
                    <!-- <li><a href="./Sign-in&Sign-up.html">Login</a></li> -->
                    <li>
                        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                            @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                @endauth
                            </div>
                            @endif
                        </div>

                    </li>
                </ul>
            </nav>

            <div class="fas fa-bars"></div>

        </div>

    </header>

    <!-- header section ends  -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="container">

            <div class="row min-vh-100 align-items-center text-center text-md-left">

                <div class="col-md-6 pr-md-5" data-aos="zoom-in">
                    <img src="image/Doctors-bro.svg" width="100%" alt="">
                </div>

                <div class="col-md-6 pl-md-5 content" data-aos="fade-left">
                    <h1><span>stay</span> safe, <span>stay</span> healthy.</h1>
                    <h3>caring for you.</h3>
                    <a href="#"><button class="button">learn more</button></a>
                </div>

            </div>

        </div>

    </section>


    <!-- home section ends -->

    <!-- about section start  -->

    <section class="about" id="about">

        <div class="container">

            <div class="row min-vh-100 align-items-center">

                <div class="col-md-6 content" data-aos="fade-right">

                    <div class="box">
                        <h3> <i class="fas fa-ambulance"></i> ambulance services </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, suscipit.</p>
                    </div>

                    <div class="box">
                        <h3> <i class="fas fa-procedures"></i> emergency rooms </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, suscipit.</p>
                    </div>

                    <div class="box">
                        <h3> <i class="fas fa-stethoscope"></i> free check-ups </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, suscipit.</p>
                    </div>

                </div>

                <div class="col-md-6 d-none d-md-block" data-aos="fade-left">
                    <img src="image/Medicine-bro.svg" width="100%" alt="">
                </div>

            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- facility section starts  -->

    <section class="facility" id="facility">

        <div class="container">

            <h1 class="heading"><span>'</span> our facilities <span>'</span></h1>

            <div class="box-container">

                <div class="box" data-aos="zoom-in">
                    <a href="image/1.png" title="our team">
                        <img src="image/1.png" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="image/2.jpg" title="our lab">
                        <img src="image/2.jpg" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="image/3.png" title="emergency rooms">
                        <img src="image/3.png" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="image/4.jpg" title="expert doctors">
                        <img src="image/4.jpg" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="image/5.png" title="expert doctors">
                        <img src="image/5.png" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="image/6.jpg" title="emergency rooms">
                        <img src="image/6.jpg" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="image/7.jpg" title="expert doctors">
                        <img src="image/7.jpg" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="image/8.png" title="emergency rooms">
                        <img src="image/8.png" alt="">
                    </a>
                </div>

                <div class="box" data-aos="zoom-in">
                    <a href="image/9.png" title="enough beds">
                        <img src="image/9.png" alt="">
                    </a>
                </div>

            </div>

        </div>

    </section>

    <!-- facility section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <div class="container">

            <h1 class="heading"><span>'</span> people's review <span>'</span></h1>

            <div class="box-container">

                <div class="box" data-aos="fade-right">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur accusantium error numquam dolore atque. Atque totam ad sint ducimus! Maxime!</p>
                    <h3>someone's name</h3>
                    <span>jan 5, 2021</span>
                    <img src="image/photoOne.jpg" alt="">
                </div>

                <div class="box" data-aos="fade-up">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur accusantium error numquam dolore atque. Atque totam ad sint ducimus! Maxime!</p>
                    <h3>someone's name</h3>
                    <span>jan 7, 2021</span>
                    <img src="image/photoTow.jpg" alt="">
                </div>

                <div class="box" data-aos="fade-left">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur accusantium error numquam dolore atque. Atque totam ad sint ducimus! Maxime!</p>
                    <h3>someone's name</h3>
                    <span>jan 10, 2021</span>
                    <img src="image/photoThree.jfif" alt="">
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends  -->

    <!-- counter section starts  -->

    <section class="counter">

        <div class="container">

            <div class="box-container">

                <div class="box" data-aos="fade-up">
                    <i class="fas fa-hospital"></i>
                    <span>120+</span>
                    <h3>Hospitals</h3>
                </div>

                <div class="box" data-aos="fade-up">
                    <i class="fas fa-users"></i>
                    <span>100+</span>
                    <h3>staff</h3>
                </div>

                <div class="box" data-aos="fade-up">
                    <i class="fas fa-smile"></i>
                    <span>1200+</span>
                    <h3>happy patients</h3>
                </div>

                <div class="box" data-aos="fade-up">
                    <i class="fas fa-procedures"></i>
                    <span>130+</span>
                    <h3>bed facility</h3>
                </div>

            </div>

        </div>

    </section>

    <!-- counter section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <div class="container min-vh-100">

            <div class="row justify-content-center">

                <h1 class="heading"><span>'</span> make an appointment <span>'</span></h1>

                <div class="col-md-10" data-aos="flip-down">

                    <form action={{ url('Patientstore') }} method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="inputBox">
                            <input type="text" placeholder="full name" name="full_name">
                            <input type="number" name="patientPhone" placeholder="phone">
                        </div>

                        <div class="inputBox">
                            <input type="email" name="patientEmail" placeholder="your email">
                            <select name="doc_patient">
                                <option selected>Choose Doctor</option>
                                @foreach($doctors as $doctor)
                                <option value="{{$doctor->id}}">{{$doctor->first_name . ' '.$doctor->last_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="inputBox">
                            <select name="dis_patient" class="form-select form-control form-control-sm" aria-label="Default select example">
                                <option selected>Choose Disease</option>
                                @foreach($diseases as $disease)
                                <option value="{{$disease->id}}">{{$disease->disease_name}}</option>
                                @endforeach
                            </select>

                            <select name="app_patient" class="form-select form-control form-control-sm" aria-label="Default select example">
                                <option selected>Choose Appointment</option>
                                @foreach($appointments as $appointment)
                                <option value="{{$appointment->id}}">{{$appointment->available_appointment_time}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <input name="photo_patient" class="form-control  form-control-sm" type="file" id="formFile">
                        </div>

                        <textarea name="patient_description" id="" cols="30" rows="10" placeholder="message ( optional )"></textarea>

                        <input type="submit" value="make appointment" class="button">

                    </form>

                </div>

            </div>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- post section starts  -->

    <section class="post" id="post">

        <div class="container min-vh-100">

            <h1 class="heading"><span>'</span> out posts <span>'</span></h1>

            <div class="box-container">

                <div class="box" data-aos="fade-right">
                    <img src="image/ourOne.jfif" alt="">
                    <div class="content">
                        <span>jan 5, 2021</span>
                        <a href="#">
                            <h3>post title goes here</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ex porro libero at veniam molestias facere quo necessitatibus ipsum ad?</p>
                        <a href="#"><button class="button">learn more</button></a>
                    </div>
                </div>

                <div class="box" data-aos="fade-up">
                    <img src="image/ourTow.jfif" alt="">
                    <div class="content">
                        <span>jan 5, 2021</span>
                        <a href="#">
                            <h3>post title goes here</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ex porro libero at veniam molestias facere quo necessitatibus ipsum ad?</p>
                        <a href="#"><button class="button">learn more</button></a>
                    </div>
                </div>

                <div class="box" data-aos="fade-left">
                    <img src="image/ourThree.jfif" alt="">
                    <div class="content">
                        <span>jan 5, 2021</span>
                        <a href="#">
                            <h3>post title goes here</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ex porro libero at veniam molestias facere quo necessitatibus ipsum ad?</p>
                        <a href="#"><button class="button">learn more</button></a>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- post section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="container">

            <div class="row">

                <div class="col-md-4" data-aos="fade-right">
                    <a href="#" class="logo"><span>H</span>ealth<span>C</span>are.</a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur nemo porro quasi minima consequuntur dolorum, quas amet in autem id?</p>
                </div>

                <div class="col-md-4 text-center" data-aos="fade-up">
                    <h3>links</h3>
                    <a href="#">home</a>
                    <a href="#">about</a>
                    <a href="#">facility</a>
                    <a href="#">review</a>
                    <a href="#">contact</a>
                    <a href="#">post</a>
                </div>

                <div class="col-md-4 text-center" data-aos="fade-left">
                    <h3>share</h3>
                    <a href="#">facebook</a>
                    <a href="#">twitter</a>
                    <a href="#">instagram</a>
                    <a href="#">github</a>
                </div>

            </div>

        </div>

    </section>

    <!-- footer section ends -->

    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- magnific popup js link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <!-- aos js file cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- custom js link  -->
    <script src="js/main.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            delay: 400
        });
    </script>

</body>

</html>