# dservice
test courier
Создать расписание поездок курьеров в регионы.

Код должен быть написан без использования Фреймворка!

Описание:

Из Москвы в регионы отправляются с центрального склада курьеры с товаром. Время в пути известно. Количество поездок в регион не ограничено.

Задание:

Вывести расписание поездок в регионы за выбранное дату в календаре.

1. Рабочая форма для внесения данных в расписание с полями:

1) Регион

2) Дата выезда из Москвы

3) ФИО курьера

4) Информационное поле: Дата прибытия в регион (рассчитывается на основе данных по региону)

Требования к форме:

1) Одновременно курьер может быть только в одной поездке в регион.

2) Длительность поездки (туда/обратно) задаётся в таблице БД регионов.

2. Заполнить данные по поездкам с июня 2019 года (скрипт заполнения прислать с остальными скриптами веб-приложения)

Требования к веб-приложению:

1. Веб-сервер: Apache + PHP

2. БД: MSSQL Express либо MySQL

3. jQuery(ajax-запросы в форме внесения поездки в регион)

Информация:

Регионы:

1) Санкт-Петербург

2) Уфа

3) Нижний Новгород

4) Владимир

5) Кострома

6) Екатеринбург

7) Ковров

8) Воронеж

9) Самара

10) Астрахань

Длительность нахождения в пути любое число дней

Курьеры: Произвольно не менее 10 человек

Прислать:

1. Полностью веб-приложение (скрипты PHP, JS и т.д.)

2. БД (MSSQL либо MySQL) – 3 таблицы:

a. Таблица с курьерами

b. Таблица с регионами

c. Таблица расписания поездок в регионы

3. Если веб-приложение развёрнуто с использованием специфичных настроек сервера Apache или Nginx, то прислать конфиг веб-сервера и php.