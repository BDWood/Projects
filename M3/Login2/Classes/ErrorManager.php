<?php

class ErrorManager {

    public $errors = [];

    public function addError($key, $value) {
        $this->errors[$key] = $value;
    }

    public function getError($name) {
        if (isset($this->errors[$name])) {
            return $this->errors[$name];
        }
    }

    public function hasErrors() {
        if (count($errors) > 0) {
            return true;
        } else {
            return false;
        }
    }
}