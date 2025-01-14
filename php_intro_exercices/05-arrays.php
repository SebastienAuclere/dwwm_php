<?php
$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];
$steveMeCasseLesCouilles = [];

function firstItem(array $table): ?string
{
  if (empty($table))
  {
    return null;
  }
  else
  {
    return $table[0];
  }
}

function lastItem(array $table): ?string
{
  if (empty($table))
  {
    return null;
  } 
  else 
  {
    return end($table);
  }    
}

function sortItems(array $table): array
{
    if ($table === array())
    {
        return $table;
    } 
    else 
    {
        arsort($table);
        return $table;
    }   
}

function stringItems(array $table): string
{
  if ($table === array()) {
    return "Nothing to display";
  } else {
    sort($table);
    return $table[0] . ', ' . $table[1] . ', ' . $table[2] . ', ' . $table[3] . ', ' . $table[4];
  }  
}

echo firstItem($names) . PHP_EOL;
var_dump(firstItem($steveMeCasseLesCouilles));
echo lastItem($names) . PHP_EOL;
var_dump(lastItem($steveMeCasseLesCouilles));
var_dump(sortItems($names));
var_dump(sortItems($steveMeCasseLesCouilles));
echo stringItems($names) . PHP_EOL;
echo stringItems($steveMeCasseLesCouilles) . PHP_EOL;

$names = array("Joe", "Jack", "Cindy");
var_dump($names);

$names = array("Joe", "Jack", "Cindy");
print_r($names);