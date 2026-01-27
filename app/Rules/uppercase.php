<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class uppercase implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Lets create our own cuatom rule to check if the value is uppercase
        if (strtoupper($value) !== $value) {
            $fail('The '.$attribute.' must be uppercase.');
        }
    }
}
