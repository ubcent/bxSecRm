# bxSecRm
Скрипт удаляет пустые разделы в дереве CMS 1c-bitrix.

## Version
0.0.1

## Usage
Необходимо заменить данный путь на путь установки 1с-bitrix.
```php
$_SERVER["DOCUMENT_ROOT"] = "/home/bitrix/www";
```

# bxSecChildRm
Скрипт удаляет пустые подразделы нужного раздела в дереве CMS 1c-bitrix.

## Version
0.0.1

## Usage
Необходимо заменить данный путь на путь установки 1с-bitrix.
```php
$_SERVER["DOCUMENT_ROOT"] = "/home/bitrix/www";
```
А так же указать идентификатор нужного раздела, пустые подразделы которого необходимо удалить
```php
$nav_ID == 59
```