<?php
declare(strict_types=1);

// before 8.0
$filled_array = array_fill(0, 100, 50);
// after 8.0
$filled_array = array_fill(start_index: 0, count: 100, value: 50);

// default value
$chars = htmlspecialchars("<li><a href='#'>We are PHPer</a></li>", ENT_COMPAT, 'UTF-8', false);
$chars = htmlspecialchars(string: "<li><a href='#'>We are PHPer</a></li>", double_encode: false);

final class ManyParam {
// PHP7.xまでは指定が必要だった
//    public string $name;
//    private string $default = 'default';
//    private bool $opt1 = false;
//    private bool $opt2 = false;
//    private bool $opt3 = false;

    public function __construct(
        public string $name,
        private string $default = 'default',
        private bool $opt1 = false,
        private bool $opt2 = false,
        private bool $opt3 = false,
    ) {
    }
}

$p = new ManyParam(name: 'taro', opt3: true);
// echo $p->name;

function test3(&$a, &$b, &$c = "c,", &$d = "d", &$e = "e") {
    echo "a=$a, b=$b, c=$c, d=$d, e=$e\n";
}

function &id($x) {
    return $x;
}

$a = "A"; $b = "B"; $c = "C"; $d = "D"; $e = "E";

var_dump($ff = id($a));
$a = "changed";
var_dump($ff);
test3(id("A"), id("B"), id("C"), d: id("D"), e: id("E"));
