<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/4f3e1a72fd.js" crossorigin="anonymous"></script>
    <title>Tumblow - Login</title>
</head>
<body>
    <header class="hidden gap30 display-flex align-center padding-bottom-50">
        <a href="#" class="margin-right-logo display-flex align-center"><img id="logo" src="./img/Logo.png" alt="Tumblow logo"></a>
        <nav class="display-flex gap30 align-center">
            <div class="display-flex background-yellow gap5 radius-5 padding-5">
                <i class="fa-regular fa-pen-to-square color-white"></i>
                <a href="#" class="color-white">Create</a>
            </div>
            <a href="#" class="color-grey">Photos</a>
            <a href="#" class="color-grey">Videos</a>
            <a href="#" class="color-grey">Audios</a>
            <a href="#" class="color-grey">Texts</a>
        </nav>
        <div class="display-flex width30 position-relative align-center search-section color-grey">
            <i class="fa-solid fa-magnifying-glass color-grey position-absolute magnifying-glass padding-left-10"></i>
            <input type="text" id="search-barre" class="width100 radius-50 border-thickness padding-left-40">
        </div>
        <div id="language" class="display-flex align-center gap5 border-thickness radius-5 padding-5 color-grey">
            <a href="#">🇬🇧</a>
            <i class="fa-solid fa-chevron-down color-grey"></i>
        </div>
        <div class="display-flex gap5 align-center">
            <i class="fa-regular fa-sun color-grey"></i>
            <label class="switch position-relative display-flex">
                <input type="checkbox">
                <span class="slider border-thickness radius-50 position-absolute"></span>
            </label>
            <i class="fa-regular fa-moon color-grey"></i>
        </div>
    </header>
    <header class="justify-center to-hide">
        <a href="#" ><img id="logo" src="./img/Logo.png" alt="Tumblow logo"></a>
    </header>
    <main class="display-flex column align-center">
        <form action="#" class="display-flex column width50 padding-bottom-30">
            <h1 class="color-grey font24 padding-bottom-20">Login</h1>
            <div class="display-flex column padding-bottom-30">
                <label for="username" class="color-grey font13 padding-bottom-10">Username or email</label>
                <input id="username" type="text" placeholder="Username" class="color-grey font13 ">
            </div>
            <div class="display-flex column padding-bottom-10">
                <label for="password" class="color-grey font13 padding-bottom-10">Password</label>
                <input id="password" type="password" placeholder="Password" class="color-grey font13">
            </div>
            <div class="display-flex column align-center">
                <a href="#" class="color-grey font10 padding-bottom-10">I don't have an account</a>
                <button id="login" name="login" class="background-yellow color-white width70 border-thickness radius-5 font16">Login</button>
            </div>
        </form>
    </main>
    <footer  class="background-yellow display-flex column align-center gap5">
        <p class="color-white">Tumblow</p>
        <ul class="display-flex gap15">
            <li><a href="#" class="color-white font10">Contact</a></li>
            <li><a href="#" class="color-white font10">Privacy policy</a></li>
            <li><a href="#" class="color-white font10">User agreement</a></li>
            <li><a href="#" class="color-white font10">Tumblow rules</a></li>
        </ul>
        <p class="color-white font10">© 2025. All rights reserved.</p>
    </footer>
</body>
</html>