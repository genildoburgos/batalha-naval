// ...existing code...
# Batalha Naval - Guia de Inicialização

Guia curto para configurar e executar o projeto em Linux (Ubuntu/Debian).

## Pré-requisitos
- PHP 8.3
- Composer
- Docker (opcional, para PostgreSQL)
- NVM (recomendado para gerenciar Node)
- Node.js (recomenda-se usar 22; Node 20 também funciona)

## Instalar extensões PHP (Ubuntu/Debian)
Se o Composer reclamar de extensões faltando (dom/xml/pgsql/mbstring etc.), instale:
```bash
sudo apt update
sudo apt install -y php8.3 php8.3-cli php8.3-xml php8.3-curl php8.3-pgsql php8.3-mbstring php8.3-zip unzip
```
Verifique:
```bash
php -m | grep -E 'dom|xml|pgsql|mbstring'
php --ini
```
Reinicie PHP-FPM / servidor web se necessário:
```bash
sudo systemctl restart php8.3-fpm
sudo systemctl restart nginx   # ou apache2
```

## Subir PostgreSQL com Docker
Execute:
```bash
docker run --name pg-batalha-naval \
  -e POSTGRES_DB=batalha_naval \
  -e POSTGRES_USER=laravel \
  -e POSTGRES_PASSWORD=laravel \
  -p 5432:5432 \
  -d postgres:15
```
Se já existir um container com esse nome:
```bash
docker rm -f pg-batalha-naval
# e então rode novamente o comando acima
```
Atualize .env se necessário:
DB_CONNECTION=pgsql  
DB_HOST=127.0.0.1  
DB_PORT=5432  
DB_DATABASE=batalha_naval  
DB_USERNAME=laravel  
DB_PASSWORD=laravel

### Arquivo com o comando Docker
O mesmo comando para subir o PostgreSQL também está salvo no arquivo `banco-docker.txt` na raiz do projeto. Isso facilita repetir ou versionar o comando.

Como usar:

```bash
# mostrar o conteúdo do arquivo
cat banco-docker.txt

# executar o comando (executa o conteúdo como um pequeno script)
bash banco-docker.txt
```

Dicas úteis:
- Antes de executar, confirme que o Docker está rodando: `docker ps`
- Se quiser garantir que o container será recriado limpo: `docker rm -f pg-batalha-naval` e então `bash banco-docker.txt`
- Se preferir usar docker-compose, posso gerar um `docker-compose.yml` com o mesmo serviço.

## Configuração inicial do projeto
No diretório do projeto:
```bash
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate --seed
```

## Frontend (Node + Vite)
Instale e use Node via NVM (recomenda-se 22):
```bash
# instale nvm (se não tiver)
curl -fsSL https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.7/install.sh | bash
source ~/.nvm/nvm.sh

# instale/use Node 22
nvm install 22
nvm use 22
```
Instale dependências e rode o dev:
```bash
npm install
npm run dev      # ou npm run build para produção
```
Se houver erro relacionado ao OpenSSL em Node 22:
```bash
export NODE_OPTIONS="--openssl-legacy-provider"
npm rebuild || npm install
```

## Rodar tudo junto (opções)
- Rodar apenas Laravel: php artisan serve  
- Vite em outro terminal: npm run dev  
- Script combinado (composer): composer run dev

## Testes
```bash
composer test
```

## Resolução rápida de problemas
- Composer reclama de ext-dom/ext-xml: instale php8.3-xml (ver seção de extensões).  
- Falha ao conectar no DB: verifique variáveis do .env e se o container Docker está rodando.  
- Porta 5432 ocupada: altere mapeamento Docker ou pare o serviço que usa a porta.  
- Erros no frontend: confirme versão do Node via nvm.

Compartilhe a saída dos comandos (composer install / php artisan migrate / npm install) se precisar de ajuda adicional.
// ...existing code...