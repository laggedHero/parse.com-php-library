<?php

namespace Parse;

use Parse\Rest\Client;

class Cloud extends Client
{
    public $_options;
    private $_functionName = '';

    public function __construct($function = '')
    {
        $this->_options = array();
        if ($function != '') {
            $this->_functionName = $function;
        } else {
            $this->throwError('include the functionName when creating a parseCloud');
        }

        parent::__construct();
    }

    public function __set($name, $value)
    {
        $this->_options[$name] = $value;
    }

    public function run()
    {
        if ($this->_functionName != '') {
            $request = $this->request(
                array(
                    'method' => 'POST',
                    'requestUrl' => 'functions/'.$this->_functionName,
                    'data' => $this->_options,
                )
            );
            return $request;
        }
    }
}
