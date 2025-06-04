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
    <header class="display-flex justify-center align-center">
        <a href="#" ><img id="logo" src="./img/Logo.png" alt="Tumblow logo"></a>
    </header>
    <main class="display-flex column align-center">
        <form action="#" class="display-flex column width50">
            <h1 class="color-grey font24 padding-bottom-20">Sign up</h1>
            <div class="display-flex column padding-bottom-30">
                <label for="username" class="color-grey font13 padding-bottom-10">Username</label>
                <input id="username" type="text" placeholder="Username" class="color-grey font13 ">
            </div>
            <div class="display-flex column padding-bottom-30">
                <label for="email" class="color-grey font13 padding-bottom-10">Email</label>
                <input id="email" type="text" placeholder="email@address.com" class="color-grey font13 ">
            </div>
            <div class="display-flex column padding-bottom-30">
                <label for="password" class="color-grey font13 padding-bottom-10">Password</label>
                <input id="password" type="password" placeholder="Password" class="color-grey font13 padding-bottom-4">
                <p class="font9">Password must contain at least 8 characters and at least one capital letter and one number</p>
            </div>
            <div class="display-flex column padding-bottom-10">
                <label for="confirmedpassword" class="color-grey font13 padding-bottom-10">Confirm password</label>
                <input id="confirmedpassword" type="password" placeholder="Password" class="color-grey font13">
            </div>
            <div class="display-flex column align-center">
                <a href="#" class="color-grey font10 padding-bottom-10">I already have an account</a>
                <button id="signup" name="signup" class="background-yellow color-white width75 border-thickness radius-5 font16">Sign up</button>
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