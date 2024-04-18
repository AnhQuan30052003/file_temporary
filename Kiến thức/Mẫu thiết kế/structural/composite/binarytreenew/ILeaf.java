package structural.composite.binarytreenew;

public interface ILeaf {
    void duyetCay(String prefix, boolean isEnd);
    void addLeft(ILeaf i);
    void addRight(ILeaf i);
    void Remove(ILeaf i);
}