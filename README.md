# Web Application Hardening - WordPress (Docker Lab)

## Project Overview
This project was created as part of the **System Hardening lab
exercise**.

The goal is to deploy a **WordPress web application** using **Docker
containers** and apply **security hardening techniques** to the
container environment, the web server, and the application itself.

Using containers instead of virtual machines makes the environment
lightweight, reproducible, and easy to deploy.

------------------------------------------------------------------------

# Architecture
The application is deployed using **Docker containers**.

## Services
|  Service   |  Purpose                 |   
|------------|--------------------------|
| WordPress  |  Web application         |   
| MariaDB    |  Database for WordPress  |   
| phpMyAdmin |  Database management     |   

Example architecture:
```
User Browser
│
▼
WordPress Container (Apache + PHP)
│
▼
MariaDB Container
```
------------------------------------------------------------------------

# Technologies Used
-   Docker
-   Docker Compose
-   WordPress
-   MariaDB
-   Apache
-   PHP

------------------------------------------------------------------------

# Hardening Measures Implemented

## Docker Security
-   Used official Docker images
-   Isolated services using Docker networks
-   Persistent volumes instead of container storage
-   Environment variables for credentials

Possible additional improvements:
-   Use Docker secrets
-   Run containers as non-root user
-   Limit container capabilities

------------------------------------------------------------------------

## Web Server Hardening

-   Disabled directory listing
-   Reduced server information exposure
-   Applied security headers

------------------------------------------------------------------------

## WordPress Hardening

-   Strong administrator password
-   Updated WordPress version
-   Disabled file editing

Example:

``` php
define('DISALLOW_FILE_EDIT', true);
```

Other measures:

-   Limited login attempts
-   Regular plugin updates

