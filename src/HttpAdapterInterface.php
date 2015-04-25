<?php

/*
 * This file is part of the Http Adapter package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Http\Adapter;

/**
 * @author GeLo <geloen.eric@gmail.com>
 */
interface HttpAdapterInterface extends PsrHttpAdapterInterface
{
    /**
     * Sends a GET request
     *
     * @param string|object $uri
     * @param array         $headers
     *
     * @throws HttpAdapterException If an error occurred.
     *
     * @return ResponseInterface
     */
    public function get($uri, array $headers = []);

    /**
     * Sends an HEAD request.
     *
     * @param string|object $uri
     * @param array         $headers
     *
     * @throws HttpAdapterException If an error occurred.
     *
     * @return ResponseInterface
     */
    public function head($uri, array $headers = []);

    /**
     * Sends a TRACE request.
     *
     * @param string|object $uri
     * @param array         $headers
     *
     * @throws HttpAdapterException If an error occurred.
     *
     * @return ResponseInterface
     */
    public function trace($uri, array $headers = []);

    /**
     * Sends a POST request.
     *
     * @param string|object $uri
     * @param array         $headers
     * @param array|string  $datas
     * @param array         $files
     *
     * @throws HttpAdapterException If an error occurred.
     *
     * @return ResponseInterface
     */
    public function post($uri, array $headers = [], $datas = [], array $files = []);

    /**
     * Sends a PUT request.
     *
     * @param string|object $uri
     * @param array         $headers
     * @param array|string  $datas
     * @param array         $files
     *
     * @throws HttpAdapterException If an error occurred.
     *
     * @return ResponseInterface
     */
    public function put($uri, array $headers = [], $datas = [], array $files = []);

    /**
     * Sends a PATCH request.
     *
     * @param string|object $uri
     * @param array         $headers
     * @param array|string  $datas
     * @param array         $files
     *
     * @throws HttpAdapterException If an error occurred.
     *
     * @return ResponseInterface
     */
    public function patch($uri, array $headers = [], $datas = [], array $files = []);

    /**
     * Sends a DELETE request.
     *
     * @param string|object $uri
     * @param array         $headers
     * @param array|string  $datas
     * @param array         $files
     *
     * @throws HttpAdapterException If an error occurred.
     *
     * @return ResponseInterface
     */
    public function delete($uri, array $headers = [], $datas = [], array $files = []);

    /**
     * Sends an OPTIONS request.
     *
     * @param string|object $uri
     * @param array         $headers
     * @param array|string  $datas
     * @param array         $files
     *
     * @throws HttpAdapterException If an error occurred.
     *
     * @return ResponseInterface
     */
    public function options($uri, array $headers = [], $datas = [], array $files = []);

    /**
     * Sends a request.
     *
     * @param string|object $uri
     * @param string        $method
     * @param array         $headers
     * @param array|string  $datas
     * @param array         $files
     *
     * @throws HttpAdapterException If an error occurred.
     *
     * @return ResponseInterface
     */
    public function send($uri, $method, array $headers = [], $datas = [], array $files = []);
}
