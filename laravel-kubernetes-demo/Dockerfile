FROM composer:1.6.5 as build

WORKDIR /app
COPY . /app
RUN composer install

FROM php:7.1.8-apache

EXPOSE 80
COPY --from=build /app /app
COPY vhost.conf /etc/apache2/sites-available/000-default.conf
RUN chown -R www-data:www-data /app \
    && a2enmod rewrite

#docker run -ti  -p 8080:80  -e APP_KEY=base64:cUPmwHx4LXa4Z25HhzFiWCf7TlQmSqnt98pnuiHmzgY=  laravel-kubernetes-demo
# kubectl run laravel-kubernetes-demo --restart=Never --image=laravel-kubernetes-demo --port=80 --env=APP_KEY=base64:cUPmwHx4LXa4Z25HhzFiWCf7TlQmSqnt98pnuiHmzgY=
#kubectl expose pods laravel-kubernetes-demo --type=NodePort --port=80