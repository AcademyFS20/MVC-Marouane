<?php 

namespace Providers;

class Validator
{   
       
    

    // Function validation email 
    public function isvalidEmail($email)
    {
        if($this->validateInputs($email, FILTER_VALIDATE_EMAIL)){
            return true;
        } else {
            return false;
        }
    }

    // Function empty input form
    public function isRequired($fields)
    {
        foreach($fields as $field) {
            if ($_POST[$field] === '') {
                return false;
            }
        }
        return true;
    }

    public function validateInputs($inputText, $option)
    {
        $inputText = filter_var(trim(strip_tags($inputText)), $option);
        return $inputText;
    }

    public function passwordsMatch($pw1, $pw2)
    {
        if ($pw1 === $pw2) {
            return true;
        } else {
            return false;
        }
    }

    public function santizeStr($input)
    {
        return trim(strip_tags($input));
    }

}

