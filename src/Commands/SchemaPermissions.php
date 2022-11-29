<?php

namespace Dashboard\Commands;


use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;
use Spatie\Permission\Models\Permission;

class SchemaPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permissions:schema';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update permissions schema';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        foreach ($this->modules() as $module => $permissions) {


            foreach ($permissions as $permission) {

                $role = Role::updateOrCreate(['name' => 'admin']);

                tap(User::first())->assignRole($role);

                $role->givePermissionTo(Permission::updateOrCreate([
                    'module' => $module,
                    'name' => "{$module}_{$permission}"
                ]));

                $permissions = Permission::where('module',  'general')->pluck('name')->toArray();

                $role->revokePermissionTo($permissions);

           }

        }

    }


    private function modules()
    {
        return   config('dashboard.permissions');
    }

}
