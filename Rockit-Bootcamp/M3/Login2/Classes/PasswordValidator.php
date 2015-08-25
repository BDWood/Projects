<?php

class PasswordValidator extends Validator {
    public $regex = "/^[a-zA-Z0-9!@#$%^&*\(\)]{5,}$/";
}