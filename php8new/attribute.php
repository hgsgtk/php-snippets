<?php
declare(strict_types=1);

#[A1(1), A1(2), A1(3)]
class Foo {}

$s = new ReflectionClass(Foo::class);
foreach ($s->getAttributes() as $attribute) {
    var_dump($attribute->getName());
    var_dump($attribute->getArguments());
    var_dump($attribute->getTarget());
}
var_dump($s->getAttributes());

#[
    A1(1),
    A1(2),
    A1(3)
]
function foo() {}

#[A1(1), A1(2), A1(3)]
function bar() {}
