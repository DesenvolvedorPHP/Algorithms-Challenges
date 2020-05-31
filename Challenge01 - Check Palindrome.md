# Check Palindrome

>
> Given the string, check if it is a palindrome.
>

### Input:

- $inputString: "aabaa";
- $inputString: "hello";
- $inputString: "world";
- $inputString: "ovo";
- $inputString: "uva";


## Challenge Resolution
```php
   
        function checkPalindrome($inputString) {
            return $inputString == strrev($inputString)?true:false; 
        }
   
```

### Output:

- true;
- false;
- false;
- true;
- true;
