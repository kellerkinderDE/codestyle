<?php

namespace K10rFixer;

use Generator;
use IteratorAggregate;
use PhpCsFixer\Finder;
use Symfony\Component\Finder\SplFileInfo;

final class CustomFixer implements IteratorAggregate
{
    /**
     * @return Generator
     */
    public function getIterator()
    {
        $finder = Finder::create()
            ->files()
            ->in(__DIR__ . '/Fixer/')
            ->notName('AbstractFixer.php')
            ->notName('DeprecatingFixerInterface.php')
            ->sortByName();
        $classes = [];
        /** @var SplFileInfo $fileInfo */
        foreach ($finder as $fileInfo) {
            $className = __NAMESPACE__ . '\\Fixer\\' . $fileInfo->getBasename('.php');
            $classes[] = $className;
            yield new $className();
        }

        return $classes;
    }
}
