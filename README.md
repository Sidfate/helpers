# Helpers
Some common and useful helpers in PHP
 
# Install
`composer require sidfate/helpers`

# Usage

### Arr
array functions.

```
// Get the first value.
Arr::first(array $arr);

// Get the last value.
Arr::last(array $arr);

// Get the value if not exists return the default.
Arr::get(array $arr, $key, $default = null);

// Transform a array into object.
Arr::toObject(array $arr);

// Flatten a multi-dimensional array to a one-dimensional array.
Arr::flat(array $arr);

// Pluck the given key's value from a two-dimensional array.
Arr::pluck(array $arr, $key);
```

### Str
string functions.

```
// Change the str to camel case.
Str::camel($str);

// * Get the limited str.
Str::limit($str, $length=50, $end="..."); 
```

### Verify
verification functions.

```
// Verify is a valid email address
Verify::isEmail($email)

// Verify is a valid ip address
Verify::isIp($ip)

// Verify is a valid url
Verify::isUrl($url)
```