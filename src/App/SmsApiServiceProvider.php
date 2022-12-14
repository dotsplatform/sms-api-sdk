<?php
/**
 * Description of ServiceProvider.php
 * @copyright Copyright (c) MISTER.AM, LLC
 * @author    Liuba Kalyta <kalyta@dotsplatform.com>
 */

namespace Dotsplatform\Sms;

use Illuminate\Support\ServiceProvider;

class SmsApiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/sms-api-sdk.php',
            'sms-server'
        );
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/sms-api-sdk.php' => config_path('sms-api-sdk'),
        ], 'config');
    }
}
