#!/bin/sh

sudo podman run -d -p 8080:8080 --name code-server docker.io/irfannm/code-server
