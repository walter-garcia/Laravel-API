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
      "infected": 0,
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
      "infected": 1,
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
      "infected": 1,
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
Property  | Type
--------  | ----
name      | string
----      | ------
age       | integer
---       | -------
gender    | string
------    | ------
latitude  | double
--------  | ------
longitude | double
--------- | ------
infected  | boolean


## Response
~~~
{
  "msg": "Survivor Information Added Successfully",
  "code": 201
}
~~~

## Update Survivor Information(s)

`PUT api/survivors/id`

## Request
`PUT http://localhost/zssn/public/api/survivors/id`

#### Supply new information(s)
`name -> string`
`age -> integer`
`gender -> string`
`latitude -> double`
`longitude -> double`
`infected -> boolean`

## Response
~~~
{
  "msg": "Survivor Information Updated Successfully",
  "code": 201
}
~~~

## Delete Survivor Informations

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
