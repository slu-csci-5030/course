For the "Research Asset Discovery" project (OVPR - Office of the VP of Research), 
the Dockerfile provided earlier was focused on the frontend part of the application. 
Now, with the multi-stage Dockerfile, we are incorporating both frontend and backend aspects into a single Dockerfile to streamline the build process.

Frontend
Uses the latest Node.js image as a base for building the frontend.
Installs the React CLI globally.
Copies frontend package files and installs dependencies.
Copies the entire frontend source code.
Runs the build command to generate the production-ready frontend assets.

Backend
Uses the latest Node.js image as a base for building the backend.
Copies backend package files and installs dependencies.
Copies the entire backend source code.
Exposes port 3000, which is assumed to be used by the backend application.
Copies the built frontend assets from the previous stage.
Specifies the command to start the backend application.

Combining Frontend and Backend: This Dockerfile aims to combine both frontend and backend builds within a single file, 
allowing for easier management of the build process.

Multi-stage Build: Utilizes multi-stage build functionality to keep the final image size minimal by discarding unnecessary build artifacts.

Port Exposure: Assumes that the backend exposes itself on port 3000, and this port is exposed for external access.

Docker-compose.yml
build: Specifies how to build the Docker image for the frontend service.

context: The build context, usually the root directory of your project.
dockerfile: The path to the Dockerfile for the frontend.
ports: Maps port 80 on the host to port 80 on the frontend container.

environment: Sets the NODE_ENV environment variable to development.

volumes: Mounts the local ./Frontend directory into /usr/src/app in the container. Similar to the backend, this is commonly done for live code reloading during development.

command: Specifies the command to run when the container starts, in this case, npm start.
