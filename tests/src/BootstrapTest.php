<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Bootstrap;
use Gof\DesignPatterns\RequestArguments;

class BootstrapTest extends TestCase {

    /**
     * @dataProvider dataProvider
     */
    public function testRunExample($indexFile, $type, $pattern, $expected) {

        try {
            $app = new Bootstrap(new RequestArguments([$indexFile, $type, $pattern]));
            $result = $app->runExample();

            $this->assertTrue(is_string($result));
        } catch (\Exception $e) {
            $this->assertSame($expected, $e->getMessage());
        }
    }

    public static function dataProvider() {
        return [
            ['index.php', '--type=structural', '--pattern=NonExisting', 'Cannot load Gof\DesignPatterns\Structural\NonExisting\RunExample'],
            ['index.php', '--type=structural', '--pattern=', "Cannot load Gof\DesignPatterns\Structural\\\\RunExample"],
            ['index.php', '--type=', '--pattern=bridge', 'help message (string)'],
            ['index.php', '--type=', '--pattern=', 'help message (string)'],
            ['index.php', '--blah1=structural', '--blah2=bridge', 'Key \'--blah1\' is not correct'],
            ['index.php', '--type=structural', '--blah2=bridge', 'Key \'--blah2\' is not correct'],
            // creational
            ['index.php', '--type=creational', '--pattern=abstractFactory', 'actual result (string)'],
            ['index.php', '--type=creational', '--pattern=builder', 'actual result (string)'],
            ['index.php', '--type=creational', '--pattern=factoryMethod', 'actual result (string)'],
            ['index.php', '--type=creational', '--pattern=singleton', 'actual result (string)'],
            // structural
            ['index.php', '--type=structural', '--pattern=adapter', 'actual result (string)'],
            ['index.php', '--type=structural', '--pattern=bridge', 'actual result (string)'],
            ['index.php', '--type=structural', '--pattern=composite', 'actual result (string)'],
            ['index.php', '--type=structural', '--pattern=decorator', 'actual result (string)'],
            ['index.php', '--type=structural', '--pattern=flyweight', 'actual result (string)'],
            ['index.php', '--type=structural', '--pattern=proxy', 'actual result (string)'],
            ['index.php', '--type=structural', '--pattern=facade', 'actual result (string)'],
            // behavioral
            ['index.php', '--type=behavioral', '--pattern=chainOfResponsibility', 'actual result (string)'],
            ['index.php', '--type=behavioral', '--pattern=command', 'actual result (string)'],
            ['index.php', '--type=behavioral', '--pattern=interpreter', 'actual result (string)'],
            ['index.php', '--type=behavioral', '--pattern=iterator', 'actual result (string)'],
            ['index.php', '--type=behavioral', '--pattern=mediator', 'actual result (string)'],
            ['index.php', '--type=behavioral', '--pattern=memento', 'actual result (string)'],
            ['index.php', '--type=behavioral', '--pattern=observer', 'actual result (string)'],
            ['index.php', '--type=behavioral', '--pattern=state', 'actual result (string)'],
            ['index.php', '--type=behavioral', '--pattern=strategy', 'actual result (string)'],
            ['index.php', '--type=behavioral', '--pattern=templateMethod', 'actual result (string)'],
            ['index.php', '--type=behavioral', '--pattern=visitor', 'actual result (string)'],
        ];
    }
}
