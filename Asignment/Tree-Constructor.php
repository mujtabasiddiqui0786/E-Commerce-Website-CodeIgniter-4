<?php

function constructTree($strArr) {
    $parentCount = array();
    
    foreach ($strArr as $pair) {
      $pair = substr($pair, 1, -1); // Remove the parentheses from the pair
      
      list($child, $parent) = explode(",", $pair);
      
      if (isset($parentCount[$child])) {
        // Child node already has a parent, so it's not a proper binary tree
        return "false";
      }
      
      $parentCount[$child] = isset($parentCount[$parent]) ? $parentCount[$parent] + 1 : 1;
      
      if ($parentCount[$child] > 2) {
        // Child node has more than two parents, so it's not a proper binary tree
        return "false";
      }
    }
    
    return "true";
  }
  

//   Sample Run
echo constructTree(["(1,2)", "(2,4)", "(5,7)", "(7,2)", "(9,5)"]); // Output: true
echo constructTree(["(1,2)", "(3,2)", "(2,12)", "(5,2)"]); // Output: false

?>