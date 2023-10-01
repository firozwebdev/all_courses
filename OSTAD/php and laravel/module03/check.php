<?php
$names = array('Talha', 'Afnan','Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni');

// Define a filter function to check if a name starts with 'M'
function startsWithM($name) {
    return strtoupper(substr($name, 0, 1)) === 'M';
}

// Use array_filter to filter names that start with 'M'
$filteredNames = array_filter($names, 'startsWithM');

// Print the filtered names
echo "Names that start with 'M':\n";
foreach ($filteredNames as $name) {
    echo "$name\n";
}