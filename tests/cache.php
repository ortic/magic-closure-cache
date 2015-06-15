<?php
use Ortic\MagicClosureCache\Cache;

class CacheTest extends PHPUnit_Framework_TestCase
{
    public function testSnippets()
    {
        $testClosure = function() {
            return 'Hello';
        };
        $result = Cache::cache($testClosure);
        $this->assertEquals($result, 'Hello');
    }
}