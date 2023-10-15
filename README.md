
# About HelpDesk Notification Service
First of all thank you for giving me this opportunity, means a lot to me.

This application has been developed in a WSL environment.

## Purpose

The purpose of this service is to send notifications to the users.

All notifications will be processed by rabbitmq, all the setup necessary for this app will be on .env.example

For this app it only process MessageSent Job, and it only logs the data received from rabbitmq.

## Prerequisites

Make sure you have PHP, Composer, and Docker installed on your computer. Sail uses Docker to set up the development environment.

Ensure you have Git installed for version control (optional but recommended).

## Configuration
This application comes with Laravel Sail inside. So after successfully clone the app

### Database Configuration

No database configuration needed

### Install all dependencies


```bash

composer install

```


### Start Docker Containers:

Sail uses Docker to run the development environment. To start the Docker containers, run the following command:


```bash

./vendor/bin/sail up

```

### Migrate and seed:
The database will come with basic data

```bash
./vendor/bin/sail artisan queue:work

```

# Recommendation

If any issue arises, please do not hesitate to contact me for clarifications

