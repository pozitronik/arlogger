ActiveRecordLogger
==================
ActiveRecord logging extension for YII2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Add

```
{
	"type": "vcs",
	"url": "https://github.com/pozitronik/yii2-arlogger"
} 
```

to the repositories section of your `composer.json` file.

Either run

```
php composer.phar require --prefer-dist pozitronik/yii2-arlogger "*"
```

or add

```
"pozitronik/yii2-arlogger": "*"
```

to the require section of your `composer.json` file.

Requirements
------------

Yii2,
PHP >= 7.2.0
Any SQL engine with JSON fields support (as MySQL 7.0+). 

Usage
-----
At first, run a included migration:

```
yii migrate/up --migrationPath=@vendor/pozitronik/yii2-arlogger/src/migrations
```

This will create a table named `sys_log`, required by extension.

Then add to your `web.php`

```
	$config['modules']['history'] = [
		'class' => ARLogger::class
	];
	$config['bootstrap'][] = 'history';
```
('history' can be replaced to any appropriate name).

From this moment all logged events can be viewed in `yourapp.url\index.php?r=history`

This extension provides an **ActiveRecordHistory** class, that replace standard Yii **ActiveRecord** class. Once you change inheritance from any AR-model, any of table changes will be logged.

Demo application
-------------------

[arlogger-sample](https://github.com/pozitronik/arlogger-sample).

Run

```
git pull https://github.com/pozitronik/arlogger-sample.git
composer update
```

Edit database config in `config/dp.php` then run

```
yii migrate/up
```

---
to be continued...
