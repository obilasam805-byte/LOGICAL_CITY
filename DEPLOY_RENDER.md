# Deploying to Render with Docker

This repository includes a production Dockerfile at the project root.

## Render setup

1. In Render, create a **Web Service** and connect this repository.
2. Choose **Docker** as the runtime.
3. Leave the default Docker build command (Render will run `docker build`).
4. No custom start command is required (the Dockerfile `CMD` is used).

## Port and binding

- The container uses `PORT` (defaults to `80` when not provided).
- Apache listens on `0.0.0.0:$PORT` using runtime config generated at container startup.
- On Render, `PORT` is set automatically.

## Runtime stack

- Runtime uses `php:8.3-apache` (instead of FrankenPHP).
- Static assets are served from `/app/frontend`.
- PHP requests are routed through the existing `/app/index.php` front controller.

## Environment variables

Set any app-specific variables in Render (Dashboard → Environment) that your deployment needs.

## Local verification

```bash
docker build -t logical-city .
docker run --rm -e PORT=10000 -p 10000:10000 logical-city
```

Then open `http://localhost:10000`.
