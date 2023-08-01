<?php
/**
 * linkedin-client
 * Method.php
 *
 * PHP Version 5
 *
 * @category Production
 * @package  Default
 * @author   Philipp Tkachev <zoonman@gmail.com>
 * @date     8/22/17 09:15
 * @license  http://www.zoonman.com/projects/linkedin-client/license.txt linkedin-client License
 * @version  GIT: 1.0
 * @link     http://www.zoonman.com/projects/linkedin-client/
 */

namespace LinkedIn\Http;

use InvalidArgumentException;
use LinkedIn\AbstractEnum;

class Method extends AbstractEnum
{

    /**
     *
     */
    public const CONNECT = 'CONNECT';

    /**
     * The GET method requests a representation of the specified resource.
     * Requests using GET should only retrieve data.
     */
    public const GET = 'GET';

    /**
     *
     */
    public const HEAD = 'HEAD';

    /**
     *
     */
    public const POST = 'POST';

    /**
     *
     */
    public const PUT = 'PUT';

    /**
     *
     */
    public const PATCH = 'PATCH';

    /**
     *
     */
    public const OPTIONS = 'OPTIONS';

    /**
     *
     */
    public const DELETE = 'DELETE';

    /**
     *
     */
    public const TRACE = 'TRACE';

    /**
     * @param $method
     */
    public static function isMethodSupported($method)
    {
        if (!in_array($method, [Method::GET, Method::POST, Method::DELETE])) {
            throw new InvalidArgumentException('The method is not correct');
        }
    }
}
