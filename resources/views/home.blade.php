<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <script type='text/javascript'
            src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="resources/css/tailwind.css" rel="stylesheet">

</head>

<body>


<nav class="main-nav">
    <ul class="ul__first">
        <li id="logo">
            <a href="#">b</a>
        </li>
    </ul>
    <ul class="ul__second">
        <li id="border"><a href="#summer">HomePage</a></li>
        <li><a href="#winter">Winter</a></li>
        <li><a href="#spring">Spring</a></li>
        <li><a href="#autumn">Automn</a></li>
    </ul>
</nav>

<div class="outer-wrapper ">

    <div class="wrapper">
        <div id="summer" class="slide one">
            <div>
                <img

                    src="https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg"
                    alt="">
            </div>

            <div class="flex justify-center w-2/4 mx-auto relative h-full  "><h1
                    class="  centered text-white relative text-4xl font-bold flex">Samy Alexandre</h1></div>


        </div>
        <div id="winter" class="slide two"><img
                src="https://upload.wikimedia.org/wikipedia/commons/1/1c/Image_du_Maroc_3.jpg" alt=""></div>
        <div id="spring" class="slide three"><img
                src="https://www.anthedesign.fr/w2015/wp-content/uploads/2016/12/couleur-du-web-2017.jpg" alt=""></div>
        <div id="autumn" class="slide four"><img
                src="https://lenergeek.com/wp-content/uploads/2019/11/france-image-marche-energie-degrade-LEnergeek.jpg"
                alt=""></div>

    </div>
</div>


<style>

    body {
        margin: 0;
        padding: 0;
    }

    .slide {
        width: 100vw;
        height: 100vh;
    }

    .wrapper {
        display: flex;
        flex-direction: row;
        width: 400vw;
        transform: rotate(90deg) translateY(-100vh);
        transform-origin: top left;
    }

    .one {
    }

    .centered {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
    }

    .two {
        background: chartreuse;
    }

    .three {
        background: fuchsia;
    }

    .four {
        background: hotpink;
    }

    .outer-wrapper {
        width: 100vh;
        height: 100vw;
        transform: rotate(-90deg) translateX(-100vh);
        transform-origin: top left;
        overflow-y: scroll;
        overflow-x: hidden;
        position: absolute;
        -ms-overflow-style: none;
    }

    ::-webkit-scrollbar {
        display: none;
    }


    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
        overflow-y: hidden;
        -ms-overflow-style: none;

    }

    html, body, .wrapper, .outer-wrapper {
        scroll-behavior: smooth;
    }

    li {
        list-style: none;
        transition: all 0.4s;
        z-index: 15;
    }

    li:hover {
        transform: scale(1.1);
    }

    a {
        text-decoration: none;
        text-transform: uppercase;
        color: white;
    }

    #logo {
        border: 1px solid white;
        padding: 0 15px;
    }

    img {
        height: 101vh;
        width: 100vw;
        position: absolute;
    }

    .main-nav {
        position: fixed;
        display: flex;
        padding: 2em 4em;
        z-index: 12;
    }

    .main-nav .ul__second {
        position: fixed;
        display: flex;
        right: 4em;
    }

    .main-nav .ul__second li {
        margin-left: 1.5em;
    }

    .main-nav .ul__second #border {
        border: 1px solid white;
        padding: 0 15px;
        align-items: center;
    }

    .container .summer {
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>

</body>
</html>
