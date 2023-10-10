<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.8.1/js/foundation.min.js" integrity="sha512-HugKDgJVjWdi/RfSbpjwOPqBhO2AQ6TuETbq7eGGutNulCWxZuERGwK9RutFQ/rbogsqpmfOtqJpFy2Y4AeJcQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;600;900&family=Titillium+Web:wght@700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
    <link rel="stylesheet" href="template/css/style.css">
    <title>Document</title>
</head>
<body>
<header>
    <nav>
        <img src="https://www.weareboxfish.com/wp-content/uploads/2017/09/celticLogo.png" alt="" class="logo">
        <ul>
            <li><a href="#">Transfers</a></li>
            <li><a href="#">Matches</a></li>
            <li><a href="#">Line up</a></li>
        </ul>
    </nav>
</header>

<!--Main Content-->
<div class="header_container">
    <h1 class="header_container-title">Celtic</h1>
</div>

<div class="content-container">
    <!--Slider-->
    <section id="main-slider-container">
        <div id="slider-container" class="slider-container">
            <!-- slide  -->
            <div>
                <div class="layer"></div>
                <h1>Stadium</h1>
            </div>
            <div>
                <div class="layer"></div>
                <h1>Squad</h1>
            </div>
            <div>
                <div class="layer"></div>
                <h1>Become a member</h1>
            </div>
            <div>
                <div class="layer"></div>
                <h1>Tickets & Fixtures</h1>
            </div>
            <div>
                <div class="layer"></div>
                <h1>Shop</h1>
            </div>
        </div>
    </section>

</div>
<section>
    <div class="form-container">
        <div class="img-container">
            <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Celtic_Park3.jpg" alt="">
        </div>
        <form>
            <div class="title-container">
                <h1 class="form-title">Log In</h1>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="container">
                <input placeholder="E-Mail" type="text" name="email">
                <input placeholder="Placeholder" type="password" name="password">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</section>

<script>
    gsap.registerPlugin(ScrollTrigger);
    let imgSlider = document.getElementById("slider-container");
    let imgSliderMain = document.getElementById("main-slider-container");

    let windowWidth = window.innerWidth;
    let calculateSliderX =
        imgSlider.children.length * imgSlider.children[0].offsetWidth - windowWidth;

    let imgSliderTimeline = gsap.timeline({
        default: {
            ease: "none",
        },
        scrollTrigger: {
            trigger: imgSliderMain,
            pin: true,
            start: "top top",
            end: "+=200%",
            scrub: 1,
        },
    });
    imgSliderTimeline.to(imgSlider, {
        x: -calculateSliderX,
    });
</script>
</body>
</html>