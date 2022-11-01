<?php
require_once __DIR__ . '/vendor/autoload.php';
use Zru\CourseProject\Blog\Post;
use Zru\CourseProject\Blog\Comment;
use Zru\CourseProject\Person\Name;
use Zru\CourseProject\Person\Person;


/*$post = new Post(1,
    new Person(
        1,
        new Name('Иван', 'Никитин'),
        new DateTimeImmutable()
    ),
    'Всем привет!',
    'Это тестовая запись'
);
print $post . PHP_EOL;
*/

$faker = Faker\Factory::create('ru_RU');

//var_dump($argv);
if ($argv[1] == 'user') {
    $user = new Person(
        1,
        new Name($faker->firstName, $faker->lastName),
        new DateTimeImmutable()
    );
    echo $user;
}   elseif($argv[1] == 'post') {
    $user = new Person(
        1,
        new Name($faker->firstName, $faker->lastName),
        new DateTimeImmutable()
    );
    $post = new Post(
        1,
        $user,
        $faker->realText($maxNbChars = 20, $indexSize = 2),
        $faker->realText($maxNbChars = 200, $indexSize = 2)
    );
    echo $post . PHP_EOL;
}   elseif($argv[1] == 'comment') {
    $user = new Person(
        1,
        new Name($faker->firstName, $faker->lastName),
        new DateTimeImmutable()
    );
    $post = new Post(
        1,
        $user,
        $faker->realText($maxNbChars = 20, $indexSize = 2),
        $faker->realText($maxNbChars = 200, $indexSize = 2)
    );
  
    $comment = new Comment (
        1,
        $user,
        $post,
        $faker->realText($maxNbChars = 50, $indexSize = 2)
    );
    echo $comment . PHP_EOL;
}

?>