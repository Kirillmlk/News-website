<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Home</title>
</head>
<body>
<div class="container-news">
    <div class="blog-section">
        <div class="title-news">
            <h2>Blog & News</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut distinctio eius eum libero
                molestiae nisi sapiente sequi sunt ullam?
            </p>
        </div>
        <div class="cards">
            <div class="card">
                <div class="image-section">
                    <img src="{{ Vite::asset('resources/images/blue.jpg') }}" alt="">
                </div>
                <div class="content-card">
                    <h4>Title One</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, repellat.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="posted-date">
                    <p>Posted on Aug 7, 2024</p>
                </div>
            </div>

            <div class="card">
                <div class="image-section">
                    <img src="{{ Vite::asset('resources/images/blue.jpg') }}" alt="">
                </div>
                <div class="content-card">
                    <h4>Title One</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, repellat.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="posted-date">
                    <p>Posted on Aug 7, 2024</p>
                </div>
            </div>

            <div class="card">
                <div class="image-section">
                    <img src="{{ Vite::asset('resources/images/blue.jpg') }}" alt="">
                </div>
                <div class="content-card">
                    <h4>Title One</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, repellat.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="posted-date">
                    <p>Posted on Aug 7, 2024</p>
                </div>
            </div>


        </div>
    </div>
</div>
</body>
</html>
