FROM node:21-alpine

WORKDIR /app/nodepractice

RUN npm install nodemon
RUN npm install -g astro
COPY package.json /app/nodepractice/
# COPY ./bin/www /app/nodepractice/bin/
# COPY ./node_modules /app/nodepractice/node_modules/
COPY ./.vscode /app/nodepsdapp/.vscode/
COPY ./public /app/nodepsdapp/public/
# COPY ./routes /app/nodepsdapp/routes/
COPY ./src /app/nodepsdapp/src/
# COPY . /app/nodepsdapp/
COPY package-lock.json /app/nodepsdapp/
# COPY REAMDEME.md /app/nodepsdapp/
COPY tsconfig.json /app/nodepsdapp/
COPY astro.config.mjs /app/nodepsdapp/
COPY . . 
RUN npm install
EXPOSE 4321
CMD ["npm", "start"]

