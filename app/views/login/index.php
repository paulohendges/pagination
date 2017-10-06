<?php 
    $baseUri = $this->url->getBaseUri();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- styles scripts includes -->
        <link href="<?= $baseUri ?>materializecss/materialize/css/materialize.min.css" type="text/css" rel="stylesheet">
        <link href="<?= $baseUri ?>css/fastfood_login.css" type="text/css" rel="stylesheet">
        <!--<link rel="stylesheet" href="<?=$baseUri?>jquery-validation/css/screen.css">-->

        <!-- scripts includes -->
        <script type="text/javascript" src="<?=$baseUri?>jquery/jquery-2.1.0.min.js" ></script>
        <script type="text/javascript" src="<?=$baseUri?>materializecss/materialize/js/materialize.js"></script>
	<script src="<?=$baseUri?>jquery-validation/lib/jquery.js"></script>
	<script src="<?=$baseUri?>jquery-validation/dist/jquery.validate.js"></script>
        <style>
            body {
              display: flex;
              min-height: 100vh;
              flex-direction: column;
            }
            body {
              background: #fff;
            }
            .msg-retorno div {
                padding-top: 10px !important;
                padding-bottom: 10px !important;
            }
        </style>
    </head>
    <body>
        <div class="section"></div>
        <center>
            <img class="responsive-img" style="width: 300px;" src="<?=$baseUri?>files/fastfood-logo.png"/>
            <h5 class="indigo-text">Faça login para acessar o fastfood</h5>
            <div class='row'>
                <?=$this->flash->output()?>
            </div>
            <div class="container">
                <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                    <form class="col s12" method="post" action="" name="form-login" id="form-login">
                        <div class='row'>
                            <div class='col s12'>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='text' name='user' id='user' />
                                <label for='user'>Informe seu usuário</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='password' name='password' id='password' />
                                <label for='password'>Informe sua senha</label>
                            </div>
                            <label style='float: right;'>
                                <a class='red-text' href='#!'><b>Esqueceu sua senha?</b></a>
                            </label>
                        </div>

                        <br />
                        <center>
                            <div class="row">
                                <button type="submit" name="btn_login" class="col s12 btn btn-large waves-effect red">LOGIN</button>
                                <div class="progress" style="background-color: #EEE !important; display: none">
                                    <div class="indeterminate" style="background-color: #f44336 !important"></div>
                                </div>                                
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </center>
        <script>
            $().ready(function() {
                $('.progress').hide();
                $("#form-login").validate({
                    rules: {
                        user: {
                                required: true,
                                minlength: 5
                        },
                        password: "required",
                    },
                    messages: {
                        user: {
                                required: "Informe seu usuário",
                                minlength: "Quantidade de caracteres inválida"
                        },
                        password: {
                                required: "Informe sua senha",
                        }
                    },
                    errorClass : 'invalid',
                    errorPlacement: function(error, element) {
//                        element.next("label").attr("data-error", error.contents().text());
                    },
                    highlight: function(element) {
                        $(element).addClass('validate invalid');
                        $(element).closest('div.input-field').find('label').addClass("red-text");
                        $(element).closest('div.input-field').find('i').addClass("red-text");
                    },
                    unhighlight: function(element) {
                        $(element).removeClass('validate invalid');
                        $(element).closest('div.input-field').find('label').removeClass("red-text").removeAttr('data-error');
                        $(element).closest('div.input-field').find('i').removeClass("red-text");
                    },
                    submitHandler: function(form) {
                        $('.progress').show();
                        form.submit();
                    }
                });
                $('#user').blur(function(){
                    $('label[for="user"]').removeClass('red-text');
                    $(this).removeClass('invalid');
                    
                    $('label[for="password"]').removeClass('red-text');
                    $('input#password').removeClass('invalid');
                });
                
                $('#password').blur(function(){
                    $('label[for="password"]').removeClass('red-text');
                    $(this).removeClass('invalid');
                    
                     $('label[for="user"]').removeClass('red-text');
                    $('input#user').removeClass('invalid');
                });
            });
        </script>
    </body>
</html>