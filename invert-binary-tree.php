<?php


class BinaryNode
{
    public ?int $value = null; // Node value
    public ?BinaryNode $left = null; // Left child
    public ?BinaryNode $right = null; // Right child

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    
    public function invertedTree(?BinaryNode $root): ?BinaryNode
    {
        if ($root == null) {
            return null;
        }

        // Swap left and right subtrees
        $temp = $root->left;
        $root->left = $root->right;
        $root->right = $temp;

        // Invert left and right subtrees recursively
        $this->invertedTree($root->left);
        $this->invertedTree($root->right);

        return $root;
    }
}

?>