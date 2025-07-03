FROM php:8.2-apache
COPY . /var/www/html/git add Dockerfile
git commit -m "Fix: Add content to Dockerfile"
git push