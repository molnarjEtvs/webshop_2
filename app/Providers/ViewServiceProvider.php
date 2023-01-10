<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

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
        //
        $kategoriak = DB::select("SELECT kategoriak.nev, urlek.url FROM kategoriak INNER JOIN urlek ON (kategoriak.k_id=urlek.kapcsolat) WHERE urlek.tipus='kategoria'");
        View::share("kategoriak",$kategoriak);
    }
}
