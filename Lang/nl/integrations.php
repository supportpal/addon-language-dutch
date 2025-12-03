<?php declare(strict_types=1);

return array(

    /*
     * 5.0.0
     */
    "app_id"                           => "App ID",
    "app_secret"                       => "App Secret",
    "api_key"                          => "API Key",

    "algolia_documentation"            => "Lees onze documentatie voor het instellen van <a href=':link'>Algolia</a>.",

    "facebook_documentation"           => "Lees onze documentatie voor het instellen van <a href=':link'>Facebook</a>.",
    "facebook_redirect_url"            => "De volgende URL <strong>moet</strong> worden ingevoerd voor de Facebook Login 'Geldige OAuth-omleidings-URI's':",

    "google_documentation"             => "Lees onze documentatie voor het instellen van <a href=':link'>Google</a>.",
    "google_redirect_url"              => "De volgende URL(s) <strong>moeten</strong> worden ingevoerd voor de Google 'Geautoriseerde omleidings-URI's':",

    "microsoft_documentation"          => "Lees onze documentatie voor het instellen van <a href=':link'>Microsoft</a>.",
    "microsoft_redirect_url"           => "De volgende URL(s) <strong>moeten</strong> worden ingevoerd voor de toepassing 'Omleidings-URI's':",

    "pusher_hosting"                   => "Hosting",
    "pusher_cloud"                     => "Cloud (pusher.com)",
    "pusher_self_hosted"               => "Zelf gehost",
    "pusher_key"                       => "Sleutel",
    "pusher_secret"                    => "Geheim",
    "pusher_cluster"                   => "Cluster",
    "pusher_internal_host"             => "Interne Host",
    "pusher_internal_host_desc"        => "De interne hostnaam of IP-adres van de websockets-server.",
    "pusher_internal_port_desc"        => "De poort van de interne websockets-server.",
    "pusher_external_host"             => "Externe Host",
    "pusher_external_host_desc"        => "De hostnaam of het IP-adres van de websockets-server die door het publiek kan worden benaderd. Laat leeg om de standaard hostnaam van uw helpdesk te gebruiken.",
    "pusher_external_port_desc"        => "De poort van de openbare websockets-server. Laat leeg om dezelfde poort als uw webserver te gebruiken.",
    "pusher_encryption_desc"           => "Inschakelen als u een SSL-certificaat op de websockets-server hebt geconfigureerd.",
    "pusher_unable_to_receive_updates" => "Kan geen realtime updates ontvangen. Controleer uw internetverbinding.",

    "steam_documentation"              => "Lees onze documentatie voor het instellen van <a href=':link'>Steam</a>.",

    "twilio_account_details"           => "Accountgegevens",
    "twilio_account_details_desc"      => "Het account SID en de auth-token zijn beschikbaar op uw accountconsole onder 'Accountinformatie'.",
    "twilio_account_sid"               => "Account SID",
    "twilio_auth_token"                => "Authenticatietoken",
    "twilio_api_details"               => "API-gegevens",
    "twilio_api_details_desc"          => "Zoek naar 'API-sleutels' in de console. Maak een API-sleutel aan en voer de sleutel en het geheim hieronder in.",
    "twilio_api_secret"                => "API-secret",
    "twilio_number_verification"       => "Nummerverificatie",

    "twitter_api_key_secret"           => "API-sleutel-secret",

    /*
     * 5.3.0
     */
    "twitter_documentation"            => "Lees onze documentatie voor het instellen van <a href=':link'>Twitter</a>.",
    "twitter_redirect_url"             => "De volgende URL <strong>moet</strong> worden ingevoerd als 'Callback-URL' voor de Twitter-app:",

    /*
     * 5.4.1
     */
    "twilio_verify_sid"                => "Verificatie-SID",
    "twilio_number_verification_desc"  => "Optioneel - Voer een verificatieservice-SID in om verificatie van telefoonnummers van gebruikers mogelijk te maken. Dit wordt aanbevolen om te voorkomen dat een gebruiker een willekeurig telefoonnummer invoert - de <a target='_blank' href='https://www.twilio.com/verify'>Verify</a>-service van Twilio is tegen betaling.",
    "twilio_verify_countries"          => "Verify Allowed Countries",
    "twilio_verify_countries_desc"     => "Restrict phone number verification to specific countries, to reduce costs and the risk of abuse. Phone numbers belonging to countries outside of the permitted list can be manually marked as verified by staff.",

    /*
     * 5.5.0
     */
    "algolia_frontend_search_rate_limit" => "Frontend Search Rate Limiting",
    "algolia_max_daily"                => "Daily Max Requests",
    "algolia_max_daily_desc"           => "The maximum number of API calls that can be made to Algolia from the frontend.",
    "algolia_max_min"                  => "Max Requests Per Minute",
    "algolia_max_min_desc"             => "The maximum number of API calls that can be made to Algolia from the frontend, per authenticated user / IP address.",

    /*
     * 5.7.0
     */
    "microsoft_tenant_id"               => "Tenant ID",
    "microsoft_tenant_id_desc"          => "If you are required to use a single tenant for supported account types, enter the tenant ID; otherwise, leave this field blank. The tenant ID can be found in the Microsoft Entra Identity overview.",

);
