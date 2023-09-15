<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="container">
    <a href="" class="link">GitHub</a>
    <div class="flex">
    <div class="pervoe">
        <h1>Задание 1</h1>
        <p>
            <?php
            $students = ['Иванов', 'Музипов', 'Сидоров', 'Камсков', 'Ахметгалеев'];
            ?>
        </p>

        <div class="list">
        <?php
        // Вывод списка студентов на экран
        foreach($students as $stud){
        echo '<div class="spisok_qwe">'.$stud.'</div>';
        }
        ?>
        </div>
        <?php
        // Подсчет количества студентов
        $count = count($students);
        echo '<p>Количество студентов: <span>'. $count .'</span></p>';

        // Проверка наличия фамилии "Сидоров" в списке
        if (in_array('Сидоров', $students)) {
            echo '<p>Фамилия "Сидоров" есть в списке.</p>';
        } else {
            echo '<p>Фамилия "Сидоров" отсутствует в списке.</p>';
        }

        // Удаление последней фамилии из списка и сохранение в переменную $expelled
        $expelled = array_pop($students);
        echo '<p>Удаленная фамилия: <span>' . $expelled.'<span></p>';
        ?>
    </div>
    <div class="vtoroe">
        <h1>Задание 2</h1>
        <p>
            <?php
            $circleStudents = [
                "Литературный" => "Петров",
                "Биологический" => "Антонова",
                "Спортивный" => "Сидоров",
                "Художественный" => "Емелина",
                "Музыкальный" => "Иванова"
            ];
            
            // Сортировка списка по фамилиям
            asort($circleStudents);
            
            // Вывод списка в формате "Кружок - Фамилия"
            foreach ($circleStudents as $circle => $student) {
                echo'<div class="circl_stud">'. $circle . " - " . $student . '</div>'. "\n";
            }
            ?>
        </p>
    </div>
    </div>
    <div class="bottom">
        <div class="tretie">
            <h1>Задание 3</h1>
            <p>
                <?php
                    $array3 = [
                        'Фамилия' => 'Гейдур',
                        'Имя' => 'Диана',
                        'Группа' => '425 Веб',
                        'Хобби' => 'игры',
                        'Соцсеть' => 'Телеграм: @Akaired',
                    ];

                    foreach ($array3 as $key => $value) {
                        echo $key . ' : ' . $value . '<br>';
                    }
                ?>   
            </p>             
        </div>
    </div>
</div>
</body>
</html>