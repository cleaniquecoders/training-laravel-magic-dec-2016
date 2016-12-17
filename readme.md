# How to create a page?

1. Route, View(closure)
2. Route, Controller & View (string)
3. Route, Controller & View (blade template)
4. Route, Controller, View (Blade), Data (Eloquent)

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