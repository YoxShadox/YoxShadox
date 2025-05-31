<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <style>
        body {
            background: #1f1e1e;
            color: #ededed;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        .logo {
            width: 10rem;
            height: 6rem;
        }

        .logo:hover {
            transform: scale(1.1);
            transition: transform 0.3s;
        }

        .navbar {
            background-color: #1f1e1e;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-size: 1.3rem;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #00eeff;
        }

        .home-sci a i {
            font-size: 2rem;
            margin: 0 10px;
            color: #00eeff;
            transition: transform 0.3s, color 0.3s;
        }

        .home-sci a i:hover {
            transform: scale(1.2);
            color: #fff;
        }

        .btn-box,
        .btn-box2,
        .read {
            background-color: #00eeff;
            color: #000;
            padding: 10px 20px;
            border: none;
            text-decoration: none;
            display: inline-block;
            border-radius: 30px;
            transition: box-shadow 0.3s, transform 0.3s;
        }

        .btn-box:hover,
        .btn-box2:hover,
        .read:hover {
            box-shadow: 0 0 10px #00eeff, 0 0 20px #00eeff;
            transform: translateY(-3px);
        }

        .photo,
        .photo2 {
            width: 100%;
            border-radius: 1rem;
            box-shadow: 0 0 20px #00eeff;
        }

        .progress-bar {
            background-color: #00eeff;
        }

        @keyframes slideIn {
            0% {
                transform: translateY(50px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .animated {
            animation: slideIn 1s ease-in-out;
        }

        @media (max-width: 768px) {
            .home-content h1 {
                font-size: 2rem;
            }

            .home-content p {
                font-size: 1rem;
            }

            .photo {
                width: 80%;
                margin: 0 auto;
            }

            .about-text h2 {
                font-size: 2rem;
            }

            .about-text p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top p-0 m-0">
        <div class="container">
            <a class="navbar-brand " href="#"><img src="logo1.png" class="img-fluid logo" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto pt-3">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#service">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section2">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="projects.html">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="pt-5">
        <div class="container text-center col-md-10">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3 class="animated">Hello, It's Me</h3>
                    <h1 class="animated">Yash Prajapati</h1>
                    <h3 class="animated">And I'm a <span id="typed-text"></span></h3>
                    <p class="animated">Web design creates the visual layout, frontend development builds it with HTML,
                        CSS and JavaScript, and UI/UX design ensures it's user-friendly and intuitive.</p>
                    <div class="home-sci animated">
                        <a href="https://www.facebook.com/share/khmkdoLLoPVR2Ycw/"><i
                                class='bx bxl-facebook-circle'></i></a>
                        <a href="https://www.instagram.com/yashprajapati_01/profilecard/?igsh=NnpxYmltMHQ0enYx"><i
                                class='bx bxl-instagram'></i></a>
                        <a href="https://github.com/YoxShadox"><i class='bx bxl-github'></i></a>
                        <a href="https://www.linkedin.com/in/yox-shadox"><i class='bx bxl-linkedin'></i></a>
                    </div>
                    <a href="resume-perfect-1.pdf" class="btn-box animated mt-5">Resume..</a>
                </div>
                <div class="col-md-4 pt-3">
                    <img src="photo2.jpeg" alt="photo" class="photo animated rounded-circle">
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="d-flex align-items-center justify-content-center py-5">
        <div class="container text-center">
            <div class="mx-auto">
                <h1 class="animated">About <span>Me</span></h1>
                <p class="animated p-4">I am a passionate UI/UX designer, web developer, and frontend developer
                    dedicated to crafting seamless and visually engaging digital experiences. With a strong
                    foundation in HTML, CSS, JavaScript, and modern frameworks, I specialize in building responsive,
                    user-centric interfaces that not only look great but also function flawlessly across all
                    devices.

                    My design philosophy centers around usability, accessibility, and aesthetics. I thrive on
                    turning complex problems into intuitive and elegant solutions, ensuring every user interaction
                    feels natural and impactful.

                    In addition to my work in tech, I am also a devoted teacher. I find immense joy in sharing
                    knowledge, mentoring aspiring developers and designers, and creating educational content that
                    makes learning web technologies both fun and accessible. My mission is to inspire the next
                    generation of creators to explore, build, and innovate with confidence.

                    Whether I’m coding a feature, designing a layout, or teaching a class, I bring creativity,
                    precision, and enthusiasm to everything I do.
                    ...</p>
                <a href="#" class="btn-box2 animated">More About Me</a>
            </div>
        </div>
    </section>

    <section id="service" class="bg-dark text-white py-5">
        <div class="container text-center">
            <h1 class="sub-title animated">My <span>Services</span></h1>
            <div class="row">
                <div class="col-md-4 pt-3">
                    <i class='bx bx-code' style='color: #00eeff; font-size: 3rem;'></i>
                    <h2>Web Development</h2>
                    <p>Creating responsive and dynamic websites using HTML, CSS, JavaScript, and frameworks.</p>
                    <a href="#" class="read">Learn More</a>
                </div>
                <div class="col-md-4 pt-3">
                    <i class='bx bx-crop' style='color: #00eeff; font-size: 3rem;'></i>
                    <h2>UI/UX Design</h2>
                    <p>Designing user interfaces that provide seamless and engaging user experiences.</p>
                    <a href="#" class="read">Learn More</a>
                </div>
                <div class="col-md-4 pt-3">
                    <i class='bx bxl-apple' style='color: #00eeff; font-size: 3rem;'></i>
                    <h2>Responsive Design</h2>
                    <p>Ensuring websites are mobile-friendly and function perfectly on all screen sizes.</p>
                    <a href="#" class="read">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <section id="section2" class="py-5">
        <div class="container-fluid text-center">
            <h1 class="text-center animated">My <span>Skills</span></h1>
            <div class="row justify-content-center g-5">
                <div class="col-md-4">
                    <h3 class="text-center">Technical Skills</h3>
                    <div class="mb-3">
                        <label>UI/UX</label>
                        <div class="progress">
                            <div class="progress-bar" style="width: 80%">80%</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Html,Css,JavaScript</label>
                        <div class="progress">
                            <div class="progress-bar" style="width: 80%">80%</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Bootstrap</label>
                        <div class="progress">
                            <div class="progress-bar" style="width: 75%">75%</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>PHP</label>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%">50%</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>C/C++</label>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%">40%</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>React</label>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%">40%</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="text-center">Professional Skills</h3>
                    <div class="mb-3">
                        <label>Teaching</label>
                        <div class="progress">
                            <div class="progress-bar" style="width: 80%">80%</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Creativity</label>
                        <div class="progress">
                            <div class="progress-bar" style="width: 80%">80%</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Communication</label>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%">70%</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Problem Solving</label>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%">70%</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Team Work</label>
                        <div class="progress">
                            <div class="progress-bar" style="width: 80%">80%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="bg-dark text-white py-5">
        <div class="container text-center contact-form">
            <h1 class="animated">Contact <span>Me</span></h1>
            <form class="mx-auto col-md-6" method="POST" action="#">
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" name="msg" rows="4" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" name="send" class="btn btn-info" value="submit">Submit</button>
            </form>
        </div>
    </section>

    <footer class="text-center bg-black text-white py-3">
        <p>Developed with love by Yash Prajapati © 2024</p>
    </footer>

    <script>
        var typed = new Typed('#typed-text', {
            strings: ['Frontend Developer', 'Web Designer', 'UI/UX Expert'],
            typeSpeed: 50,
            backSpeed: 50,
            loop: true
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];
    // $name =$_POST['submit'];



    //Load Composer's autoloader
    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';
    require __DIR__ . '/vendor/autoload.php'; // loads Composer packages

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();



    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'Smtp.gmail.com';     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username = $_ENV['EMAIL_USER'];
        $mail->Password = $_ENV['EMAIL_PASS'];
        //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('yashprajapati2405@gmail.com', ' Yoxshadox Community');    //Name is optional
        $mail->addAddress('yashprajapati2405@gmail.com', 'webside');            //Name is optional



        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'portfolio contact form';
        $mail->Body = "Sender Name - $name <br> Sender Email - $email <br> Subject - $subject  <br> massage - $msg ";

        $mail->send();
        //  echo 'Message has been sent';
        echo "<div class='success'>Massage Has Been Sent!</div>";
    } catch (Exception $e) {
        //  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        echo "<div class='alert'>Massage couldn't Sent!</div>";
    }
}

?>