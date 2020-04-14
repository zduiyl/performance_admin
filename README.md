#### composer

命令行：https://docs.phpcomposer.com/03-cli.html

#composer -V

#compose --create-project laravel/laravel [project_path]



#### laravel

#./artisan -V

Laravel Framework 7.5.2

#./artisan -v



/config/app.php

```
'timezone' => 'Asia/Shanghai',
```

你的 .env 文件不应该提交到应用程序的源代码控制系统中，因为每个使用你的应用程序的开发人员 / 服务器可能需要有一个不同的环境配置。此外，在入侵者获得你的源代码控制仓库的访问权的情况下，这会成为一个安全隐患，因为任何敏感的凭据都被暴露了。



线上环境

php artisan config:cache

php artisan route:cache



维护模式

php artisan down

php artisan down --message="Upgrading Database" --retry=60

php artisan down --allow=127.0.0.1 --allow=192.168.0.0/16

`message` 选项的值可用于显示或记录自定义消息，而 `retry` 值可用于设置 `HTTP` 请求头中 `Retry-After` 的值。



关闭维护模式

php artisan up



#### psr规范

https://www.php-fig.org/psr



#### nginx

root /www/wwwroot/localhost/performance_admin/public;

location / {
	try_files $uri $uri/ /index.php?$query_string;
}



#### laravel
composer require laravel/passport

php artisan migrate

php artisan passport:install


##### 部署
php artisan passport:keys
