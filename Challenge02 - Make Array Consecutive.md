# Make Array Consecutive

>
> Ratiorg got statues of different sizes as a present from CodeMaster for his birthday, each statue having an non-negative integer size.
> Since he likes to make things perfect, he wants to arrange them from smallest to largest so that each statue will be bigger than the previous one exactly by 1. He may need some additional statues to be able to accomplish that.
> **Help him figure out the minimum number of additional statues needed.**
>

### Input:

- $statues: [7, 5, 4, 6];
- $statues: [6, 2, 3, 8];
- $statues: [1, 2, 6, 3];



## Challenge Resolution
```php
   
    function makeArrayConsecutive($statues) {
        $statuesAll = range(min($statues), max($statues));
	    $result = array_diff($statuesAll, $statues);
        return count($result);
    }
   
```

### Output:

- 0;
- 3;
- 2;
