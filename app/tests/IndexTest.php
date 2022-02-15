<?php 

require_once __DIR__ . '/../vendor/autoload.php'; 

use PHPUnit\Framework\TestCase;
use Symfony\Component\Process\Process;

final class IndexTest extends TestCase
{
    private $http;

    private static $process;

    public static function setUpBeforeClass(): void
    {
        self::$process = new Process(["php", "-S", "localhost:80", "-t", "."]);
        self::$process->start();

        usleep(100000); //wait for server to get going
    }

    public static function tearDownAfterClass(): void
    {
        self::$process->stop();
    }


    protected function setUp(): void
    {
        $this->http = new GuzzleHttp\Client(['base_uri' => 'localhost:80/']);
    }

    public function testGet()
    {
        $response = $this->http->request('GET', 'tests/pages/get.php?data=get');

        $this->assertEquals(200, $response->getStatusCode());

    }

    public function testPost()
    {
        $response = $this->http->request('POST', 'tests/pages/post.php',[
            'data' => 'post'
        ]);

        $this->assertEquals(200, $response->getStatusCode());
    }

    protected function tearDown(): void {
        $this->http = null;
    }

}
