<?php

namespace luya\testsuite\tests\cases;

use luya\testsuite\cases\CmsBlockTestCase;

final class CmsBlockTestCaseTest extends CmsBlockTestCase
{
    public $blockClass = 'luya\testsuite\tests\data\TestBlock';
    public function getConfigArray()
    {
        return [
            'id' => 'cmsblocktestcase',
            'basePath' => dirname(__DIR__),
        ];
    }

    public function testBlockObject()
    {
        $this->assertNotNull($this->block);
        $this->assertSame('Hello World', $this->block->sayHelloWorld());
    }
}
