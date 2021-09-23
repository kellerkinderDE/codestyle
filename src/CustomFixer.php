<?php

declare(strict_types=1);

namespace K10r\Codestyle;

use K10r\Codestyle\Fixer\AutomaticCommentsFixer;
use K10r\Codestyle\Fixer\MultiToSingleLineAnnotationFixer;

final class CustomFixer
{
    public static function getCustomFixer(): array
    {
        return [
            new AutomaticCommentsFixer(),
            new MultiToSingleLineAnnotationFixer(),
        ];
    }
}
