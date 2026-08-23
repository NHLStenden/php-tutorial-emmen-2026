# Week 2 - Conditional Evaluation

PHP will not process a part of a boolean expression if it knows the outcome

Example

```php
True || (10 * 10 === 100) 
```

The (10 * 10 === 100) will not be evaluated because when using "OR" only one part needs to be True in order to yield
True. As the first part is already 'True' there is no need to evaluate the right hand side of the OR-operator

Another example

```php
(1 + 2 == 3) || (do_something_useful (1,3))
```

This case is the same: (1+2===3) yields true. So the function `do_something_useful` will not be called!

Do not rely on this behaviour: if it is essential to your application that the function is called, then do so before the
comparison

# How to make this usefull

For instance the example below:

```php
  $x = divide($a, $b);
  if ($x !== null) && ($x > 1)) {....}
```

The boolean expression uses && (and operator). So: both elements must be true in order to execute the codeblock. If the
first operand ($x !== null) yields false, PHP knows the outcome will always be false and not evaluate the (`$x>1`);

Evaluating ($x>1) when $x equals null will generate an error. By evaluating ($x !== null) first will make sure this is
safe. This way no need for two IF statements like below.  

```php
  $x = divide($a, $b);
  if ($x !== null) {
    if ($x > 1) {
    ....
    }
  } 

```