# FROM node:alpine
# WORKDIR '/app'
# COPY package.json .
# RUN npm install
# COPY . .
# CMD ["npm", "start", "&&", "npm", "run", "daemon off;"]

FROM node:14
WORKDIR /usr/src/app

COPY package*.json ./
RUN npm install
COPY . .

EXPOSE 3000
CMD ["npm", "run", "start"]
