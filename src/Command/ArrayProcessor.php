<?php
namespace Command;

class ArrayProcessor {

    protected $_rule;

    public function __construct(Validator $rule) {
        $this->_rule = $rule;
    }

    public function process(array $numbers) {
        foreach ($numbers as $n) {
            if ($this->_rule->IsValid($n)) {
                echo "$n <br/> ";
            }
        }
    }

}

?>
