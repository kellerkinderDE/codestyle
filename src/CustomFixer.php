<?php

namespace K10rFixer;

use PhpCsFixer\Finder;

final class CustomFixer implements \IteratorAggregate
{
    public function getIterator(): \Generator
    {
        $finder = Finder::create()
            ->files()
            ->in(__DIR__ . '/Fixer/')
            ->notName('AbstractFixer.php')
            ->notName('DeprecatingFixerInterface.php')
            ->sortByName();
        $classes = [];
        foreach ($finder as $fileInfo) {
            $className = __NAMESPACE__ . '\\Fixer\\' . $fileInfo->getBasename('.php');
            array_push($classes, $className);
            yield new $className();
        }

        return $classes;
    }
}
