FROM nginx:latest

COPY ./nginx.conf /etc/nginx/conf.d/app.conf
COPY NHL_Stenden_PHP_Docker_Env-0.4 /app/