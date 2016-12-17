# How to create a page?

1. Route, View(closure)
2. Route, Controller & View (string)
3. Route, Controller & View (blade template)
4. Route, Controller, View (Blade), Data (Eloquent)

# Form

1. Action - url | route | action - [URL Helpers](https://laravel.com/docs/5.3/helpers#urls)
2. Method - POST | GET
3. CSRF - `csrf_field()`
4. Method Spoofing - `method_field('METHOD_TYPE')`

# How to create dummy data

```
php artisan tinker
factory(App\User::class, 100)->create();
```

# Queries using eloquent

```
User::all();
User::paginate();
User::find();
```