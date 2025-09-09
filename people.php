<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP People</title>
</head>

<body>

    <?php

    $person_1 = 'person_1';
    $person_2 = 'person_2';
    $person_3 = 'person_3';

    $persons = [

        $person_1 => [
            "name" => "John",
            "email" => "john@netflix.com",
            "programming_languages" => ["Javascript", "Java", "Python"]
        ],
        $person_2 => [
            "name" => "Tom",
            "email" => "tom@google.com",
            "programming_languages" => ["C++", "C#", "Go"]
        ],
        $person_3 => [
            "name" => "Felix",
            "email" => "felix@meta.com",
            "programming_languages" => ["Javascript", "React", "TypeScript"]
        ]
    ];

    foreach ($persons as $key => $value) {
        echo "<strong>$key</strong><br>";
        echo "Name: " . $value["name"] . "<br>";
        echo "Email: " . $value["email"] . "<br>";
        echo "Programming Languages: " . implode(", ", $value["programming_languages"]) . "<br><br>";
    }

    ?>

</body>

</html>