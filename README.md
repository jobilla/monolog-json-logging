# monolog-json-logging
Configure and setup JSON formatting for monolog

# Usage
_The example below is for Laravel, change as appropriate for your needs_

## Laravel

In the `config/logging.php` file, `tap` the `UseJsonFormatting::class` on the logging channel you want, as shown below.

```
'stdout' => [
    'driver' => 'monolog',
    'handler' => StreamHandler::class,
    'with' => [
        'stream' => 'php://stdout',
    ],
    'tap' => [\Jobilla\CloudNative\Monolog\UseJsonFormatting::class],
],
```
