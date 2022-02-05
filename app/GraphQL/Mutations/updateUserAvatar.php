<?php

namespace App\GraphQL\Mutations;

class UpdateUserAvatar
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        return $args['image'];
    }
}
