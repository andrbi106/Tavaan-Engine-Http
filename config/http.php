<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Http Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور http — همهٔ کلیدهای مستندشده در `docs/03-engines/http.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/http.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('HTTP_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('HTTP_PREFIX', 'http:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('HTTP_LOG_CHANNEL', 'http'),
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];