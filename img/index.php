<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlatinumJyotish</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: black;
            color: white;
            /* Основной цвет фона */
        }

        .header-color {
            background-color: black;
            color: white;
            /* Deep Blue / Indigo для шапки */
        }

        h2 {
            color: white;
            background-color: rgba(10, 10, 10, 0.8);
            /* Deep Blue / Indigo для заголовков */
        }

        p {
            color: white;
            background-color: rgba(10, 10, 10, 0.7);
            /* Dark Grey / Charcoal для текста */
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            background-color: black;
            color: white;
            /* Gold / Brass Tones для текста в навигационной панели */
        }

        .section-header {
            background-color: black;
            /* Warm Beige / Taupe для фонов заголовков разделов */
            color: white;
        }

        .btn-primary {
            background-color: #800000;
            /* Burgundy / Deep Red для кнопок */
            border-color: #800000;
        }

        .btn-primary:hover {
            background-color: #b30000;
            /* Светлый оттенок Burgundy / Deep Red при наведении */
            border-color: #b30000;
        }

        .footer {
            background-color: #2e8b57;
            /* Earthy Green для футера */
            color: #fff;
        }

        .container {
            padding: 0;
            /* Убирает внутренние отступы */
            margin: 0;
            /* Убирает внешние отступы */
        }


        .section-box {
            /* padding: 20px; */
            width: 100%;
            box-sizing: border-box;
            border-radius: 10px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            color: white;
            margin: 0 auto;
            /* Убирает внешние отступы */
            padding: 0;
            /* Убирает внутренние отступы */
        }

        /* Стили логотипа */
        .logo {
            max-width: 100px;
            height: auto;
        }


        /* и так далее для других разделов */

        /* Дополнительные стили по вашему усмотрению */
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark header-color">
        <img src="favicon.ico" alt="PayAlipay Logo" class="logo mb-3">
        <a class="navbar-brand" href="#">AstroPlatinum</a>
    </nav>


    <!-- Разделы сайта -->

    <!-- Раздел "Джйотиш" -->
    <section id="jyotish" class="section-box" data-background-image="jyotish.png">
        <h2>Джйотиш</h2>
        <p>Описание астрологии Джйотиш и её возможностей...
        </p>
        <!-- Место для иллюстрации -->
    </section>

    <!-- Раздел "Карьера и профессиональный рост" -->
    <section id="career" class="section-box" data-background-image="career.png">
        <h2>Карьера и профессиональный рост</h2>
        <p>Описание проблемы построения карьеры и как астрология может помочь в её решении...</p>
        <!-- Место для иллюстрации -->
    </section>

    <!-- Раздел "Финансы и инвестиции" -->
    <section id="finance" class="section-box" data-background-image="finance.png">
        <h2>Финансы и инвестиции</h2>
        <p>Описание проблемы грамотных инвестиций и как астрология может помочь в её решении...</p>
        <!-- Место для иллюстрации -->
    </section>

    <!-- Раздел "Эмиграция" -->
    <section id="advantages" class="section-box" data-background-image="emigration.png">
        <h2>Эмиграция</h2>
        <p>Описание проблемы выбора момента и страны для эмиграции и как астрология может помочь в её решении...</p>
        <!-- Место для иллюстрации -->
    </section>

    <!-- Раздел "Партнерские и личные отношения" -->
    <section id="relationships" class="section-box" data-background-image="relationships.png">
        <h2>Партнерские и личные отношения</h2>
        <p>Описание проблемы партнерских и личных отношений и как астрология может помочь в её решении...</p>
        <!-- Место для иллюстрации -->
    </section>

    <!-- Раздел "Здоровье и благополучие" -->
    <section id="health" class="section-box" data-background-image="health.png">
        <h2>Здоровье и благополучие</h2>
        <p>Описание проблемы здоровья и благополучия и как астрология может помочь в её решении...</p>
        <!-- Место для иллюстрации -->
    </section>

    <!-- Раздел "Духовный рост" -->
    <section id="spiritual" class="section-box" data-background-image="spiritual.png">
        <h2>Духовный рост</h2>
        <p>Описание проблемы духовного роста и как астрология может помочь в её решении...</p>
        <!-- Место для иллюстрации -->
    </section>

    <!-- Раздел "Преимущества" -->
    <section id="advantages" class="section-box" data-background-image="advantages.png">
        <h2>Преимущества</h2>
        <p>Описание преимуществ обращения к нам и как астрология может помочь в решении ваших проблем...</p>
        <!-- Место для иллюстрации -->
    </section>

    <!-- Раздел "Отзывы клиентов" -->
    <section id="testimonials">
        <h2>Отзывы клиентов</h2>
        <!-- Пример отзыва клиента -->
        <div class="testimonial">
            <img src="path_to_avatar.jpg" alt="Аватар клиента"> <!-- Аватар клиента -->
            <p class="client-name">Имя Клиента</p>
            <p>Отзыв клиента...</p>
        </div>
        <div class="testimonial">
            <img src="path_to_avatar.jpg" alt="Аватар клиента"> <!-- Аватар клиента -->
            <p class="client-name">Имя Клиента</p>
            <p>Отзыв клиента...</p>
        </div>
        <div class="testimonial">
            <img src="path_to_avatar.jpg" alt="Аватар клиента"> <!-- Аватар клиента -->
            <p class="client-name">Имя Клиента</p>
            <p>Отзыв клиента...</p>
        </div>
        <!-- Место для иллюстрации -->
        <!-- Добавьте дополнительные отзывы по аналогии -->
    </section>

    <div class="container mt-5">

        <!-- Раздел "Заказать консультацию" -->
        <section id="consultation-form">
            <h2>Заказать консультацию</h2>
            <!-- Форма для консультации -->
            <form action="path_to_your_form_handling_script.php" method="POST">

                <!-- Радиокнопки "Тип консультации" -->
                <div class="form-group">
                    <label>Тип консультации</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="consultationType" id="text" value="text" checked>
                        <label class="form-check-label" for="text">
                            Текстовая - бесплатно
                        </label>
                        <small class="form-text text-muted">
                            Вы получите PDF с результатом
                        </small>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="consultationType" id="text" value="text">
                        <label class="form-check-label" for="text">
                            Аудио - 1.000р
                        </label>
                        <small class="form-text text-muted">
                            Вы получите аудиозапись с результатом
                        </small>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="consultationType" id="text" value="text">
                        <label class="form-check-label" for="text">
                            Текстовая+аудио - 2.000р
                        </label>
                        <small class="form-text text-muted">
                            Вы получите и PDF, и аудио с результатом
                        </small>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="consultationType" id="text" value="text">
                        <label class="form-check-label" for="text">
                            Личная - 50.000р
                        </label>
                        <small class="form-text text-muted">
                            Онлайн-видеозвонок с астрологом
                        </small>
                    </div>
                </div>

                <!-- Чек-боксы "Тип запроса" -->
                <div class="form-group">
                    <label>Тип запроса</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="requestType[]" id="career" value="career">
                        <label class="form-check-label" for="career">
                            Карьера и профессиональный рост - 10.000р
                        </label>
                        <small class="form-text text-muted">
                            Определить свои сильные стороны, найти подходящую работу и развиваться в карьере (в том числе IT)
                        </small>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="requestType[]" id="career" value="career">
                        <label class="form-check-label" for="career">
                            Финансы и инвестиции - 10.000р
                        </label>
                        <small class="form-text text-muted">
                            Вы получите рекомендации на 1 год, когда лучше покупать, когда продавать, когда рисковать, а когда не предпринимать лишних действий. Также вы узнаете сферу, рекомендуемую вам для инвестиций
                        </small>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="requestType[]" id="career" value="career">
                        <label class="form-check-label" for="career">
                            Эмиграция и переезд - 10.000р
                        </label>
                        <small class="form-text text-muted">
                            Определить наилучший момент для переезда или эмиграции, выбрать подходящую страну и город, а также подготовиться к адаптации в новой среде
                        </small>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="requestType[]" id="career" value="career">
                        <label class="form-check-label" for="career">
                            Партнерские и личные отношения - 10.000р
                        </label>
                        <small class="form-text text-muted">
                            Понять свои отношения с партнерами, улучшить коммуникацию и научиться решать конфликты. Определить периоды жизни для построения семьи. Получить характеристики идеальных партнеров для бизнеса и для отношений
                        </small>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="requestType[]" id="career" value="career">
                        <label class="form-check-label" for="career">
                            Здоровье и благополучие - 10.000р
                        </label>
                        <small class="form-text text-muted">
                            Понять, какие аспекты здоровья нуждаются в большем внимании, научиться управлять своими эмоциями и стрессом
                        </small>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="requestType[]" id="career" value="career">
                        <label class="form-check-label" for="career">
                            Духовный рост - 10.000р
                        </label>
                        <small class="form-text text-muted">
                            Понять свои жизненные цели и миссию, а также научиться практиковать медитацию и другие духовные практики для личностного роста
                        </small>
                    </div>
                </div>

                <!-- Комментарий -->
                <div class="form-group">
                    <label for="comment">Комментарий</label>
                    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                </div>

                <!-- Дата рождения -->
                <div class="form-group">
                    <label for="dateOfBirth">Дата рождения</label>
                    <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" required>
                </div>

                <!-- Дополнительные поля в зависимости от выбора времени рождения -->
                <!-- Это требует JavaScript для динамического отображения -->
                <!-- Радиокнопки для времени рождения -->
                <div class="form-group">
                    <label>Время рождения</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="birthTimeOption" id="exactTime" value="exact" checked>
                        <label class="form-check-label" for="exactTime">Известно точно</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="birthTimeOption" id="approximateTime" value="approximate">
                        <label class="form-check-label" for="approximateTime">Известно примерно</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="birthTimeOption" id="unknownTime" value="unknown">
                        <label class="form-check-label" for="unknownTime">Неизвестно</label>
                    </div>
                </div>

                <!-- Контейнеры для дополнительных полей -->
                <div id="exactTimeFields" style="display: none;">
                    <div class="form-group">
                        <label for="exactBirthTime">Время рождения</label>
                        <input type="time" class="form-control" id="exactBirthTime" name="exactBirthTime">
                    </div>
                </div>

                <div id="approximateTimeFields" style="display: none;">
                    <!-- Поля для примерного времени рождения -->
                    <div class="form-group">
                        <label for="beginInterval">Начало промежутка</label>
                        <input type="time" class="form-control" id="beginInterval" name="beginInterval">
                    </div>
                    <div class="form-group">
                        <label for="endInterval">Конец промежутка</label>
                        <input type="time" class="form-control" id="endInterval" name="endInterval">
                    </div>
                </div>

                <div id="rectificationFields" style="display: none;">
                    <!-- Поля для ректификации времени рождения -->
                    <div id="eventList"></div>
                    <button type="button" id="addEventButton" class="btn btn-primary">Добавить событие</button>
                    <p>Введите данные для ректификации. Введите даты ключевых событий вашей жизни, чтобы помочь астрологу точнее определить время вашего рождения.</p>
                </div>

                <!-- Место рождения -->
                <div class="form-group">
                    <label for="birthPlace">Место рождения</label>
                    <input type="text" class="form-control" id="birthPlace" name="birthPlace" required>
                </div>

                <!-- Email/Telegram -->
                <div class="form-group">
                    <label for="contact">Email/Telegram</label>
                    <input type="text" class="form-control" id="contact" name="contact" required>
                </div>

                <!-- Кнопка отправки -->
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </section>

    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Ваш JavaScript код здесь -->


    <script>
        window.onload = function() {
            var sections = document.querySelectorAll('.section-box');

            sections.forEach(function(section) {
                var imageSrc = section.getAttribute('data-background-image'); // Получение URL изображения
                var image = new Image();
                image.onload = function() {
                    var height = this.height;
                    section.style.minHeight = height + 'px'; // Установка минимальной высоты раздела
                };
                if (imageSrc) {
                    section.style.backgroundImage = 'url("' + imageSrc + '")'; // Установка фонового изображения
                }
                image.src = imageSrc;
            });
        };


        document.addEventListener('DOMContentLoaded', function() {
            // Функция для добавления события
            function addEventField() {
                const eventList = document.getElementById('eventList');
                const eventCount = eventList.getElementsByClassName('event').length;
                if (eventCount < 20) {
                    const newEvent = document.createElement('div');
                    newEvent.classList.add('event'); // Добавление класса 'event'
                    newEvent.innerHTML = `
            <div class="form-group">
                <label>Дата события</label>
                <input type="date" class="form-control" name="eventDate[]">
            </div>
            <div class="form-group">
                <label>Описание события</label>
                <input type="text" class="form-control" name="eventDescription[]">
            </div>
            <button type="button" class="btn btn-danger removeEvent">Удалить</button>
        `;
                    eventList.appendChild(newEvent);
                }
            }


            // Функция для удаления события
            function removeEventField(event) {
                if (event.target.classList.contains('removeEvent')) {
                    const eventItem = event.target.parentElement;
                    eventItem.remove();
                }
            }

            // Обработчик для добавления событий
            const addEventButton = document.getElementById('addEventButton');
            addEventButton.addEventListener('click', function() {
                addEventField();
            });

            // Обработчик для удаления событий
            const eventList = document.getElementById('eventList');
            eventList.addEventListener('click', function(event) {
                removeEventField(event);
            });

            // Инициализация первого события
            addEventField();
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function toggleBirthTimeFields() {
                const exactTimeFields = document.getElementById('exactTimeFields');
                const approximateTimeFields = document.getElementById('approximateTimeFields');
                const rectificationFields = document.getElementById('rectificationFields');

                const birthTimeOption = document.querySelector('input[name="birthTimeOption"]:checked').value;

                exactTimeFields.style.display = birthTimeOption === 'exact' ? 'block' : 'none';
                approximateTimeFields.style.display = birthTimeOption === 'approximate' ? 'block' : 'none';
                rectificationFields.style.display = birthTimeOption === 'unknown' ? 'block' : 'none';
            }

            const birthTimeOptions = document.querySelectorAll('input[name="birthTimeOption"]');
            birthTimeOptions.forEach(option => option.addEventListener('change', toggleBirthTimeFields));

            toggleBirthTimeFields(); // вызов функции при загрузке страницы
        });
    </script>


</body>

</html>