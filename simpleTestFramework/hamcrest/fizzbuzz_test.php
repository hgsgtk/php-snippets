<?php declare(strict_types=1);

require_once './fizzbuzz.php';

function test_fizzbuzz()
{
    assertThat(to_fizzbuzz(1), equalTo('1'));
    assertThat(to_fizzbuzz(3), equalTo('Fizz'));
    assertThat(to_fizzbuzz(5), equalTo('Buzz'));
    assertThat(to_fizzbuzz(10), equalTo('FizzBuzz'));
}

/**
 * @dataProvider fizzbuzz_number_provider
 *
 * @param string $expected
 * @param int $input
 */
function test_fizzbuzz2(string $expected, int $input): void
{
    assertThat(to_fizzbuzz($input), equalTo($expected));
}

function fizzbuzz_number_provider(): array
{
    return [
        ["1", 1],
        ["Fizz", 3],
        ["Buzz", 5],
        ["FizzBuzz", 10],
    ];
}
