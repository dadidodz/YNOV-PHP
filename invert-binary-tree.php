<?php

function invertedTree($root)
{
    if ($root == null) {
        return null;
    }

    // Swap left and right subtrees
    $temp = $root->left;
    $root->left = $root->right;
    $root->right = $temp;

    // Invert left and right subtrees recursively
    invertedTree($root->left);
    invertedTree($root->right);

    return $root;
}


?>