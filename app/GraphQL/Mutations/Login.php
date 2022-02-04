<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class Login
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        $user = User::where('email',$args['email'])->first();


        if(!$user || !Hash::check($args['password'], $user->password)){
            throw ValidationException::withMessages([
                'email' => ['the provided email,password are not corrent, lol!'],
            ]);
    }

    return $user->createToken($args['device'])->plainTextToken;
    }
}
