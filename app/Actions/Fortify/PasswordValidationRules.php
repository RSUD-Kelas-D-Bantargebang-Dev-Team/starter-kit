<?php

namespace App\Actions\Fortify;

use Illuminate\Validation\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array
     */
    protected function passwordRules()
    {
        if(app()->isProduction()){
            return [
                'required',
                'string',
                'confirmed',
                Password::min(8)->mixedCase()->numbers()->uncompromised()->letters()
            ];
        }

        return [
            'required',
            'string',
            'confirmed',

        ];
    }
}
