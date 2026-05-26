FROM php:8.3-apache

# Define a imagem base do PHP 8.3 com Apache
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpq-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_pgsql zip

# Instala o Node.js v20 e npm para compilar os assets do Vite em ambiente de produção
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Copia o Composer para dentro do container
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define a pasta principal da aplicação
WORKDIR /var/www/html

# Copia todos os arquivos do projeto para dentro do container
COPY . .

# Instala as dependências do Composer (PHP) em modo produção
RUN composer install --no-dev --optimize-autoloader

# Instala as dependências do npm e compila os assets estáticos com Vite (css, js, etc)
RUN npm install \
    && npm run build

# Cria automaticamente o arquivo .env a partir do .env.example
RUN cp .env.example .env

# Gera automaticamente a APP_KEY do Laravel
RUN php artisan key:generate

# Garante que as pastas de armazenamento e caches tenham permissões de escrita para o Apache
RUN chown -R www-data:www-data /var/www/html/storage \
    && chown -R www-data:www-data /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# Ativa o módulo rewrite do Apache necessário para as rotas do Laravel
RUN a2enmod rewrite

# Copia a configuração personalizada do Apache vhost
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Copia e configura o script de entrada para automação de migrations na inicialização
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Define o script de entrada
ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]

# Libera a porta 80 para acesso da aplicação
EXPOSE 80
