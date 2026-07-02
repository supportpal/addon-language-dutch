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
    "twilio_number_verification_desc"  => "Optioneel - Voer een verificatieservice-SID in om verificatie van telefoonnummers van gebruikers mogelijk te maken. Dit wordt aanbevolen om te voorkomen dat een gebruiker een willekeurig telefoonnummer invoert. De <a target='_blank' href='https://www.twilio.com/verify'>Verify</a>-service van Twilio is een betaalde dienst.",
    "twilio_verify_countries"          => "Toegestane landen voor Verify",
    "twilio_verify_countries_desc"     => "Beperk de verificatie van telefoonnummers tot specifieke landen om de kosten en het risico op misbruik te verminderen. Telefoonnummers uit landen die niet op de toegestane lijst staan, kunnen handmatig door medewerkers als geverifieerd worden gemarkeerd.",

    /*
     * 5.5.0
     */
    "algolia_frontend_search_rate_limit" => "Snelheidslimiet voor frontend-zoekopdrachten",
    "algolia_max_daily"                => "Maximaal aantal aanvragen per dag",
    "algolia_max_daily_desc"           => "Het maximale aantal API-aanroepen dat vanuit de frontend naar Algolia kan worden gedaan.",
    "algolia_max_min"                  => "Maximaal aantal aanvragen per minuut",
    "algolia_max_min_desc"             => "Het maximale aantal API-aanroepen dat vanuit de frontend naar Algolia kan worden gedaan, per geauthenticeerde gebruiker/IP-adres.",

    /*
     * 5.7.0
     */
    "microsoft_tenant_id"               => "Tenant-ID",
    "microsoft_tenant_id_desc"          => "Als u één enkele tenant moet gebruiken voor ondersteunde accounttypen, voer dan de tenant-ID in. Laat dit veld anders leeg. De tenant-ID is te vinden in het overzicht van Microsoft Entra Identity.",

);
