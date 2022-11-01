<?php
use GeekBrains\Blog\Post;
use GeekBrains\Person\Name;
use GeekBrains\Person\Person;

spl_autoload_register(function ($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    $file_no_underline = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    //$file = $class . '.php';
    if(file_exists($file_no_underline)) {
      
        include $file_no_underline;
    }
    
    
});

$post = new Post(
    new Person(
        new Name('Иван', 'Никитин'),
        new DateTimeImmutable()
    ),
    'Всем привет!'
);
print $post;

?>