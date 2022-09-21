<p align="center">
    <a href="https://3sidedcube.com" target="_blank">
        <img src="https://3sidedcube.com/app/themes/tsc-2018/img/footer/logo-black.png" width="400" alt="3 Sided Cube">
    </a>
</p>

# BU Hackathon Impact API

## Environments

The main environment can be found at [https://bu-hackathon-api.herokuapp.com/api/v1](https://bu-hackathon-api.herokuapp.com/api/v1)

## Local Development

This project uses Laravel Sail for local development which uses [Docker](https://www.docker.com/get-started). You will
need to ensure that you have Docker installed and running on your machine.

### First time setup

1. Copy the example environment file:
```shell
cp .env.example .env
```

2. Install Composer dependencies:
```shell
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

3. Run the following commands:
```shell
./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan db:seed
```

4. The API should now be available at [http://localhost](http://localhost).

### Stopping the project

1. To stop the project docker containers, simply run the following command:
```shell
./vendor/bin/sail down
```

### Starting the project again

1. To start the project docker containers after you've completed the first time use, simply run the following command:
```shell
./vendor/bin/sail up -d
```

## Deployments

The API is deployed using a free Heroku dyno. You can use Heroku or a similar service to deploy your own API at zero cost.

## Documentation

The documentation for the API can be found [here](https://bu-hackathon-api.herokuapp.com/api/v1/docs)
