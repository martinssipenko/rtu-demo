#### Requirements:

PHP >=5.6

#### Steps to get this work:
```
$ git clone https://github.com/martinssipenko/rtu-demo.git
$ cd rtu-demo
$ curl -sS https://getcomposer.org/installer | php
$ php comoser.phar install
$ php -S 0.0.0.0:8181 app.php
```

To access demo app, in new terminal session:
```
$ curl http://0.0.0.0:8181/hello/RTU
```
