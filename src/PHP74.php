<?php

namespace K10r\Codestyle;

final class PHP74 extends DefaultRules
{
	/**
	 * {@inheritDoc}
	 */
    public static function getRules()
    {
		return array_merge(
			PHP73::getRules(),
			[
				'global_namespace_import' => [
					'import_classes'   => true,
					'import_constants' => true,
					'import_functions' => true,
				],
				'heredoc_indentation' => true,
				'fully_qualified_strict_types' => true,
				'nullable_type_declaration_for_default_null_value' => true
			]
		);
    }
}
