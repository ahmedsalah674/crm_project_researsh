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
            [
              'text' => 'change password',
              'url'  => route('profile.change.form'),
              'icon' => 'fas fa-fw fa-lock my-2',
            ],
            ); //end event -> add
            if(\Auth::check()){
                if(\Auth::user()->role == 0)//admin menu
                {
                  
                  $event->menu->add('Admin');
                  $event->menu->add(
                   
                    [
                        'text' => 'Add User',
                        'icon'=>'fas fa-fw fa-user-plus my-2',
                        'url' => route('user.create'),
                    ],
                    
                    [
                      'text' => 'Users',
                      'icon'    => 'fas fa-fw fa-users my-2',
                      'submenu' => 
                      [
                        [
                            'text' => 'Admins',
                            'icon' => 'fas fa-fw fa-user-circle',
                            'url'  => route('users',0),
                        ],
                        [
                          'text' => 'Employees',
                          'icon'=>'fas fa-fw fa-user-circle',
                          'url'  => route('users',1),
                        ],
                        [
                          'text' => 'Customers',
                          'icon'=>'fas fa-fw fa-user-circle',
                          'url'  => route('users',2),
                        ],
                      ]
                    ],
  
                );
  
                }//end admin menu
                elseif(\Auth::user()->role == 2)
                {
                  $event->menu->add('customer');
                  $event->menu->add(
                   [
                     'text' => 'Create Complian',  
                     'url' => route('complain.create'),
                     'icon'=>'fas fa-fw fa-plus',
                   ],
 
                 );
                }//end customer menu 
              
              }

          }); //end event -> listen
    }
}
