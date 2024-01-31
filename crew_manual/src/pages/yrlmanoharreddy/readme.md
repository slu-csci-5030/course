## Docker File
This line sets the base image for Docker container. In this case, it's node:latest-browsers, which is a Node.js image with additional browser dependencies.
WORKDIR /usr/src/app =>  command sets the working directory within the container where subsequent commands will be executed.
RUN sudo npm install -g @react/cli => line installs the React Command Line Interface (CLI) globally using npm.
These lines copy files from your local directory into the Docker container:
./Backend and ./Frontend directories are copied into /usr/src/app/Backend and /usr/src/app/Frontend directories respectively.
start.sh, package.json, and related files are copied into the /usr/src/app directory.
CMD ["cd", "~"] => command changes the directory to the home directory (~). However, CMD directives only allow the last one to take effect, so this line effectively doesn't do anything since it's overridden by the subsequent CMD directive
few last lines run npm install commands within the container to install dependencies specified in package.json. It installs dependencies forcefully and globally for socket.io and http-server.
The docker  expose ports 8080 from the container to the host system, allowing external connections to services running on that port.
This command specifies the command to run when the container starts. It runs the shell script start.sh located in the current directory.



## Docker-Compose.yml file

The configuration defines two jobs:

React Test Job:

This job is named react-test.
It uses a Docker image based on node:latest-browsers.
The environment variable NPM_CONFIG_PREFIX is set to ~/.npm-global.
The job consists of steps to install React dependencies and run frontend test cases using npm.
Frontend tests are executed in headless Chrome.
Build and Push Job:

This job is named build_and_push.
It also uses the node:latest-browsers Docker image.
Steps include checking out the code, setting up remote Docker, building a Docker image for the project, authenticating with Docker Hub, and pushing the Docker image to the repository.
The workflow includes two pipelines:

Testcases Workflow:

This workflow is named Testcases.
It comprises the node/run job for backend tests and the react-test job for frontend tests.
Build and Deploy Workflow:

This workflow is named build_and_deploy.
It includes only the build_and_push job, which builds the Docker image and pushes it to Docker Hub.



I'm planning to create CI/CD pipeline for my project. So, that it can continuously integrate and deploy the code whenever i push the code into github then it build, run the test cases and deploy one after one automatically
