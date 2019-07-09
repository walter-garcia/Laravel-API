# `Z`ombie `S`urvival `S`ocial `N`etwork - API

<a href="https://marcels-zssn.herokuapp.com" target="_blank">Check it out<a>


## Show all survivors

`GET api/survivors`

## Request

`GET https://marcels-zssn.herokuapp.com/api/survivors`

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

`GET https://marcels-zssn.herokuapp.com/api/survivors/1`

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

`GET https://marcels-zssn.herokuapp.com/api/survivors/1/inventory`

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

`GET https://marcels-zssn.herokuapp.com/api/survivors/1/infection`

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

`POST https://marcels-zssn.herokuapp.com/api/survivors`

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

`POST https://marcels-zssn.herokuapp.com/api/survivors/items`

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

`POST https://marcels-zssn.herokuapp.com/api/report/infection`

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

`PUT api/survivors/{id}/location`

## Request

`PUT https://marcels-zssn.herokuapp.com/api/survivors/id/location`

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

`DELETE https://marcels-zssn.herokuapp.com/api/survivors/id`

## Response

~~~
{
  "msg": "Survivor (Survivor Name) Deleted Successfully",
  "code": "200 - OK"
}
~~~


# Tests

## Database tables access test

| SURVIVORS TABLE                                     |
|-----------------------------------------------------|
| Successful access in `survivors` table (success)    |

| ITEMS TABLE                                     |
|-------------------------------------------------|
| Successful access in `items` table (success)    |

| INFECTIONS TABLE                                     |
|------------------------------------------------------|
| Successful access in `infections` table (success)    |

| INVENTORIES TABLE                                     |
|-------------------------------------------------------|
| Successful access in `inventories` table (success)    |

`OK (4 tests, 4 assertions)`  `4 / 4 (100%)`  `Time: 237 ms, Memory: 14.00 MB`
