<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class=main_page>
        <div class="header">
            <nav class="navbar navbar-expand-lg sticky-top " id="sticky">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="img/storytelling.png" alt="Logo" width="90" height="90" class="d-inline-block align-text-center"><span class="union_center">Единый центр</span> жалоб</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto " id="hide">
                           
                        </ul>
                        <ul class="d-flex mb-2 mb-lg-0" id="list_main">
                            <li class="nav-item">
                                <button class="registration_link">Регистрация</button>
                                <button class="complaint_link">Подать жалобу</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="annoucment">
                <div class="announcment_text">
                   <h3 class="announcment_main-text">С 22 сентебря жалобы будут приняты только после внесения 50 рублей </h3>
                   <p class="announcment_exstra-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure neque libero veniam possimus nam, autem velit beatae voluptates quaerat earum cumque vitae consequuntur doloremque aspernatur odit ut corporis alias officiis.</p>
                </div>
                <button type="button" id='learn_more' class="btn btn-outline-light">Узнать больше</button>

            </div>
            <div class="main_information"></div>
            <div class="footer"></div>
        </div>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</body>

</html>