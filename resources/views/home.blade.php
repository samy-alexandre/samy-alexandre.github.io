@extends('layouts.app')

@section('content')


    <div class="loader_bg">
        <div class="loader "></div>
    </div>

    <nav class="main-nav">
        <ul class="ul__first relative -mt-5 ">
            <li id="logo">
                <a href="#" class="">
                    <svg width="50" height="48" viewBox="0 0 50 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.8354 0.239204C18.8294 0.620782 17.7888 1.52269 17.4245 2.35523C17.0256 3.27449 16.9216 5.02628 17.2338 5.92819C17.3552 6.29243 17.65 6.8301 17.8755 7.12496L18.2918 7.67998L17.7194 8.82472C17.3899 9.46647 16.9562 10.6459 16.7481 11.4437C16.4186 12.7446 16.3839 13.1782 16.4879 15.5717C16.5747 18.052 16.5573 18.2948 16.2625 18.607C16.089 18.8151 15.4646 19.8732 14.8922 20.9659C14.3372 22.0586 13.5741 23.4981 13.2098 24.1399L12.5507 25.3367L13.3139 24.9377C14.9443 24.1225 18.0836 24.4521 21.778 25.8223C25.2122 27.1231 26.4437 28.0424 28.6117 30.8522C29.3055 31.7541 30.2074 32.7428 30.6063 33.055L31.3348 33.61L30.6063 33.8008C28.1955 34.4425 26.3569 36.7146 25.6805 39.8887C25.4724 40.8253 25.4203 41.7445 25.4897 43.3055L25.5764 45.4389L24.3276 45.4216C23.6512 45.4042 22.5932 45.4563 21.9688 45.5083C20.72 45.647 17.6847 45.1787 15.6727 44.5543C13.0711 43.7392 10.8683 42.4903 9.51546 41.0161C8.56151 39.9754 8.26666 39.2469 8.14525 37.7033C8.00649 35.9168 8.52682 34.0956 10.0878 30.8522C11.7876 27.3139 12.3946 25.5968 11.5274 26.8109C10.1572 28.7015 8.07587 33.4018 7.48616 35.9515C7.1913 37.2176 7.15661 39.0735 7.41678 39.8887C8.05852 41.8833 9.55015 43.982 10.7816 44.6584C11.6315 45.1094 11.5448 45.2828 10.4868 45.2308C8.70027 45.1267 1.05135 45.6817 0.288197 45.9766C-0.665749 46.3408 0.704465 46.601 5.05793 46.8958C9.42874 47.1734 13.1231 47.2427 24.9174 47.2427C39.0184 47.2427 43.6494 47.104 47.7774 46.6357C49.7026 46.4102 50.1015 46.3235 49.9801 46.1153C49.772 45.7858 46.6153 45.4563 42.1751 45.3175C40.5621 45.2655 39.1572 45.1441 39.0704 45.0573C38.9664 44.9706 39.1745 44.6584 39.5908 44.2595C40.9263 42.9933 41.5681 41.467 41.5681 39.5244C41.5681 38.0155 41.3426 37.0789 40.7876 36.2637C40.2325 35.4485 38.8103 34.4252 37.8563 34.1477C37.4227 34.0262 37.0585 33.8701 37.0585 33.7834C37.0585 33.714 37.2319 33.3672 37.4227 33.0203C37.7002 32.552 37.7696 32.2051 37.7176 31.5807C37.6309 30.6094 36.885 28.979 36.1219 28.0251C35.6883 27.47 35.6362 27.3313 35.8444 27.2099C35.9831 27.1058 36.2086 27.0364 36.33 27.0364C36.4688 27.0364 37.1105 26.5161 37.7696 25.8743C39.0184 24.6776 39.1225 24.4174 38.7756 23.4114C38.4981 22.6483 38.7929 21.7117 39.7469 20.2721C41.4466 17.6877 41.9149 16.3522 42.0364 13.8546C42.1231 12.1895 42.0884 11.9294 41.6548 10.7326C41.2732 9.65725 41.1865 9.17161 41.2038 7.9575C41.2559 5.96288 40.9783 5.2691 39.903 4.4886C39.1225 3.91623 38.9664 3.88154 37.5962 3.84686C36.4514 3.81217 36.0699 3.74279 35.775 3.48262C35.5669 3.29183 35.0292 2.94494 34.5435 2.70212C32.0112 1.38394 29.583 1.15846 25.5938 1.81755C25.0214 1.92162 24.9 1.86958 24.4664 1.36659C23.391 0.152481 21.3964 -0.333164 19.8354 0.239204ZM31.699 2.66743C37.284 3.65607 41.0651 7.74936 41.3599 13.1435C41.4293 14.5484 41.1865 16.9246 40.9263 17.3755C40.8743 17.4449 40.7355 17.4276 40.6141 17.3235C40.0417 16.8552 38.394 20.1854 38.0645 22.5095C37.8737 23.7757 37.839 23.845 37.4574 23.7757C36.9891 23.6889 36.9024 24.0879 37.3187 24.4347C38.0124 25.0071 37.2666 25.7182 35.4628 26.1865L34.6476 26.412L33.4682 25.5968C32.8264 25.1632 31.04 23.6542 29.5136 22.2493C26.1488 19.162 24.9174 18.2081 23.0788 17.2888C21.5699 16.543 20.4078 16.3175 19.5926 16.5777C18.8468 16.8205 18.5519 16.6818 18.2397 15.8839C17.5633 14.2189 17.7888 11.0622 18.7254 9.22364C19.1763 8.30439 19.0029 8.35642 21.1189 8.5819C23.6339 8.85941 25.8366 6.48322 25.5764 3.76013C25.4724 2.82353 25.4377 2.84088 27.2242 2.58071C28.7158 2.37257 30.1554 2.38992 31.699 2.66743Z"
                            fill="black"/>
                        <path
                            d="M34.8037 15.7278C34.4742 15.9013 33.7457 16.3349 33.1733 16.6818C32.6183 17.0287 31.7511 17.4449 31.2654 17.601C28.7158 18.4336 28.1261 19.5089 29.531 20.8098C30.537 21.7464 32.4449 22.3534 34.4048 22.3534H35.4801L35.7577 21.4342C36.1566 20.1507 36.2953 17.0807 35.9831 16.2135C35.8444 15.8319 35.6536 15.5023 35.5669 15.4677C35.4801 15.433 35.1333 15.5544 34.8037 15.7278Z"
                            fill="black"/>
                        <path
                            d="M35.4695 21.342C35.4695 21.5815 35.3827 21.7756 34.9491 22.0358C34.7757 21.7756 34.689 21.5815 34.689 21.342C34.689 21.1026 34.8831 21.1686 35.1226 21.1686C35.3621 21.1686 35.4695 21.1026 35.4695 21.342Z"
                            fill="white"/>
                    </svg>
                </a>
            </li>
        </ul>
        <ul class="ul__second">
            <li class="px-4"><a href="#home">L'accueil</a></li>
            <li class="px-4"><a href="#resume">A propos</a></li>
            <li class="px-4"><a href="#projects">Projets</a></li>
            <li class="px-4"><a href="#tools">Outils</a></li>
            <li class="px-4"><a href="#contact">Contact</a></li>
        </ul>
    </nav>


    <canvas id="canvas3d" class="absolute"></canvas>
    <div>
        <div class="cursor absolute">

        </div>

        <div class="outer-wrapper relative ">


            <div class="wrapper">


                <!-- Slide ONE -->
                <div id="home" class="slide w-custom1 one flex">

                    <div class="relative  text-4xl w-full h-full  self-center mx-auto flex flex-col">
                        <p class="text-center delay-150 text-5xl first-title custom-police pt-20 pb-8">BIENVENUE</p>
                        <h1 class="text-center delay-150 text-5xl first-title custom-police  ">BIENVENUE</h1>
                        <a href="#resume" class="cursor-none">
                            <div class="transform rotate-90 absolute-custom cursor-none ">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                     width="75" height="150" class=" animate-bounce cursor-none  p-5"
                                     viewBox="0 0 640.000000 1280.000000"
                                     preserveAspectRatio="xMidYMid meet">
                                    <metadata>
                                        Created by potrace 1.15, written by Peter Selinger 2001-2017
                                    </metadata>
                                    <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)"
                                       fill="#000000" stroke="none">
                                        <path d="M3151 12774 c-12 -15 -21 -35 -21 -44 0 -11 -10 -20 -25 -24 -37 -9
                                -101 -107 -236 -362 -413 -781 -640 -1103 -1244 -1764 -249 -273 -295 -332
                                -295 -377 0 -107 406 92 745 364 129 103 360 330 467 458 106 127 228 300 308
                                435 83 142 101 176 161 315 27 61 48 103 48 95 0 -8 -4 -58 -9 -110 -9 -90
                                -33 -439 -45 -635 -39 -649 -69 -1744 -86 -3115 -21 -1650 8 -4270 61 -5575 5
                                -132 14 -357 20 -500 48 -1170 127 -1935 201 -1935 34 0 72 196 104 530 50
                                544 84 1313 117 2675 18 714 18 4225 0 5000 -21 947 -54 1978 -77 2415 -32
                                618 -72 1141 -101 1340 -3 25 4 13 27 -40 231 -557 618 -1055 1104 -1420 228
                                -171 456 -300 593 -335 74 -19 102 -13 102 21 0 47 -58 121 -320 404 -594 645
                                -877 1038 -1265 1765 -146 273 -214 384 -257 420 -37 32 -51 31 -77 -1z"/>
                                    </g>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Slide TWO -->
                <div id="resume" class="slide two  w-custom2 flex">
                    <div class="relative  text-4xl w-full h-full self-center mx-auto flex flex-col">
                        <p class="text-center  text-5xl  custom-police pt-20 pb-20">À propos</p>
                    </div>

                </div>

                <!-- Slide THREE -->
                <div id="projects" class="slide w-custom3 three flex">
                    <div class="relative  text-4xl w-full h-full flex  justify-center ">

                        <div class="flex w-1/3 h-screen ">
                            <p class="flex mx-auto  p-2 text-5xl custom-police self-center ">Mes projets</p>
                        </div>

                        <!-- Projects -->

                        <div class="flex w-2/3 h-screen custom-z ">
                            <div
                                class="w-5/6 mx-auto  h-5/6 self-center justify-center   flex">
                                <!-- component -->
                                <div class=" w-full  overflow-auto custom-overflow ">

                                    <div class="flex hover:bg-gray-200 rounded-tl-2xl ">
                                        <div
                                            class="h-full text-left custom-height-project  w-full justify-end  ">
                                            <div class="flex  ">
                                                <div class="w-1/2 pl-5 pr-5 bg-white rounded-tl-2xl opacite-left  flex">
                                                    <img
                                                        class="flex w-full h-5/6 rounded-2xl  object-cover relative self-center"
                                                        src="https://d1fmx1rbmqrxrr.cloudfront.net/cnet/optim/i/edit/2019/04/eso1644bsmall__w770.jpg"
                                                        alt="">

                                                </div>
                                                <div class="w-1/2 flex p-5 bg-gray-300 opacite-right">
                                                    <div class="flex flex-col self-center">
                                                        <div class="flex w-full mx-auto">
                                                            <h2 class="">SONYRY</h2>
                                                        </div>
                                                        <div class="flex"><p class="flex text-sm text-justify">Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit. Corporis id
                                                                pariatur ut voluptas? A deleniti, deserunt dolore, error
                                                                fugit harum
                                                                labore molestias nesciunt optio quas sit totam veritatis
                                                                vero
                                                                voluptatem.</p></div>
                                                        <div class="flex h-20 mx-auto w-1/2 self-center "><a
                                                                href="https://www.larousse.fr/dictionnaires/francais/Fe/33106"
                                                                target="_blank"
                                                                class="text-indigo-500 self-center mx-auto md:mb-2 lg:mb-0 px-2 py-1 border-2 border-indigo-500 rounded-full text-sm">accéder
                                                                au projet 😎
                                                            </a></div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="flex  ">
                                        <div
                                            class="h-full text-left custom-height-project  w-full justify-end  ">
                                            <div class="flex  hover:bg-gray-200 ">
                                                <div class="w-1/2 pl-5 pr-5 bg-white   opacite-left  flex">
                                                    <img
                                                        class="flex w-full h-5/6 rounded-2xl  object-cover relative self-center"
                                                        src="https://d1fmx1rbmqrxrr.cloudfront.net/cnet/optim/i/edit/2019/04/eso1644bsmall__w770.jpg"
                                                        alt="">

                                                </div>
                                                <div class="w-1/2 flex  p-5 bg-gray-300 opacite-right">
                                                    <div class="flex flex-col self-center">


                                                        <div class="flex"><p class="flex text-sm text-justify">Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit. Corporis id
                                                                pariatur ut voluptas? A deleniti, deserunt dolore, error
                                                                fugit harum
                                                                labore molestias nesciunt optio quas sit totam veritatis
                                                                vero
                                                                voluptatem.</p></div>
                                                        <div class="flex h-20 mx-auto w-1/2 self-center "><a
                                                                href="https://www.larousse.fr/dictionnaires/francais/Fe/33106"
                                                                target="_blank"
                                                                class="text-indigo-500 self-center mx-auto md:mb-2 lg:mb-0 px-2 py-1 border-2 border-indigo-500 rounded-full text-sm">accéder
                                                                au projet 😎
                                                            </a></div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="flex  ">
                                        <div
                                            class="h-full text-left custom-height-project  w-full justify-end  ">
                                            <div class="flex hover:bg-gray-200 rounded-bl-2xl ">
                                                <div class="w-1/2 pl-5 pr-5 bg-white rounded-bl-2xl  opacite-left  flex">
                                                    <img
                                                        class="flex w-full h-5/6 rounded-2xl  object-cover relative self-center"
                                                        src="https://d1fmx1rbmqrxrr.cloudfront.net/cnet/optim/i/edit/2019/04/eso1644bsmall__w770.jpg"
                                                        alt="">

                                                </div>
                                                <div class="w-1/2 flex  p-5 bg-gray-300 opacite-right">
                                                    <div class="flex flex-col self-center">
                                                        <div class="flex"><p class="flex text-sm text-justify">Lorem ipsum
                                                                dolor sit amet, consectetur adipisicing elit. Corporis id
                                                                pariatur ut voluptas? A deleniti, deserunt dolore, error
                                                                fugit harum
                                                                labore molestias nesciunt optio quas sit totam veritatis
                                                                vero
                                                                voluptatem.</p></div>
                                                        <div class="flex h-20 mx-auto w-1/2 self-center "><a
                                                                href="https://www.larousse.fr/dictionnaires/francais/Fe/33106"
                                                                target="_blank"
                                                                class="text-indigo-500 self-center mx-auto md:mb-2 lg:mb-0 px-2 py-1 border-2 border-indigo-500 rounded-full text-sm">accéder
                                                                au projet 😎
                                                            </a></div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- Slide Tools -->
                <div id="tools" class="slide w-custom4 four flex">
                    <div class="relative  text-4xl w-full h-full self-center mx-auto flex flex-col">
                        <p class="text-center  text-5xl  custom-police pt-20 pb-20">Mes outils</p>
                        <div class="glide self-center mx-auto ">

                            <div class="glide__track relative custom-police" data-glide-el="track">
                                <ul class="glide__slides  ">
                                    <li class="glide__slides relative  flex ">
                                        <div class="mx-auto  self-center shadow-lg ">
                                            <img
                                                src="/img/figma.jpeg"
                                                class=" h-64   right-0  object-cover flex rounded-tr-xl rounded-tl-xl"
                                                alt="">
                                            <div
                                                class="h-80  w-custom bg-white opacity-75 rounded-br-xl rounded-bl-xl  text-center">
                                                <div class="h-1/6">
                                                    <h1 class="font-bold text-2xl">FIGMA</h1>
                                                    <p class="text-sm font-bold">Éditeur graphique</p>

                                                </div>

                                                <div class="h-3/6 pt-6">
                                                    <p class="text-justify text-sm pl-2 pr-2"> Figma est un éditeur de
                                                        graphiques vectoriels et un outil de prototypage. Il est
                                                        principalement basé sur le web, avec des fonctionnalités hors
                                                        ligne
                                                        supplémentaires activées par des applications de bureau pour
                                                        macOS
                                                        et Windows.</p>
                                                </div>

                                                <div class="h-2/6 flex self-center">
                                                    <a href="https://www.figma.com/" target="_blank"
                                                       class="bg-purple-500 rounded-full py-1 px-4 text-center text-lg text-black hover:text-white hover:bg-purple-400 transition duration-200 ease-in-out mx-auto self-center">Voir
                                                        plus</a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="glide__slides relative mx-auto flex ">
                                        <div class="mx-auto  self-center shadow-lg">
                                            <img
                                                src="/img/spline.jpg"
                                                class=" h-64  right-0  object-cover flex rounded-tr-xl rounded-tl-xl"
                                                alt="">
                                            <div
                                                class="h-80  w-custom bg-white opacity-75 rounded-br-xl rounded-bl-xl  text-center">
                                                <div class="h-1/6">
                                                    <h1 class="font-bold text-2xl">SPLINE</h1>
                                                    <p class="text-sm font-bold">Éditeur 3D</p>

                                                </div>

                                                <div class="h-3/6 pt-6">
                                                    <p class="text-justify text-sm pl-2 pr-2"> Spline est un outil
                                                        gratuit
                                                        pour créer des expériences web en 3D.
                                                        Il est possible d’ajouter des
                                                        formes : cube, sphère, carré, rectangle, de les modifier
                                                        (couleur,
                                                        forme, bord…), du texte peut également être ajouté.
                                                        Pour ceux qui souhaitent exporter leurs créations, une option
                                                        est
                                                        possible. Vous pouvez intégrer la
                                                        création à un site web en copiant le code.</p>
                                                </div>

                                                <div class="h-2/6 flex self-center">
                                                    <a href="https://spline.design/" target="_blank"
                                                       class="bg-purple-500 rounded-full py-1 px-4 text-center text-lg text-black hover:text-white hover:bg-purple-400 transition duration-200 ease-in-out mx-auto self-center">Voir
                                                        plus</a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="glide__slides relative mx-auto flex ">
                                        <div class="mx-auto  self-center shadow-lg">
                                            <img
                                                src="/img/css.jpg"
                                                class=" h-64  right-0  object-cover flex rounded-tr-xl rounded-tl-xl"
                                                alt="">
                                            <div
                                                class="h-80  w-custom bg-white opacity-75 rounded-br-xl rounded-bl-xl  text-center">
                                                <div class="h-1/6">
                                                    <h1 class="font-bold text-2xl">CSS</h1>
                                                    <p class="text-sm font-bold">Langage</p>
                                                </div>

                                                <div class="h-3/6 pt-6">
                                                    <p class="text-justify text-sm pl-2 pr-2"> Le CSS est l'un des
                                                        langages
                                                        principaux du Web ouvert et a été standardisé par le W3C.</p>
                                                </div>

                                                <div class="h-2/6 flex self-center">
                                                    <a href="https://developer.mozilla.org/fr/docs/Web/CSS"
                                                       target="_blank"
                                                       class="bg-purple-500 rounded-full py-1 px-4 text-center text-lg text-black hover:text-white hover:bg-purple-400 transition duration-200 ease-in-out mx-auto self-center">Voir
                                                        plus</a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="glide__slides relative mx-auto flex ">
                                        <div class="mx-auto  self-center shadow-lg ">
                                            <img
                                                src="/img/html.jpg"
                                                class=" h-64  right-0  object-cover flex rounded-tr-xl rounded-tl-xl"
                                                alt="">
                                            <div
                                                class="h-80 w-custom bg-white opacity-75 rounded-br-xl rounded-bl-xl  text-center">
                                                <div class="h-1/6 ">
                                                    <h1 class="font-bold text-2xl">HTML</h1>
                                                    <p class="text-sm font-bold">Langage balistique</p>
                                                </div>

                                                <div class="h-3/6 pt-6">
                                                    <p class="text-justify text-sm pl-2 pr-2">Il est utilisé afin de
                                                        créer
                                                        et de représenter le contenu d'une page web et sa structure.
                                                        D'autres technologies sont utilisées avec HTML pour décrire la
                                                        présentation d'une page.</p>
                                                </div>

                                                <div class="h-2/6 flex self-center">
                                                    <a href="https://developer.mozilla.org/fr/docs/Web/HTML"
                                                       target="_blank"
                                                       class="bg-purple-500 rounded-full py-1 px-4 text-center text-lg text-black hover:text-white hover:bg-purple-400 transition duration-200 ease-in-out mx-auto self-center">Voir
                                                        plus</a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="glide__slides relative mx-auto flex ">
                                        <div class="mx-auto  self-center shadow-lg">
                                            <img
                                                src="/img/js.jpg"
                                                class=" h-64  right-0  object-cover flex rounded-tr-xl rounded-tl-xl"
                                                alt="">
                                            <div
                                                class="h-80  w-custom bg-white opacity-75 rounded-br-xl rounded-bl-xl  text-center">
                                                <div class="h-1/6">
                                                    <h1 class="font-bold text-2xl">JAVASCRIPT</h1>
                                                    <p class="text-sm font-bold">Langage</p>
                                                </div>

                                                <div class="h-3/6 pt-6">
                                                    <p class="text-justify text-sm pl-2 pr-2">Le JavaScrip est un
                                                        langage de
                                                        script léger, orienté objet,
                                                        principalement connu comme le langage de script des pages web.
                                                        C'est un langage à objets utilisant le concept de prototype,
                                                        disposant d'un
                                                        typage faible et dynamique qui permet de programmer suivant
                                                        plusieurs paradigmes de programmation : fonctionnelle,
                                                        impérative et
                                                        orientée objet.</p>
                                                </div>

                                                <div class="h-2/6 flex self-center">
                                                    <a href="https://developer.mozilla.org/fr/docs/Web/javascript"
                                                       target="_blank"
                                                       class="bg-purple-500 rounded-full py-1 px-4 text-center text-lg text-black hover:text-white hover:bg-purple-400 transition duration-200 ease-in-out mx-auto self-center">Voir
                                                        plus</a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="glide__slides relative mx-auto flex ">
                                        <div class="mx-auto  self-center shadow-lg">
                                            <img
                                                src="/img/php.jpg"
                                                class=" h-64  right-0  object-cover flex rounded-tr-xl rounded-tl-xl"
                                                alt="">
                                            <div
                                                class="h-80  w-custom bg-white opacity-75 rounded-br-xl rounded-bl-xl  text-center">
                                                <div class="h-1/6">
                                                    <h1 class="font-bold text-2xl">PHP</h1>
                                                    <p class="text-sm font-bold">Langage</p>
                                                </div>

                                                <div class="h-3/6 pt-6">
                                                    <p class="text-justify text-sm pl-2 pr-2">PHP est un langage de
                                                        scripts
                                                        généraliste et Open Source, spécialement conçu pour le
                                                        développement
                                                        d'applications web. Il peut être intégré facilement au HTML.</p>
                                                </div>

                                                <div class="h-2/6 flex self-center">
                                                    <a href="https://www.php.net/manual/fr/intro-whatis.php"
                                                       target="_blank"
                                                       class="bg-purple-500 rounded-full py-1 px-4 text-center text-lg text-black hover:text-white hover:bg-purple-400 transition duration-200 ease-in-out mx-auto self-center">Voir
                                                        plus</a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="glide__slides relative mx-auto flex ">
                                        <div class="mx-auto  self-center shadow-lg">
                                            <img
                                                src="/img/laravel.jpg"
                                                class=" h-64  right-0  object-cover flex rounded-tr-xl rounded-tl-xl"
                                                alt="">
                                            <div
                                                class="h-80  w-custom bg-white opacity-75 rounded-br-xl rounded-bl-xl  text-center">
                                                <div class="h-1/6">
                                                    <h1 class="font-bold text-2xl">LARAVEL</h1>
                                                    <p class="text-sm font-bold">Framework Backend</p>
                                                </div>

                                                <div class="h-3/6 pt-6">
                                                    <p class="text-justify text-sm pl-2 pr-2">Laravel est un framework
                                                        d'application Web avec une syntaxe expressive et élégante. Un
                                                        framework Web fournit une structure et un point de départ pour
                                                        créer
                                                        votre application, vous permettant de vous concentrer sur la
                                                        création de quelque chose d'extraordinaire pendant que nous
                                                        transpirons les détails.</p>
                                                </div>

                                                <div class="h-2/6 flex self-center">
                                                    <a href="https://laravel.com/docs/8.x#why-laravel" target="_blank"
                                                       class="bg-purple-500 rounded-full py-1 px-4 text-center text-lg text-black hover:text-white hover:bg-purple-400 transition duration-200 ease-in-out mx-auto self-center">Voir
                                                        plus</a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="glide__slides relative mx-auto flex ">
                                        <div class="mx-auto  self-center shadow-lg">
                                            <img
                                                src="/img/nuxt.jpg"
                                                class=" h-64  right-0  object-cover flex rounded-tr-xl rounded-tl-xl"
                                                alt="">
                                            <div
                                                class="h-80  w-custom bg-white opacity-75 rounded-br-xl rounded-bl-xl  text-center">
                                                <div class="h-1/6">
                                                    <h1 class="font-bold text-2xl">NUXT</h1>
                                                    <p class="text-sm font-bold">Framework Frontend</p>
                                                </div>

                                                <div class="h-3/6 pt-6">
                                                    <p class="text-justify text-sm pl-2 pr-2">Construisez votre
                                                        prochaine
                                                        application Vue.js en toute confiance en utilisant NuxtJS. Un
                                                        framework open source qui rend le développement web simple et
                                                        puissant.</p>
                                                </div>

                                                <div class="h-2/6 flex self-center">
                                                    <a href="https://fr.nuxtjs.org/docs/2.x/get-started/installation"
                                                       target="_blank"
                                                       class="bg-purple-500 rounded-full py-1 px-4 text-center text-lg text-black hover:text-white hover:bg-purple-400 transition duration-200 ease-in-out mx-auto self-center">Voir
                                                        plus</a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="glide__slides relative mx-auto flex ">
                                        <div class="mx-auto  self-center shadow-lg ">
                                            <img
                                                src="/img/Tailwindcss.jpg"
                                                class=" h-64  right-0  object-cover flex rounded-tr-xl rounded-tl-xl"
                                                alt="">
                                            <div
                                                class="h-80  w-custom bg-white opacity-75 rounded-br-xl rounded-bl-xl  text-center">
                                                <div class="h-1/6">
                                                    <h1 class="font-bold text-2xl">TAILWINDCSS</h1>
                                                    <p class="text-sm font-bold">Framework CSS</p>


                                                </div>

                                                <div class="h-3/6 pt-6">
                                                    <p class="text-justify text-sm pl-2 pr-2"> Tailwind CSS est un
                                                        framework
                                                        CSS de bas niveau, hautement personnalisable, qui vous donne
                                                        tous
                                                        les éléments de base dont vous avez besoin pour créer des
                                                        conceptions sur mesure sans avoir à vous battre avec des styles
                                                        préexistants par défaut.</p>
                                                </div>

                                                <div class="h-2/6 flex self-center">
                                                    <a href="https://tailwindcss.com/docs" target="_blank"
                                                       class="bg-purple-500 rounded-full py-1 px-4 text-center text-lg text-black hover:text-white hover:bg-purple-400 transition duration-200 ease-in-out mx-auto self-center">Voir
                                                        plus</a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="glide__arrows" data-glide-el="controls">
                                <button
                                    class="glide__arrow glide__arrow--left transform hover:scale-125 transition duration-300"
                                    data-glide-dir="<"><
                                </button>
                                <button
                                    class="glide__arrow glide__arrow--right transform hover:scale-125 transition duration-300"
                                    data-glide-dir=">">>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div id="contact" class="slide w-custom5 five">
                    <p class="text-center  text-5xl  custom-police pt-20 py-8   ">Contactez-moi 📞</p>
                    <section class="">

                        <div class="container">
                            <div class="contactinfo  reveal-1 rounded-xl">
                                <div>
                                    <h2>Contact Info</h2>
                                    <ul class="info py-2">
                                        <li class="flex">
                                    <span class="flex self-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M8.53162 2.93677C10.7165 1.66727 13.402 1.68946 15.5664 2.99489C17.7095 4.32691 19.012 6.70418 18.9998 9.26144C18.95 11.8019 17.5533 14.19 15.8075 16.0361C14.7998 17.1064 13.6726 18.0528 12.4488 18.856C12.3228 18.9289 12.1848 18.9777 12.0415 19C11.9036 18.9941 11.7693 18.9534 11.6508 18.8814C9.78243 17.6746 8.14334 16.134 6.81233 14.334C5.69859 12.8314 5.06584 11.016 5 9.13442C4.99856 6.57225 6.34677 4.20627 8.53162 2.93677ZM9.79416 10.1948C10.1617 11.1008 11.0292 11.6918 11.9916 11.6918C12.6221 11.6964 13.2282 11.4438 13.6748 10.9905C14.1214 10.5371 14.3715 9.92064 14.3692 9.27838C14.3726 8.29804 13.7955 7.41231 12.9073 7.03477C12.0191 6.65723 10.995 6.86235 10.3133 7.55435C9.63159 8.24635 9.42664 9.28872 9.79416 10.1948Z"
                                              fill="#130F26"/>
                                        <ellipse opacity="0.4" cx="12" cy="21" rx="5" ry="1" fill="#130F26"/>
                                        </svg>
                                        </span>
                                            <span class="text-1xl flex self-center">Sur la
                                            </span>
                                            <p class=" flex text-4xl pl-2 opacity-25 hover:opacity-75">🌎</p>

                                        </li>
                                        <li>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3.00977 5.83789C3.00977 5.28561 3.45748 4.83789 4.00977 4.83789H20C20.5523 4.83789 21 5.28561 21 5.83789V17.1621C21 18.2667 20.1046 19.1621 19 19.1621H5C3.89543 19.1621 3 18.2667 3 17.1621V6.16211C3 6.11449 3.00333 6.06765 3.00977 6.0218V5.83789ZM5 8.06165V17.1621H19V8.06199L14.1215 12.9405C12.9499 14.1121 11.0504 14.1121 9.87885 12.9405L5 8.06165ZM6.57232 6.80554H17.428L12.7073 11.5263C12.3168 11.9168 11.6836 11.9168 11.2931 11.5263L6.57232 6.80554Z"
                                              fill="black"/>
                                        </svg>
                                    </span>
                                            <span>samy.alexandre85@gmail.com</span>
                                        </li>
                                        <li>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11.5317 12.4724C15.5208 16.4604 16.4258 11.8467 18.9656 14.3848C21.4143 16.8328 22.8216 17.3232 19.7192 20.4247C19.3306 20.737 16.8616 24.4943 8.1846 15.8197C-0.493478 7.144 3.26158 4.67244 3.57397 4.28395C6.68387 1.17385 7.16586 2.58938 9.61449 5.03733C12.1544 7.5765 7.54266 8.48441 11.5317 12.4724Z"
                                              fill="#130F26"/>
                                        </svg>

                                        </span>
                                            <span>06 61 79 86 84</span>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="sci">
                                    <li><a href="https://www.linkedin.com/in/samy-alexandre-1b22551b7/" target="_blank">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="20" cy="20" r="20" fill="black"/>
                                                <path
                                                    d="M28 20.7444V26.2601H24.7713V21.0807C24.7713 19.8027 24.3004 18.9283 23.157 18.9283C22.2825 18.9283 21.7444 19.5336 21.5426 20.0718C21.4753 20.2735 21.4081 20.5426 21.4081 20.8789V26.2601H18.1794C18.1794 26.2601 18.2466 17.5157 18.1794 16.6413H21.4081V17.9865C21.8117 17.3139 22.6188 16.3722 24.3004 16.3722C26.3856 16.3722 28 17.7848 28 20.7444ZM14.8161 12C13.7399 12 13 12.7399 13 13.6816C13 14.6233 13.6726 15.3632 14.7489 15.3632C15.8924 15.3632 16.565 14.6233 16.565 13.6816C16.6323 12.6726 15.9596 12 14.8161 12ZM13.2018 26.2601H16.4305V16.6413H13.2018V26.2601Z"
                                                    fill="white"/>
                                            </svg>
                                        </a>
                                    </li>


                                    <li>
                                        <a href="https://github.com/samsampanda" target="_blank">
                                            <svg width="40" height="40" viewBox="0 0 16 16" fill="black"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C13.71 14.53 16 11.53 16 8C16 3.58 12.42 0 8 0Z"
                                                      fill="#24292E"/>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <div class="contactForm rounded-xl reveal-2">

                                <form class="formBox" id="Contact" action="https://formspree.io/f/xbjqrkvo"
                                      method="POST">
                                    <div class="inputBox  w50 pt-4">
                                        <input maxlength="25" type="text" name="Prénom" id="prenom" required>
                                        <span>Prénom</span>

                                    </div>
                                    <div class="inputBox w50  pt-4">
                                        <input maxlength="25" type="text" name="nom" id="nom" required>
                                        <span>Nom</span>
                                    </div>
                                    <div class="inputBox w50 pt-4">
                                        <input type="text" name="mail" maxlength="40" id="mail" required>
                                        <span>Adresse mail</span>
                                    </div>
                                    <div class="inputBox w50 pt-4">
                                        <input type="text" maxlength="10" max="10" name="Tél" id="telephone" required>
                                        <span>Numéro de téléphone</span>
                                    </div>
                                    <div class="inputBox w100 pt-4">
                                <textarea maxlength="1000" class="overflow-y-auto resize-none" name="Message"
                                          required></textarea>
                                        <span>Écrivez votre message ici...</span>
                                    </div>
                                    <div class="inputBox w100 text-center">
                                        <input type="submit" value="Envoyer">
                                    </div>
                                </form>

                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>
    </div>






    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script async>

        // On load
        setTimeout(function () {

            $('.loader').fadeToggle();
        }, 2000);

        setTimeout(function () {

            $('.loader_bg').fadeToggle();
        }, 2000);

        // TextAnimation
        const txtAnim = document.querySelector('h1');

        new Typewriter(txtAnim, {

            deleteSpeed: 10,
            loop: true,
            speed: 20

        })
            .typeString('<span style="font-size: 30px">Moi c\'est <strong>Samy Alexandre</strong> ! </span>')
            .pauseFor(1000)
            .deleteChars(27)
            .typeString('<span style="font-size: 30px">22 ans et étudiant <strong style="color: #ff6910"> Développeur Full Stack </strong> </span> ')
            .pauseFor(500)
            .start();

        // five slide

        const ratio = 0.1

        const options = {
            root: null,
            rootMargin: '0px',
            threshold: ratio
        }

        const handleIntersect = function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.intersectionRatio > ratio) {
                    entry.target.classList.add('reveal-visible')
                    observer.unobserve(entry.target)
                } else {

                }

            })
        }

        const observer = new IntersectionObserver(handleIntersect, options);
        document.querySelectorAll('.reveal-2').forEach(function (r) {
            observer.observe(r)
        })
        document.querySelectorAll('.reveal-1').forEach(function (a) {
            observer.observe(a)
        })


        // Carousel
        const config = {
            type: 'carousel',
            perView: 3,

        }

        new Glide('.glide', config).mount();



    </script>
    <style>



        img {
            height: 200px;
            width: 400px;
        }

        .w-custom {
            width: 400px;
        }

        .custom-police {
            font-family: 'Century Gothic';
        }






        /* Projects */

        /* width */
        .custom-overflow::-webkit-scrollbar {
            width: 10px;
        }

        .w-custom1 {
            width: 1928px;
        }

        .w-custom2 {
            width: 1924px;
        }

        .w-custom3 {
            width: 1924px;
        }

        .w-custom4 {
            width: 1924px;
        }

        .w-custom5 {
            width: 1924px;
        }

        /* Track */
        .custom-overflow::-webkit-scrollbar-track {
            background-color: rgb(255, 255, 255, 0.75); /* alternative solide */

            border-radius: 10px;
            border: 1px solid rgba(0, 0, 0);

        }

        /* Handle */
        .custom-overflow::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: black;
            width: 5px;

            opacity: 50%;
            border: 1px solid white;
        }


        .opacite-right {
            background-color: rgba(255, 255, 255, 0.75);
            /* alternative solide */
        }

        .opacite-left {
            background-color: rgb(255, 255, 255); /* alternative solide */
            background-color: rgba(255, 255, 255, 0.75);
        }

        .absolute-custom {
            top: 40%;
            right: 5%;
            position: absolute;

        }
    </style>

@endsection
