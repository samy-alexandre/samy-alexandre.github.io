@extends('layouts.app')

@section('content')

    <nav class="main-nav">
        <ul class="ul__first relative">
            <li id="logo">
                <a href="#">b</a>
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
    <div class="outer-wrapper ">
        <div class="wrapper ">

            <div id="home" class="slide one flex  ">
                <p class="relative bg-white rounded-lg px-16 py-8 text-4xl self-center mx-auto">Voici mon accueil de BATARD </p>
            </div>

            <div id="resume" class="slide two flex">
                <p class="relative bg-white rounded-lg px-16 py-8 text-4xl self-center mx-auto">La je parle de moi </p>

            </div>

            <div id="projects" class="slide three flex">
                <p class="relative bg-white rounded-lg px-16 py-8 text-4xl self-center mx-auto">Mes projets </p>

            </div>

            <div id="tools" class="slide four flex">
                <p class="relative bg-white rounded-lg px-16 py-8 text-4xl self-center mx-auto">Mes outils</p>

            </div>

            <!-- Slide 5 -->
            <div id="contact" class="slide five">
                <section class="">
                    <div class="container">
                        <div class="contactinfo  reveal-1 rounded-lg">
                            <div>
                                <h2>Contact Info</h2>
                                <ul class="info py-2">
                                    <li>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M8.53162 2.93677C10.7165 1.66727 13.402 1.68946 15.5664 2.99489C17.7095 4.32691 19.012 6.70418 18.9998 9.26144C18.95 11.8019 17.5533 14.19 15.8075 16.0361C14.7998 17.1064 13.6726 18.0528 12.4488 18.856C12.3228 18.9289 12.1848 18.9777 12.0415 19C11.9036 18.9941 11.7693 18.9534 11.6508 18.8814C9.78243 17.6746 8.14334 16.134 6.81233 14.334C5.69859 12.8314 5.06584 11.016 5 9.13442C4.99856 6.57225 6.34677 4.20627 8.53162 2.93677ZM9.79416 10.1948C10.1617 11.1008 11.0292 11.6918 11.9916 11.6918C12.6221 11.6964 13.2282 11.4438 13.6748 10.9905C14.1214 10.5371 14.3715 9.92064 14.3692 9.27838C14.3726 8.29804 13.7955 7.41231 12.9073 7.03477C12.0191 6.65723 10.995 6.86235 10.3133 7.55435C9.63159 8.24635 9.42664 9.28872 9.79416 10.1948Z"
                                              fill="#130F26"/>
                                        <ellipse opacity="0.4" cx="12" cy="21" rx="5" ry="1" fill="#130F26"/>
                                        </svg>
                                        </span>
                                        <span>Je suis sur la 🌎</span>
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
                                <li><a href="https://www.linkedin.com/in/samy-alexandre-1b22551b7/">
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
                                    <a href="https://github.com/samsampanda">
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
                        <div class="contactForm rounded-lg reveal-2">

                            <form class="formBox" id="Contact" action="https://formspree.io/f/xbjqrkvo" method="POST">
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

    <script>

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




    </script>

@endsection
