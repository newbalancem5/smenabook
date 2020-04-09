<?php
/**
 * Ошибка 503. Сервис недоступен
 *
 * Шаблон оформления страницы, выдаваемой, когда сайт временно отсключен администратором галкой в настройках сайта. Шаблонные теги не работают
 *
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2018 OOO «Диафан» (http://www.diafan.ru/)
 */

if (! defined('DIAFAN'))
{
	$path = __FILE__;
	while(! file_exists($path.'/includes/404.php'))
	{
		$parent = dirname($path);
		if($parent == $path) exit;
		$path = $parent;
	}
	include $path.'/includes/404.php';
}
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Ошибка 503</title>
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400italic,400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <style type="text/css">

    /* =============================================================================
       HTML5 Boilerplate CSS: h5bp.com/css
       ========================================================================== */


    html, button, input, select, textarea { font-family: 'Open Sans', sans-serif; color: #000; font-size: 14px; }
    body { margin: 0; font-size: 1em; line-height: 1.4; }

    a {outline: none;}

    ul, ol { margin: 1em 0; padding: 0 0 0 40px; }
    dd { margin: 0 0 0 40px; }
    nav ul, nav ol { list-style: none; list-style-image: none; margin: 0; padding: 0; }

    figure { margin: 0; }

    form { margin: 0; }
    fieldset { border: 0; margin: 0; padding: 0; }
    label { cursor: pointer; }
    legend { border: 0; *margin-left: -7px; padding: 0; white-space: normal; }

    p { margin: 0 0 1em; }

    /*  Author styles */


    html, body {height: 100%;}

    body {
      font-family: 'Open Sans', sans-serif;
      height: 100%;
    }

    .wrapper {
      min-height: 100%;
    }

    .container {
      width: 580px;
      margin: 0 auto;
      overflow: hidden;
    }


    /* ---   HEADER   ---   */

    .header-wrap {
      padding: 35px 0 40px 0;
    }

    .logo {
      float: left;
    }

    .top-search {
      float: right;
      padding: 10px 0 0 0;
    }

    .search-form {position: relative;}
    .search-input {
      border: 1px solid #cfcfcf;
      padding: 5px;
      width: 210px;
      height: 15px;
    }

    .search-form input[type="submit"] {
      background: url('//www.diafan.ru/img/error404/search-button.png') no-repeat 0 0;
      width: 17px;
      height: 17px;
      padding: 3px;
      display: inline-block;
      border: none;
      cursor: pointer;
      position: absolute;
      top: 5px;
      right: 5px;
    }

    /*   ---   CONTENT   ---   */

    .content {
      padding: 0 0 96px 0;
    }

    .content .container {
      background: #e74c3c;
      text-align: center;
      padding: 40px 0 0 0;
      color: #fff;
    }

    .error-title {
      font-size: 36px;
      font-style: italic;
      padding: 45px 0;
    }

    .error-text {
      font-size: 16px;
    }

    .error-text a {
      color: #fff;
    }

    .page-buttons {
      text-align: center;
      padding: 50px 0;
    }

    .back-button {
      display: inline-block;
      color: #e74c3c;

      font-size: 24px;
      font-weight: 700;
      text-transform: uppercase;
      text-decoration: none;

      background: rgb(252, 252, 252);
      background: -moz-linear-gradient(90deg, rgb(252, 252, 252) 30%, rgb(222, 222, 222) 70%);
      background: -webkit-linear-gradient(90deg, rgb(252, 252, 252) 30%, rgb(222, 222, 222) 70%);
      background: -o-linear-gradient(90deg, rgb(252, 252, 252) 30%, rgb(222, 222, 222) 70%);
      background: -ms-linear-gradient(90deg, rgb(252, 252, 252) 30%, rgb(222, 222, 222) 70%);
      background: linear-gradient(180deg, rgb(252, 252, 252) 30%, rgb(222, 222, 222) 70%);

      -webkit-box-shadow: 0px 5px 5px 0px rgba(50, 50, 50, 0.25);
      -moz-box-shadow:    0px 5px 5px 0px rgba(50, 50, 50, 0.25);
      box-shadow:         0px 5px 5px 0px rgba(50, 50, 50, 0.25);

      padding: 15px 50px;
      border-radius: 3px;

    }

    /*   ---   FOOTER   ---   */

    .footer-wrap {
      height: 96px;
      margin-top: -96px;
    }

    .footer-wrap .container {
      text-align: center;
    }

    .footer-text {
      display: inline-block;
      vertical-align: middle;
      font-size: 12px;
      color: #b5b5b5;
      line-height: 96px;
    }

  </style>
</head>
<body>

  <div class="wrapper">

    <div class="header-wrap">
      <div class="container">

        <div class="logo">
          <a href="<insert name="path">">
            <img src="//www.diafan.ru/img/error404/logo.png" />
          </a>
        </div>

        <div class="top-search"><insert name="show_search" module="search" template="404"></div>

      </div>
    </div>


    <div class="content">
      <div class="container">
        <div class="error-loupe">
          <img src="//www.diafan.ru/img/error404/loupe503.png" />
        </div>

        <div class="error-title">
          Сервис недоступен!
        </div>

        <div class="error-text">В связи с проведением технических работ сайт временно не доступен.<br>
                                Приносим свои извинения за доставленные неудобства.
        </div>

        <div class="page-buttons">
          <a class="back-button"  href="#" onclick="history.back();return false;">Назад</a>
        </div>
      </div>
    </div>

  </div>

  <div class="footer-wrap">
    <div class="container">
      <div class="footer-text">© <insert name="show_year" year="2003">  DIAFAN.CMS</div>
    </div>
  </div>
</body>
</html>
