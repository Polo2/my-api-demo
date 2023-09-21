#!/bin/sh

# About api:openapi:export:
# Dump the Open API documentation

docker compose exec php bin/console api:openapi:export > docs/openapi.json
