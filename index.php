<?php
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"])) {
    $userName = htmlspecialchars($_POST["userName"]);
    $userEmail = htmlspecialchars($_POST["userEmail"]);
    $userPhone = htmlspecialchars($_POST["userPhone"]);
    $userMessage = htmlspecialchars($_POST["userMessage"]);
    $toEmail = "yacerchinwi@gmail.com";

    if (filter_var($userEmail, FILTER_VALIDATE_EMAIL) && !empty($userName) && !empty($userMessage)) {
        $mailHeaders = "From: " . $userName . " <" . $userEmail . ">\r\n" .
                       "Phone: " . $userPhone . "\r\n" .
                       "Message: " . $userMessage . "\r\n";

        if (mail($toEmail, "New Message from " . $userName, $mailHeaders)) {
            $message = "Your contact information is received successfully.";
        } else {
            $message = "Sorry, there was an error sending your message. Please try again.";
        }
    } else {
        $message = "Please provide valid information.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100..900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Amine ALLICHE</title>
</head>
<body>
    <header id="header">
        <div class="parts">
            <a href="#home">home</a>
            <a href="https://www.behance.net/mralliche" target="_blank">my work</a>
            <a href="CV-Amine-Alliche-@mralliche.pdf" target="_blank">full cv</a>
            <a href="#contact">let's talk</a>
        </div>
        <div class="creation">
            <img src="img/messenger.png">
            <a href="#contact" style="text-decoration: none; color: white;">
                <p style="text-transform: uppercase;">LET’S Create something amazing together!</p>
            </a>
        </div>
    </header>

    <!-- 1er div-->
    <div id="home" class="div1">
        <div class="div11">
            <span class="span1">HEY, I’M</span><br><span class="span2">AMINE ALLICHE</span><br>
            <img src="img/trait.png" width="74%"><br>
            <div class="disc">A <span style="color: #00ffff;font-weight: bold;">Graphic Designer</span> with a passion<br> for creating visually appealing and<br> effective designs.</div>
        </div>
        <img src="img/Rectangle 8.png" class="rect8">
        <div class="div111">
            <img src="img/Amine-allichz-web-site 1.png" width="630">
        </div>
        <div class="div14">
            <div class="div144" data-aos="fade-left">Find me on</div>
            <div class="div15" data-aos="fade-up">
                <div><a href="https://www.linkedin.com/in/mrallichedesign/?locale=fr_FR" target="_blank"><img src="img/Vector.png" alt="LinkedIn"></a></div>
                <div><a href="https://www.behance.net/mralliche" target="_blank"><img src="img/behance.png" alt="Behance"></a></div>
                <div><a href="https://www.instagram.com/mralliche/" target="_blank"><img src="img/instagram.png" alt="Instagram"></a></div>
            </div>
        </div>
    </div>
    <!-- 1er div-->

    <img class="skills-bar" src="img/My_Skills_bar.png">

    <!-- 2eme div-->
    <div class="skills-container">
        <div class="skills">
            <div class="skills-plan" data-aos="flip-up">
                <img src="img/done.png">
                <span>Social Media Design</span>
            </div>
            <div class="skills-plan" data-aos="flip-up">
                <img src="img/done.png">
                <span>Print Design</span>
            </div>
            <div class="skills-plan" data-aos="flip-up">
                <img src="img/done.png">
                <span>Brand Design</span>
            </div>
            <div class="skills-plan" data-aos="flip-up">
                <img src="img/done.png">
                <span>Web Design</span>
            </div>
        </div>
        <div class="skills1">
            <div class="skills-plan" data-aos="flip-down">
                <img src="img/done.png">
                <span>Leadership</span>
            </div>
            <div class="skills-plan" data-aos="flip-down">
                <img src="img/done.png">
                <span>Teamwork</span>
            </div>
            <div class="skills-plan" data-aos="flip-down">
                <img src="img/done.png">
                <span>Speaking in public</span>
            </div>
        </div>
        <div class="ellipse"><img src="img/Ellipse 1.png"></div>
    </div>
    <!-- fin du 2eme div-->

    <!-- 3eme div-->
    <div class="r-cont swiper mySwiper">
        <div class="linkedin"><img src="img/Group.png" data-aos="zoom-in-down"></div>
        <div class="r-i-cont swiper-wrapper">
            <div class="swiper-slide"><img src="img/Group 2 (1).png"></div>
            <div class="swiper-slide"><img src="img/Group 2.png"></div>
            <div class="swiper-slide"><img src="img/Group 3.png"></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
        <div class="autoplay-progress">
            <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20" stroke="black" fill="none" stroke-width="4"></circle>
            </svg>
            <span></span>
        </div>
    </div>
    <!-- fin du 3eme div-->

    <!-- 4eme div-->
    <div id="contact" class="ccontainer">
        <h1>Let's create something amazing together!</h1>
        <div data-aos="zoom-in-down">
            <form action="" method="post">
                <input type="text" name="userName" id="firstName" required placeholder="First Name">
                <input type="text" name="userName" id="lastName" required placeholder="Last Name">
                <input type="email" name="userEmail" id="email" required placeholder="Email">
                <input type="text" name="userPhone" id="number" required placeholder="Number">
                <h4>Type Your Message Here</h4>
                <textarea name="userMessage" required></textarea>
                <input type="submit" name="send" value="Send" id="btt">
                
                <?php if (!empty($message)) { ?>
                    <div class='success'>
                        <strong class="success"><?php echo $message; ?></strong>
                    </div>
                <?php } ?>
            </form>
        </div>
    </div>
    <!-- fin du 4eme div-->

    <!-- footer-->
    <footer>
        <p>Ratio Algérie - &copy; Reserved 2024 | Coded By <a href="https://www.linkedin.com/in/okba-moulahoum-848769298/" target="_blank">Recay</a></p>
        <a href="#header"><img src="img/icons8-flèche-haut-50.png"></a>
    </footer>
    <!-- fin footer-->

    <!-- AOS Initialization -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Initialize Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            on: {
                autoplayTimeLeft(s, time, progress) {
                    progressCircle.style.setProperty("--progress", 1 - progress);
                    progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                }
            }
        });
        const containerEl = document.querySelector('.success')

const careers = [
    "work 100% remotely",
    "have clients from all over the world",
    "have the best graphic designers",
    "do print",
    "have expert video editors",
    "build perfect websites"
];

let careerIndex = 0;
let characterIndex = 0;

function updateText() {
    characterIndex++;

    containerEl.innerHTML = `<p>We ${careers[careerIndex].slice(0, characterIndex)}</p>`;

    if (characterIndex === careers[careerIndex].length) {
        characterIndex = 0;
        careerIndex++;
        if (careerIndex === careers.length) {
            careerIndex = 0;
        }
    }

    setTimeout(updateText, 250);
}

updateText();

    </script>
</body>
</html>
