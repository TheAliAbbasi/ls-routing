Laravel Sessions - Routing
===================


Hey everyone! So I'm trying to teach Laravel framework to **n00bs** and after trying different ways I came up with this idea of separating the key features of the framework (eg. **Routing, Rresponse, ORM, ...**)  which can theoretically help you learn MVC architecture, thus learning any type of MVC based framework.

----------


Installation
-------------

Now we're going to the details of installation
> **Note:**
> - There are some requirements in order to use this repo
> 1. You need to have [**composer**](http://getcomposer.org) installed.
> 2. I'm using nginx as my local webserver so **.htaccess** is not included. Hopefully I will add this in the next few decades ;-)
> 3. I advise you to make a local domain (eg. test.dev or whatever you use). Also, I'm going to provide a link for a good tutorial on that matter soon.

### 1. Clone the project

    git clone git@github.com:TheAliAbbasi/ls-routing.git

This will clone the repo on you local storage

### 2. Install dependencies

    composer install

This will install the composer packages (if that name **packages** scares you, read it as **"libraries"** for the time being) of the project which is basically [**This repository**](https://github.com/phpgearbox/router).

### 3. Define routes
You can define your routes in **routes.php** file. To understand how to populate new routes, refer to [this link](https://github.com/phpgearbox/router).