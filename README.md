# SMTP-Mail
A Wordpress plugin for handling SMTP mail.

### Define the following constants in functions.php or config/application.php if using Bedrock by Roots.io

Either use environmnent variables by using vlucas/phpdotenv (bundled with Bedrock) or replace `env(x)` with your SMTP details.

```define('USE_SMTP', true);
  define('SMTP_HOST', env('SMTP_HOST'));
  define('SMTP_USER', env('SMTP_USER'));
  define('SMTP_PASSWORD', env('SMTP_PASSWORD'));
  define('SMTP_PORT', env('SMTP_PORT'));
  define('SMTP_FROM_EMAIL', env('SMTP_FROM_EMAIL'));
  define('SMTP_FROM_NAME', env('SMTP_FROM_NAME'));
  ```
