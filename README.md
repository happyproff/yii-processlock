yii-processlock
==============

[![License](https://poser.pugx.org/happyproff/yii-processlock/license.svg)](https://packagist.org/packages/happyproff/yii-processlock)

Предотвращение одновременного запуска нескольких копий скрипта.

## Использование

Зависимость в `composer.json`:

```json
"happyproff/yii-processlock": "*"
```

Регистрация компонента приложения:

```php
'components' => [
    ...,
    'processLock' => [
        'class' => 'happyproff\YiiProcessLock\ProcessLock',
    ],
    ...
]
```

В консольной команде:

```php
Yii::app()->processLock->checkIn('SCRIPT_ID');
```
