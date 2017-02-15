<?php

namespace PHPCensorTest\Tests;

use PHPCensorTest\Application;

class ApplicationTest extends \PHPUnit_Framework_TestCase
{
    public function testSample()
    {
        $application = new Application();
        $this->assertInstanceOf('PHPCensorTest\\Application', $application);
    }
}
