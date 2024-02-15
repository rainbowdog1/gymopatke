<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="https://cloudt.edupage.org/cloud?z%3Ak77zqDxCXwF6qdx7XBot7dw6kxBRQAQS1Sjsrl35Fw%2FAhBx8eAEyr8DjtEVsFG34RwyW%2FteQD7gcpI%2BNQz%2BpgYWQvc7Bd%2BtYGOMrI0ZJ%2ByN%2B2mngutYs1Et312ireNDs" />


        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
