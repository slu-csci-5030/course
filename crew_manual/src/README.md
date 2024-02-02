# Material Donor Mutual Assist

## Project Overview

This project, "Material Donor Mutual Assist," is developed for B-Works to enhance engagement with material donors and encourage them to become monetary donors. The system integrates with the existing donor tracking system to automate enriched engagement with material donors.

## Local Development Environment

### Docker Compose Setup

For local development, we use Docker Compose to create a development environment. The `docker-compose.yml` file in the `app` directory defines the services required for the project.

To set up the local development environment:
1. Navigate to the project root directory.
2. Run the following command:

    ```bash
    docker-compose -f app/docker-compose.yml up -d --build
    ```

3. Open a web browser and access `http://localhost:8080` to verify the service is running.

### GitHub Actions Integration

Automated testing is configured using GitHub Actions. The workflow is defined in `.github/workflows/test.yml`. It triggers on every push to the `main` branch, ensuring continuous integration.

### Production Deployment

For production deployment, a separate configuration (`docker-compose.prod.yml`) is provided in the `app` directory. This configuration is optimized for production environments.

### Assumptions

1. The existing donor tracking system is operational and accessible during local development and production.
2. Docker and Docker Compose are installed on the development machine.
3. The Node.js application uses a specific set of dependencies and assumes compatibility with Node.js version 14.


