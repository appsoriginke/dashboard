# Introduction
### A simple package to add a sidebar to a laravel tailwind css

# Usage

add this on app.blade.php after the body tag


1. ``` @extends('dashboard::master') ```

2. open  publish dashboard.php config file.
3. ```
   'navigations' => [
        'dashboard' => [
            'url' => 'dashboard',
            'icon' => 'heroicon-o-home',
            'canAccess' => "dashboard_browse",
        ],
       
    ],
    'permissions' => [
        'dashboard' => [
            'browse',
        ],
    ],
   ```
changes the above to match your navigation and your permissions schema.


[Contribution guidelines for this project](/changes.md)
