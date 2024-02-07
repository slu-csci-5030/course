# Install a supported version of Node.js
FROM node:18.14.1

# Set the working directory
WORKDIR /crew_manual

# Copy package.json and package-lock.json to the working directory
COPY package*.json ./

# Install npm dependencies
RUN npm install

# Copy the rest of the application code
COPY . .

# Your other Dockerfile instructions...

# Expose the port that Astro uses (default is 3000)
EXPOSE 3000

# Command to run Astro in development mode
CMD ["npm", "run", "dev"]