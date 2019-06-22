# Getting Started with PHP on Codemason

This is a simple application that rotates a series of quotes. It accompanies the [Getting Started with PHP on Codemason](https://codemason.io/docs/getting-started-with-php) guide.

You can use this to quickly experiment with deploying an application to Codemason.

![preview](public/preview.png)


### Local Development
Run the app locally with docker-compose 
```
docker-compose up -d
```
Your app should now be running on [localhost](http://localhost).

### Deploying to Codemason
```
$ mason create getting-started-php
$ git push codemason master
$ mason services:create getting-started-php/web -p 80
```

or 

[![Deploy](https://codemason.io/img/deploy.svg)](https://codemason.io/apps/create?template=https://github.com/codemasonhq/getting-started-php)