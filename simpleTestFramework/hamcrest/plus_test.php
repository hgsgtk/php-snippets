<?php declare(strict_types=1);

function test_plus()
{
    $value = [
        ['expected' => 2, 'a' => 1, 'b' => 1],
        ['expected' => 3.0, 'a' => 1.5, 'b' => 1,5],
        ['expected' => 3, 'a' => 1.5, 'b' => 1.5],
    ];

    foreach ($value as ['expected' => $expected, 'a' => $a, 'b' => $b]) {
        assertThat($actual = $a + $b, equalTo($expected));
    }
}
