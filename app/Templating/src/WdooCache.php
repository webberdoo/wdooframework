<?php
namespace Webberdoo\App\Templating\src;


use Desarrolla2\Cache\Cache;
use Desarrolla2\Cache\Adapter\File;

/**
 * Class DooCache
 * @package Doowebdev\Core\Cache
 */
class WdooCache
{
    /**
     * @var int
     */
    private $duration = 700000;


    public function render($tag, $query)
    {
        $adapter = new File(__DIR__.'/../../../src/Storage/Cache');
        $adapter->setOption('ttl', 700000);
        $cache = new Cache($adapter);

        $cache->set($tag, $query, 700000);//tag, query
        return $cache->get($tag);//tag
    }
}
