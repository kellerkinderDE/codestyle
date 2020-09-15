<?php

namespace K10r\Codestyle;

use K10r\Codestyle\Fixer\AutomaticCommentsFixer;
use K10r\Codestyle\Fixer\MultiToSingleLineAnnotationFixer;

final class CustomFixer
{
    /**
     * @return array
     */
    public static function getCustomFixer()
    {
        return [
            new AutomaticCommentsFixer(),
            new MultiToSingleLineAnnotationFixer(),
        ];
    }
}
