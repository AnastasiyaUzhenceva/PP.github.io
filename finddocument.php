<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head class = "header">
  <meta charset="UTF-8">
  <title>Поисковая система СибГУТИ</title>
  <link rel="stylesheet" type="text/css" href="general.css" />
  <link rel="stylesheet" type="text/css" href="actions.css" />
  <link rel="stylesheet" type="text/css" href="finddocument.css" />
</head>
<body>
<div class="headers">
  <div class = labeldiv>
    <img class="sibgutilabel" src="/PP/img/SibGUTI.png">
  </div>
  <div class="title">
    
    Поисковая система СибГУТИ
  </div>
</div>
<a href="useractions.html">Назад</a>
<div class="header">
    Введите ключевое слово или фразу</div>
    <div class="header1">Выберите класс документа (необязательно)</div>
</div>
<p class="findp">
        <input class="search" type="text" placeholder="Например: Приказ об образовании" />
        <select class="classselect"><option>Выберите класс</option></select>
</p>
<div><button onclick = '<? $fileId = '1xVC7IORZM-z0e44v47YhfaTXBnQGU7UU'
$response = $driveService->files->export($fileId, 'application/pdf', array(
    'alt' => 'media'));
$content = $response->getBody()->getContents();?>' class="find">Найти</button></div>

</body>
</html>