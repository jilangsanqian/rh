<?php
namespace Request\Http;

class Hello
{
	    private $name;

		public function __construct($name = 'World')
		{
			$this->name = $name;
		}

		public function hello()
		{
			return 'Hello ' . $this->name;
		}

}
