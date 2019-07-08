# `Z`ombie `S`urvival `S`ocial `N `etwork (`ZSSN` - API)

<a href="https://marcels-zssn.herokuapp.com" target="_blank">Check it out<a>


## List all survivors

`GET api/survivors`

## Request

`GET https://marcels-zssn.herokuapp.com/api/survivors`

## Response

~~~
{
  "0": {
    "current_page": 1,
    "data": [
      {
        "id": 1,
        "name": "Marcel",
        "age": 50,
        "gender": "male",
        "latitude": -100.123323,
        "longitude": 100.453456,
        "created_at": "2019-07-07 21:49:54",
        "updated_at": "2019-07-07 21:49:54"
      },
      {
        "id": 2,
        "name": "Marceeeeeel",
        "age": 60,
        "gender": "male",
        "latitude": -200.123323,
        "longitude": 0.453456,
        "created_at": "2019-07-07 21:50:16",
        "updated_at": "2019-07-07 21:50:16"
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
    "to": 2,
    "total": 2
  },
  "code": "200 - OK"
}
~~~

## List a survivor with its belongings and infected flag

`GET api/survivors/id`

## Request

`GET https://marcels-zssn.herokuapp.com/api/survivors/id`

## Response

~~~
{
  "0": {
    "id": 1,
    "name": "Marcel",
    "age": 50,
    "gender": "male",
    "latitude": -100.123323,
    "longitude": 100.453456,
    "created_at": "2019-07-07 21:49:54",
    "updated_at": "2019-07-07 21:49:54"
  },
  "water_amount": 2,
  "water_points": 8,
  "food_amount": 2,
  "food_points": 6,
  "medication_amount": 0,
  "medication_points": 0,
  "ammunition_amount": 0,
  "ammunition_points": 0,
  "is_infected": false
}
~~~

## Add a survivor

`POST api/survivors`

## Request

`POST https://marcels-zssn.herokuapp.com/api/survivors`

#### Supply with the following properties

| Property  | Type    | Format                                                                 |
|-----------|---------|------------------------------------------------------------------------|
| name      | string  | New Name                                                               |
| age       | integer | Survivor's Age                                                         |
| gender    | string  | Survivor's Gender                                                      |
| latitude  | double  | `Positive` (123.456789) = `North` / `Negative` (-123.456789) = `South` |
| longitude | double  | `Positive` (123.456789) = `East` / `Negative` (-123.456789) = `West`   |

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

| Property    | Type               | Format                                |
|-------------|--------------------|---------------------------------------|
| item        | string             | Item Name                             |
| points      | integer            | follow the table below                |
| survivor_id | unsignedBigInteger | ID of the survivor who owns the items |


| Item         | Points   |
|--------------|----------|
| 1 Water      | 4 points |
| 1 Food       | 3 points |
| 1 Medication | 2 points |
| 1 Ammunition | 1 point  |

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
| latitude  | double | `Positive` (123.456789) = `North` / `Negative` (-123.456789) = `South` |
| longitude | double | `Positive` (123.456789) = `East` / `Negative` (-123.456789) = `West`   |

## Response

~~~
{
  "msg": "Survivor Location Updated Successfully",
  "code": "201 - Created"
}
~~~

## Delete survivor informations

#### If a survivor die or get contaminated by the virus, you might want to delete his information from the system!

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
