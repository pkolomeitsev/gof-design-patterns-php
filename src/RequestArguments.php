<?php

namespace Gof\DesignPatterns;

/**
 * Description of RequestArguments
 *
 * @author user
 */
class RequestArguments {

    private $allowedKeys = [
        '--type',
        '--pattern',
        '--help'
    ];
    private string $type = '';
    private string $pattern = '';

    /**
     * @param array $arguments array of arguments passed to script ($argv)
     */
    public function __construct(array $arguments) {
        if (!empty($arguments[1]) && $arguments[1] !== '--help') {
            $this->type = $this->parseTypeValue($arguments[1] ?? '');
            $this->pattern = $this->parsePatternValue($arguments[2] ?? '');
        }
    }

    private function parseTypeValue($args) {
        return $this->parseArgs($args);
    }

    private function parsePatternValue($args) {
        return $this->parseArgs($args);
    }

    private function parseArgs($args) {
        [$key, $value] = explode('=', $args);

        if (!in_array($key, $this->allowedKeys)) {
            throw new \Exception(sprintf("Key '%s' is not correct", $key));
        }

        return $value;
    }

    public function getType() {
        return $this->type;
    }

    public function getPattern() {
        return $this->pattern;
    }
}
