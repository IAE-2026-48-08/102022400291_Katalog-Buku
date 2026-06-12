return Http::withToken($token)
    ->post(
        'https://iae-sso.virtualfri.id/api/v1/messages/publish',
        [
            'exchange' => 'iae.central.exchange',
            'message' => [
                'event' => 'book.created',
                'nim' => '102022400291',
                'team' => 'TEAM-05',
                'service' => 'catalog-book'
            ]
        ]
    );