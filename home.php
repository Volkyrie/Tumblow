<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/4f3e1a72fd.js" crossorigin="anonymous"></script>
    <title>Tumblow - Home</title>
</head>
<body class="display-flex column desktop">
    <header class="hidden gap30 align-center padding-bottom-50 width90">
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
        <div id="language" class="display-flex align-center gap5 border-thickness radius-5 color-grey">
            <a href="#">🇬🇧</a>
            <i class="fa-solid fa-chevron-down color-grey"></i>
        </div>
        <div class="display-flex gap5 align-center theme">
            <i class="fa-regular fa-sun color-grey "></i>
            <label class="switch position-relative display-flex">
                <input type="checkbox">
                <span class="slider border-thickness radius-50 position-absolute"></span>
            </label>
            <i class="fa-regular fa-moon color-grey"></i>
        </div>
        <a href="#" id="profile"><img class="profile-icon radius-50" src="./img/profile.png" alt="User profile"></a>
    </header>
    <header class="display-flex justify-space-between align-center to-hide">
        <i class="fa-solid fa-bars color-grey"></i>
        <a href="#" ><img id="logo" src="./img/Logo.png" alt="Tumblow logo"></a>
        <div class="display-flex align-center gap15">
            <i class="fa-solid fa-magnifying-glass color-grey"></i>
            <img class="profile-icon radius-50" src="./img/profile.png" alt="User profile">
        </div>
    </header>
    <main class="display-flex column align-center home-wrap">
        <article class="display-flex column width80 align-center radius-5 border-thickness justify justify-center margin-bottom-15 card">
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
            <div class="action-barre color-grey border-thickness radius-5 display-flex justify-space-between width30 self-center">
                <a href="#" class="color-grey"><i class="fa-brands fa-gratipay"></i></a>
                <a href="#" class="color-grey"><i class="fa-regular fa-comment"></i></a>
                <a href="#" class="color-grey"><i class="fa-solid fa-heart-crack"></i></a>
                <a href="#" class="color-grey"><i class="fa-solid fa-download"></i></a>
                <a href="#" class="color-grey"><i class="fa-solid fa-share-nodes"></i></a>
            </div>
        </article>
        <article class="display-flex column width80 align-center radius-5 border-thickness justify justify-center margin-bottom-15 card">
            <div class="width100 display-flex justify-space-between align-center">
                <h2 class="color-grey font16">Another amazing article</h2>
                <p class="posted-time color-grey font10">Posted 1 week ago</p>
            </div>
            <div class="op-info display-flex width100 gap8 align-center padding-bottom-10">
                <img class="op-icon radius-50" src="./img/profile.png" alt="User profile">
                <p class="op-name color-grey font10">By Volkyrie</p>
                <div class="tags color-white background-yellow radius-5 font10">Tag 1</div>
            </div>
            <video class="post-video padding-bottom-10" src="./ressources/275498_small.mp4" controls></video>
           <div class="action-barre color-grey border-thickness radius-5 display-flex justify-space-between width30 self-center">
                <a href="#" class="color-grey"><i class="fa-brands fa-gratipay"></i></a>
                <a href="#" class="color-grey"><i class="fa-regular fa-comment"></i></a>
                <a href="#" class="color-grey"><i class="fa-solid fa-heart-crack"></i></a>
                <a href="#" class="color-grey"><i class="fa-solid fa-download"></i></a>
                <a href="#" class="color-grey"><i class="fa-solid fa-share-nodes"></i></a>
            </div>
        </article>
        <article class="display-flex column width80 align-center radius-5 border-thickness justify justify-center margin-bottom-15 card">
            <div class="width100 display-flex justify-space-between align-center">
                <h2 class="color-grey font16">Third amazing article</h2>
                <p class="posted-time color-grey font10">Posted 3 months ago</p>
            </div>
            <div class="op-info display-flex width100 gap8 align-center padding-bottom-10">
                <img class="op-icon radius-50" src="./img/profile.png" alt="User profile">
                <p class="op-name color-grey font10">By Volkyrie</p>
                <div class="tags color-white background-yellow radius-5 font10">Tag 1</div>
                <div class="tags color-yellow radius-5 font10">Tag 2</div>
                <div class="tags color-white background-yellow radius-5 font10">Tag 3</div>
            </div>
            <div class="text-content display-flex align-center">
                <audio class="margin-bottom-15" src="./ressources/music-no-copyright-239544" controls></audio>
            </div>
            <div class="action-barre color-grey border-thickness radius-5 display-flex justify-space-between width30 self-center">
                <a href="#" class="color-grey"><i class="fa-brands fa-gratipay"></i></a>
                <a href="#" class="color-grey"><i class="fa-regular fa-comment"></i></a>
                <a href="#" class="color-grey"><i class="fa-solid fa-heart-crack"></i></a>
                <a href="#" class="color-grey"><i class="fa-solid fa-download"></i></a>
                <a href="#" class="color-grey"><i class="fa-solid fa-share-nodes"></i></a>
            </div>
        </article>
        <article class="display-flex column width80 align-center radius-5 border-thickness justify justify-center margin-bottom-15 card">
            <div class="width100 display-flex justify-space-between align-center">
                <h2 class="color-grey font16">Yes another one</h2>
                <p class="posted-time color-grey font10">Posted 1 year ago</p>
            </div>
            <div class="op-info display-flex width100 gap8 align-center padding-bottom-10">
                <img class="op-icon radius-50" src="./img/profile.png" alt="User profile">
                <p class="op-name color-grey font10">By Volkyrie</p>
                <div class="tags color-white background-yellow radius-5 font10">Tag 1</div>
            </div>
            <p class="text-content margin-bottom-15"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at nisl  nunc. Curabitur finibus ornare mauris ac semper. Donec in metus lacus.  Phasellus at leo molestie, vulputate sem sed, sollicitudin metus.  Praesent ultricies porttitor tortor a condimentum. Fusce fermentum  lectus purus, vel fringilla mi ornare ac. Nunc interdum sapien felis, ac dictum lacus malesuada at. Quisque vel orci condimentum libero varius  gravida eu in urna. Etiam auctor, lorem sit amet commodo fermentum, nunc lectus vehicula nibh, a rhoncus arcu est vel metus. Cras eu convallis  velit, a dapibus ligula. Aliquam sed pharetra odio. Etiam in augue eget  sapien rutrum porttitor id vitae diam. Morbi aliquet felis quis lectus  venenatis, ut maximus lectus ultricies. Maecenas in eros sem. Proin  cursus, metus accumsan maximus tempor, neque erat pharetra nisl, eget  faucibus purus turpis a augue. Sed iaculis justo vel bibendum luctus.
 Cras velit mi, ullamcorper vitae congue a, condimentum et diam. In justo enim, commodo a magna sit amet, commodo lobortis turpis. Nulla vitae  faucibus risus. Nam in consectetur eros, eu maximus urna. Vestibulum  dictum molestie consequat. Sed cursus congue velit, ut mollis eros  blandit eu. Suspendisse vehicula odio a leo bibendum, dapibus sodales  diam consequat. Proin dapibus feugiat nulla a faucibus. In interdum, dui id elementum ullamcorper, neque lorem placerat massa, sit amet  fringilla metus odio ut neque.
 Etiam lobortis leo ac ipsum sagittis, eu malesuada sem interdum. Quisque bibendum mollis nisl eget venenatis. Praesent vestibulum est tempor  lectus posuere, nec malesuada nibh scelerisque. Etiam ornare nec sem eu  elementum. Etiam id pulvinar arcu. Donec luctus sollicitudin est quis  sodales. Interdum et malesuada fames ac ante ipsum primis in faucibus.  Integer ornare odio eu dui fermentum, eu volutpat lorem aliquam. Nam  elementum et ante id venenatis. Interdum et malesuada fames ac ante  ipsum primis in faucibus. Maecenas sit amet porttitor nibh. Sed maximus  interdum orci sed molestie. Sed consequat nibh dolor, id scelerisque  sapien congue nec. Nunc nec porttitor nulla, vel ullamcorper odio.</p>
            <div class="action-barre color-grey border-thickness radius-5 display-flex justify-space-between width30 self-center">
                <a href="#" class="color-grey"><i class="fa-brands fa-gratipay"></i></a>
                <a href="#" class="color-grey"><i class="fa-regular fa-comment"></i></a>
                <a href="#" class="color-grey"><i class="fa-solid fa-heart-crack"></i></a>
                <a href="#" class="color-grey"><i class="fa-solid fa-download"></i></a>
                <a href="#" class="color-grey"><i class="fa-solid fa-share-nodes"></i></a>
            </div>
        </article>
    </main>
    <footer  class="background-yellow display-flex column align-center gap5 width100">
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