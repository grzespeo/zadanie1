#!/bin/bash
sudo apt-get install nginx -y
sudo apt-get install php-fpm php-mysql -y
sudo mv index.nginx-debian.html index.nginx-debian.html_old
sudo service nginx restart
