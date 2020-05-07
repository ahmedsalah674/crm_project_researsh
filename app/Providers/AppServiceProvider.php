<?php

namespace App\Providers;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Illuminate\Support\ServiceProvider;
use App\User;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
     
      
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
          // $user=User::find(\Auth::user()->id);
           $event->menu->add(
            [
                'text' => 'Home',
                'url'  => 'home',
                'icon' => 'fas fa-fw fa-home',
            ],
            ['header' => 'account_settings'],
            [
                'text' => 'Profile',
                'url'  => route('user.data',\Auth::user()),
                'icon' => 'fas fa-user fa-lg mr-1 my-2',
              
            ],
           
            );
           
          });
    }
}
