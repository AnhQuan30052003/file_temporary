package structural.composite.b3;

public interface FileSystemComponent {
    void getStringTreeFolder(String prefix, boolean isEnd);

    String getPath();
    void addItem(FileSystemComponent component);
    void removeItem(FileSystemComponent component);
}