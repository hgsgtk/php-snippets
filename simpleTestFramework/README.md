# Simple Test Framework
https://www.youtube.com/watch?v=o0YY0JnAOwU
https://github.com/zonuexe/phperkaigi-test

## simple

```php
<?php declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

(2 === 1 + 1) or die("LINE: " . __LINE__);
(3.0 === 1.5 + 1.5) or die("LINE: " . __LINE__);
$date = date('Y-m-d', 4502304000);
("2112-09-13" === $date) or die("LINE: " . __LINE__);

$a = [1, 2, 3];
(1 == array_shift($a)) or die("LINE: " . __LINE__);

echo "ok" . PHP_EOL;
```

```php
<?php declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

assert(2 === 1 + 1);
assert(3 === 1.5 + 1.5);
assert('2112-09-13' === date('Y-m-d', 4503168000));

$a = [1, 2, 3];
assert(1 === array_shift($a));
```

## assert
```bash
$ cd assert
$ ./run
```

## refs
https://github.com/hgsgtk/mpunit/issues/4
