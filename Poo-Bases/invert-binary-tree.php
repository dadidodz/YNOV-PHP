<?php

function invertTree($root)
{
    if ($root == null) {
        return null;
    }

    // Swap left and right subtrees
    $temp = $root->left;
    $root->left = $root->right;
    $root->right = $temp;

    // Invert left and right subtrees recursively
    invertTree($root->left);
    invertTree($root->right);

    return $root;
}


?>