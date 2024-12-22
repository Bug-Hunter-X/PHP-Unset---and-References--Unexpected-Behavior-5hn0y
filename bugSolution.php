The solution to this problem involves breaking the reference before using unset().

```php
<?php
$array = ['a' => 1, 'b' => 2];
$ref = &$array['a'];
$ref = null; // Break the reference
unset($array['a']);
echo '$ref: ' . $ref . '\n'; // Outputs null
echo '$array: ' . print_r($array, true) . '\n'; // Outputs Array ( [b] => 2 )
?>
```

By setting `$ref` to `null`, we explicitly break the reference, ensuring that `unset($array['a'])` removes the variable completely and doesn't affect any lingering references.