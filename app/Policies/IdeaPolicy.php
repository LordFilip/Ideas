<?php

namespace App\Policies;

use App\Models\User;

class IdeaPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    protected $policies = [
        'App\Models\Idea' => 'App\Policies\IdeaPolicy',
    ];
    
}
