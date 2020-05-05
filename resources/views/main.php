<?php
//Variables for task 2
$pupilsNum=28;
$athletesPercentage=75;
$athletesNum = ($pupilsNum*$athletesPercentage)/100;
//Variables for task 3
$textRaw = 'This server has 386 GB RAM and 500GB storage';

function getNumbers($text)
{
    $numbersFromRaw = [];
    $buffer = '';
    for($i = 0; $i < strlen($text);$i++)
    {

        if(is_numeric($text[$i]))
        {
            $buffer =  $buffer.$text[$i];
        }
        elseif($buffer != '')
        {
            array_push($numbersFromRaw,intval($buffer));
            $buffer = '';
        }
    }
    if($buffer != '') array_push($numbersFromRaw,intval($buffer));
    return $numbersFromRaw;
}
//Variables for task 4
$variableA = [1,2,3,4,5];
$variableB = 'Hello world';

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>Testwork Fastovets</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<style>



</style>
<body>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <h1 class="text-white">Welcome to Fastovets Aleksey testwork
    <a href="https://docs.google.com/document/d/1-Loji1Ce6khhkCQQYSnij1K9ELlhXl7J0sr-alFObgY/edit" class=""> (cсылка на тестовое задание)</a></h1>
</nav>

<main role="main" class="container">
    <div class="jumbotron">
        <h1>Задание 1</h1>
        <p class="lead">
        В базе данных хранится список мероприятий (таблица events) и список заявок на покупку билетов на указанные мероприятия (таблица bids)
        </p>
        <div id="accordion" role="tablist">
            <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Перечень задачь:
                        </a>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                    <ul class="list-group">
                        <li class="list-group-item">1. Сделать миграции</li>
                        <li class="list-group-item">2. Напишите запрос, который выберет имя пользователя (bids.name) с самой высокой ценой заявки (bids.price)</li>
                        <li class="list-group-item">3. Напишите запрос, который выберет название мероприятия (events.caption), по которому нет заявок</li>
                        <li class="list-group-item">4. Напишите запрос, который выберет название мероприятия (events.caption), по которому больше трех заявок</li>
                        <li class="list-group-item">5. Напишите запрос, который выберет название мероприятия (events.caption), по которому больше всего заявок</li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="lead mt-4">Выберите решение для Задания 1:</p>
        <ul class="list-group">
        <button class="text-dark list-group-item btn btn-lg btn-primary mb-2" role="button" onclick="getResponse(1)">Имя пользователя (bids.name) с самой высокой ценой заявки (bids.price)</button>
        <button class="text-dark list-group-item btn btn-lg btn-primary mb-2" role="button" onclick="getResponse(2)">Название мероприятия (events.caption), по которому нет заявок</button>
        <button class="text-dark list-group-item btn btn-lg btn-primary mb-2" role="button" onclick="getResponse(3)">Название мероприятия (events.caption), по которому больше трех заявок</button>
        <button class="text-dark list-group-item btn btn-lg btn-primary mb-2" role="button" onclick="getResponse(4)">Название мероприятия (events.caption), по которому больше всего заявок</button>
        </ul>


        <div id="response" class="mt-4"><p class="lead">Результат запроса будет здесь...</p></div>
    </div>


    <div class="jumbotron">
        <h1>Задание 2 Написать алгоритм решения задачи</h1>
        <p class="lead">
            В классе <?php  echo $pupilsNum ?> учеников. <?php  echo $athletesPercentage ?>% из них занимаются спортом. Сколько учеников в классе занимаются спортом и сколько всего учеников в классе?
        </p>
        <p class="lead">Ответ: Всего учеников - <?php echo $pupilsNum ?> , из них спортом занимается <?php  echo $athletesNum ?>
        <div id="accordion" role="tablist">
            <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Алгоритм решения:
                        </a>
                    </h5>
                </div>
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
        <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vSVmoa5qV0g0aMkw5l1Ai0VposLx7Hi6icveKY7q4Tmg5OD6eJCgd1eOmkaxPOoYcp-Jftv6SA8vAG2/embed?start=false&loop=false&delayms=3000" frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
        </div>
            </div></div></div>


    <div class="jumbotron">
        <h1>Задание 3 Реализовать алгоритм  извлечения числовых значений со строки</h1>
        <p class="lead">Исходная строк: <?php echo $textRaw ?></p>
        <?php
        echo '<p class="lead">Ответ: чисел в строке '.count(getNumbers($textRaw)).'</p>';
        echo '<ul class="list-group">';
        foreach (getNumbers($textRaw) as $value){
            echo '<li class="list-group-item">'.$value.'</li>';
        }
        echo '</ul>';
        ?>
        <div id="accordion" role="tablist" class="mt-4">
            <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Исходный код решения:
                        </a>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                    <code>
                        function getNumbers($text)<br>
                        {<br>
                        $numbersFromRaw = [];<br>
                        $buffer = '';<br>
                        for($i = 0; $i < strlen($text);$i++)<br>
                        {<br>

                        if(is_numeric($text[$i]))<br>
                        {<br>
                        $buffer =  $buffer.$text[$i];<br>
                        }<br>
                        elseif($buffer != '')<br>
                        {<br>
                        array_push($numbersFromRaw,intval($buffer));<br>
                        $buffer = '';<br>
                        }<br>
                        }<br>
                        if($buffer != '') array_push($numbersFromRaw,intval($buffer));<br>
                        return $numbersFromRaw;<br>
                        }<br>
                    </code>
                </div>
            </div></div>

    </div>


    <div class="jumbotron">
        <h1>Задание 4 Нужно поменять 2 переменные местами без использования третьей</h1>
        <p class="lead">Переменная 1: <?php echo json_encode($variableA) ?> </p>
        <p class="lead">Переменная 2: <?php echo json_encode($variableB) ?> </p>
        <p class="lead">Ответ:  </p>
        <?php
        $variableA[] = $variableB;
        $variableB = $variableA;
        $variableA = array_pop($variableB);
        ?>
        <ul class="list-group">
            <li class="list-group-item">Переменная 1: <?php echo json_encode($variableA) ?> </li>
            <li class="list-group-item">Переменная 2: <?php echo json_encode($variableB) ?> </li>
        </ul>
        <p class="lead mt-4">Исходный код решения: <br><code>
                $variableA[] = $variableB;<br>
                $variableB = $variableA;<br>
                $variableA = array_pop($variableB);<br>
            </code>
        </p>

</main>


<script>
    function getResponse(query_type=0) {
        let data = {
            _token:'<?php echo csrf_token() ?>'
        }
        let request = new XMLHttpRequest();
        function readyStateChange() {
            if (request.readyState === 4 && request.status === 200) {
                let data = JSON.parse(request.responseText);
                document.getElementById("response").innerHTML ='';
                let parentElement = document.getElementById("response");

                for(let value of data) {
                    let elem = document.createElement("p");
                    elem.className = "lead";
                    switch (query_type) {
                    case 1:
                        var elemText = document.createTextNode("Максимальная ставка "+value['price']+". Ставку сделал пользователь "+value['name']);
                        break;
                    case 2:
                        var elemText = document.createTextNode("На "+value['caption']+" нет заявок");
                        break;
                    case 3:
                        var elemText = document.createTextNode("На "+value['caption']+" больше чем 3 заявки");
                        break;
                    case 4:
                        var elemText = document.createTextNode("Самое большее заявок на "+value['caption']);
                        break;
                    }

                    elem.appendChild(elemText);
                    parentElement.appendChild(elem);
                }
           }
        }
        let body = "name=" + data._token+"&query_type="+query_type;
        request.open("POST", "/");
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        request.onreadystatechange = readyStateChange;
        request.send(body);
    }
</script>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
