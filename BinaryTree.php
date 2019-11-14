<?php
class BinaryTree
{
    public $left = null;
    
    public $right = null;

    public $element = null;

    public function setElement($element) {
        $this->element = $element;
    }
}


class BinaryTreeSearch
{
    public static function contains($Tree, $target) {
        if (empty($Tree)) {
            return false;
        }

        if ($target < $Tree->element) {
            return BinaryTreeSearch::contains($Tree->left, $target);
        } else 
        if ($target > $Tree->element) {
            return BinaryTreeSearch::contains($Tree->right, $target);
        } else 
        if ($target == $Tree->element) {
            return true;
        }
    }

    public static function insert($Tree, $target) {
        if (empty($Tree->left) && empty($Tree->element) && empty($Tree->right)) {
            $Tree = new BinaryTree;
            $Tree->setElement($target);
            return $Tree;
        }

        if ($target < $Tree->element) {
            $Tree->left = BinaryTreeSearch::insert($Tree->left, $target);
        } else 
        if ($target > $Tree->element) {
            $Tree->right = BinaryTreeSearch::insert($Tree->right, $target);
        } else 
        if ($target == $Tree->element) {
           ;
        }
        return $Tree;
    }

    public static function findMax($Tree) {
        if (empty($Tree->right)) {
            return $Tree;
        } else if (!empty($Tree->right)){
            $Tree = BinaryTreeSearch::findMax($Tree->right);
        }
        return $Tree;
    }

    public static function findMin($Tree) {
        if (empty($Tree->left)) {
            return $Tree;
        } else if (!empty($Tree->left)){
            $Tree = BinaryTreeSearch::findMin($Tree->left);
        }
        return $Tree;
    }
}

$Tree = null;

$arr = [6, 8, 1, 2, 4, 3, 9, 10, 12];

foreach ($arr as $key => $value) {
    $Tree = BinaryTreeSearch::insert($Tree, $value);
}

$max = BinaryTreeSearch::findMin($Tree);


$TreeString = $max->element;

echo $TreeString;

// echo '</br>';
// foreach ($arr as $key => $value) {
//     echo $value . ',';
// }