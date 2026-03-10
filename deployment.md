# Deployment Guide

This document outlines the steps to deploy the Laravel application using the provided Docker infrastructure.

## Infrastructure Overview
- **Nginx (web)**: Serves static files and proxies PHP requests to PHP-FPM. (Port 80)
- **PHP-FPM (app)**: Runs the Laravel application and artisan commands.
- **PostgreSQL (db)**: Houses the relational database.
- **Node (node)**: Compiles frontend assets using Vite.

## Setup Instructions

1. **Start the Infrastructure**
   ```bash
   make setup
   ```
   This command will:
   - Copy `.env.example` to `.env` (if it does not exist)
   - Build the Docker containers
   - Start the containers in the background (`-d`)
   - Install PHP dependencies with Composer
   - Build the frontend assets using Node/Vite
   - Generate the application key
   - Run database migrations

2. **Accessing the Application**
   The application should now be available at `http://localhost:8080`.

## Common Commands

You can use the provided `Makefile` to quickly run commands. Alternatively, you can run the Docker Compose commands directly.

### Start Infrastructure
```bash
make start
# or
docker compose up -d
```

### Stop Infrastructure
```bash
make stop
# or
docker compose down
```

### Rebuild Containers
```bash
make rebuild
```
> **Warning:** This command will destroy existing containers and volumes!

### Run Migrations
```bash
make migrate
# or
docker compose exec app php artisan migrate
```

### Seed the Database
```bash
make seed
# or
docker compose exec app php artisan db:seed
```

### View Logs
```bash
make logs
# or
docker compose logs -f
```

### Production Enhancements
Optimize your application for production:
```bash
make production-optimize
# or
docker compose exec app php artisan config:cache
docker compose exec app php artisan route:cache
docker compose exec app php artisan view:cache
```

## Security & Best Practices
- **Non-root Users**: The PHP and Node containers are configured to run commands through unprivileged users (`laravel` and `node` respectively) to maintain filesystem permissions and security.
- **Hidden Files Protection**: The Nginx configuration specifically denys access to any hidden files (`.env`, `.git`, etc.) returning a 403.
- **Network Isolation**: All containers run in an isolated `laravel_network`. Only the Nginx and PostgreSQL containers have ports mapped to the host.
