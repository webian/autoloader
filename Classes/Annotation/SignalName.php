<?php
declare(strict_types = 1);

namespace HDNET\Autoloader\Annotation;

/**
 * @Annotation
 * @Target({"CLASS"})
 */
class SignalName
{


    /**
     * @var string
     */
    public $argumentName;

    /**
     * @param array $values
     * @throws \InvalidArgumentException
     */
    public function __construct(array $values)
    {
        if (isset($values['value'])) {
            $this->argumentName = $values['value'];
        } elseif (isset($values['argumentName'])) {
            $this->argumentName = $values['argumentName'];
        }
    }
}