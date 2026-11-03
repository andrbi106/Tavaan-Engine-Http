# Tavaan Engine — Http

> **HTTP** — موتور Http در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.http` |
| نام | `Http` |
| عنوان فارسی | HTTP |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Http` |
| نوع | `engine` |
| Facade | `Http` (accessor: `http`) |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Http\Contracts\CookieInterface`
- `Tavaan\Engine\Http\Contracts\KernelInterface`
- `Tavaan\Engine\Http\Contracts\MiddlewareInterface`
- `Tavaan\Engine\Http\Contracts\RequestInterface`
- `Tavaan\Engine\Http\Contracts\ResponseInterface`
- `Tavaan\Engine\Http\Contracts\TerminableMiddleware`
- `Tavaan\Engine\Http\Contracts\UploadedFileInterface`
- `Tavaan\Engine\Http\Contracts\UriInterface`

## خطاها (Exceptions)

- `Tavaan\Engine\Http\Exceptions\BadRequestException`
- `Tavaan\Engine\Http\Exceptions\CsrfTokenMismatchException`
- `Tavaan\Engine\Http\Exceptions\ForbiddenException`
- `Tavaan\Engine\Http\Exceptions\HeaderInjectionException`
- `Tavaan\Engine\Http\Exceptions\HttpException`
- `Tavaan\Engine\Http\Exceptions\MethodNotAllowedException`
- `Tavaan\Engine\Http\Exceptions\PayloadTooLargeException`
- `Tavaan\Engine\Http\Exceptions\RouteNotFoundException`
- `Tavaan\Engine\Http\Exceptions\ServerErrorException`
- `Tavaan\Engine\Http\Exceptions\TooManyRequestsException`
- `Tavaan\Engine\Http\Exceptions\UnauthorizedException`
- `Tavaan\Engine\Http\Exceptions\UnprocessableEntityException`

## Facadeها

- `Tavaan\Engine\Http\Facades\Cookie`
- `Tavaan\Engine\Http\Facades\Http`
- `Tavaan\Engine\Http\Facades\Session`

## کلاس‌های اصلی

- `src/Console/RouteCacheCommand.php`
- `src/Console/RouteClearCommand.php`
- `src/Console/RouteListCommand.php`
- `src/Console/RouteMatchCommand.php`
- `src/Console/ServeCommand.php`
- `src/Cookie/Cookie.php`
- `src/Cookie/CookieJar.php`
- `src/Cookie/EncryptCookiesMiddleware.php`
- `src/Cors/CorsMiddleware.php`
- `src/HttpKernel.php`
- `src/Middleware/IpMatcher.php`
- `src/Middleware/MaintenanceModeMiddleware.php`
- `src/Middleware/RequestSizeLimitMiddleware.php`
- `src/Middleware/SecurityHeadersMiddleware.php`
- `src/Middleware/SetLocaleMiddleware.php`
- `src/Middleware/TraceContextMiddleware.php`
- `src/Middleware/TrustProxiesMiddleware.php`
- `src/Redirector.php`
- `src/Request.php`
- `src/Response.php`
- ... و 21 فایل دیگر

## Service Providerها

- `Tavaan\Engine\Http\HttpServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `pipeline`
- `event`
- `error`
- `config`

## پیکربندی

- فایل پیکربندی: `config/http.php`
- کلید: `http`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Http.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Http`** (این مخزن) | موتور Http |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
