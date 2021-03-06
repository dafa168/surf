<?php
/**
 * Created by PhpStorm.
 * User: zhoutianliang
 * Date: 2018/3/6
 * Time: 12:03
 */

namespace Surf\Pool\Exception;

use Exception;
use Throwable;

class MaxWaitException extends PoolException
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
