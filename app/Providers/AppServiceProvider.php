<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Post;
use App\Policies\PostPolicy;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Gate::policy(Post::class, PostPolicy::class);
        Gate::define('teacher-auth', function (User $user){
            return $user->role === 'teacher';
        });
        Gate::define('student', function (User $u){
            return $u->role === 'student';
        });
    }
}
