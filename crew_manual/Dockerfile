# Use the official Node.js image with the desired version
FROM node:21.6.1

# Set the working directory inside the container
WORKDIR /app

# Copy package.json and package-lock.json to the container
COPY package*.json ./

# Install dependencies
RUN npm install

# Copy the rest of the application files to the container
COPY . .

# Expose the port your app runs on (Astro default is 3000)
EXPOSE 3000

# Start the application
CMD ["npm", "start"]
