protected $routeMiddleware = [
    // ...
    'redirectBasedOnUserType' => \App\Http\Middleware\RedirectBasedOnUserType::class,
];