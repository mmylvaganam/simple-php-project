# Simple PHP Project

A basic PHP project setup with Docker, using Nginx as the web server, PHP-FPM for PHP processing, and MySQL as the database.

## Prerequisites

- Docker
- Docker Compose

## Project Structure

```
.
├── docker/
│   ├── mysql/
│   ├── nginx/
│   └── php/
├── src/
├── docker-compose.yml
├── index.php
└── README.md
```

## Services

The project includes the following services:

- **Nginx**: Web server
- **PHP-FPM**: PHP processor
- **MySQL**: Database server

## Database Configuration

- Database Name: symfony
- Username: symfony

## Getting Started

1. Clone the repository:
   ```bash
   git clone [repository-url]
   cd simple-php-project
   ```

2. Start the Docker containers:
   ```bash
   docker-compose up -d
   ```

3. Access the application:
   - Open your browser and navigate to `http://localhost:8080`
   - You should see "Hello, World!" displayed

## Development

The project uses volume mounting for development:
- PHP source files are mounted at `/var/www/html` in both PHP and Nginx containers
- MySQL data is persisted using a named volume

## Stopping the Application

To stop the Docker containers:
```bash
docker-compose down
```

To stop and remove all data (including the database):
```bash
docker-compose down -v
```
