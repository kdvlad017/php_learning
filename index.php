<?php
$a_bool = true;   // логическое значение
$a_str  = "foo";  // первая строка
$a_str2 = 'foo';  // вторая строка
$an_int = 12;     // целое число

echo get_debug_type($a_bool), "\n";
echo get_debug_type($a_str), "\n";

// Если это целое число, увеличить на четыре
if (is_int($an_int)) {
    $an_int += 4;
}
var_dump($an_int);

// Если $a_bool - это строка, вывести её
if (is_string($a_bool)) {
    echo "Строка: $a_bool";
}
?>