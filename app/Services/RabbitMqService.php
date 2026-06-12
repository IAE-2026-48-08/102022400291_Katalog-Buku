public static function publish()
{
    $tokenResponse = Http::asForm()->post(
        'https://iae-sso.virtualfri.id/api/v1/auth/token',
        [
            'api_key' => 'KEY-MHS-301'
        ]
    );

    dd(
        $tokenResponse->status(),
        $tokenResponse->body()
    );
}