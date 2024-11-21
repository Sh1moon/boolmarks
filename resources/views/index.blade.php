<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Rubik:ital,wght@0,300..900;1,300..900&family=Unbounded:wght@200..900&display=swap" rel="stylesheet">

    @vite(['resources/css/style.css', 'resources/js/main.js'])

</head>
<body>

    <div class="right-paper"></div>


    <aside class="aside">
        <div class="aside__inner">
            <img style="width:40px; heigth:52px; margin-bottom: 141px" src=".\storage\img\Logo.svg" alt="logo">

            <nav class="nav">
                <div class="nav_border-red">
                    <img src=".\storage\icons\iconoir_home.svg" alt="">
                </div>

                <img class="nav__img" src=".\storage\icons\book.svg" alt="">

                <img class="nav__img" src=".\storage\icons\timer.svg" alt="">

                <img class="nav__img" src=".\storage\icons\Heart.svg" alt="">

                <img class="nav__img" src=".\storage\icons\settings.svg" alt="">
            </nav>        
        </div>

    </aside>  

<main>
    <header class="header">


            <div class="search">
                <img style="position:absolute; top:10px; left:14px" src=".\storage\icons\search.svg" alt="">
                <form action="#">
                    <input class="header__inp" placeholder="Книги, аудио, жанры..." type="text">
                </form>                
            </div>

            <div class="admin">
                <div class="border-gray" >
                    <img src=".\storage\icons\user.svg" alt="">
                </div>
                <p class="admin__txt">Admin</p>
                <img src=".\storage\icons\notifications.svg" alt="">
            </div>

    </header>

    <section class="section1">
        <div class="left-wrapper">
            <h1 class="section1__title">
                Дорбо пожаловать и приятного чтения
            </h1>

            <p class="section1__txt">
            Самый большой сборник книг в интернете совершенно бесплатно. Погрузись в таинственный мир неизведанных миров и захватывающий приключений вместе с Закладками!
            </p>       
            
            <button type="button" class="btn">
                <a href="#">читать далее <img style="height:15px;" src=".\storage\icons\btnArrow.svg" alt=""></a>
            </button>
        </div>

        <div class="right-wrapper">
            <img style="width:216px; height:300px;box-shadow: -10px 10px 15px rgba(0, 0, 0, 0.40);" src=".\storage\img\bookImg.png" alt="">
            
            <div class="right-wrapper__textCont">
                <h1 class="right-wrapper__title">
                    Д. Роулинг: Гарри Потер и Орден Феникса
                </h1>

                <p class="count">
                    <span style="color:#E45F65">58 глав</span> / 640 страниц
                </p>

                <p class="right-wrapper__txt">
                Этот классический роман — одна из наиболее известных работ Д. Роулинг. В произведении раскрываются часто встречающиеся в творчестве автора темы: борьба с алкоголизмом, домашнее насилие, неудачники и безумнцы
                </p>
            </div>

        </div>

    </section>
</main>



</body>
</html>