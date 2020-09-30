<?php get_header(); ?>


<main class="pageHome">

    <!-- Intro -->
    <section class="pageHome__intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="pageHome__intro__block-title">
                        <h1>Você pode evitar a <br>progressão da<br> artrite psoriásica</h1>
                        <p>Cadastre-se e receba <strong>grátis</strong> o <strong>Guia</strong> sobre <strong>Artrite Psoriásica e outras Doenças Reumáticas.</strong></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pageHome__intro__form">
                        <form class="shadow">
                            <div class="form-group">
                                <label for="nome">Nome Completo</label>
                                <input type="text" class="form-control" id="nome">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="inputState">Como você convive com artrite psoriásica?</label>
                                <select id="inputState" class="form-control">
                                    <option selected disabled>Selecione</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Você faz acompanhamento com reumatologista?</label>

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline1">Sim</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2">Não</label>
                                </div>
                            </div>

                            <div class="custom-control custom-checkbox labelTermoPolitica">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Aceito compartilhar os meus dados pessoais com a Novartis Biociências S.A. para receber via e-mail o “Guia da Artrite Psoriásica”, bem como outros e-mails sobre conscientização em saúde, conforme  Aviso de Privacidade</label>
                            </div>

                            <button type="submit" class="btn btn-primary enviar w-100">Quero o guia</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Intro -->

</main>
<?php get_footer(); ?>
