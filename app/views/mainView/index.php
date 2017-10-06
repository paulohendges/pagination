<?php
    $baseUri = $this->url->getBaseUri();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            FastFood
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- styles scripts includes -->
        <link href="<?= $baseUri ?>materialize-v0.100.2/materialize/css/materialize.min.css" type="text/css" rel="stylesheet">
        <link href="<?= $baseUri ?>css/fastfood.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <!--<link rel="stylesheet" href="<?= $baseUri ?>jquery-validation/css/screen.css">-->

        <!-- scripts includes -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="<?= $baseUri ?>jquery-validation/lib/jquery.js"></script>
        <script src="<?= $baseUri ?>jquery-validation/dist/jquery.validate.js"></script>
        <script src="<?= $baseUri ?>js/App.js"></script>
        <script type="text/javascript" src="<?= $baseUri ?>materialize-v0.100.2/materialize/js/materialize.js"></script>
    </head>
    <style>
        #container {
            padding-left: 300px;
        }

        #content {
            padding: 20px;
        }

        @media only screen and (max-width : 992px) {
            #container {
                padding-left: 0px;
            }
        }
    </style>
    <body>
        <div id="cabecalho">
            <!-- fazer o render do menu aqui porra -->
            <?php 
                $menus = \App\Menu::renderMenu($this->session->get('perfilId'));
            ?>
            <nav>
                <div class="nav-wrapper color-default">
                    <a href="#" data-activates="menu-mobile" class="button-collapse left">
                        <i class="material-icons">menu</i>
                    </a>
                    <a href="<?=$baseUri?>index/index" class="brand-logo right" style="width: 215px;height: 64px;" id="logo-fastfood">
                        <img src="<?= $baseUri ?>files/fastfood-logo2.png" style="">
                    </a>
                    <ul class="hide-on-med-and-down left user-info">
                        <li>
                            <a class="dropdown-button hover-link" href="#!" data-activates="info-user">
                                <span name="nome-user">PAULO HENDGES - ADMIN</span><i class="material-icons right">perm_identity</i>
                            </a>
                            <ul id="info-user" class="dropdown-content ul-link-nav user-info">
                                <a class="link-nav hover-link" href="<?=$baseUri?>user/change-password">Alteração de senha</a>
                                <a class="link-nav hover-link" href="<?=$baseUri?>login/logout">Sair</a>
                            </ul>
                        </li>
                    </ul>
                    <ul class="hide-on-med-and-down center">
                    <?php foreach ($menus as $menu) { ?>
                            <li>
                                <a href="<?=$baseUri.$menu['link']?>" style="display: inline-flex;"><span><?=$menu['realName']?></span>
                                    <i class="material-icons" style="margin-left: 5px;"><?=$menu['icon']?></i>
                                </a>
                            </li>
                    <?php } ?>
                    </ul>
                    <ul class="side-nav" id="menu-mobile">
                    <?php foreach ($menus as $menu) { ?>
                        <li><a href="<?=$baseUri.$menu['link']?>"><?=$menu['realName']?></a></li>
                    <?php } ?>
                    <li>
                        <a class="dropdown-button hover-link" href="#!" data-activates="info">
                            <span name="nome-user">PAULO HENDGES - ADMIN</span><i class="material-icons right">perm_identity</i>
                        </a>
                        <ul id="info" class="dropdown-content ul-link-nav user-info">
                            <a class="link-nav hover-link" href="<?=$baseUri?>user/change-password">Alteração de senha</a>
                            <a class="link-nav hover-link" href="<?=$baseUri?>login/logout">Sair</a>
                        </ul>
                    </li>
                    </ul>
                </div>
            </nav>
        </div>
        <main>
            <div class="container-novo margin-top-container">
                <?=$this->getContent();?>
            </div>
        </main>
        <footer>
            <div class="footer-copyright center color-default white-text" id="rodape">
                @ Powered By: Paulo Cesar Hendges # All rights reserved
            </div>
        </footer>
    </body>
    <script>
        $(document).ready(function () {
            $('.button-collapse').sideNav({
                menuWidth: 300, // Default is 300
                edge: 'left', // Choose the horizontal origin
                closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                draggable: true // Choose whether you can drag to open on touch screens
            });
        });
    </script>
</html>