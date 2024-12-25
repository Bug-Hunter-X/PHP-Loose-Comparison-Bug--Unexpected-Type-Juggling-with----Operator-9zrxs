# PHP Loose Comparison Bug

This repository demonstrates a subtle bug in PHP related to loose comparison (`==`) and type juggling. The code intends to check if a variable is strictly equal to 1 or 1.0, however, due to PHP's loose comparison, it incorrectly evaluates strings and booleans as true.

## Bug Description
The `checkValue` function uses loose comparison (`==`) to determine if the input value is equal to 1 or 1.0.  However, PHP's loose comparison allows for type coercion, leading to unexpected results where strings ('1', '1.0') and boolean (`true`) are incorrectly evaluated as true.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php`.
3. Observe the unexpected outputs.

## Solution
The solution involves using strict comparison (`===`) to prevent type coercion.  Strict comparison checks for both value and type equality.