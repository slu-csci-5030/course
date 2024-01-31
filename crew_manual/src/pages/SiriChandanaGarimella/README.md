# Siri Chandana Garimella - Docker compose reflections

## Pre-requisites:
1. Docker desktop setup should be done and it should be up and running.

## Assumptions:
1. For now as there is no development done, assuming that it is a flask application and app.py has the project code and Redis is used for in-memory data store
2. The requirements file has the required list of dependencies to be downloaded
3. 8000 is the application port.

## Command to run docker compose file:
 docker compose up
 
 This would pull all the required images and would bring up the server and would run on the port given in the file.

 Docker is used for containerization and this helps in creating a local environment. The dockerfile has the build instructions to build the image.  It helps to run multiple containers at a time. For a docker container, the services, networks, and volumes are defined in a docker-compose file which is a YML file.For example, if we are building a project with ReactJS and Redis, with docker compose file, we don't need to start each of it separately, instead we can create a single image which starts both of these containers as service.

With the docker compose file configuration we can achieve the container orchestration configuration that enables local development, automated testing, and deployment. But for now, this docker compose file is to build and run the sample flask application with redis. We can update it further with whatever images are required. Also, container orchestration can be achieved through Kubernetes etc.,

## Git-hub actions docker compose file:
This file has the workflow for the github actions to build, test and copy the test results. Assuming that this would automate the process. The same can be used for production as well.




