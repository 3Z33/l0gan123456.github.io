<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="correction-pagescss.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <script src="swiper-bundle2.min.js"></script>
    <title>PREMIUM TEAS</title>
</head>
<body>
    <header>
        <div class="title">
            <div>
                <h1>PREMIUM TEAS</h1>
                <h3>UNIQUE TEA EXPERIENCE 🇨🇦</h3>
            </div>
            <div>
                <box-icon type='logo' name='twitter'></box-icon>
                <box-icon name='instagram' type='logo'></box-icon>
                <box-icon name='facebook' type='logo'></box-icon>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="">BLACK TEA</a></li>
                <li><a href="">GREEN TEA</a></li>
                <li><a href="">HERBAL</a></li>
                <li><a href="">1LB BAGS</a></li>
                <li><a href="">DECAF</a></li>
                <li><a href="">COLLECTIONS</a></li>
                <li><a href="">FALL TEA</a></li>
                <li><a href="">GIFTS</a></li>
                <li><a href="">MORE</a></li>
                <li><a href="">SALE</a></li>
                <li><input type="text" id="search" placeholder="Search"> <box-icon name='search' color='#c2c2c2'></box-icon></li>
            </ul>
        </nav>
    </header>

    <div class="carrousel">
        <!-- div.slide${Slide $}*5 -->
        <div class="slide1">Slide 1</div>
        <div class="slide2">Slide 2</div>
        <div class="slide3">Slide 3</div>
        <div class="slide4">Slide 4</div>
        <div class="slide5">Slide 5</div>
    </div>
    <div class="display"></div>
        <div class="previous"></div>
        <div class="next"></div>
    </div>
    <script>
        const carrousel = new Swiper('.carrousel', {
            loop: true,
            autoplay: {
                delay: 4500,
                disableOnInteraction: true
            },
            pagination: {
                el: '.swiper-pagination'
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        })
    </script>

</body>
</html>