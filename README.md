# PHP Test Setup

Created as a space to explore a new stack. Two separate apps, but both should be run simultaneously.

I already want to change the config of some of this, but we persevere.

## Client

- TypeScript
- Vue
- Vite

### Setup

```sh
cd vue-app
npm install
```

### Start

```sh
npm run dev
```

## Server

- PHP
- GraphQL
- (MySQL db)

### Setup

```sh
cd graphql-app
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
```

### Start

```sh
php artisan serve
```