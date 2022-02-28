<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
</p>

## Test Project by ETISO company

Test app will be a rest api with 7 methodes. Authorization isn't required. 
First of all we start from a table in db, called cars , with columns: id, name, type (10 chars).
User can (7 api methods):

- Add a car
- Update a car
- Delete a car
- List cars
- Get first car from table where type == 'big', name of the car should be in uppercase
- Get first car from table where type == 'big', name of the car should be in lowercase
- Delete first car from table where type == 'big'

### Generate Fake Data

```
php artisan migrate -seed
```

### Routes in turn with tasks

| Method | Uri            | Task                                                                                     |
|--------|----------------|------------------------------------------------------------------------------------------|
| GET    | api/cars       | Add a car                                                                                |
| POST   | api/cars       | Update a car                                                                             |
| PUT    | api/cars/{id}  | Delete a car                                                                             |
| DELETE | api/cars/{id}  | List cars                                                                                |
| GET    | api/cars/task5 | Get first car from table where type == 'big', <br>name of the car should be in uppercase |
| GET    | api/cars/task6 | Get first car from table where type == 'big', <br>name of the car should be in lowercase |
| GET    | api/cars/task7 | Delete first car from table where type == 'big'                                          |
