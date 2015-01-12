<?php
/**
 * Created by PhpStorm.
 * User: holingpoon
 * Date: 1/12/15
 * Time: 4:52 PM
 */

namespace Shape;


class SquareTest extends \PHPUnit_Framework_TestCase {

    /**
     * @expectedException \UnexpectedValueException
     */
    public function setUp()
    {
        $this->square = new Square(1,1);
    }

    /**
     * @expectedException \UnexpectedValueException
     */
    public function testWidthOrHeightShouldNotBeNegative()
    {
        $square = new Square(-1,-1);
    }
}
