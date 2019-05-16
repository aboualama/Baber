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
    -d '{"name":"dignissimos","first_name":"dolorum","last_name":"eligendi","email":"praesentium","phone":2,"password":"autem","city_id":4,"branch_id":9}'

```

```javascript
const url = new URL("http://localhost/api/v1.1/register");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "dignissimos",
    "first_name": "dolorum",
    "last_name": "eligendi",
    "email": "praesentium",
    "phone": 2,
    "password": "autem",
    "city_id": 4,
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
    city_id | integer |  optional  | required.
    branch_id | integer |  optional  | required.

<!-- END_ce7cd9bea6db8da60e41cbc21cbc8c6a -->

<!-- START_a86372f76abe3bf210983461b9e678ad -->
## Login user

> Example request:

```bash
curl -X POST "http://localhost/api/v1.1/login" \
    -H "Content-Type: application/json" \
    -d '{"phone":16,"password":"porro"}'

```

```javascript
const url = new URL("http://localhost/api/v1.1/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "phone": 16,
    "password": "porro"
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

<!-- START_8932a08b080cdf7fff26da37afd56b2b -->
## reset password

> Example request:

```bash
curl -X POST "http://localhost/api/v1.1/reset-password" \
    -H "Content-Type: application/json" \
    -d '{"phone":7}'

```

```javascript
const url = new URL("http://localhost/api/v1.1/reset-password");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "phone": 7
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
`POST api/v1.1/reset-password`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    phone | integer |  required  | The phone of the user.

<!-- END_8932a08b080cdf7fff26da37afd56b2b -->

<!-- START_860bf6a6e9a79dbbe51f340939ceb0ee -->
## set new password

> Example request:

```bash
curl -X POST "http://localhost/api/v1.1/new-password" \
    -H "Content-Type: application/json" \
    -d '{"pin_code":6,"new":"autem"}'

```

```javascript
const url = new URL("http://localhost/api/v1.1/new-password");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "pin_code": 6,
    "new": "autem"
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
`POST api/v1.1/new-password`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    pin_code | integer |  required  | The pin_code of the user.
    new | password |  optional  | string The password of the user.

<!-- END_860bf6a6e9a79dbbe51f340939ceb0ee -->

<!-- START_fc122704b5022c44f53f0336449da26d -->
## Redirect the user to the {Provider} authentication page.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1.1/login/1" 
```

```javascript
const url = new URL("http://localhost/api/v1.1/login/1");

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


> Example response (500):


```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1.1/login/{provider}`


<!-- END_fc122704b5022c44f53f0336449da26d -->

<!-- START_3045e2678a1723ad7bc16467ad20f066 -->
## Obtain the user information from {Provider}.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1.1/login/1/callback" 
```

```javascript
const url = new URL("http://localhost/api/v1.1/login/1/callback");

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


> Example response (500):


```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1.1/login/{provider}/callback`


<!-- END_3045e2678a1723ad7bc16467ad20f066 -->

<!-- START_ffcd5b78e3e079bcb0937fc8f7a2148f -->
## return user profile

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1.1/profile" 
```

```javascript
const url = new URL("http://localhost/api/v1.1/profile");

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
{
    "status": 0,
    "message": "Unauthenticated.",
    "date": null
}
```

### HTTP Request
`GET api/v1.1/profile`


<!-- END_ffcd5b78e3e079bcb0937fc8f7a2148f -->

<!-- START_dc0a245ca94837b6e18c6f46b88f9896 -->
## update user

> Example request:

```bash
curl -X PUT "http://localhost/api/v1.1/profile/update" \
    -H "Content-Type: application/json" \
    -d '{"name":"voluptatem","email":"iure","phone":4,"password":"ducimus"}'

```

```javascript
const url = new URL("http://localhost/api/v1.1/profile/update");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "voluptatem",
    "email": "iure",
    "phone": 4,
    "password": "ducimus"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1.1/profile/update`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the user.
    email | string |  required  | The email of the user.
    phone | integer |  required  | The phone of the user.
    password | string |  optional  | The password of the user.

<!-- END_dc0a245ca94837b6e18c6f46b88f9896 -->

<!-- START_8ff48ff9b2965efc59413bf4bd65c706 -->
## Display a listing of Branch.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1.1/branch" 
```

```javascript
const url = new URL("http://localhost/api/v1.1/branch");

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


> Example response (500):


```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1.1/branch`


<!-- END_8ff48ff9b2965efc59413bf4bd65c706 -->

<!-- START_5c7d3c712fe9dadc12982f7f7198d37f -->
## Store a newly Branch.

> Example request:

```bash
curl -X POST "http://localhost/api/v1.1/branch" \
    -H "Content-Type: application/json" \
    -d '{"name":"assumenda","open_time":"deleniti","close_time":"ipsam","city_id":3}'

```

```javascript
const url = new URL("http://localhost/api/v1.1/branch");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "assumenda",
    "open_time": "deleniti",
    "close_time": "ipsam",
    "city_id": 3
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
`POST api/v1.1/branch`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the Branch.
    open_time | time |  required  | The time opening of the Branch.
    close_time | time |  required  | The time closeing of the Branch.
    city_id | integer |  required  | The name of city the Branch was located.

<!-- END_5c7d3c712fe9dadc12982f7f7198d37f -->

<!-- START_7f7a5278ec88c34316372a07ec647300 -->
## Show the Branch.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1.1/branch/1" \
    -H "Content-Type: application/json" \
    -d '{"int":"quos"}'

```

```javascript
const url = new URL("http://localhost/api/v1.1/branch/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "quos"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):


```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1.1/branch/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    int | $id |  required  | 

<!-- END_7f7a5278ec88c34316372a07ec647300 -->

<!-- START_90f6c6761428a22b2fa80a517e685bdc -->
## Update Branch.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1.1/branch/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"totam","open_time":"vel","close_time":"vel","city_id":9}'

```

```javascript
const url = new URL("http://localhost/api/v1.1/branch/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "totam",
    "open_time": "vel",
    "close_time": "vel",
    "city_id": 9
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1.1/branch/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the Branch.
    open_time | time |  required  | The time opening of the Branch.
    close_time | time |  required  | The time closeing of the Branch.
    city_id | integer |  required  | The name of city the Branch was located.

<!-- END_90f6c6761428a22b2fa80a517e685bdc -->

<!-- START_4f94978e1d84ecb91edd4b28b83b8453 -->
## Remove the Branch.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1.1/branch/1" \
    -H "Content-Type: application/json" \
    -d '{"int":"est"}'

```

```javascript
const url = new URL("http://localhost/api/v1.1/branch/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "est"
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1.1/branch/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    int | $id |  required  | 

<!-- END_4f94978e1d84ecb91edd4b28b83b8453 -->

<!-- START_683cf5280c620396bdee3fe6c29573d2 -->
## Display a listing of City.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1.1/city" 
```

```javascript
const url = new URL("http://localhost/api/v1.1/city");

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


> Example response (500):


```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1.1/city`


<!-- END_683cf5280c620396bdee3fe6c29573d2 -->

<!-- START_671d6a1ea47da3f127fcccd1fdfeed11 -->
## Store a newly City.

> Example request:

```bash
curl -X POST "http://localhost/api/v1.1/city" \
    -H "Content-Type: application/json" \
    -d '{"name":"dolores"}'

```

```javascript
const url = new URL("http://localhost/api/v1.1/city");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "dolores"
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
`POST api/v1.1/city`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the City.

<!-- END_671d6a1ea47da3f127fcccd1fdfeed11 -->

<!-- START_2147b1ada2265d1a3dfea495059df6f9 -->
## Show the City.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1.1/city/1" \
    -H "Content-Type: application/json" \
    -d '{"int":"velit"}'

```

```javascript
const url = new URL("http://localhost/api/v1.1/city/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "velit"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):


```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1.1/city/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    int | $id |  required  | 

<!-- END_2147b1ada2265d1a3dfea495059df6f9 -->

<!-- START_e6a830add4f89c59b41debd75c908768 -->
## Update City.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1.1/city/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"pariatur"}'

```

```javascript
const url = new URL("http://localhost/api/v1.1/city/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "pariatur"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1.1/city/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the City.

<!-- END_e6a830add4f89c59b41debd75c908768 -->

<!-- START_f94de8c5c09d6ea8add5b1b4e77fe352 -->
## Remove the City.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1.1/city/1" \
    -H "Content-Type: application/json" \
    -d '{"int":"dolorem"}'

```

```javascript
const url = new URL("http://localhost/api/v1.1/city/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "dolorem"
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1.1/city/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    int | $id |  required  | 

<!-- END_f94de8c5c09d6ea8add5b1b4e77fe352 -->


