package structural.composite.binarytreenew;

public class LeafComposite implements ILeaf{
    private ILeaf left=null,right=null;
    private int value;

    public LeafComposite(int value) {
        this.value = value;
    }

    @Override //LNR
    public void duyetCay(String prefix, boolean isEnd) {
        System.out.println(prefix + (isEnd ? "└── " : "├── ") + value);
        String childPrefix = prefix + (isEnd ? "    " : "│   ");
        if (left != null) {
            left.duyetCay(childPrefix, right == null);
        }
        if (right != null) {
            right.duyetCay(childPrefix, true);
        }
    }


    @Override
    public void addLeft(ILeaf i) {
        left=i;
    }

    @Override
    public void addRight(ILeaf i) {
        right=i;
    }

    @Override
    public void Remove(ILeaf i) {
        if(left==i){
            left=null;
        }
        else{
            right=null;
        }
    }
}
