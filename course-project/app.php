<?php
require_once __DIR__ . '/vendor/autoload.php';
use Zru\CourseProject\Blog\Post;
use Zru\CourseProject\Person\Name;
use Zru\CourseProject\Person\Person;

$post = new Post(1,
    new Person(
        1,
        new Name('Иван', 'Никитин'),
        new DateTimeImmutable()
    ),
    'Всем привет!',
    'Это тестовая запись'
);
print $post . PHP_EOL;

?>