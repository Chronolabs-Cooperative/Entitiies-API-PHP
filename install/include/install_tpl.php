<?php
/**
 * Chronolabs Cooperative Entitisms Repository Services REST API
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Chronolabs Cooperative http://syd.au.snails.email
 * @license         ACADEMIC APL 2 (https://sourceforge.net/u/chronolabscoop/wiki/Academic%20Public%20License%2C%20version%202.0/)
 * @license         GNU GPL 3 (http://www.gnu.org/licenses/gpl.html)
 * @package         entities-api
 * @since           2.2.1
 * @author          Dr. Simon Antony Roberts <simon@snails.email>
 * @version         2.2.8
 * @description		A REST API for the storage and management of entities + persons + beingness collaterated!
 * @link            http://internetfounder.wordpress.com
 * @link            https://github.com/Chronolabs-Cooperative/Emails-API-PHP
 * @link            https://sourceforge.net/p/chronolabs-cooperative
 * @link            https://facebook.com/ChronolabsCoop
 * @link            https://twitter.com/ChronolabsCoop
 */

defined('API_INSTALL') || die('API Installation wizard die');
include_once '../language/' . $wizard->language . '/global.php';
?><!doctype html>
<html lang="<?php echo _LANGCODE; ?>">

<head id="extra-meta">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta id="refreshurl" />
	<script type="text/javascript" src="<?php echo API_URL; ?>/assets/jquery/jquery.js"></script>

    <title id='titlemsg'><?php echo API_VERSION . ' : ' . API_INSTALL_WIZARD; ?>
        (<?php echo ($wizard->pageIndex + 1) . '/' . count($wizard->pages); ?>)</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo API_URL; ?>/install/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo API_URL; ?>/install/assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo API_URL; ?>/assets/media/Labtop/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo API_URL; ?>/assets/media/Labtop Bold/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo API_URL; ?>/assets/media/Labtop Bold Italic/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo API_URL; ?>/assets/media/Labtop Italic/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo API_URL; ?>/assets/media/Labtop Superwide Boldish/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo API_URL; ?>/assets/media/Labtop Thin/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo API_URL; ?>/assets/media/Labtop Unicase/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo API_URL; ?>/assets/media/LHF Matthews Thin/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo API_URL; ?>/assets/media/Life BT Bold/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo API_URL; ?>/assets/media/Life BT Bold Italic/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo API_URL; ?>/assets/media/Prestige Elite/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo API_URL; ?>/assets/media/Prestige Elite Bold/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo API_URL; ?>/assets/media/Prestige Elite Normal/style.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
    if (!empty($extraSources)) {
        echo $extraSources;
    }
    ?>
    <?php
    if (file_exists('language/' . $wizard->language . '/style.css')) {
        echo '<link rel="stylesheet" type="text/css" media="all" href="' . API_URL . '/install/language/' . $wizard->language . '/style.css" />';
    }
    ?>
    <script type="text/javascript" src="<?php echo API_URL; ?>/install/assets/js/xo-installer.js"></script>

</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" tmp-toggle="collapse" tmp-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand"><img src="assets/img/logo_small.png"></div>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" tmp-toggle="dropdown"><i class="fa fa-book"></i> <?php echo SUPPORT; ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <?php
                    @include_once './language/' . $wizard->language . '/support.php';
                    foreach ($supports as $lang => $support) {
                        echo '<li><a href="' . $support['url'] . '" target="_blank">' . $support['title'] . '</a></li>';
                    }
                    ?>
                </ul>
            </li>
            <li>
                <a href="https://github.com/API/APICore25" target="_blank" title="<?php echo API_SOURCE_CODE; ?>"><i class="fa fa-lg fa-github"></i></a>
            </li>
            <?php if ($pageHasHelp) { ?>
                <li>
                    <a onclick="showHideHelp(this);" title="<?php echo SHOW_HIDE_HELP; ?>"><i class="fa fa-lg fa-life-ring"></i></a>
                </li>
            <?php } ?>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <?php
                foreach (array_keys($wizard->pages) as $k => $page) {
                    if ($k == $wizard->pageIndex) {
                        echo'<li class="active"><a><i class="' . $wizard->pages[$page]['icon'] . '"></i> '
                            . $wizard->pages[$page]['name'] . '</a></li>';
                    } elseif ($k > $wizard->pageIndex) {
                        echo'<li class="disabled"><a><i class="' . $wizard->pages[$page]['icon'] . '"></i> '
                            . $wizard->pages[$page]['name'] . '</a></li>';
                    } else {
                        echo'<li><a href="' . $wizard->pageURI($page) . '"><i class="'
                            . $wizard->pages[$page]['icon'] . ' text-success"></i> ' . $wizard->pages[$page]['name']
                            . '</a></li>';
                    }
                }
                ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <?php if (!empty($error)) { ?>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <span class="<?php echo $wizard->pages[$wizard->currentPage]['icon']; ?> fa-5x"></span>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><span class="fa fa-ban"></span></div>
                                    <div><?php echo API_ERROR_ENCOUNTERED; ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <?php echo API_ERROR_SEE_BELOW; ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <span class="<?php echo $wizard->pages[$wizard->currentPage]['icon']; ?> fa-5x"></span>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo ($wizard->pageIndex + 1) . '/' . count($wizard->pages); ?></div>
                                    <div><?php echo API_INSTALLING; ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-primary">
                            <?php echo $wizard->pages[$wizard->currentPage]['name']; ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <?php
                $versionParts=array();
                $versionResult = preg_match ('/(^[a-z\s]*)([0-9\.]*)/i', API_VERSION, $versionParts);
                ?>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tag fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $versionParts[2]; ?></div>
                                    <div>Version</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-success">
                            <?php echo API_VERSION; ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div id="wizard">
                    <form id='<?php echo $wizard->pages[$wizard->currentPage]['name']; ?>' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post'>

                        <div class="page" id="<?php echo $wizard->pages[$wizard->currentPage]['name']; ?>">
                            <h2><?php echo $wizard->pages[$wizard->currentPage]['title']; ?></h2>
                            <?php echo $content; ?>
                        </div>

                        <div id="buttons">
                            <?php if (@$pageHasForm) { ?>
                            <button class="btn btn-lg btn-success" type="submit">
                            <?php } else { ?>
                            <button class="btn btn-lg btn-success" type="button" accesskey="n" onclick="location.href='<?php echo $wizard->pageURI('+1'); ?>'">
                            <?php } ?>
                            <?php echo BUTTON_NEXT; ?>  <span class="fa fa-caret-right"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
<script type="text/javascript">
    $(document).ready(function () {
        $(".xoform-help").hide();
        /**
         * Check the url to see if we reached 'page_end.php' and if so, launch the cleanup via ajax.
         **/
        if ('page_end.php' == location.pathname.substring(location.pathname.lastIndexOf('/') + 1)) {
            $.post( "cleanup.php", { instsuffix: <?php echo isset($install_rename_suffix) ? "'" . $install_rename_suffix . "'" : "''"; ?> } );
        };
    });
</script>
