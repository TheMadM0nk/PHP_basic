<?php

$title = "Главная страница - страница обо мне";
$page = file_get_contents("site.html");

$page = str_replace("{{ TITLE }}", $title, $page);
$page = str_replace("{{ DATE }}", Date("d-M-Y"), $page);

echo $page;