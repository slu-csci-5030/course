FROM node:alpine AS build
WORKDIR '/app'
COPY package.json .
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build
#CMD ["npm", "start", "&&", "npm", "run", "daemon off;"]

FROM nginx:alpine
COPY --from=build /app/build /usr/share/nginx/html
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
