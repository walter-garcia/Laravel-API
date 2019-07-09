# Zombie Survival Social Network - API


#### Hint
You can skip all the **Local Development** configuration steps. Just <a href="https://marcels-zssn.herokuapp.com" target="_blank">Click here<a> and test with Heroku.
    
For both cases, you will need a **HTTP CLIENT**

I recommend <a href="https://www.getpostman.com/downloads/">POSTMAN</a> or <a href="https://insomnia.rest/download/">INSOMNIA</a>. Both are quite complete with many configuration options.

    
### Setting up the local environment

###### You will need `php` `composer` and `laravel`.

<a href="https://www.php.net/downloads.php">Download php</a>

Laravel utilizes Composer to manage its dependencies. So, before using Laravel, make sure you have Composer **Globally** installed on your machine.

Download <a href="https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos" target="_blank">Composer for Linux/Mac<a> or <a href="https://getcomposer.org/doc/00-intro.md#installation-windows" target="_blank">Composer for Windows<a>. Or both, It's up to you  :)

Now, download the Laravel installer using Composer:

~~~
composer global require laravel/installer
~~~

Make sure to place composer's system-wide vendor bin directory in your `$PATH` so the laravel executable can be located by your system. This directory exists in different locations based on your operating system; however, some common locations include:

MacOS: `$HOME/.composer/vendor/bin`
GNU / Linux Distributions: `$HOME/.config/composer/vendor/bin`
Windows: `%USERPROFILE%\AppData\Roaming\Composer\vendor\bin`

<a href="https://laracasts.com/series/laravel-from-scratch-2018/episodes/2">Click Here</a> to watch step-by-step installation guide


### Local Development Server

If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the serve Artisan command. This command will start a development server at http://localhost:8000

###### Using the terminal, go to the project directory and run

~~~
php artisan serve
~~~

### Seedind the database tables

Go to the **.ENV** file and change **DB_CONNECTION**, **DB_HOST**, **DB_PORT**, **DB_DATABASE**, **DB_USERNAME** and **DB_PASSWORD** according to your needs.

###### Using the terminal, go to the project directory and run the following commands:

~~~
php artisan migrate -> This will create the tables.
php artisan db:seed -> This will seed the ITEMS table with the items.
~~~

###### The survivors, infections and inventories table will be empty. That way you can create and manage your own data.

---------------------------------------

## Show all survivors

`GET api/survivors`

## Request

**With heroku**
`GET https://marcels-zssn.herokuapp.com/api/survivors`
**Local**
`GET http://localhost/zssn/public/api/survivors`


## Response

~~~
{
  "current_page": 1,
  "data": [
    {
      "id": 1,
      "name": "Marceeeel",
      "age": 60,
      "gender": "male",
      "latitude": -100.123323,
      "longitude": 100.453456,
      "created_at": "2019-07-09 01:24:05",
      "updated_at": "2019-07-09 01:24:05"
    },
    {
      "id": 2,
      "name": "Marceeeel",
      "age": 50,
      "gender": "male",
      "latitude": -100.123323,
      "longitude": 100.453456,
      "created_at": "2019-07-09 01:24:05",
      "updated_at": "2019-07-09 01:24:05"
    },
    {
      "id": 3,
      "name": "Marceeeeeeeel",
      "age": 70,
      "gender": "male",
      "latitude": -100.123323,
      "longitude": 100.453456,
      "created_at": "2019-07-09 01:24:05",
      "updated_at": "2019-07-09 01:24:05"
    }
  ],
  "first_page_url": "http:\/\/localhost\/zssn\/public\/api\/survivors?page=1",
  "from": 1,
  "last_page": 1,
  "last_page_url": "http:\/\/localhost\/zssn\/public\/api\/survivors?page=1",
  "next_page_url": null,
  "path": "http:\/\/localhost\/zssn\/public\/api\/survivors",
  "per_page": 5,
  "prev_page_url": null,
  "to": 5,
  "total": 5
}
~~~

## Show a particular survivor

`GET api/survivors/id`

## Request

**With heroku**
`GET https://marcels-zssn.herokuapp.com/api/survivors/1`
**Local**
`GET http://localhost/zssn/public/api/survivors/1`

## Response

~~~
{
  "id": 1,
  "name": "Marceeeel",
  "age": 60,
  "gender": "male",
  "latitude": -100.123323,
  "longitude": 100.453456,
  "created_at": "2019-07-09 01:24:05",
  "updated_at": "2019-07-09 01:24:05"
}
~~~

## Show survivor's inventory

`GET api/survivors/id/inventory`

## Request

**With heroku**
`GET https://marcels-zssn.herokuapp.com/api/survivors/1/inventory`
**Local**
`GET http://localhost/zssn/public/api/survivors/1/inventory`

## Response

~~~
[
  {
    "survivor_id": 1,
    "survivor_name": "Marceeeel"
  },
  {
    "water_amount": "2",
    "water_points": 8
  },
  {
    "food_amount": "2",
    "food_points": 6
  },
  {
    "medication_amount": "2",
    "medication_points": 4
  },
  {
    "ammunition_amount": "5",
    "ammunition_points": 5
  }
]
~~~

## Show if the survivor is infected

`GET api/survivors/id/infection`

## Request

**With heroku**
`GET https://marcels-zssn.herokuapp.com/api/survivors/1/infection`
**Local**
`GET http://localhost/zssn/public/api/survivors/1/infection`

## Response

~~~
{
  "id": 1,
  "survivor_name": "Marceeeel",
  "infected": true
}
~~~

## Add a survivor

`POST api/survivors`

## Request

**With heroku**
`POST https://marcels-zssn.herokuapp.com/api/survivors`
**Local**
`POST http://localhost/zssn/public/api/survivors`

#### Supply with the following properties

| Property  | Type    | Format                                                                 |
|-----------|---------|------------------------------------------------------------------------|
| name      | string  | Survivor's Name                                                        |
| age       | integer | Survivor's Age                                                         |
| gender    | string  | Survivor's Gender                                                      |
| latitude  | double  | `Positive` (123.456789) = `North` - `Negative` (-123.456789) = `South` |
| longitude | double  | `Positive` (123.456789) = `East`  - `Negative` (-123.456789) = `West`  |

## Response

~~~
{
  "msg": "Survivor Information Added Successfully",
  "code": "201 - Created"
}
~~~

## Add survivor items

`POST api/survivors/items`

## Request

**With heroku**
`POST https://marcels-zssn.herokuapp.com/api/survivors/items`
**Local**
`POST http://localhost/zssn/public/api/survivors/items`

#### Supply with the following properties

| Property    | Type               | Format                                      |
|-------------|--------------------|---------------------------------------------|
| item_id     | unsignedBigInteger | Follow the table below                      |
| amount      | integer            | Quantity of the item that the survivor owns |
| survivor_id | unsignedBigInteger | ID of the survivor who owns the items       |

| Item ID | Item Name  |
|---------|------------|
| 1       | Ammunition |
| 2       | Medication |
| 3       | Food       |
| 4       | Water      |

## Response

~~~
{
  "msg": "Item information successfully added",
  "code": "201 - Created"
}
~~~

## Report an infected survivor

`POST api/report/infection`

## Request

**With heroku**
`POST https://marcels-zssn.herokuapp.com/api/report/infection`
**Local**
`POST http://localhost/zssn/public/api/report/infection`

#### Supply with the following properties

| Property   | Type               | Format                                |
|------------|--------------------|---------------------------------------|
| suvivor_id | unsignedBigInteger | ID of the survivor you want to report |
| infected   | boolean            | 0 for `FALSE` or 1 for `TRUE`         |

## Response

~~~
{
  "msg": "Infection Reported successfully",
  "code": "200 - OK"
}
~~~

## Update survivor location

`PATCH api/survivors/{id}/location`

## Request

**With heroku**
`PATCH https://marcels-zssn.herokuapp.com/api/survivors/1/location`
**Local**
`PATCH http://localhost/zssn/public/api/survivors/1/location`

#### Provide the new location

| Property  | Type   | Format                                                                 |
|-----------|--------|------------------------------------------------------------------------|
| latitude  | double | `Positive` (123.456789) = `North` - `Negative` (-123.456789) = `South` |
| longitude | double | `Positive` (123.456789) = `East`  - `Negative` (-123.456789) = `West`  |

## Response

~~~
{
  "msg": "Survivor Location Updated Successfully",
  "code": "201 - Created"
}
~~~

## Delete survivor informations

#### If a survivor die, you might want to delete his information from the system

`DELETE api/survivors/id`

## Request

**With heroku**
`DELETE https://marcels-zssn.herokuapp.com/api/survivors/1`
**Local**
`DELETE http://localhost/zssn/public/api/survivors/1`

## Response

~~~
{
  "msg": "Survivor (Survivor Name) Deleted Successfully",
  "code": "200 - OK"
}
~~~


# Tests

## Database tables access test

| **SURVIVORS TABLE**                                 |
|-----------------------------------------------------|
| Successful access in `survivors` table (success)    |

| **ITEMS TABLE**                                 |
|-------------------------------------------------|
| Successful access in `items` table (success)    |

| **INFECTIONS TABLE**                                 |
|------------------------------------------------------|
| Successful access in `infections` table (success)    |

| **INVENTORIES TABLE**                                 |
|-------------------------------------------------------|
| Successful access in `inventories` table (success)    |

`OK (4 tests, 4 assertions)`  `4 / 4 (100%)`  `Time: 237 ms, Memory: 14.00 MB`
