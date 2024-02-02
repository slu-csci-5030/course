# Use an official OpenJDK runtime as a base image
FROM openjdk:11

# Set the working directory to /app
WORKDIR /app

# Copy the current directory contents into the container at /app
COPY . /app

# Build the JAR file
RUN javac -d . HelloWorld.java
RUN jar cf HelloWorld.jar HelloWorld.class 

# Specify the command to run on container start
CMD ["java", "-jar", "HelloWorld.jar"]