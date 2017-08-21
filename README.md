# lumen-school-api

### Getting started (using valet)

```bash
cd lumen-school-api
valet park
cp .env.example. .env
```

create mysql database and update `.env` file. 

```bash
php artisan migrate
php artisan db:seed
```

#### ./zshrc
```
export PATH="$(brew --prefix homebrew/php/php71)/bin:$PATH"
PATH=$PATH:~/.composer/vendor/bin
```
