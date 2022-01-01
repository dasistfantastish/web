<?php
/*
Template Name: payment
*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/chief-slider.css">
    <title>login</title>
</head>
<body class="no-scroll">
<header class="header">
    <div class="logo">
        <a href="/" class="logo__text">Заболотівський ККП</a>
    </div>
    <nav class="nav table">
        <a href="/" class="nav__item">Назад</a>
    </nav>
</header>
<main class="payment__main">
<div class="payment">
    <h3 class="payment__title">До Оплати</h3>
    <div class="payment__result">
        <span><span>200</span>грн</span>
    </div>
    <div class="payment__actions">
        <button class="def__btn payments" id="payment__history">Історія</button>
    <a target="_blank" href="https://next.privat24.ua/payments/form/%7B%22companyID%22:%22360142%22,%22form%22:%7B%22query%22:%2219399967%22%7D%7D" class="payment__btn">Оплатити</a>
    </div>  
</div>
<div class="slider no-active">
    <div class="slider__container">
      <div class="slider__wrapper">
        <div class="slider__items">
          <div class="slider__item">
            <h3 class="history__title">2022</h3>
            <table class="history__table">
                <thead>
                    <tr>
                        <th class="history__darkgrey">Місяць</th>
                        <th class="history__darkgrey">Лічильник</th>
                        <th class="history__darkgrey">Показник</th>
                        <th class="history__darkgrey">Дата</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="history__darkgrey">січень</td>
                        <td id="tablevalue" class="history__lightgrey"></td>
                        <td id="tablevalue"  class="history__lightgrey"></td>
                        <td id="tablevalue"  class="history__lightgrey"></td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">лютий</td>
                        <td id="tablevalue"  class="history__lightgrey"></td>
                        <td id="tablevalue"  class="history__lightgrey"></td>
                        <td id="tablevalue" class="history__lightgrey"></td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">березень</td>
                        <td id="tablevalue"  class="history__lightgrey"></td>
                        <td id="tablevalue"  class="history__lightgrey"></td>
                        <td id="tablevalue"  class="history__lightgrey"></td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">квітень</td>
                        <td id="tablevalue"  class="history__lightgrey"></td>
                        <td id="tablevalue"  class="history__lightgrey"></td>
                        <td id="tablevalue"  class="history__lightgrey"></td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">травень</td>
                        <td id="tablevalue"  class="history__lightgrey"></td>
                        <td id="tablevalue"  class="history__lightgrey"></td>
                        <td id="tablevalue"  class="history__lightgrey"></td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">червень</td>
                        <td id="tablevalue"  class="history__lightgrey">16</td>
                        <td id="tablevalue"  class="history__lightgrey">17</td>
                        <td id="tablevalue"  class="history__lightgrey">18</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">липень</td>
                        <td id="tablevalue"  class="history__lightgrey">19</td>
                        <td id="tablevalue"  class="history__lightgrey">20</td>
                        <td id="tablevalue"  class="history__lightgrey">21</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">серпень</td>
                        <td id="tablevalue"  class="history__lightgrey">22</td>
                        <td id="tablevalue"  class="history__lightgrey">23</td>
                        <td id="tablevalue"  class="history__lightgrey">24</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">вересень</td>
                        <td id="tablevalue"  class="history__lightgrey">25</td>
                        <td id="tablevalue"  class="history__lightgrey">26</td>
                        <td id="tablevalue"  class="history__lightgrey">27</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">жовтень</td>
                        <td id="tablevalue"  class="history__lightgrey">28</td>
                        <td id="tablevalue"  class="history__lightgrey">29</td>
                        <td id="tablevalue"  class="history__lightgrey">30</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">листопад</td>
                        <td id="tablevalue"  class="history__lightgrey">31</td>
                        <td id="tablevalue"  class="history__lightgrey">32</td>
                        <td id="tablevalue"  class="history__lightgrey">33</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">грудень</td>
                        <td id="tablevalue"  class="history__lightgrey">34</td>
                        <td id="tablevalue"  class="history__lightgrey">35</td>
                        <td id="tablevalue"  class="history__lightgrey">36</td>
                    </tr>
                </tbody>
            </table>
          </div>
          <div class="slider__item">
            <h3 class="history__title">2021</h3>
            <table class="history__table">
                <thead>
                    <tr>
                        <th class="history__darkgrey">Місяць</th>
                        <th class="history__darkgrey">Лічильник</th>
                        <th class="history__darkgrey">Показник</th>
                        <th class="history__darkgrey">Дата</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="history__darkgrey">січень</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">лютий</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">березень</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">квітень</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">травень</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">червень</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">липень</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">серпень</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">вересень</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">жовтень</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">листопад</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">грудень</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                        <td class="history__lightgrey">1234567</td>
                    </tr>
                </tbody>
            </table>
          </div>
          <div class="slider__item">
            <h3 class="history__title">2020</h3>
            <table class="history__table">
                <thead>
                    <tr>
                        <th class="history__darkgrey">Місяць</th>
                        <th class="history__darkgrey">Лічильник</th>
                        <th class="history__darkgrey">Показник</th>
                        <th class="history__darkgrey">Дата</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="history__darkgrey">січень</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">лютий</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">березень</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">квітень</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">травень</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">червень</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">липень</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">серпень</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">вересень</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">жовтень</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">листопад</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                    </tr>
                    <tr>
                        <td class="history__darkgrey">грудень</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                        <td class="history__lightgrey">5678432</td>
                    </tr>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <a href="#" class="slider__control" data-slide="prev"></a>
    <a href="#" class="slider__control" data-slide="next"></a>
  </div>
</main>
<script src="<?php echo get_template_directory_uri(); ?>/js/chief-slider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/sort-table.js"></script>
</body>
</html>