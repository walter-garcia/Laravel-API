# Zombie Survival Social Network - (ZSSN)

`Gitclone` or <a href="https://marcels-zssn.herokuapp.com" target="_blank">Click Here<a>


## List All Survivors

`GET api/survivors`

## Request
`GET http://localhost/zssn/public/api/survivors`

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
`POST http://localhost/zssn/public/api/survivors`

#### Supply with the following properties
Property  | Type | Format
--------  | ---- | ------
name      | string | New Name
age       | integer | 30
gender    | string | male or female
latitude  | double | Positive (123.456789) = North / Negative (-123.456789) = South
longitude | double | Positive (123.456789) = East / Negative (-123.456789) = West

## Response
~~~
{
  "msg": "Survivor Information Added Successfully",
  "code": 201
}
~~~

## Update Survivor Location

`PUT api/survivors/{id}/location`

## Request
`PUT http://localhost/zssn/public/api/survivors/id/location`

#### Provide the new location
Property  | Type | Format
--------  | ---- | ------
latitude  | double | Positive (123.456789) = North / Negative (-123.456789) = South
longitude | double | Positive (123.456789) = East / Negative (-123.456789) = West

## Response
~~~
{
  "msg": "Survivor Location Updated Successfully",
  "code": 201
}
~~~

## Delete Survivor Informations
#### If a survivor die or get contaminated by the virus, you might want to delete his information from the system!


`DELETE api/survivors/id`

## Request
`DELETE http://localhost/zssn/public/api/survivors/id`

## Response
~~~
{
  "msg": "Survivor (Survivor Name) Deleted Successfully",
  "code": 200
}
~~~
