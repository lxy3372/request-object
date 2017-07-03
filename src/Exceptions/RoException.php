<?php

namespace Riky\Exceptions;

use Riky\Exceptions\ErrorCode\RoError;

/**
 * Class RoException
 */
class RoException extends BaseException
{
	/**
	 * @var string  属性 
	 */
    public $attribute;

    public function __construct($code, array $value = [], $attribute = '', \Exception $exception = null)
    {
        $this->attribute = $attribute;
	    $notice = $value['field'].RoError::RO_ERROR_NOTICE[$code].(empty($value['value']) ? '' : $value['value']);
        parent::__construct($code, $notice);
    }

    public function getAttribute()
    {
        return $this->attribute;
    }
}