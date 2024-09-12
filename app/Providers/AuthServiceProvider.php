<?php

namespace App\Providers;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(GateContract $gate): void
    {
        $gate->define('admin', function (User $user): bool {
            return (bool) $user->is_admin;
        });

        $gate->define('idea.delete', function(User $user, Idea $idea) : bool {
            return ((bool) $user->is_admin || $user->id === $idea->user_id);
        });

        $gate->define('idea.edit', function(User $user, Idea $idea) : bool {
            return ((bool) $user->is_admin || $user->id === $idea->user_id);
        });
    }


    
}
