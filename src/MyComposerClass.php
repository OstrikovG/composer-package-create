<?php

namespace OstrikovG\ComposerPackageCreate;

class MyComposerClass
{
    private $result;

    /**
     * @return string
     */
    public function createResult()
    {
        return $this->result = md5(rand());
    }

    /**
     * @return int
     */
    public function writeResult()
    {
        if (isset($this->result)) {
            return print $this->result . PHP_EOL;
        } else {
            return print "Result not found" . PHP_EOL;
        }
    }
}