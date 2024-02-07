FROM node:21-alpine

WORKDIR /app/nodepractice

RUN npm install nodemon
COPY package.json /app/nodepractice/
COPY ./bin/www /app/nodepractice/bin/
COPY ./node_modules /app/nodepractice/node_modules/
COPY ./public /app/nodepractice/public/
COPY ./routes /app/nodepractice/routes/
COPY ./views /app/nodepractice/views/
COPY app.js /app/nodepractice/
COPY package-lock.json /app/nodepractice/

RUN npm install
EXPOSE 3000
CMD ["npm", "start"]

