<?php
session_start();
if (isset($_SESSION['auth'])!==true){
    header( 'Location:http://learner18.creativityprojectcenter.ru/auth.php');
}
if (($_SESSION['login']=='') & ($_SESSION['login']=='')){
    $_SESSION['stop_api']=0;
}else{$_SESSION['stop_api']=1;}
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <title>Склад строительных материвлов</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    <style>
        html{
            scroll-behavior: smooth;
        }
        body {
            display: grid;
            grid-template-areas:
        "header header"
        "article ads"
        "footer footer";
            grid-template-rows: 0.1fr 1fr 0.2fr;
            grid-template-columns: 1fr 15% ;
            height: 200vh;
            margin: 0;
            font-family: 'Comfortaa', cursive;
        }
        header, footer, article, nav, div {
            padding: 20px;
        }
        .welcome{
            grid-column: 1/6;
            color: #8E8D8A;
        }
        .menu{
            background-color:#EAE7DC;
            border:medium solid  #9e9d9a;
        }
        header{
            background-color: #D8C3A5;
            display: grid;
            grid-template-columns:1fr 1fr 1fr 1fr 1fr;
            grid-template-rows: 0.3fr 1fr;
            text-align: center;
            grid-gap: 1em;
            position: sticky;
            top: 0;
        }
        footer{
            background-color: #E85A4f;
            text-align: center;
            position: relative;
        }
        article{
            color: #ed8074;
            background-color:#EAE7DC;
            display: grid;
            grid-template-rows: 1fr 1fr 1fr 1fr;
            grid-template-columns: 1fr 1fr 1fr  ;
            justify-items: center;
            text-align: center;
        }
        article
        .items:hover{
            border:medium solid #E85A4f;
        }
        #pageHeader {
            grid-area: header;
        }
        #pageFooter {
            grid-area: footer;
        }
        #mainArticle {
            grid-area: article;
        }

        #siteAds {
            grid-area: ads;
            color:#E85A4f;
            background-color:#E9AD94;
        }
        img{
            width: 300px;
            height: 300px;
        }
        .skidka{
            display: grid;
            grid-column: 1/4;
            text-align: center;
        }
        .skidka
        img{
            width: 900px;
            height: 300px;
        }
        A {
            color:#8E8D8A;
            text-decoration: none;
        }
        A:visited {
            color: #8E8D8A;
            text-decoration: none;
        }
        A:active {
            color:#8E8D8A;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header id="pageHeader" >
        <div class="welcome">
            OOO "КИС-КИС" &nbsp;&nbsp;&nbsp;
            Здравствуйте,
            <?php
        if($_SESSION['login']!==""){echo $_SESSION['login'];}
        else{echo 'не хотите зайти с своего аккаунта?';}
            ?>
            <a href="auth.php" <?php $_SESSION['destroy']=1; ?> >,выход</a>
        </div>
        <div class="menu"><a href="index.php">Главная</a></div>
        <div class="menu"><a href="partners.php">Наши партнёры</a></div>
        <div class="menu"><a href="">Новости</a></div>
        <div class="menu"><a href="index.php#pageFooter">Контактная информация</a></div>
    </header>
    <article id="mainArticle">
        <div class="skidka">
            <h1>Наши товары</h1>
            <img src="skidka.jpg" alt="">
            <h2>Сегодня на все товары скидка 5%</h2>
        </div>
        <div class="items">
            <h2>Гипсокартонные системы</h2>
            <a href="">
                <img src="gips.jpg" alt="товар продукции">
            </a>
        </div>
        <div class="items">
            <h2>Сухие смеси</h2>
            <a href="">
                <img src="smesi.jpg" alt="товар продукции">
            </a>
        </div>
        <div class="items">
            <h2>Фасадные системы</h2>
            <a href="">
                <img src="istema.jpg" alt="товар продукции">
            </a>
        </div>
        <div class="items">
            <h2>Кровля</h2>
            <a href="">
                <img src="krovly.jpg" alt="товар продукции">
            </a>
        </div>
        <div class="items">
            <h2>Звукоизоляция</h2>
            <a href="">
                <img src="zvyko.jpg" alt="товар продукции">
            </a>
        </div>
        <div class="items">
            <h2>Крепеж</h2>
            <a href="">
                <img src="krep.jpg" alt="товар продукции">
            </a>
        </div>
        <div class="items">
            <h2>Общестроительные материалы</h2>
            <a href="">
                <img src="objestr.jpg" alt="товар продукции">
            </a>
        </div>
    </article>
    <div id="siteAds">здесь может быть ваша реклама</div>
    <footer id="pageFooter">
        <h2>Контакты:<br>
            <br>
            +89674491232 <br>
            <br>ivaflyry@gmail.com
        </h2>
    </footer>
</body>
</html>