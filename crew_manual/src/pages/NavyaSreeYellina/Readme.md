## Name: Navya Sree Yellina

# **CI/CD pipline**

### _**Assumptions**_
The production deployment target is a Docker environment, either self-hosted or using a cloud provider.
The Docker host has Docker Compose installed and can run Docker containers.
The CI pipeline has access to registry secrets to push newly built images.
This repository includes a GitHub Actions workflow named "CI/CD pipline." The workflow is triggered on each push to the main branch.
### **Workflow Steps**
Run Test cases to ensure software integrity.
In GitHub Actions -> checkout fetch the repository code.
Building Docker image using Dockerfile in the Repo.
Pushing the image to docker.

### **Personal Reflections**
In this workflow, I find docker service is crucial for ensuring the reliability and efficiency of deployment.
The use of GitHub Actions, Docker Compose, and secure handling of secrets contribute to a development and deployment pipeline.
CI pipeline is simple to create but, it's also important. automating tests and image builds help increase software quality and consistency, while automatic registry pushes enable continuous delivery with lower effort.
There are still areas I can improve on:
Hardcoding sensitive data like registry passwords is not ideal - better to use secret management.
The test command, build steps, etc. could be more specific.
Additional steps like security scanning could be included.
Image tagging convention could be made more robust.

I assume .yml is going to the CI/CD pipeline for my project which is going to use React and NodeJs. I assume that this will automate continuous integration and deployment.

This README serves as a guide for contributors and deployment personnel, detailing assumptions, workflow steps, and considerations for production deployment.



