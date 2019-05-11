---
title: API Reference

language_tabs:
- bash

- javascript


includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_ce7cd9bea6db8da60e41cbc21cbc8c6a -->
## Register new user

> Example request:

```bash
curl -X POST "http://localhost/api/v1.1/register" \
    -H "Content-Type: application/json" \
    -d '{"name":"et","first_name":"hic","last_name":"quas","email":"fugit","phone":15,"password":"ut","city_id":9,"branch_id":9}'

```

```javascript
const url = new URL("http://localhost/api/v1.1/register");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "et",
    "first_name": "hic",
    "last_name": "quas",
    "email": "fugit",
    "phone": 15,
    "password": "ut",
    "city_id": 9,
    "branch_id": 9
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1.1/register`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the user.
    first_name | string |  required  | The name of the user.
    last_name | string |  required  | The name of the user.
    email | string |  required  | The email of the user.
    phone | integer |  required  | The phone of the user.
    password | string |  required  | The password of the user.
    city_id | integer |  required  | The password of the user.
    branch_id | integer |  required  | The password of the user.

<!-- END_ce7cd9bea6db8da60e41cbc21cbc8c6a -->

<!-- START_a86372f76abe3bf210983461b9e678ad -->
## Login user

> Example request:

```bash
curl -X POST "http://localhost/api/v1.1/login" \
    -H "Content-Type: application/json" \
    -d '{"phone":10,"password":"enim"}'

```

```javascript
const url = new URL("http://localhost/api/v1.1/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "phone": 10,
    "password": "enim"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1.1/login`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    phone | integer |  required  | The phone of the user.
    password | string |  required  | The password of the user.

<!-- END_a86372f76abe3bf210983461b9e678ad -->

<!-- START_5920357ababe07dab178362b5104f772 -->
## Display a listing of Branch.

> Example request:

```bash
curl -X GET -G "http://localhost/branch" 
```

```javascript
const url = new URL("http://localhost/branch");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):


```json
null
```

### HTTP Request
`GET branch`


<!-- END_5920357ababe07dab178362b5104f772 -->

<!-- START_0187c5e89bda4ff10e5cd5b19440116f -->
## Display a listing of City.

> Example request:

```bash
curl -X GET -G "http://localhost/city" 
```

```javascript
const url = new URL("http://localhost/city");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):


```json
null
```

### HTTP Request
`GET city`


<!-- END_0187c5e89bda4ff10e5cd5b19440116f -->

<!-- START_f5c9c970467076fae3b35315b0e7fe7b -->
## Display a listing of Service.

> Example request:

```bash
curl -X GET -G "http://localhost/service" 
```

```javascript
const url = new URL("http://localhost/service");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):


```json
null
```

### HTTP Request
`GET service`


<!-- END_f5c9c970467076fae3b35315b0e7fe7b -->

<!-- START_789e15eb1175f07a4792679deb1562e1 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/workinghours" 
```

```javascript
const url = new URL("http://localhost/workinghours");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):


```json
null
```

### HTTP Request
`GET workinghours`


<!-- END_789e15eb1175f07a4792679deb1562e1 -->


