<?php

use JoelButcher\Socialstream\Features;
use JoelButcher\Socialstream\Providers;

return [
    'middleware' => ['web'],
    'prompt' => 'alebo',
    'providers' => [
        [
            'id' => 'azure',
            'name' => 'Azure',
            'label' => 'Prihlásiť sa pomocou školského konta',
        ],
    ],
    'features' => [
        // Features::createAccountOnFirstLogin(),
        // Features::generateMissingEmails(),
        Features::rememberSession(),
        Features::providerAvatars(),
        Features::refreshOAuthTokens(),
    ],
];
