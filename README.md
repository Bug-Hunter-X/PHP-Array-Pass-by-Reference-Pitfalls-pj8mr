# PHP Pass-by-Reference Array Modification Bug

This repository demonstrates a subtle but common error in PHP related to pass-by-reference when working with arrays.  Modifying arrays within functions using pass-by-reference can have unintended consequences if you're not aware of how it operates.

The `bug.php` file shows an example of seemingly correct code that produces unexpected results due to pass-by-reference behavior.  The `bugSolution.php` file offers a corrected version.

## How to Reproduce

1. Clone this repository.
2. Run `php bug.php` to see the unexpected output.
3. Run `php bugSolution.php` to see the corrected output.

## Explanation

In PHP, arrays passed to a function are passed by reference by default unless explicitly stated otherwise. This means changes made to the array *inside* the function are reflected in the original array outside of the function. This is sometimes beneficial but often leads to unexpected behavior. The solution will illustrate a way to avoid this issue.