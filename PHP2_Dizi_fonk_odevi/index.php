<pre>
<?php
$_planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

print_r(my_function($_planets, 2));
print_r(my_function($_planets, 3));
print_r(my_function($_planets, 2));
print_r(my_function($_planets, 4));
print_r(my_function($_planets, 5));

function my_function($_array, $_value)
{
    $_filter = array_filter($_array);
    $_randKeys = array_rand($_filter, $_value);
    $_arrayMap = array_map(function ($item) use ($_filter) {
        return $_filter[$item];
    }, $_randKeys);
    return $_arrayMap;
}
?>
</pre>