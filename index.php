<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6</title>
    <link rel="stylesheet" href="jquery-ui-1.13.0/jquery-ui.min.css">
    <script src="jquery-ui-1.13.0/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.13.0/jquery-ui.min.js"></script>
</head>
<body>
<h1>#1 Использование Accordion</h1>
<div id="accordion">
    <h5>Вкладка 1</h5>
    <div>
        <p>Меня зовут Кира Йошикаге. Мне 33 года. Мой дом находится в северо-восточной части Морио, где расположены все виллы.</p>
    </div>
    <h5>Вкладка 2</h5>
    <div>
        <p>Я не женат. Я работаю в универмаге Kame Yu и прихожу домой не позднее 8 вечера.</p>
    </div>
    <h5>Вкладка 3</h5>
    <div>
        <p>Я не курю, но иногда выпиваю. Я ложусь спать в 11 вечера, и убеждаюсь, что я получаю ровно восемь часов сна, несмотря ни на что.</p>
    </div>
    <h5>Вкладка 4</h5>
    <div>
        <p>Выпив стакан теплого молока и потянувшись минут двадцать перед сном, я обычно без проблем сплю до утра. Словно ребёнок я просыпаюсь утром без всякой усталости и стресса.</p>
    </div>
    <h5>Вкладка 5</h5>
    <div>
        <p>На моём последнем осмотре мне сказали, что у меня нет никаких проблем со здоровьем. Я пытаюсь донести, что я обычный человек, который хочет жить спокойной жизнью.</p>
    </div>
</div>

<h1>#2 Использование DatePicker</h1>
<input type="text" name="date" id="date">

<h1>#3 Использование Slider</h1>
<div id="slider" style="width:50%"></div>

<script>
    $("#accordion").accordion();
    $("#date").datepicker();
    $( "#slider" ).slider();
</script>
</body>
</html>