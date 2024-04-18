package structural.composite.binarytreenew;

public class Leaf implements ILeaf {
    private int value;

    public Leaf(int value) {
        this.value = value;
    }

    @Override
    public void duyetCay(String prefix, boolean isEnd) {
        System.out.println(prefix + (isEnd ? "└── " : "├── ") + "Leaf Node: " + value);
    }

    @Override
    public void addLeft(ILeaf i) {

    }

    @Override
    public void addRight(ILeaf i) {

    }

    @Override
    public void Remove(ILeaf i) {

    }


}
