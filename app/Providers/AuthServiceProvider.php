<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Models\Conversation;
use App\Policies\ConversationPolicy;
use App\Policies\ProductPolicy;
use App\Models\Product;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
  protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Conversation::class => ConversationPolicy::class,
        Product::class => ProductPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
          $this->registerPolicies();


        // Gate for moderator
        Gate::define('has-access', function($user, $permission){
            return $user -> hasPermission($permission);
        });

        /**
         * Admin grants access to all
         */
        Gate::before(function($user, $permission){
            if($user -> isAdmin()){
                return true;
            }
        });
    }
}
