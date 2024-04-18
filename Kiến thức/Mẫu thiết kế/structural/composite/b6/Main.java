package structural.composite.b6;

public class Main {
    public static void main(String[] args) {
        BinaryTreeNode leaf1 = new BinaryTreeLeaf(1);
        BinaryTreeNode leaf2 = new BinaryTreeLeaf(2);
        BinaryTreeNode leaf3 = new BinaryTreeLeaf(3);

        BinaryTreeNode root = new BinaryTreeComposite(10);
        BinaryTreeNode composite1 = new BinaryTreeComposite(5);
        BinaryTreeNode composite2 = new BinaryTreeComposite(15);

        composite1.addChild(leaf1);
        composite1.addChild(leaf2);
        composite2.addChild(leaf3);

        root.addChild(composite1);
        root.addChild(composite2);

        root.printTree("", true);
    }
}