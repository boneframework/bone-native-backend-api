<?php

return [
    'i18n' => [
        'enabled' => true,
        'translations_dir' => 'data/translations',
        'type' => \Zend\I18n\Translator\Loader\Gettext::class,
        'default_locale' => 'en_PI',
        'supported_locales' => ['en_PI', 'en_GB', 'nl_BE', 'fr_BE'],
    ]
];