# Zombie Survival Social Network - (ZSSN - API)

`<a href="https://marcels-zssn.herokuapp.com" target="_blank">Check it out<a>


## List All Survivors

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
      "name": "Waldo Swift",
      "age": 65,
      "gender": "female",
      "latitude": -72.058789,
      "longitude": 116.679161,
      "created_at": "2019-07-05 00:42:00",
      "updated_at": "2019-07-05 00:42:00"
    },
    {
      "id": 2,
      "name": "Mrs. Kellie Wintheiser",
      "age": 75,
      "gender": "male",
      "latitude": 75.454592,
      "longitude": -154.987451,
      "created_at": "2019-07-05 00:42:00",
      "updated_at": "2019-07-05 00:42:00"
    },
    {
      "id": 3,
      "name": "Alba Metz",
      "age": 50,
      "gender": "female",
      "latitude": 5.944988,
      "longitude": -69.344035,
      "created_at": "2019-07-05 00:42:00",
      "updated_at": "2019-07-05 00:42:00"
    }
  ]
}
~~~

## Add a Survivor

`POST api/survivors`

## Request
`POST https://marcels-zssn.herokuapp.com/api/survivors`

#### Supply with the following properties
| Property  | Type    | Format                                                         |
|-----------|---------|----------------------------------------------------------------|
| name      | string  | New Name                                                       |
| age       | integer | survivor's age                                                 |
| gender    | string  | survivor's gender                                              |
| latitude  | double  | Positive (123.456789) = North / Negative (-123.456789) = South |
| longitude | double  | Positive (123.456789) = East / Negative (-123.456789) = West   |

## Response
~~~
{
  "msg": "Survivor Information Added Successfully",
  "code": "201 - Created"
}
~~~

## Add Survivor Items

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

## Report an Infected Survivor

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

## Update Survivor Location

`PUT api/survivors/{id}/location`

## Request
`PUT https://marcels-zssn.herokuapp.com/api/survivors/id/location`

#### Provide the new location
| Property  | Type   | Format                                                         |
|-----------|--------|----------------------------------------------------------------|
| latitude  | double | Positive (123.456789) = North / Negative (-123.456789) = South |
| longitude | double | Positive (123.456789) = East / Negative (-123.456789) = West   |

## Response
~~~
{
  "msg": "Survivor Location Updated Successfully",
  "code": "201 - Created"
}
~~~

## Delete Survivor Informations
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
