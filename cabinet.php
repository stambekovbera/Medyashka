<?php
if (!isset($_COOKIE["fullname"])) {
    header('Location: index.php');
}
?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/cabinet.css">
    <link rel="stylesheet" href="css/exitModal.css">
    <link rel="icon" href="icon/icon.ico" type="image/x-icon"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Медяшка | Личный кабинет</title>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="header__inner">
            <div class="header__inner-top">
                <nav class="header__inner-nav">
                    <div class="header__inner-nav-logo">
                        <svg width="34" height="32" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="4.71774" y1="3.13037" x2="28.8316" y2="27.2443" stroke="black" stroke-width="6"
                                  stroke-linecap="round"/>
                            <line x1="3" y1="-3" x2="37.1022" y2="-3"
                                  transform="matrix(-0.707107 0.707107 0.707107 0.707107 33.1514 3.13037)"
                                  stroke="black"
                                  stroke-width="6" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <a class="header__inner-nav-link" href="index.php">Главная</a>
                    <a class="header__inner-nav-link" href="books.php">Книги</a>
                    <a class="header__inner-nav-link" href="aboutUs.php">Разработчики</a>
                </nav>
            </div>
            <div class="header__inner-bottom">
                <div class="header__inner-column">
                    <a class="header__inner-column-circle" href="#">
                        <svg width="32" height="33" viewBox="0 0 32 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.2155 32.0667C7.52392 32.1044 0.377233 24.8698 0.584475 16.0338C0.779156 7.61852 7.75 0.666511 16.4165 0.760712C25.0013 0.854912 32.104 8.0016 31.8716 16.8502C31.6518 25.2278 24.7375 32.1107 16.2155 32.0667ZM2.48733 16.4357C2.55641 24.3046 8.93693 30.3648 16.473 30.233C23.7704 30.1011 29.9562 24.1539 29.9562 16.4169C29.9562 8.54796 23.5255 2.4626 15.9643 2.60704C8.66689 2.73893 2.53757 8.70497 2.48733 16.4357Z"
                                  fill="#A45A04"/>
                            <path d="M12.9491 27.432C12.9491 23.7331 12.9491 20.0656 12.9491 16.3603C12.1327 16.3603 11.3414 16.3603 10.5312 16.3603C10.5312 15.1043 10.5312 13.886 10.5312 12.63C10.638 12.6237 10.7448 12.6111 10.8578 12.6111C11.4419 12.6111 12.0322 12.5986 12.6162 12.6174C12.8737 12.6237 12.9616 12.5546 12.9553 12.2909C12.9428 11.3363 12.9428 10.388 12.9491 9.43344C12.9553 8.35956 13.2568 7.38615 14.023 6.60742C14.764 5.85382 15.7123 5.44562 16.7422 5.38282C18.4001 5.28862 20.0644 5.30118 21.7286 5.26978C21.7474 5.26978 21.7662 5.28862 21.8039 5.30746C21.8039 6.56974 21.8039 7.83831 21.8039 9.13828C21.6846 9.14456 21.5716 9.15084 21.4648 9.15084C20.7112 9.15084 19.9576 9.15084 19.204 9.15084C18.4441 9.15712 17.9982 9.60928 17.9982 10.3566C17.9982 11.0663 17.9982 11.7822 18.0045 12.4918C18.0045 12.5107 18.0171 12.5295 18.0359 12.5986C19.2793 12.5986 20.5354 12.5986 21.8542 12.5986C21.6909 13.8734 21.5402 15.0918 21.3769 16.3541C20.2402 16.3541 19.1286 16.3541 17.9857 16.3541C17.9857 20.0718 17.9857 23.7519 17.9857 27.4446C16.2963 27.432 14.651 27.432 12.9491 27.432Z"
                                  fill="#A45A04"/>
                        </svg>
                    </a>
                    <a class="header__inner-column-circle" href="#">
                        <svg width="29" height="29" viewBox="0 0 29 29" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.02415 0C2.27194 0 0 2.27194 0 5.02415V21.9759C0 24.7281 2.27194 27 5.02415 27H21.9759C24.7281 27 27 24.7281 27 21.9759V5.02415C27 2.27194 24.7281 0 21.9759 0H5.02415ZM5.02415 2.45455H21.9759C23.4013 2.45455 24.5455 3.59872 24.5455 5.02415V21.9759C24.5455 23.4013 23.4013 24.5455 21.9759 24.5455H5.02415C3.59872 24.5455 2.45455 23.4013 2.45455 21.9759V5.02415C2.45455 3.59872 3.59872 2.45455 5.02415 2.45455ZM13.1548 8.85938C12.254 8.85078 11.4775 8.87717 11.0455 9.08949C10.7583 9.23063 10.5269 9.53131 10.6619 9.54972C10.8288 9.57181 11.2289 9.66078 11.429 9.93324C11.6879 10.2855 11.6591 11.0838 11.6591 11.0838C11.6591 11.0838 11.8097 13.2671 11.3139 13.5384C10.974 13.7237 10.514 13.3141 9.51136 11.5824C8.99714 10.6951 8.62926 9.74148 8.62926 9.74148C8.62926 9.74148 8.53292 9.53284 8.39915 9.43466C8.23715 9.31561 8.01562 9.28125 8.01562 9.28125L5.63778 9.3196C5.63778 9.3196 5.27052 9.31592 5.1392 9.47301C5.02139 9.61292 5.10085 9.89489 5.10085 9.89489C5.10085 9.89489 6.99975 14.3146 9.12784 16.5298C11.0817 18.5597 13.3082 18.4091 13.3082 18.4091H14.3054C14.3054 18.4091 14.611 18.3842 14.7656 18.2173C14.908 18.0639 14.8807 17.7571 14.8807 17.7571C14.8807 17.7571 14.8696 16.4206 15.4943 16.223C16.1104 16.0279 16.9176 17.5267 17.7571 18.1023C18.3916 18.538 18.8693 18.4474 18.8693 18.4474L21.0938 18.4091C21.0938 18.4091 22.2633 18.3348 21.7074 17.4119C21.662 17.3371 21.4021 16.7412 20.0582 15.4943C18.6518 14.1885 18.8236 14.3775 20.5185 12.1193C21.5506 10.7435 21.9897 9.90931 21.8608 9.54972C21.7381 9.20731 20.9787 9.3196 20.9787 9.3196H18.4474C18.4474 9.3196 18.241 9.31285 18.1023 9.39631C17.966 9.47731 17.8722 9.66477 17.8722 9.66477C17.8722 9.66477 17.4843 10.715 16.9517 11.6207C15.8275 13.5304 15.3716 13.6178 15.1875 13.5C14.7592 13.2239 14.8807 12.404 14.8807 11.8125C14.8807 9.96177 15.1709 9.17448 14.3438 8.97443C14.0688 8.90816 13.8581 8.86674 13.1548 8.85938Z"
                                  fill="#A45A04"/>
                        </svg>
                    </a>
                    <a class="header__inner-column-circle youtube" href="#">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.09814 19.4388C6.09814 21.1122 7.40476 22.5188 9.08587 22.5621C9.09344 22.5631 9.10155 22.5642 9.1102 22.5654C9.17199 22.5737 9.26145 22.585 9.38121 22.5983C9.62067 22.6247 9.98172 22.6589 10.4856 22.6928C11.493 22.7605 13.0738 22.827 15.3983 22.827C17.7098 22.827 19.3193 22.7605 20.3579 22.6929C20.8773 22.6591 21.2542 22.6251 21.5051 22.5989C21.6306 22.5858 21.7246 22.5747 21.7892 22.5666C21.8016 22.565 21.813 22.5635 21.8233 22.5622C23.5069 22.5218 24.8158 21.1138 24.8158 19.4388V12.4291C24.8158 10.7541 23.5069 9.34607 21.8233 9.30567C21.813 9.30433 21.8016 9.30287 21.7891 9.3013C21.7245 9.29315 21.6305 9.28203 21.505 9.26894C21.254 9.24277 20.8769 9.20872 20.3572 9.17494C19.318 9.1074 17.7072 9.04089 15.3932 9.04089C13.0713 9.04089 11.4917 9.10739 10.4849 9.17509C9.98135 9.20895 9.62046 9.24315 9.38109 9.2696C9.26137 9.28282 9.17194 9.29412 9.11017 9.30247C9.10153 9.30364 9.09343 9.30475 9.08587 9.30581C7.40436 9.34904 6.09814 10.756 6.09814 12.4291V19.4388ZM1.64844 16C1.64844 8.09783 7.87548 1.73828 15.4997 1.73828C23.1243 1.73828 29.3516 8.09786 29.3516 16C29.3516 23.902 23.1243 30.2618 15.4997 30.2618C7.87549 30.2618 1.64844 23.902 1.64844 16Z"
                                  stroke="#995300" stroke-width="2"/>
                            <path d="M12.9258 19.2975L18.5635 15.9527L12.9258 12.6079V19.2975Z" fill="#995300"/>
                        </svg>

                    </a>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="main__header">
            <div class="container">
                <div class="main__header-inner">
                    <button class="main__header-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <a class="main__header-link" href="#" onclick="showModal()">
                        <p>Выйти</p>
                        <svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3.16785" y="2.58691" width="19.2946" height="28.2124" rx="4" stroke="black"
                                  stroke-width="5"/>
                            <path d="M28.1537 24.0396L34.7929 17.4003C35.1835 17.0098 35.1835 16.3766 34.7929 15.9861L28.1537 9.34682"
                                  stroke="black" stroke-width="4" stroke-linecap="round"/>
                            <line x1="15.3152" y1="16.6592" x2="31.6608" y2="16.6592" stroke="black" stroke-width="5"
                                  stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="main__inner">
                <div class="main__inner-profile">
                    <div class="main__inner-profile-info">
                        <div class="main__inner-profile-info-fio">
                            <h2 class="main__inner-profile-info-fullname"><?php echo $_COOKIE['fullname']; ?></h2>
                            <h3 class="main__inner-profile-info-position"><?php echo $_COOKIE['position']; ?></h3>
                        </div>
                        <div class="main__inner-profile-info-img">
                            <svg class="main__inner-profile-info-bar" width="430" height="430">
                                <circle class="main__inner-profile-info-track" r="190" cx="215" cy="215"></circle>
                                <circle class="main__inner-profile-info-progress" r="190" cx="215" cy="215"></circle>
                            </svg>
                            <div class="main__inner-profile-info-avatar">
                                <img src="img/avatar.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="main__inner-profile-books">
                        <div class="main__inner-profile-books-item">
                            <h2 class="book__number">01</h2>
                            <h3 class="book__name">Город мастеров-металлургов, или сквозь пространство и время</h3>
                            <h4 class="book__page">Прочитано до: <?php echo $_COOKIE['firstBookLastPage']; ?> стр.</h4>
                            <a href="firstBook.php?page=<?php echo $_COOKIE['firstBookLastPage']; ?>"
                               class="book__link">
                                <svg width="55" height="55" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="firstGradient" x1="1" x2="0" y1="0" y2="1">
                                            <stop class="stop1" offset="0%" stop-color="#ffb98e"/>
                                            <stop class="stop3" offset="100%" stop-color="#ef5a00"/>
                                        </linearGradient>
                                    </defs>
                                    <circle r="25" transform="matrix(-1 0 0 1 26.5788 26.1285)"/>
                                    <path d="M34.9871 29.982C37.6537 28.4424 37.6537 24.5934 34.9871 23.0538L24.7907 17.1669C22.1241 15.6273 18.7907 17.5518 18.7907 20.631L18.7907 32.4047C18.7907 35.4839 22.1241 37.4084 24.7907 35.8688L34.9871 29.982Z"
                                          fill="white"/>
                                </svg>
                                <p class="book__link-text">Читать</p>
                            </a>
                        </div>
                        <div class="main__inner-profile-books-item">
                            <h2 class="book__number">02</h2>
                            <h3 class="book__name">Волшебное превращение, или добро пожаловать на завод</h3>
                            <h4 class="book__page">Прочитано до: <?php echo $_COOKIE['secondBookLastPage'] ?> стр.</h4>
                            <a href="secondBook.php?page=<?php echo $_COOKIE['secondBookLastPage'] ?>"
                               class="book__link">
                                <svg width="55" height="55" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="secondGradient" x1="1" x2="0" y1="0" y2="1">
                                            <stop class="stop1" offset="0%" stop-color="#CA7465"/>
                                            <stop class="stop3" offset="100%" stop-color="#772A1D"/>
                                        </linearGradient>
                                    </defs>
                                    <circle r="25" transform="matrix(-1 0 0 1 26.5788 26.1285)"/>
                                    <path d="M34.9871 29.982C37.6537 28.4424 37.6537 24.5934 34.9871 23.0538L24.7907 17.1669C22.1241 15.6273 18.7907 17.5518 18.7907 20.631L18.7907 32.4047C18.7907 35.4839 22.1241 37.4084 24.7907 35.8688L34.9871 29.982Z"
                                          fill="white"/>
                                </svg>
                                <p class="book__link-text">Читать</p>
                            </a>
                        </div>
                        <div class="main__inner-profile-books-item">
                            <h2 class="book__number">03</h2>
                            <h3 class="book__name">С мечтой на 100 лет вперед, или берегите природу</h3>
                            <h4 class="book__page">Прочитано до: <?php echo $_COOKIE['thirdBookLastPage'] ?> стр.</h4>
                            <a href="thirdBook.php?page=<?php echo $_COOKIE['thirdBookLastPage'] ?>" class="book__link">
                                <svg width="55" height="55" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="thirdGradient" x1="1" x2="0" y1="0" y2="1">
                                            <stop class="stop1" offset="0%" stop-color="#E0F184"/>
                                            <stop class="stop3" offset="100%" stop-color="#809417"/>
                                        </linearGradient>
                                    </defs>
                                    <circle r="25" transform="matrix(-1 0 0 1 26.5788 26.1285)"/>
                                    <path d="M34.9871 29.982C37.6537 28.4424 37.6537 24.5934 34.9871 23.0538L24.7907 17.1669C22.1241 15.6273 18.7907 17.5518 18.7907 20.631L18.7907 32.4047C18.7907 35.4839 22.1241 37.4084 24.7907 35.8688L34.9871 29.982Z"
                                          fill="white"/>
                                </svg>
                                <p class="book__link-text">Читать</p>
                            </a>
                        </div>
                        <div class="main__inner-profile-books-item">
                            <h2 class="book__number">04</h2>
                            <h3 class="book__name">Мой любимый город, или занимательные игры с Медяшкой</h3>
                            <h4 class="book__page">Прочитано до: <?php echo $_COOKIE['fourthBookLastPage'] ?> стр.</h4>
                            <a href="fourthBook.php?page=<?php echo $_COOKIE['fourthBookLastPage'] ?>"
                               class="book__link">
                                <svg width="55" height="55" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="fourthGradient" x1="1" x2="0" y1="0" y2="1">
                                            <stop class="stop1" offset="0%" stop-color="#FFE799"/>
                                            <stop class="stop3" offset="100%" stop-color="rgba(136, 106, 7, 0.26)"/>
                                        </linearGradient>
                                    </defs>
                                    <circle r="25" transform="matrix(-1 0 0 1 26.5788 26.1285)"/>
                                    <path d="M34.9871 29.982C37.6537 28.4424 37.6537 24.5934 34.9871 23.0538L24.7907 17.1669C22.1241 15.6273 18.7907 17.5518 18.7907 20.631L18.7907 32.4047C18.7907 35.4839 22.1241 37.4084 24.7907 35.8688L34.9871 29.982Z"
                                          fill="white"/>
                                </svg>
                                <p class="book__link-text">Читать</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class='main__inner-games'>
                    <h1 class="main__inner-games-title">Игры</h1>
                    <div class="main__inner-games-slider">
                        <div class="main__inner-games-slider-item">
                            <div class="slider-img">
                                <img src="img/gameImg6.svg" alt="">
                            </div>
                            <div class="slider-info">
                                <h2>Квиз-игра №1</h2>
                                <h3>Книга 1</h3>
                            </div>
                            <a href="games/firstBookGames/firstGame/index.php" class="slider-link">
                                <svg width="53" height="53" viewBox="0 0 53 53" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="sliderGradient" x1="1" x2="0" y1="0" y2="1">
                                            <stop class="stop1" offset="0%" stop-color="#F5EFFF"/>
                                            <stop class="stop3" offset="100%" stop-color="#9777D0"/>
                                        </linearGradient>
                                    </defs>
                                    <circle r="22" stroke="url(#sliderGradient)" stroke-width="4px"
                                            transform="matrix(-1 0 0 1 26.5788 26.1285)"
                                            fill="#D8C2FF"/>
                                    <path d="M34.9871 29.982C37.6537 28.4424 37.6537 24.5934 34.9871 23.0538L24.7907 17.1669C22.1241 15.6273 18.7907 17.5518 18.7907 20.631L18.7907 32.4047C18.7907 35.4839 22.1241 37.4084 24.7907 35.8688L34.9871 29.982Z"
                                          fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="main__inner-games-slider-item">
                            <div class="slider-img">
                                <img src="img/gameImg6.svg" alt="">
                            </div>
                            <div class="slider-info">
                                <h2>Квиз-игра №2</h2>
                                <h3>Книга 1</h3>
                            </div>
                            <a href="games/firstBookGames/secondGame/index.php" class="slider-link">
                                <svg width="53" height="53" viewBox="0 0 53 53" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="sliderGradient" x1="1" x2="0" y1="0" y2="1">
                                            <stop class="stop1" offset="0%" stop-color="#F5EFFF"/>
                                            <stop class="stop3" offset="100%" stop-color="#9777D0"/>
                                        </linearGradient>
                                    </defs>
                                    <circle r="22" stroke="url(#sliderGradient)" stroke-width="4px"
                                            transform="matrix(-1 0 0 1 26.5788 26.1285)"
                                            fill="#D8C2FF"/>
                                    <path d="M34.9871 29.982C37.6537 28.4424 37.6537 24.5934 34.9871 23.0538L24.7907 17.1669C22.1241 15.6273 18.7907 17.5518 18.7907 20.631L18.7907 32.4047C18.7907 35.4839 22.1241 37.4084 24.7907 35.8688L34.9871 29.982Z"
                                          fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="main__inner-games-slider-item">
                            <div class="slider-img">
                                <img src="img/gameImg6.svg" alt="">
                            </div>
                            <div class="slider-info">
                                <h2>Квиз-игра №1</h2>
                                <h3>Книга 2</h3>
                            </div>
                            <a href="games/secondBookGames/firstGame/index.php" class="slider-link">
                                <svg width="53" height="53" viewBox="0 0 53 53" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="sliderGradient" x1="1" x2="0" y1="0" y2="1">
                                            <stop class="stop1" offset="0%" stop-color="#F5EFFF"/>
                                            <stop class="stop3" offset="100%" stop-color="#9777D0"/>
                                        </linearGradient>
                                    </defs>
                                    <circle r="22" stroke="url(#sliderGradient)" stroke-width="4px"
                                            transform="matrix(-1 0 0 1 26.5788 26.1285)"
                                            fill="#D8C2FF"/>
                                    <path d="M34.9871 29.982C37.6537 28.4424 37.6537 24.5934 34.9871 23.0538L24.7907 17.1669C22.1241 15.6273 18.7907 17.5518 18.7907 20.631L18.7907 32.4047C18.7907 35.4839 22.1241 37.4084 24.7907 35.8688L34.9871 29.982Z"
                                          fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="main__inner-games-slider-item">
                            <div class="slider-img">
                                <img src="img/gameImg6.svg" alt="">
                            </div>
                            <div class="slider-info">
                                <h2>Квиз-игра №1</h2>
                                <h3>Книга 3</h3>
                            </div>
                            <a href="games/thirdBookGames/firstGame/index.php" class="slider-link">
                                <svg width="53" height="53" viewBox="0 0 53 53" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="sliderGradient" x1="1" x2="0" y1="0" y2="1">
                                            <stop class="stop1" offset="0%" stop-color="#F5EFFF"/>
                                            <stop class="stop3" offset="100%" stop-color="#9777D0"/>
                                        </linearGradient>
                                    </defs>
                                    <circle r="22" stroke="url(#sliderGradient)" stroke-width="4px"
                                            transform="matrix(-1 0 0 1 26.5788 26.1285)"
                                            fill="#D8C2FF"/>
                                    <path d="M34.9871 29.982C37.6537 28.4424 37.6537 24.5934 34.9871 23.0538L24.7907 17.1669C22.1241 15.6273 18.7907 17.5518 18.7907 20.631L18.7907 32.4047C18.7907 35.4839 22.1241 37.4084 24.7907 35.8688L34.9871 29.982Z"
                                          fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="main__inner-games-slider-item">
                            <div class="slider-img">
                                <img src="img/gameImg1.svg" alt="">
                            </div>
                            <div class="slider-info">
                                <h2>Составьте пословицу</h2>
                                <h3>Книга 4</h3>
                            </div>
                            <a href="games/fourthBookGames/proverbGame/index.php" class="slider-link">
                                <svg width="53" height="53" viewBox="0 0 53 53" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="sliderGradient" x1="1" x2="0" y1="0" y2="1">
                                            <stop class="stop1" offset="0%" stop-color="#F5EFFF"/>
                                            <stop class="stop3" offset="100%" stop-color="#9777D0"/>
                                        </linearGradient>
                                    </defs>
                                    <circle r="22" stroke="url(#sliderGradient)" stroke-width="4px"
                                            transform="matrix(-1 0 0 1 26.5788 26.1285)"
                                            fill="#D8C2FF"/>
                                    <path d="M34.9871 29.982C37.6537 28.4424 37.6537 24.5934 34.9871 23.0538L24.7907 17.1669C22.1241 15.6273 18.7907 17.5518 18.7907 20.631L18.7907 32.4047C18.7907 35.4839 22.1241 37.4084 24.7907 35.8688L34.9871 29.982Z"
                                          fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="main__inner-games-slider-item">
                            <div class="slider-img">
                                <img src="img/gameImg3.svg" alt="">
                            </div>
                            <div class="slider-info">
                                <h2>Головоломка «Спряталось слово»</h2>
                                <h3>Книга 4</h3>
                            </div>
                            <a href="games/fourthBookGames/findWordGame/index.php" class="slider-link">
                                <svg width="53" height="53" viewBox="0 0 53 53" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="sliderGradient" x1="1" x2="0" y1="0" y2="1">
                                            <stop class="stop1" offset="0%" stop-color="#F5EFFF"/>
                                            <stop class="stop3" offset="100%" stop-color="#9777D0"/>
                                        </linearGradient>
                                    </defs>
                                    <circle r="22" stroke="url(#sliderGradient)" stroke-width="4px"
                                            transform="matrix(-1 0 0 1 26.5788 26.1285)"
                                            fill="#D8C2FF"/>
                                    <path d="M34.9871 29.982C37.6537 28.4424 37.6537 24.5934 34.9871 23.0538L24.7907 17.1669C22.1241 15.6273 18.7907 17.5518 18.7907 20.631L18.7907 32.4047C18.7907 35.4839 22.1241 37.4084 24.7907 35.8688L34.9871 29.982Z"
                                          fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="main__inner-games-slider-item">
                            <div class="slider-img">
                                <img src="img/gameImg7.svg" alt="">
                            </div>
                            <div class="slider-info">
                                <h2>Стрелочный ребус</h2>
                                <h3>Книга 4</h3>
                            </div>
                            <a href="games/fourthBookGames/secondRebusGame/index.php" class="slider-link">
                                <svg width="53" height="53" viewBox="0 0 53 53" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="sliderGradient" x1="1" x2="0" y1="0" y2="1">
                                            <stop class="stop1" offset="0%" stop-color="#F5EFFF"/>
                                            <stop class="stop3" offset="100%" stop-color="#9777D0"/>
                                        </linearGradient>
                                    </defs>
                                    <circle r="22" stroke="url(#sliderGradient)" stroke-width="4px"
                                            transform="matrix(-1 0 0 1 26.5788 26.1285)"
                                            fill="#D8C2FF"/>
                                    <path d="M34.9871 29.982C37.6537 28.4424 37.6537 24.5934 34.9871 23.0538L24.7907 17.1669C22.1241 15.6273 18.7907 17.5518 18.7907 20.631L18.7907 32.4047C18.7907 35.4839 22.1241 37.4084 24.7907 35.8688L34.9871 29.982Z"
                                          fill="white"/>
                                </svg>
                            </a>
                        </div>
                        <div class="main__inner-games-slider-item">
                            <div class="slider-img">
                                <img src="img/gameImg5.svg" alt="">
                            </div>
                            <div class="slider-info">
                                <h2>Ребус</h2>
                                <h3>Книга 4</h3>
                            </div>
                            <a href="games/fourthBookGames/rebusGame/index.php" class="slider-link">
                                <svg width="53" height="53" viewBox="0 0 53 53" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="sliderGradient" x1="1" x2="0" y1="0" y2="1">
                                            <stop class="stop1" offset="0%" stop-color="#F5EFFF"/>
                                            <stop class="stop3" offset="100%" stop-color="#9777D0"/>
                                        </linearGradient>
                                    </defs>
                                    <circle r="22" stroke="url(#sliderGradient)" stroke-width="4px"
                                            transform="matrix(-1 0 0 1 26.5788 26.1285)"
                                            fill="#D8C2FF"/>
                                    <path d="M34.9871 29.982C37.6537 28.4424 37.6537 24.5934 34.9871 23.0538L24.7907 17.1669C22.1241 15.6273 18.7907 17.5518 18.7907 20.631L18.7907 32.4047C18.7907 35.4839 22.1241 37.4084 24.7907 35.8688L34.9871 29.982Z"
                                          fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<div class="exit__modal">
    <div class="exit__inner">
        <div class="exit-close" onclick="closeModal()">
            <svg width="34" height="32" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="4.71774" y1="3.13037" x2="28.8316" y2="27.2443" stroke="black" stroke-width="6"
                      stroke-linecap="round"/>
                <line x1="3" y1="-3" x2="37.1022" y2="-3"
                      transform="matrix(-0.707107 0.707107 0.707107 0.707107 33.1514 3.13037)" stroke="black"
                      stroke-width="6" stroke-linecap="round"/>
            </svg>
        </div>
        <div class="exit__inner-column">
            <p>Вы действительно хотите выйти из аккаунта?</p>
            <button onclick="closeModal()">Нет</button>
            <button class="exitBtn">Да</button>
        </div>
    </div>
</div>
<script src="js/mainModules/headerTabs.js"></script>
<script src="js/cabinetModules/exitModalFunc.js"></script>
<script type="module" src="js/cabinetModules/progressBar.js"></script>
<script type="module" src="js/cabinetModules/exitProfile.js"></script>
<script src="js/slickSlider/slick.min.js"></script>
<script src="js/slider/sliderCabinet.js"></script>
</body>
</html>