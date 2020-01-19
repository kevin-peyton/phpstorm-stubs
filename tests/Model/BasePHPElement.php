<?php
declare(strict_types=1);

namespace StubTests\Model;

use Exception;

abstract class BasePHPElement
{
    public string $name;
    public bool $stubBelongsToCore = false;
    public ?Exception $parseError = null;
    protected array $mutedProblems = [];

    /**
     * @param mixed $object
     *
     * @return mixed
     */
    abstract public function readObjectFromReflection($object);

    /**
     * @param mixed $node
     *
     * @return mixed
     */
    abstract public function readObjectFromStubNode($node);

    abstract public function readMutedProblems($jsonData);

    protected function getFQN($node): string
    {
        $fqn = '';
        if ($node->namespacedName === null) {
            $fqn = $node->name->parts[0];
        } else {
            /**@var string $part */
            foreach ($node->namespacedName->parts as $part) {
                $fqn .= "$part\\";
            }
        }
        return rtrim($fqn, "\\");
    }

    public function hasMutedProblem($stubProblemType): bool
    {
        return in_array($stubProblemType, $this->mutedProblems, true);
    }
}
