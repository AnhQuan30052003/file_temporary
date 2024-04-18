package structural.composite.b6;

import java.util.List;
import java.util.ArrayList;

public class BinaryTreeLeaf implements BinaryTreeNode {
    private int value;

    public BinaryTreeLeaf(int value) {
        this.value = value;
    }

    @Override
    public void printTree(String prefix, boolean isEnd) {
        System.out.println(prefix + (isEnd ? "└── " : "├── ") + "Leaf Node: " + value);
    }

    @Override
    public void addChild(BinaryTreeNode child) {
    }

    @Override
    public void removeChild(BinaryTreeNode child) {
    }

}
