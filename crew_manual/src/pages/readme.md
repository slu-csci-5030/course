# Research Asset Discovery Service

## Introduction

This service is developed to assist the Office of the VP of Research (OVPR) in tracking and managing various research tools, equipment, software, and other re-usable assets across the university. The tool allows for the discovery, cataloging, and tracking of these assets, whether they are associated with individual labs or shared resources provided by different groups within the University.

### Development Environment Setup
To set up a local development environment, use Docker Compose.

Run the following command to start the development environment:
docker-compose -f app/docker-compose.yml up -d --build
Access the service at http://localhost:your_port

### Automated Testing with GitHub Actions
This repository is configured with GitHub Actions for automated testing. The configuration file can be found at .github/workflows/tests.yml.

### Production Deployment
To deploy in a production environment, use the following command:
docker-compose -f docker-compose.production.yml up -d


