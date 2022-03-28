<?php if (!isset($_COOKIE['fullname'])): ?>
    <div class="login">
        <div class="login__inner">
            <div class="login__inner-close" onclick="closeLogin()">
                <svg width="34" height="32" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="4.71774" y1="3.13037" x2="28.8316" y2="27.2443" stroke="black" stroke-width="6"
                          stroke-linecap="round"/>
                    <line x1="3" y1="-3" x2="37.1022" y2="-3"
                          transform="matrix(-0.707107 0.707107 0.707107 0.707107 33.1514 3.13037)" stroke="black"
                          stroke-width="6" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="login__inner-info">
                <h1 class="login__inner-info-title">Приключения с Медяшкой</h1>
                <div class="login__inner-info-img">
                    <img class="login__img" src="img/loginMedyashka1.png" alt="">
                </div>
            </div>
            <div class="login__inner-nav">
                <div class="login__inner-nav-info">
                    <p>Что вы хотите сделать?</p>
                </div>
                <button class="login__inner-nav-btn" onclick="showAutorization()">Войти в аккаунт</button>
                <button class="login__inner-nav-btn" onclick="showRegistration()">Зарегистрироваться</button>
            </div>
            <button class="login__inner-back" onclick="backNav(this)">
                <svg width="34" height="32" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="4.71774" y1="3.13037" x2="28.8316" y2="27.2443" stroke="black" stroke-width="6"
                          stroke-linecap="round"/>
                    <line x1="3" y1="-3" x2="37.1022" y2="-3"
                          transform="matrix(-0.707107 0.707107 0.707107 0.707107 33.1514 3.13037)" stroke="black"
                          stroke-width="6" stroke-linecap="round"/>
                </svg>
            </button>
            <form class="login__inner-autorization" action="#" method="post">
                <label class="login__inner-autorization-label label__field" for="email">Email</label>
                <input class="login__inner-autorization-input input__field" id="email" type="text" name="email"
                       autocomplete="off" required>
                <label class="login__inner-autorization-label label__field" for="pass">Пароль</label>
                <div class="login__inner-pass">
                    <input class="login__inner-autorization-input input__field input__password" id="pass"
                           type="password"
                           name="pass" required>
                    <div class="eye__pass open" onclick="viewPass(this)">
                        <img src="icon/eyePass.png" alt="">
                    </div>
                    <div class="eye__pass closed" onclick="hidePass(this)">
                        <img src="icon/closedEye.png" alt="">
                    </div>
                </div>
                <button class="login__inner-autorization-btn sbmt-btn" type="submit">Войти</button>
                <a class="login__inner-autorization-link" href="#" onclick="showRecoveryPassword()">Забыли пароль?</a>
            </form>

            <div class="login__inner-recovery firstStep">
                <p>Введите ваш email при регистрации</p>
                <label class="label__field" for="emailRec">Email</label>
                <div class="login__inner-email">
                    <input class="input__field" id="emailRec" type="text" name="email"
                           autocomplete="off" required>
                    <p class="message__email regMessage">Заполните поле!</p>
                </div>
                <button class="recovery-btn sbmt-btn firstStepBtn">Далее</button>
            </div>

            <div class="login__inner-recovery secondStep">
                <p>Введите код отправленный вам на почту</p>
                <label class="label__field" for="passRec">Код</label>
                <div class="login__inner-email">
                    <input class="input__field" id="passRec"
                           type="text"
                           name="pass" required>
                    <p class="message__email codeMessage">Заполните поле!</p>
                </div>
                <button class="recovery-btn sbmt-btn secondStepBtn">Далее</button>
            </div>

            <div class="login__inner-recovery thirdStep">
                <p>Введите новый пароль</p>
                <label class="login__inner-autorization-label label__field" for="newPass">Пароль</label>
                <div class="login__inner-pass">
                    <input class="login__inner-autorization-input input__field input__password" id="newPass"
                           type="password"
                           name="newPass" required>
                    <div class="eye__pass open" onclick="viewPass(this)">
                        <img src="icon/eyePass.png" alt="">
                    </div>
                    <div class="eye__pass closed" onclick="hidePass(this)">
                        <img src="icon/closedEye.png" alt="">
                    </div>
                </div>
                <button class="recovery-btn sbmt-btn thirdStepBtn">Изменить</button>
            </div>

            <form class="login__inner-registration" action="#" method="post" onkeydown="return event.key != 'Enter';">
                <div class="login__inner-registration-step reg__first">
                    <label class="login__inner-registration-label label__field" for="regEmail">Введите ваш Email</label>
                    <div class="login__inner-email">
                        <input class="login__inner-registration-input input__field" id="regEmail" type="text"
                               name="email"
                               autocomplete="off" required>
                        <p class="message__email regMessage">Заполните поле!</p>
                    </div>
                    <label class="login__inner-registration-label label__field" for="regPass">Придумайте пароль</label>
                    <div class="login__inner-pass">
                        <input class="login__inner-registration-input input__field input__password" id="regPass"
                               type="password"
                               name="pass" required>
                        <p class="message__pass regMessage">Заполните поле!</p>
                        <div class="eye__pass open" onclick="viewPass(this)">
                            <img src="icon/eyePass.png" alt="">
                        </div>
                        <div class="eye__pass closed" onclick="hidePass(this)">
                            <img src="icon/closedEye.png" alt="">
                        </div>
                    </div>
                    <a href="#" class="login__inner-registration-btn sbmt-btn continue-btn"
                       onclick="continueFunc(this)">Далее</a>
                </div>
                <div class="login__inner-registration-step reg__second">
                    <label class="login__inner-registration-label label__field" for="regName">Как к тебе
                        обращаться?</label>
                    <input class="login__inner-registration-input input__field" id="regName" type="text" name="userName"
                           autocomplete="off" required>
                    <label class="login__inner-registration-label label__field" for="regAge">Сколько тебе лет?</label>
                    <div class="login__inner-age">
                        <input class="login__inner-registration-input input__field age" id="regAge"
                               type="text"
                               name="age" required>
                    </div>
                    <button class="login__inner-registration-btn sbmt-btn" type="submit">Зарегистрироваться</button>
                </div>
            </form>
            <div class="login__inner-confirm">
                <div class="confirm__welcome">
                    <p>Добро пожаловать, <span class="fullname__user"></span></p>
                </div>
                <a href="cabinet.php">
                    <button class="confirm-btn sbmt-btn">Перейти в профиль</button>
                </a>
            </div>
        </div>
    </div>

    <script src="js/mainModules/loginTabs.js"></script>
    <script type="module" src="js/loginModules/recoveryFunctions.js"></script>
    <script src="js/mainModules/loginFormTabs.js"></script>
    <script src="js/mainModules/viewPass.js"></script>
    <script src="js/mainModules/registrationTabs.js"></script>
    <script type="module" src="js/mainModules/autorizationFetch.js"></script>
    <script type="module" src="js/mainModules/registrationFetch.js"></script>
<?php endif; ?>