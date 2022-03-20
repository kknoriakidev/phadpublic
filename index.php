<?php

/* Include files */
require_once 'include/SourceQuery/bootstrap.php';
require_once 'config.php';
require_once 'include/servers.php';

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/fontawesome/fontawesome.min.css">
    <link rel="stylesheet" href="assets/fontawesome/solid.min.css">
    <link rel="stylesheet" href="assets/fontawesome/brands.min.css">
    <link rel="stylesheet" href="assets/slick/slick.css"/>
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Title -->
    <title>PHAD AWP PUBLIC</title>
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-body">
            <span class="preloader-svg">
        </div>
    </div>

    <!-- Header -->
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-2 header-left">
                    <div class="header-logo">
                        <a href="./">NMPR</a>
                    </div>
                </div>
                <div class="col-md-10 header-right">
                    <nav class="header-menu">
                        <ul class="header-menu-list">
                            <li><a href="./">Главная</a></li>
                            <li><a href="#servers">Сервера</a></li>
                            <li><a href="#">Донат</a></li>
                            <li><a href="#">Статистика</a></li>
                            <li><a href="#">Банлист</a></li>
                        </ul>
                        <a href="" class="header-menu-toggle">
                            <i class="fas fa-bars"></i>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="header-slider">
            <div class="header-slider-item" style="background-image: url('<?=$slides['main']['img']?>')">
                <div class="header-slider-item-overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="header-slider-banner">
                                    <h1><?=$slides['main']['title']?></h1>
                                    <h3><?=$slides['main']['desc']?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php foreach ($slides['optional'] as $value): ?>
            <div class="header-slider-item" style="background-image: url('<?=$value['img']?>')">
                <div class="header-slider-item-overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="header-slider-content">
                                    <h2><?=$value['title']?></h2>
                                    <h4><?=$value['desc']?></h4>
                                    <a href="<?=$value['link']?>"><button>Подробнее</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="header-slider-arrows">
            <button class="header-slider-arrow-prev"><i class="fas fa-chevron-left fa-3x"></i></button>
            <button class="header-slider-arrow-next"><i class="fas fa-chevron-right fa-3x"></i></button>
        </div>
    </div>

    <!-- Servers -->
    <div id="servers">
        <div class="container">
            <div class="slider">
                <?php foreach ($information as $value): ?>
                    <?php if (isset($value['Error'])): ?>
                        <div class="slider-item" style="background-image: url('assets/images/maps/de_dust2.jpg')">
                            <div class="slider-item-overlay">
                                <div class="slider-item-name">
                                    <h1><?=$value['GameIp'].':'.$value['GamePort']?> (Ошибка)</h1>
                                </div>
                                <div class="slider-item-players">
                                    <h1>0</h1>
                                </div>
                                <div class="slider-item-play">
                                    <button disabled>Играть</button>
                                </div>
                            </div>
                            <div class="slider-item-bar">
                                <div style="width: 0"></div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="slider-item" style="background-image: url('assets/images/maps/<?=$value['Image']?>')">
                            <div class="slider-item-overlay">
                                <div class="slider-item-name">
                                    <h1><?=$value['HostName']?></h1>
                                </div>
                                <div class="slider-item-players">
                                    <h1><?=$value['Players'].'/'.$value['MaxPlayers']?></h1>
                                </div>
                                <div class="slider-item-play">
                                    <a href="steam://connect/<?=$value['GameIp'].':'.$value['GamePort']?>/"><button>Играть</button></a>
                                </div>
                            </div>
                            <div class="slider-item-bar">
                                <div style="width: <?=$value['Online']?>%"></div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="slider-arrows">
                <button class="slider-arrow-prev"><i class="fas fa-arrow-left"></i></button>
                <button class="slider-arrow-next"><i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </div>

    <!-- Info -->
    <div id="info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="info-img" src="assets/images/info-img.png">
                </div>
                <div class="col-md-6">
                    <div class="points">
                        <div class="info-point">
                            <i class="fas fa-tachometer-alt info-point-box"></i>
                            <h3 class="info-point-text">Один из самый низких пингов в России и СНГ</h3>
                        </div>
                        <div class="info-point">
                            <i class="fas fa-clock info-point-box"></i>
                            <h3 class="info-point-text">Проект работает 24/7</h3>
                        </div>
                        <div class="info-point">
                            <i class="fas fa-candy-cane info-point-box"></i>
                            <h3 class="info-point-text">Мы проводим конкурсы, турниры и акции</h3>
                        </div>
                        <div class="info-point">
                            <i class="fas fa-crown info-point-box"></i>
                            <h3 class="info-point-text">Частые обновления</h3>
                        </div>
                        <div class="info-point">
                            <i class="fas fa-download info-point-box"></i>
                            <h3 class="info-point-text">Система привилегий</h3>
                        </div>
                        <div class="info-point">
                            <i class="fas fa-check info-point-box"></i>
                            <h3 class="info-point-text">Cтатистика игроков и многое другое!</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-links">
                        <a href="#"><button class="footer-link-button" style="background-color: #4c75a3;"><i class="fab fa-vk fa-lg"></i></button></a>
                        <a href="#"><button class="footer-link-button" style="background-color: #7289da"><i class="fab fa-discord fa-lg"></i></button></a>
                        <a href="#"><button class="footer-link-button" style="background-color: #333333"><i class="fab fa-steam fa-lg"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ScrollTop -->
    <button class="scrolltop"><i class="fas fa-angle-up"></i></button>

    <!-- Scripts -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/slick/slick.min.js"></script>
</body>
</html>