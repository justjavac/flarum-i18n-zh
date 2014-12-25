Flarum 国际化中文语言包
==============

### 在执行时变换默认语言

应用程序的默认语言被储存在 `app/config/app.php` 配置文件。
您可以在任何时候用 `App::setLocale` 方法变换现行语言：

```php
App::setLocale('zh_CN');
```

### 设定备用语言

您也可以设定 "备用语言"，它将会在当现行语言没有给定的语句时被使用。
就像默认语言，备用语言也可以在 `app/config/app.php` 配置文件设定：

```php
'fallback_locale' => 'zh_CN',
```

### 重写扩展包的语言文件

许多扩展包附带它们自有的语句。
您可以通过放置文件在 `app/lang/packages/{locale}/{package}` 文件夹重写它们，而不是改变扩展包的核心文件来调整这些句子。
所以，举个例子，如果您需要重写 `skyrim/hearthfire` 扩展包在 `messages.php` 的英文语句，您可以放置语言文件在：`app/lang/packages/en/hearthfire/messages.php`。
您可以只定义您想要重写的语句在这个文件里，任何您没有重写的语句将会仍从扩展包的语言文件载入。