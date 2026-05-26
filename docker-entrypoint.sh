#!/bin/sh
set -e

echo "Iniciando o container do DevConnect..."

# Executa as migrations do Laravel de forma automatica para garantir que todas as tabelas (como a tabela 'sessions') existam no banco PostgreSQL
echo "Executando php artisan migrate --force..."
php artisan migrate --force || echo "Aviso: Nao foi possivel executar as migrations (verifique se as variaveis de banco estao corretas no painel do Render)."

# Executa o comando padrao do Apache para manter o servidor web rodando
echo "Iniciando o Apache Web Server..."
exec apache2-foreground
