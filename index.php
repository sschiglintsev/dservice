<html>
<head>
    <title>Служба доставки</title>
    <meta charset="utf-8"/>
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>
<body>

<h2> Расписание поездок курьеров в регионы</h2>
<p></p>

<form method="POST" id="formx" action="javascript:void(null);" onsubmit="call()">
    <div>
        <label>Регион</label>
        <select id="region" name="region">
            <option value="0">Выберите регион</option>
            <?php require_once "./includes/region.php" ?>
        </select>
    </div>
    <p></p>
    <div>
        <label>Дата выезда</label>
        <input type="date" name="date_from" id="date_from">
    </div>
    <p></p>
    <div>
        <label>ФИО</label>
        <select id="courier" name="courier">
            <option value="0">Курьер</option>
            <?php require_once "./includes/courier.php" ?>
        </select>
    </div>
    <p></p>

    <p></p>
    <input type="submit" value="Добавить">
</form>

<div id="results"></div>

<script src="./js/sendsave.js" type="text/javascript" ></script>

</body>
</html>