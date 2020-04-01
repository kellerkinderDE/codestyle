<?php

namespace K10r\Codestyle;

final class PHP72 extends DefaultRules
{
	/**
	 * {@inheritDoc}
	 */
    public static function getRules()
    {
        return PHP71::getRules();
    }
}
