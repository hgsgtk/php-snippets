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
echo $p->name;
