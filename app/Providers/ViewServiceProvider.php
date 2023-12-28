<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\Auth;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {   
        // Шаблон главной страницы
        // Прикрепить компоновщик ко всем шаблонам
        view()->composer('*', function ($view)
        {
            // Get contacts
            $contacts = \App\Models\Contact::find(1);

            $view->with('contacts', $contacts);

        });

        // Шаблон панели администратора
        // Прикрепить компоновщик к шаблону dashboard.layouts
        // view()->composer('dashboard.layout', function ($view)
        // {
            // 
        // });
    }
}
