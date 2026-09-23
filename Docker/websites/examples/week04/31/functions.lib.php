<?php
function passByValue(array $list, int $currentMemoryUsage): array
{
    foreach ($list as $key => $value) {
        $list[$key] += 1;
    }
    $newMemoryUsage = memory_get_usage();
    echo "passByValue: delta = " . number_format($newMemoryUsage - $currentMemoryUsage) . PHP_EOL;
    return $list;
}

function passByReference(array &$list, int $currentMemoryUsage): void
{

    foreach ($list as $key => $value) {
        $list[$key] += 1;
    }
    $newMemoryUsage = memory_get_usage();
    echo "passByReference: delta = " . number_format($newMemoryUsage - $currentMemoryUsage) . PHP_EOL;
}
