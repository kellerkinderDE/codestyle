<?php

namespace K10r;

use K10r\Fixer\AutomaticCommentsFixer;
use K10r\Fixer\MultiToSingleLineAnnotationFixer;

final class CustomFixer
{
    /** @return array */
    public static function getCustomFixer()
    {
        return [
            new AutomaticCommentsFixer(),
            new MultiToSingleLineAnnotationFixer(),
        ];
    }
}
