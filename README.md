# Fibonacci

I first receive the parameter that indicates the value to get, and I will use this value as the limit to not process anything else. We will have an array with the initial values, which will be replaced as the loop advances to obtain the sum of both terms. At the end, the loop will end in the term indicated as a parameter and this term will be removed from the series.
I think for a next opportunity I could perform a recursive function.

Example of an API call

```http
  GET localhost/api/api.php?index=index
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `index`   | `string` | **Required**. Returns the Fibonacci value  |
