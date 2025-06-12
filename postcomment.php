<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/4f3e1a72fd.js" crossorigin="anonymous"></script>
    <title>Article</title>
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
        <article class="display-flex column width80 align-center radius-5 border-thickness justify justify-center margin-bottom-15">
            <div class="width100 display-flex justify-space-between align-center">
                <h2 class="color-grey font16">An amazing article</h2>
                <p class="posted-time color-grey font10">Posted 5 min ago</p>
            </div>
            <div class="op-info display-flex width100 gap8 align-center padding-bottom-10">
                <img class="op-icon radius-50" src="./img/profile.png" alt="User profile">
                <p class="op-name color-grey font10">By Volkyrie</p>
                <div class="tags color-white background-yellow radius-5 font10">Tag 1</div>
                <div class="tags color-yellow radius-5 font10">Tag 2</div>
            </div>
            <img class="post-img padding-bottom-10" src="./ressources/nugget.png" alt="Best nugget ever">
            <div class="action-barre color-grey border-thickness radius-5 display-flex justify-space-between width30">
                <a href="#" class="color-grey"><i class="fa-brands fa-gratipay"></i></a>
                <a href="#" class="color-grey"><i class="fa-regular fa-comment"></i></a>
                <a href="#" class="color-grey"><i class="fa-solid fa-heart-crack"></i></a>
                <a href="#" class="color-grey"><i class="fa-solid fa-download"></i></a>
                <a href="#" class="color-grey"><i class="fa-solid fa-share-nodes"></i></a>
            </div>
        </article>

        <div class="width90 display-flex column">
            <h3 class="color-grey padding-left-5">Comments</h3>
            <div class="display-flex width100 justify-center">
                <div class="display-flex column align-center radius-5 border-thickness justify justify-center margin-bottom-15 padding-10">
                    <div class="op-info display-flex width100 padding-bottom-10 justify-space-between">
                        <div class="display-flex gap8">
                            <img class="op-icon radius-50" src="./img/profile.png" alt="User profile">
                            <p class="color-grey">This is really an amazing article</p>
                        </div>
                        <div class="action-barre color-grey border-thickness radius-5 display-flex justify-space-between width20">
                            <a href="#" class="color-grey"><i class="fa-brands fa-gratipay"></i></a>
                            <a href="#" class="color-grey"><i class="fa-regular fa-bookmark"></i></a>
                            <a href="#" class="color-grey"><i class="fa-regular fa-comment"></i></a>
                        </div>
                    </div>
                    <div class="padding-right-60">
                        <div class="padding-left-40">
                            <div class="op-info display-flex width100 gap8 padding-bottom-10">
                                <img class="op-icon radius-50" src="./img/profile.png" alt="User profile">
                                <p class="color-grey">I totally agree!</p>
                            </div>
                            <div class="op-info display-flex width100 gap8 padding-bottom-10">
                                <img class="op-icon radius-50" src="./img/profile.png" alt="User profile">
                                <p class="color-grey">I would love to have such nugget</p>
                            </div>
                            <div class="op-info display-flex width100 gap8 padding-bottom-10">
                                <img class="op-icon radius-50" src="./img/profile.png" alt="User profile">
                                <p class="color-grey">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Nullam gravida  nibh eu
                                viverra luctus. Aenean gravida ante lorem,
                                in ultrices purus  hendrerit viverra. Donec
                                feugiat nec elit accumsan molestie.  Pellentesque
                                quis ante non dolor volutpat molestie. Quisque blandit
                                risus ut rhoncus elementum. Nunc mattis sit amet justo
                                sit amet egestas. Fusce in ultrices nisi. Quisque ac velit
                                maximus massa tempus dapibus  nec et velit. Praesent nisl
                                mi, pulvinar tincidunt vehicula vitae,  convallis vel neque.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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