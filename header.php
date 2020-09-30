<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LP Novartis</title>
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/style.css">
    <?php wp_head(); ?>
    </head>
    <body>

<header class="header">
  <div class="container">

    <div class="header__wrapper">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img width="150" src="<?= get_template_directory_uri(); ?>/assets/images/novartis_logo.webp" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">About us <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Services<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Contact<span class="sr-only">(current)</span></a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>

  </div>
</header>