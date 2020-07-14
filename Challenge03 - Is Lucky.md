# Is Lucky

>
> Ticket numbers usually consist of an even number of digits.
> A ticket number is considered lucky if the sum of the first half of the digits is equal to the sum of the second half.
> **Given a ticket number n, determine if it's lucky or not.**
>

### Input:

- $n: 1230;
- $n: 239017;
- $n: 134008;



## Challenge Resolution
```php
   
    function isLucky($n) {  
	
		$arr = str_split($n);  
		list($arr1, $arr2) = array_chunk($arr, ceil(count($arr) / 2));
		
		return array_sum($arr1) == array_sum($arr2)? 'true' : 'false';    
	}
   
```

### Output:

- true;
- false;
- true;
