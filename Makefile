SHELL := /bin/bash

DC := docker-compose -f docker-compose.yml
DC_RUN := ${DC} run --rm

# COMMANDS

.PHONY: confirmation
confirmation:
	@echo -n 'Are you sure? [y|N] ' && read ans && [ $$ans == y ]

.PHONY: cmd
cmd:
	@echo 'Docker-Compose command:'
	@echo '${DC}'

.PHONY: up
up:
	${DC} up -d server
	@echo 'Service is up'

.PHONY: ps
ps:
	${DC} ps
