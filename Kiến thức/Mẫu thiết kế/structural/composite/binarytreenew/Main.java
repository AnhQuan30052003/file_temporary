package structural.composite.binarytreenew;


public class Main {
    public static void main(String[] args) {
        Leaf leaf1 = new Leaf(1);
        Leaf leaf2 = new Leaf(2);
        Leaf leaf3 = new Leaf(3);

        LeafComposite root = new LeafComposite(10);
        LeafComposite composite1 = new LeafComposite(5);
        LeafComposite composite2 = new LeafComposite(15);

        composite1.addLeft(leaf1);
        composite1.addRight(leaf2);
        composite2.addLeft(leaf3);

        root.addLeft(composite1);
        root.addRight(composite2);
        root.duyetCay("", true);
    }
}
