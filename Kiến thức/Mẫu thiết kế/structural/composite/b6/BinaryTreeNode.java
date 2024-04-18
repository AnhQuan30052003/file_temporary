package structural.composite.b6;

import java.util.List;

public interface BinaryTreeNode {
    void printTree(String prefix, boolean isEnd);
    void addChild(BinaryTreeNode child);
    void removeChild(BinaryTreeNode child);
}