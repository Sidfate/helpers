<?php 

namespace Helpers;

class HttpTest extends \PHPUnit_Framework_TestCase
{
	/**
     * @param array $vars
     * @SuppressWarnings(PHPMD.Superglobals)
     */
    protected function _setServerVar(array $vars)
    {
        foreach ($vars as $key => $value) {
            $_SERVER[$key] = $value;
        }
    }

    public function testShouldExtractHeadersFromServerArray()
    {
        $this->_setServerVar(array(
            'SOME_SERVER_VARIABLE'  => 'value',
            'SOME_SERVER_VARIABLE2' => 'value',
            'ROOT'                  => 'value',
            'HTTP_CONTENT_TYPE'     => 'text/html',
            'HTTP_CONTENT_LENGTH'   => '0',
            'HTTP_ETAG'             => 'asdf',
            'PHP_AUTH_USER'         => 'foo',
            'PHP_AUTH_PW'           => 'bar',
        ));

        $this->assertEquals(array(
            'CONTENT_TYPE'   => 'text/html',
            'CONTENT_LENGTH' => '0',
            'ETAG'           => 'asdf',
            'AUTHORIZATION'  => 'Basic ' . base64_encode('foo:bar'),
            'PHP_AUTH_USER'  => 'foo',
            'PHP_AUTH_PW'    => 'bar',
        ), Http::getHeaders());
    }
}