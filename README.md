# Kata Setup PHP

Base project for the CapturaCloud development team to practice katas in PHP.

The project includes a minimal PHP and Vitest setup so developers can start programming exercises quickly
while keeping the focus on design, refactoring, and test-driven evolution.

## Installation

The project includes a docker-compose configuration that bundles all the necessary services to run the backend
seamlessly. You’ll only need to have **Docker**, **Docker Compose**, and **Make** installed on your system. Below are
the steps to get everything set up.

### Prerequisites

- **Docker**: [Install Docker](https://docs.docker.com/engine/install/ubuntu/#install-using-the-repository).
- **Docker Compose**: (Installed alongside Docker).
- **Make**: `sudo apt install make`.

### Build the environment

```bash
make build
```

### Run tests

```bash
make tests
```
