<?php

namespace K10r\Codestyle\Fixers\Comment;

use PhpCsFixer\AbstractFixer;
use PhpCsFixer\FixerDefinition\CodeSample;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;

final class UnnecessaryCommentFixer extends AbstractFixer
{
    public function getName()
    {
        return 'Kellerkinder/automatic_constructor';
    }

    public function getDefinition()
    {
        return new FixerDefinition(
            'Removes the automatic "ClassName constructor." and "Class ClassName" phpdoc.',
            [
                new CodeSample(
                    <<<'EOT'
<?php

namespace Project\TheNamespace;

/**
 * Class TheClass
 */
class TheClass
{
    /**
     * TheClass constructor.
     */
    public function __construct()
    {
    
    }
}
EOT
                ),
            ]
        );
    }

    public function isCandidate(Tokens $tokens)
    {
        return $tokens->isAnyTokenKindsFound([T_COMMENT, T_DOC_COMMENT]);
    }

    public function getPriority()
    {
        return 9000;
    }

    protected function applyFix(\SplFileInfo $file, Tokens $tokens)
    {
        /**
         * @var int   $index
         * @var Token $token
         */
        foreach ($tokens as $index => $token) {
            if (!$token->isComment()) {
                continue;
            }

            if (!$this->isPossibleComment($token)) {
                continue;
            }

            if (preg_match('/\/(.*)\*\*\n(.*)\*.*constructor\.\n(.*)\*\//', $token->getContent())) {
                $token->setContent('');
                $tokens->removeLeadingWhitespace($index);
            }

            if (preg_match('/\/(.*)\*\*\n(.*)\*\ Class\ (.*)\n(.*)\*\//', $token->getContent())) {
                $token->setContent('');
                $tokens->removeLeadingWhitespace($index);
            }
        }
    }

    private function isPossibleComment(Token $token)
    {
        return stripos($token->getContent(), 'constructor.') !== false ||
            stripos($token->getContent(), ' Class ') !== false;
    }
}
