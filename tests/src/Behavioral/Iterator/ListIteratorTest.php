<?php

namespace Tests\Behavioral\Iterator;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Behavioral\Iterator\{
    ListAggregator,
};

class ListIteratorTest extends TestCase {

    /**
     * @dataProvider dataProvider
     */
    public function testListIterator($a, $b, $c, $order, $expected) {

        $result = '';
        $list = new ListAggregator();
        $list->addItem($a);
        $list->addItem($b);
        $list->addItem($c);

        switch ($order) {
            case 'asc':
                foreach ($list->getIterator() as $item) {
                    $result .= $item;
                }
                break;

            case 'desc':
                foreach ($list->getReverseIterator() as $item) {
                    $result .= $item;
                }
                break;
        }

        $this->assertEquals($expected, $result);
    }

    public static function dataProvider() {
        return [
            [1, 3, 2, 'asc', '132'],
            [1, 2, 3, 'desc', '321'],
        ];
    }
}
