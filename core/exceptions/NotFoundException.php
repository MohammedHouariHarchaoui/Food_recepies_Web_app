<?php 

namespace app\core\exceptions;

use \Exception;

class NotFoundException extends Exception{
    protected $message = 'page not found';
    protected $code = 404;
}