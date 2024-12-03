<?php

namespace App\Providers;

use App\Listeners\StripeEventListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Laravel\Cashier\Events\WebhookReceived;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Слушатели для событий.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        WebhookReceived::class => [
            StripeEventListener::class,
        ]

    ];

    /**
     * Регистрирует любые событийные и слушательские маппинги.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();


    }
}
