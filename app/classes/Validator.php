<?php

namespace App\Classes;

use Illuminate\Database\Capsule\Manager as DB;

/**
 *
 */
class Validator
{
    public $errors = [];
    public $error_msgs = [
        "unique" => "The :field must be unique",
        "number" => "The :field must be number",
        "string" => "The :field must be string",
        "email" => "The :field must be email",
        "mixed" => "The :field must be A-Za-z",
        "mixed" => "The :field must be mixed",
        "minLength" => "The :field must have of :length of characters.",
        "maxLength" => "The :field must not have of :length characters.",

    ];

    /**
     * @param $data getData
     * @param $rules getRules
     * */
    public function checkData($data, $rules = [])
    {
        foreach ($data as $column => $value) {
            if (in_array($column, array_keys($rules))) {
                $this->doValidation([
                    "field" => $column,
                    "value" => $value,
                    "rules" => $rules[$column]
                ]);
            }
        }
    }

    public function doValidation($data)
    {
        $column = $data["field"];
        foreach ($data['rules'] as $ruleKey => $ruleVal) {
            $valid = call_user_func_array([self::class, $ruleKey], [$ruleVal, $column, $data['value']]);
            if (!$valid) {
                $this->setErrs(
                    $column,
                    str_replace([":field", ":length"],
                        [$column, $ruleVal],
                        $this->error_msgs[$ruleKey],
                    )
                );
            }
        }
    }


    /**
     * @param $table DB table name
     * @param $field DB field || column
     * @param $value DB value
     *
     */
    public function unique($table, $field, $value)
    {
        if ($value != null and !empty($value)) {
            return !DB::table($table)->where($field, $value)->exists() ? true : false;
        }
    }

    /**
     * @param $table DB table name
     * @param $field DB field || column
     * @param $value DB value
     * @return boolean
     */

    public function required($table, $field, $value)
    {
        return !empty($value) && $value != null ? true : false;
    }

    /**
     * @param $length String Length
     * @param $field DB field || column
     * @param $value DB value
     * @return boolean
     */

    public function minLength($length, $field, $value): bool
    {
        if (!empty($value) && $value != null) {
            return strlen(trim($value)) >= $length;
        }
    }

    public function maxLength($length, $field, $value): bool
    {
        if (!empty($value) && $value != null) {
            return strlen(trim($value)) <= $length;
        }
    }

    public function string($length, $field, $value): bool
    {
        if (!empty($value) && $value != null) {
            return preg_match("/^[A-Za-z \.]+$/", $value);
        }
        return false;
    }

    public function email($length, $field, $value): bool
    {
        if (!empty($value) && $value != null) {
            return filter_var($value, FILTER_VALIDATE_EMAIL);
        }
        return false;
    }

    public function number($length, $field, $value): bool
    {
        if (!empty($value) && $value != null) {
            return preg_match("/^[0-9 \.]+$/", $value);
        }
        return false;
    }

    public function mixed($length, $field, $value): bool
    {
        if (!empty($value) && $value != null) {
            return preg_match("/^(.)+$/", $value);
        }
        return false;
    }

    public function setErrs($key = null, $error)
    {
        if ($key) {
            $this->errors[$key] = $error;
        } else {
            $this->errors[] = $error;
        }

    }

    public function hasErrors()
    {
        return count($this->errors) > 0 ? true : false;
    }

    public function getErrors()
    {
        return $this->errors;
    }


}
