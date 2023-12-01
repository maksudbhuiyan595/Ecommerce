<?php

namespace App\Console\Commands;

use App\Models\Permission;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;

class permisssionCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permission:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Permission has been sucessfully created';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       $routes= Route::getRoutes();
        
       foreach ($routes as $route)
       {
            if($route->getprefix() == '/admin')
            {
                Permission::updateOrCreate([
                    "name" =>str_replace("."," ",$route->getName()),
                    "slug"  =>$route->getName(),
                ]);
            }
       }
       echo "All Permission created successfully.";
    }
}
