# Deploying to Render with Docker

This repository includes a production Dockerfile at the project root.

## Render setup

1. In Render, create a **Web Service** and connect this repository.
2. Choose **Docker** as the runtime.
3. Leave the default Docker build command (Render will run `docker build`).
4. No custom start command is required (the Dockerfile `CMD` is used).

## Port and binding

- The container uses `PORT` (defaults to `80` when not provided).
- `Caddyfile` listens on `:{$PORT:80}`, which binds to all interfaces (`0.0.0.0`) inside the container.
- On Render, `PORT` is set automatically.

## Environment variables

Set any app-specific variables in Render (Dashboard → Environment) that your deployment needs.

## Local verification

```bash
docker build -t logical-city .
docker run --rm -e PORT=10000 -p 10000:10000 logical-city
```

Then open `http://localhost:10000`.
