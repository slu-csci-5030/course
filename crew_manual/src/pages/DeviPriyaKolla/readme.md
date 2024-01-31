#Devi Priya Kolla


Installing the Docker Engine on my local system gives me the desired application environment needed for my project to work further.

The creation and building of "dockerfile" navigate to instructions to assemble an image i.e. Docker image from the Dockerfile, where this creates an image that can run the application. Dockerfile takes a Node.js app, copies the code into a Node.js base image, and sets the application to run when launched. This allows containerizing and easily distributing the Node app.

Explanation of "dockerfile" :

 node:14 base image => Node.js v14 and dependencies preinstalled
 WORKDIR /usr/src/app => This sets the working directory inside the image to /usr/src/app. Any following COPY, CMD, etc will be done relative to this folder.
 COPY . /usr/src/app => This copies the files from the build context (current directory) into the /usr/src/app folder in the image. This will copy over your Node.js application code.
 CMD ["node", "#application#"] => This defines the command to run when a container is launched from the built image. It will run node and execute the Node.js application file.
 

Also, defining the "docker-compose.yml" meets certain services/containers to run and allows configuring options and networking.



