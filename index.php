<?php
include ("config.php");
?><!DOCTYPE html>


<html>
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,200;1,400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400&display=swap" rel="stylesheet">
        <!--Metas-->
        <title><?php echo $name ?></title>
        <link rel="icon" type="image/png" href="<?php echo $logo ?>">
        <meta name="theme-color" content="<?php echo $theme ?>">
        <meta name="og:url" content="<?php echo $metaurl ?>">
        <meta name="og:title" content="<?php echo $metatitle ?>">
        <meta name="og:description" content="<?php echo $metadescription ?>">
        <meta name="og:image" content="<?php echo $logo ?>">
        <!--End Metas-->

        <!-- CSS -->
        <style>
            body {
	background-color: #212121;
    overflow: hidden;
    margin: 0px;
    padding: 0px;
    }

    .navbar {
	display: flex;
	width: 80%;
	position: fixed;
	align-items: center;
	justify-content: center;
	padding: 3vh 10%;
	z-index: 5;
	transition: all .5s ease;
    }


    .navbar .left {
	display: flex;
	width: 35%;
	align-items: center;
	justify-content: flex-start;
	opacity: 1;
	transition: all .5s ease;
    }    


    .navbar .left img {
	height: 7.5vh;
	width: auto;
    right: 0px;
    float: left;
    }

    .overlay{
    position:absolute;
    top:0;
    left:0;
    height:0;
    bottom:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.4);
    }

    .navbar .right {
    font-family: 'Noto Sans KR', sans-serif;
    color: white;
	width: 65%;
	text-align: right;
    }

    .navbar .right a {
	font-size: 2.5vh;
	color: white;
	margin-left: 2%;
	text-decoration: none;
	position: relative;
    }

    .top {
    font-family: 'Noto Sans KR', sans-serif;
    font-size: medium;
	height: 41vh;
	width: 100%;
	background: url("<?php echo $background ?>");
	background-size: cover;
	background-repeat: no-repeat;
	background-position: top left;
    color: white;
    }

    .box {
    font-family: 'Exo' sans-serif;
    font-size: large;
    border:  15px rgba(33, 33, 33, 0.5);
    border-style: hidden;
    color: white;
    background: rgba(33, 33, 33, 0.5);
    text-align: center;
    width: auto;
    height: 450px;

    }

    .footer {
    font-family: 'Noto Sans KR', sans-serif;
	padding: 2.5vh 10%;
	width: 80%;
	background-color: #141414;
	text-align: center;
	font-size: 1.75vh;
	color: white;
	margin: 0;
    }

    .top .screen {
	display: flex;
	height: 100%;
	width: 100%;
	background-color: rgba(0, 0, 0, .5);
	align-items: center;
	justify-content: center;
	text-align: center;
    }

    .top .screen .center .img {
	display: inline-block;
	height: 25vh;
	width: 25vh;
	border-radius: 50%;
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
	background-color: #212121;
	border: .25vh solid #00ccff;
	margin-bottom: 4vh;
    }

    .top .screen .center h1 {
	font-size: 8vh;
	color: #fff;
	margin: 0;
	margin-bottom: 3vh;
    }

    .top .screen .center p {
	font-size: 1.75vh;
	color: #fff;
	margin: 0;
	padding: 0 15%;
    }

    </style>
    <!-- End CSS -->
    </head>
        <div class="top">
            <div class="top screen">
                <h1>Terms Of Service</h1>
                <p> (TOS)</p>
            </div>
        </div>

        <!-- Start TOS Text -->
            <div class="box"><br>
            <?php echo $tos.PHP_EOL ?>
            </div>
        <!-- End TOS Text -->
        

    <footer>
        <div class="footer">
            <p><?php echo $footer ?></p>
        </div>
    </footer>
</html>
