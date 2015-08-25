<?php

class ErrorManager {
    
    public $errors = [] ;
    
    
    public function addError($name, $error) {
        $this->errors[$name] = $error;
    }

    public function getError($name) {
        if (isset($this->errors[$name])) {
            return $this->errors[$name];
        }
    }

    public function hasErrors() {
        return count($this->errors) > 0;
        
        if (count($this->errors) > 0) {
            return true;
        } else {
            return false;
        }
    }
}