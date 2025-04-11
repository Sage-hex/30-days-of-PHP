
# PHP Variables Exercises

## Exercise 1: Basic Variables
Create variables to store:

- Your name (string)
- Your age (integer)
- Your height in meters (float)
- Whether you're a student (boolean)

**Output all variables using echo or print.**

**Sample Output:**  
```
Name: John
Age: 25
Height: 1.75
Student: Yes
```

---

## Exercise 2: String Concatenation
Create two variables: `$firstName = "Alice"` and `$lastName = "Smith"`.

Combine them into a new variable `$fullName` and output:  
```
Hello, Alice Smith!
```

---

## Exercise 3: Arithmetic Operations
Create two variables: `$num1 = 15` and `$num2 = 7`.

Calculate and output:

- Sum (`$num1 + $num2`)
- Difference (`$num1 - $num2`)
- Product (`$num1 * $num2`)
- Quotient (`$num1 / $num2`)
- Remainder (`$num1 % $num2`)

---

## Exercise 4: Variable Swapping
Declare `$a = 10` and `$b = 20`.

Swap their values **without using a temporary variable**.

Output the new values of `$a` and `$b`.

---

## Exercise 5: Temperature Conversion
Store a Celsius temperature in a variable: `$celsius = 25`.

Convert it to Fahrenheit using the formula:  
`Fahrenheit = (Celsius × 9/5) + 32`

Output the result:  
```
25°C is 77°F
```

---

## Exercise 6: Working with Constants
Define a constant `TAX_RATE` with a value of `0.15`.

Calculate the tax for a product costing `$price = 45`.

Output:  
```
Tax: $6.75
```

---

## Exercise 7: Type Conversion
Create a variable `$numberString = "123"`.

Convert it to an integer and multiply it by 2.

Output the result:  
```
246
```

---

## Exercise 8: User Profile (Challenge)
Create variables for a user:

- `$username`
- `$email`
- `$age`
- `$isSubscribed` (boolean)

Output a summary like:  
```
Username: php_master
Email: php@example.com
Age: 30
Subscribed: Yes
```

---

## Exercise 9: Shopping Cart Total
Create variables for item prices: `$item1 = 12.50`, `$item2 = 5.99`, `$item3 = 8.75`.

Calculate the total cost and store it in `$total`.

Output:  
```
Total: $27.24
```

---

## Exercise 10: Boolean Logic
Create variables: `$isLoggedIn = true`, `$hasPermission = false`.

Check if the user is logged in and has permission.

Output:  
```
Access granted
```
or  
```
Access denied
```

---

## Bonus Challenge: Dynamic Sentence
Create variables: `$noun = "cat"`, `$verb = "jump"`, `$adverb = "quickly"`.

Use them to form a sentence:  
```
The cat jumps quickly!
```

---

## Solutions Tips

- Use `echo` to output variables (e.g., `echo "Name: $name";`).
- For booleans, use a ternary operator to display "Yes"/"No":  
  `echo $isStudent ? 'Yes' : 'No';`
- To swap variables:
  ```php
  $a = $a + $b;
  $b = $a - $b;
  $a = $a - $b;
  ```
