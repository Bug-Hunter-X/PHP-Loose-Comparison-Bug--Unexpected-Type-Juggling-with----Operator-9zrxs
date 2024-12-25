The solution uses strict comparison (`===`) to avoid type juggling issues:

```php
function checkValue($value) {
  if ($value === 1 || $value === 1.0) {
    return true;
  } else {
    return false;
  }
}

var_dump(checkValue(1));     // bool(true) - Correct
var_dump(checkValue(1.0));   // bool(true) - Correct
var_dump(checkValue('1'));   // bool(false) - Correct
var_dump(checkValue('1.0')); // bool(false) - Correct
var_dump(checkValue(true));  // bool(false) - Correct
```

By using strict comparison, the function now correctly identifies only 1 and 1.0 as true, avoiding the unexpected behavior caused by loose comparison.