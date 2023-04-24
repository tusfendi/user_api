# Festival Movie Backend Service

This backend service is for Users API

## Contact
| Name                   | Email                           |
| :--------------------: |:-------------------------------:|
| Tusfendi               | tusfendi@gmail.com              |

## Onboarding and Development Guide

### Documentations
- [Api Docs - Postman]()
### Prerequisite
- Git (See [Git Installation](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git))
- Composer 2.5.5 (See [Composer installation](https://getcomposer.org/))
- Php 8.x (See [Php Installation](https://www.php.net/manual/en/install.php))
- Lavavel 10.x (See [Laravel Installation](https://laravel.com/docs/10.x/installation))
- MySQL (See [MySQL Installation](https://dev.mysql.com/doc/mysql-installation-excerpt/5.7/en/))


### Installation
- Clone this repo

    ```sh
        git clone https://github.com/tusfendi/user_api
    ```

- Copy `.env.example` to `.env`

    ```sh
        cp .env.example .env
    ```
- Run commposer install

    ```sh
        composer install / composer install --ignore-platform-reqs
    ```
- Generate laravel key

    ```sh
        php artisan key:generate
    ```
- Setup local database use [laravel migrate feature](https://laravel.com/docs/10.x/migrations)
- Update database config in `.env`

- Start service API
    ```sh
        php artisan serve
    ```