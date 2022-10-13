# SAML Jackson + Laravel Example App

This demo app shows how to add SAML SSO to a Laravel app using SAML Jackson.

## Setup the app

Please follow the below instructions.

### Clone the repo

```bash
git clone https://github.com/boxyhq/php-examples.git
```

```bash
cd php-examples/laravel-enterprise-sso
```

### Setup environment

```bash
cp .env.example .env
```

Update `.env` with your own credentials.

### Install dependencies

```bash
composer install
```

### Run the database migration

```bash
php artisan migrate
```

### Build the assets

```bash
npm install
```

```bash
npm run build
```

### Run the app

```bash
php artisan serve
```

Open [http://localhost:8000/](http://localhost:8000/) to see the app.

### SAML SSO setup

[TODO]
