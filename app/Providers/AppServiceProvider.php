<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Document;
use App\Models\User;
// use Illuminate\Support\ServiceProvider;
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
        Gate::define('delete-document', function (User $user, Document $document) {
            return $user->id === $document->user_id;
        });
    }
}
