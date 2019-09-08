<?php declare(strict_types=1);


namespace Tests;

use PHPUnit\Framework\TestCase;

/**
 * Class DatabaseTest
 * @package Tests
 * @see https://phpunit.readthedocs.io/en/8.3/fixtures.html#fixtures-sharing-fixture-examples-databasetest-php
 */
final class DatabaseTest extends TestCase
{
    /** @var \PDO $dbh */
    private static $dbh;

    public static function setUpBeforeClass(): void
    {
        echo 'setup database connection', PHP_EOL;
        self::$dbh = new \PDO('sqlite::memory');
    }

    public static function tearDownAfterClass(): void
    {
        echo 'teardown database connection', PHP_EOL;
        self::$dbh = null;
    }
}
