Flarum i18n for Chinese
==============

[中文说明](https://github.com/justjavac/flarum-i18n-zh/blob/master/README_zh.md)

### Changing The Default Language At Runtime

The default language for your application is stored in the `app/config/app.php` configuration file. 
You may change the active language at any time using the `App::setLocale` method:

```php
App::setLocale('zh_CN');
```

### Setting The Fallback Language

You may also configure a "fallback language", which will be used when the active language does not contain a given language line. 
Like the default language, the fallback language is also configured in the `app/config/app.php` configuration file:

```php
'fallback_locale' => 'zh_CN',
```

### Overriding Package Language Files

Many packages ship with their own language lines. 
Instead of hacking the package's core files to tweak these lines, you may override them by placing files in the `app/lang/packages/{locale}/{package}` directory. 
So, for example, if you need to override the English language lines in `messages.php` for a package named `skyrim/hearthfire`, you would place a language file at: `app/lang/packages/en/hearthfire/messages.php`. 
In this file you would define only the language lines you wish to override. 
Any language lines you don't override will still be loaded from the package's language files.