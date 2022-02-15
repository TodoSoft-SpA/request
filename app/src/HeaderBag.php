<?php

namespace Todosoft;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * HeaderBag is a container for HTTP headers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @implements \IteratorAggregate<string, list<string|null>>
 */
class HeaderBag extends \Symfony\Component\HttpFoundation\HeaderBag
{
    protected const UPPER = '_ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    protected const LOWER = '-abcdefghijklmnopqrstuvwxyz';

    /**
     * @var array<string, list<string|null>>
     */
    protected $headers = [];
    protected $cacheControl = [];

    public function __construct(array $headers = [])
    {
        foreach ($headers as $key => $values) {
            $this->set($key, $values);
        }
    }

    /**
     * Sets a header by name.
     *
     * @param string|string[]|null $values  The value or an array of values
     * @param bool                 $replace Whether to replace the actual value or not (true by default)
     */
    public function set(string $key, $values, bool $replace = true)
    {
        return true;
    }

}