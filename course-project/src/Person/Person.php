<?php
namespace Zru\CourseProject\Person;
use DateTimeImmutable;
class Person
{
public function __construct(
private int $id,
private Name $name,
private DateTimeImmutable $registeredOn
) {
}
public function __toString()
{
return $this->name;
}
}

?>