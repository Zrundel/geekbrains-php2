<?php
namespace Zru\CourseProject\Blog;
use Zru\CourseProject\Person\Person;
class Comment
{
public function __construct(
private int $id,
private Person $author,
private Post $post,
private string $text
) {
}
public function __toString(){
        return $this->post . PHP_EOL .'Комментарии:' . $this->author .': ' . $this->text;
    }
}
?>