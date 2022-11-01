<?php
namespace Zru\CourseProject\Blog;
use Zru\CourseProject\Person\Person;
class Post
{
public function __construct(
private int $id,
private Person $author,
private string $header,
private string $text
) {
}
public function __toString()
{
return $this->author . ' пишет: ' . $this->text;
}
}
?>