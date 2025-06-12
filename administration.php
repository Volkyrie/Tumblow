<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/4f3e1a72fd.js" crossorigin="anonymous"></script>
    <title>Administration</title>
</head>
<body>
    <header class="display-flex justify-space-between align-center">
        <i class="fa-solid fa-bars color-grey"></i>
        <a href="#" ><img id="logo" src="./img/Logo.png" alt="Tumblow logo"></a>
        <div class="display-flex align-center gap15">
            <i class="fa-solid fa-magnifying-glass color-grey"></i>
            <img class="profile-icon radius-50" src="./img/profile.png" alt="User profile">
        </div>
    </header>
    <main class="display-flex column align-center">
        <h2 class="color-grey font24 padding-bottom-20">Administration</h1>
        <form action="#" class="display-flex column position-relative width80 padding-bottom-20">
            <label for="blacklist" class="color-grey font13">Blacklist</label>
            <div class="border-thickness radius-5 padding-10 width90 color-grey admin-section">
                <div class="display-flex width100 justify-center padding-bottom-10 align-center gap5">
                    <input id="blacklist" class="admin-search radius-50 border-thickness color-grey" type="text">
                    <input class="border-thickness radius-5 font10 background-yellow color-white add-button" type="submit" value='Add'>
                </div>
                <div class="display-flex width100 column align-center gap5">
                    <div class=" display-flex gap24 align-center">
                        <p clas="color-grey font10">Bad word</p>
                        <button class="radius-50 background-red border-thickness color-white delete-button font10">Delete</button>
                    </div>
                    <div class=" display-flex gap24 align-center">
                        <p clas="color-grey font10">Bad word</p>
                        <button class="radius-50 background-red border-thickness color-white delete-button font10">Delete</button>
                    </div>
                    <div class=" display-flex gap24 align-center">
                        <p clas="color-grey font10">Bad word</p>
                        <button class="radius-50 background-red border-thickness color-white delete-button font10">Delete</button>
                    </div>
                </div>
            </div>
        </form>
        <form action="#" class="display-flex column position-relative width80 padding-bottom-20">
            <label for="blacklist" class="color-grey font13">Banned users</label>
            <div class="border-thickness radius-5 padding-10 width90 color-grey admin-section">
                <div class="display-flex width100 justify-center padding-bottom-10 align-center gap5">
                    <input id="blacklist" class="admin-search radius-50 border-thickness color-grey" type="text">
                    <input class="border-thickness radius-5 font10 background-yellow color-white add-button" type="submit" value='Add'>
                </div>
                <div class="display-flex width100 column align-center gap5">
                    <div class=" display-flex gap24 align-center">
                        <p clas="color-grey font10">Banned user</p>
                        <button class="radius-50 background-red border-thickness color-white delete-button font10">Delete</button>
                    </div>
                    <div class=" display-flex gap24 align-center">
                        <p clas="color-grey font10">Banned user</p>
                        <button class="radius-50 background-red border-thickness color-white delete-button font10">Delete</button>
                    </div>
                    <div class=" display-flex gap24 align-center">
                        <p clas="color-grey font10">Banned user</p>
                        <button class="radius-50 background-red border-thickness color-white delete-button font10">Delete</button>
                    </div>
                </div>
            </div>
        </form>
        <form action="#" class="display-flex column position-relative width80 padding-bottom-20">
            <label for="blacklist" class="color-grey font13">Banned posts</label>
            <div class="border-thickness radius-5 padding-10 width90 color-grey admin-section">
                <div class="display-flex width100 justify-center padding-bottom-10 align-center gap5">
                    <input id="blacklist" class="admin-search radius-50 border-thickness color-grey" type="text">
                    <input class="border-thickness radius-5 font10 background-yellow color-white add-button" type="submit" value='Add'>
                </div>
                <div class="display-flex width100 column align-center gap5">
                    <div class=" display-flex gap24 align-center">
                        <p clas="color-grey font10">Banned post</p>
                        <button class="radius-50 background-red border-thickness color-white delete-button font10">Delete</button>
                    </div>
                    <div class=" display-flex gap24 align-center">
                        <p clas="color-grey font10">Banned post</p>
                        <button class="radius-50 background-red border-thickness color-white delete-button font10">Delete</button>
                    </div>
                    <div class=" display-flex gap24 align-center">
                        <p clas="color-grey font10">Banned post</p>
                        <button class="radius-50 background-red border-thickness color-white delete-button font10">Delete</button>
                    </div>
                </div>
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