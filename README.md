# lumen-school-api

### Getting started (using valet)

```bash
cd lumen-school-api
valet park
```

### Create mysql database

```bash
brew services start mysql
CREATE DATABASE lumen_school_api_dev
```

### Configure local environment
```bash
cp .env.example. .env
```

##### Update `.env` with database creds and `APP_Key`

### Run migrations and seed data

```bash
php artisan migrate
php artisan db:seed
```

#### ./zshrc
```
export PATH="$(brew --prefix homebrew/php/php71)/bin:$PATH"
PATH=$PATH:~/.composer/vendor/bin
```
