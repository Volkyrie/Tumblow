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
    <header class="display-flex justify-space-between align-center">
        <i class="fa-solid fa-bars color-grey"></i>
        <a href="#" ><img id="logo" src="./img/Logo.png" alt="Tumblow logo"></a>
        <div class="display-flex align-center gap15">
            <i class="fa-solid fa-magnifying-glass color-grey"></i>
            <img class="profile-icon" src="./img/profile.png" alt="User profile">
        </div>
    </header>
    <main class="display-flex column align-center">
        <form action="#" class="display-flex column width50">
            <h1 class="color-grey font24 padding-bottom-20">Create a post</h1>
            <div class="display-flex column padding-bottom-30">
                <label for="title" class="color-grey font13 padding-bottom-10">Title</label>
                <input id="title" type="text" placeholder="Title" class="color-grey font13 ">
            </div>
            <div class="display-flex column padding-bottom-30">
                <label for="file" class="color-grey font13 padding-bottom-10">Content</label>
                <div class="flex position-relative">
                    <span class="file-icon"></span><input id="file" type="file" placeholder="Your file here" class="color-grey font13 border-box width100">                             
                </div>
            </div>
            <div class="display-flex column padding-bottom-30">
                <label for="tags" class="color-grey font13 padding-bottom-10">Tags</label>
                <input id="tags" type="text" placeholder="Tags" class="color-grey font13">
            </div>
            <div class="display-flex column align-center">
                <button id="post" name="post" class="background-yellow color-white width75 border-thickness radius-5 font16">Post</button>
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