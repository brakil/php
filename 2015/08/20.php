<?php
function foo($foo)
{
    echo 'Function ' . $foo . ' is being executed.' . PHP_EOL;
    exit();
}

function bar($bar)
{
    echo 'Function ' . $bar . ' is being executed.' . PHP_EOL;
}

echo 'Start execuition...' . PHP_EOL;

register_shutdown_function('foo', 'foo');
register_shutdown_function('bar', 'bar');