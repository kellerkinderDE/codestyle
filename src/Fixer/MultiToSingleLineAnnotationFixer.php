<?php

declare(strict_types=1);

namespace K10r\Codestyle\Fixer;

use PhpCsFixer\AbstractFixer;
use PhpCsFixer\FixerDefinition\CodeSample;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;

final class MultiToSingleLineAnnotationFixer extends AbstractFixer
{
    public function getName(): string
    {
        return 'Kellerkinder/single_line_annotation';
    }

    public function getDefinition(): FixerDefinitionInterface
    {
        return new FixerDefinition(
            'Multiline @var annotations with only one property are collapsed to single line annotations',
            [
                new CodeSample(
                    <<<'EOT'
<?php

namespace Project\TheNamespace;

class TheClass
{
    /**
     * @var int
     */
    public $property;

    /**
     * @var string
     */
    public $otherProperty;
}
EOT
                ),
            ]
        );
    }

    public function isCandidate(Tokens $tokens): bool
    {
        return $tokens->isAnyTokenKindsFound([T_COMMENT, T_DOC_COMMENT]);
    }

    public function getPriority(): int
    {
        return 9000;
    }

    protected function applyFix(\SplFileInfo $file, Tokens $tokens): void
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

            $this->collapseComment('var', $token);
        }
    }

    private function isPossibleComment(Token $token): bool
    {
        return stripos($token->getContent(), '@var') !== false;
    }

    private function collapseComment($type, Token $token): void
    {
        $token->setContent(preg_replace(
            '/\/(.*)\*\*\n(.*)\* @' . $type . ' (.+)\n(.*)\*\//',
            '/** @' . $type . ' $3 */',
            $token->getContent()
        ));
    }
}
