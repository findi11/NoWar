<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NoWar - @yield('page_title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <li class="nav-item">
                    <a class="h4 nav-link active font-weight-bolder text-center mx-5" href="/oplote">БМ Оплот</a>
                </li>
                <li class="nav-item">
                    <a class="h4 nav-link active font-weight-bolder text-center mx-5" href="/bogdana">Сау Богдана</a>
                </li>
                <li class="nav-item">
                    <a class="h4 nav-link active font-weight-bolder text-center mx-5" href="/shurk">Дрон Акула</a>
                </li>
                <li class="nav-item">
                    <a class="h4 nav-link active font-weight-bolder text-center mx-5" href="/grim2">Грім 2</a>
                </li>

            </div>

        </div>
    </nav>
    @yield('content')
    <footer>
        <div class="container bg-white">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <span class="h3">
                        Сайт створено групою розробників з Хмельницького
                    </span>
                    <p>
                        <span>
                            <br>
                            На сторінці представлені найвідоміша бойова техніка України, що саме зараз зашищає нашу
                            державу
                            від напливу орків, які бездушно знищують нашу інфраструктуру та нашу державу вцілому
                        </span>
                    </p>
                </div>
                <div class="col-sm-4 text-center">
                    <span class="h3">
                        Перегянути додаткову інформацію по кожній з технік можна тут:
                    </span>
                    <p>
                        <span>
                            <br>
                            <a href="https://uk.wikipedia.org/wiki/БМ_«Оплот»" class="link-info">БМ ОПЛОТ</a><br>
                            <a href="https://uk.wikipedia.org/wiki/2С22_«Богдана»" class="link-info">САУ БОГДАНА</a><br>
                            <a href="https://meta.ua/news/tech/58218-pohozh-na-akulu-v-ukraine-razrabotali-dron-dlya-glubinnoi-razvedki-i-korrektirovki-ognya-video/"
                                class="link-info">ДРОН АКУЛА</a><br>
                            <a href="https://uk.wikipedia.org/wiki/Грім_(ОТРК)" class="link-info">ГРІМ 2</a>
                        </span>
                    </p>

                </div>
                <div class="col-sm-4 text-center">
                    <span class="h3">
                        Зворотній зв'язок з модераторами сайту::
                    </span>
                    <p>
                        <span>
                            <br>
                            0987667543 <br>
                            0963456778 <br>
                            0963456778 <br>
                            0987667543
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
