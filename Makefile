SHELL := /bin/bash

include .env

# MySQL
#MYSQL_DUMPS_DIR=data/db/dumps

help:
	@echo ""
	@echo "Usage: make COMMAND"
	@echo ""
	@echo "Commands:"
	@echo "  composer-up         Update PHP dependencies with composer"
	@echo "  docker-start        Create and start containers"
	@echo "  docker-stop         Stop and clear all services"
	@echo "  logs                Follow log output"
	@echo ""

.PHONY: compose-up
composer-up:
	@docker run --rm -v $(shell pwd)/web:/app composer update

.PHONY: compose-start
docker-start: init
	docker-compose up -d

.PHONY: compose-stop
docker-stop:
	@docker-compose down -v

.PHONY: logs
logs:
	@docker-compose logs -f

