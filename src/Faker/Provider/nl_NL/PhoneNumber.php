<?php

namespace Faker\Provider\nl_NL;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
	protected static $formats = array(
		'06-########',
		'+31 (0)6-########',
	);
}
