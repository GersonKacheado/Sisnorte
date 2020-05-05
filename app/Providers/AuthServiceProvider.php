<?php

namespace App\Providers;

use App\User;
use App\solicito;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate as GateContract;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        \App\Solicito::class => \App\Policies\SolicitoPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

       /* $gate->define('solicito.show', function(User $user, Solicito $solicito)
        {
            return $user->id == $solicito->user->id;
        });*/

        //
    }
}
