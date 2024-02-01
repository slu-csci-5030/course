# # Build the Frontend
# FROM node:latest AS frontend-builder

# WORKDIR /usr/src/app

# RUN npm install -g @react/cli 

# COPY ./Frontend/package.json ./Frontend/package-lock.json ./
# RUN npm install
# COPY ./Frontend .
# RUN npm run build

# # Build the Backend
# FROM node:latest

# WORKDIR /usr/src/app

# COPY ./Backend/package.json ./Backend/package-lock.json ./
# RUN npm install

# COPY ./Backend .

# EXPOSE 3000

# # Command to start the backend
# CMD ["npm", "start"]

FROM node:latest

WORKDIR /usr/src/app

COPY ./Backend/package.json ./Backend/
COPY ./Backend/package-lock.json ./Backend/

WORKDIR /usr/src/app/Backend

RUN npm install -f && npm install socket.io --save --force && npm install http-server -g

WORKDIR /usr/src/app

COPY ./Frontend/package.json ./Frontend/
COPY ./Frontend/package-lock.json ./Frontend/

RUN npm install -f

COPY ./Backend ./Backend
COPY ./Frontend ./Frontend

EXPOSE 8080

CMD ["npm", "start"]

