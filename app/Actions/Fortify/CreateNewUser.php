<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'nik' => ['required', 'string', 'size:16'],
            'kk' => ['required', 'string', 'size:16'],
            'address' => ['required', 'string', 'min:6'],
            'zipcode' => ['required', 'string', 'size:5'],
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'nik' => $input['nik'],
            'kk' => $input['kk'],
            'address' => $input['address'],
            'zipcode' => $input['zipcode'],
        ]);
    }
}
