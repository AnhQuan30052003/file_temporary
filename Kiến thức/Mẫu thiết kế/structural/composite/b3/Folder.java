package structural.composite.b3;

import java.util.ArrayList;
import java.util.List;

public class Folder implements FileSystemComponent {
    private String name;
    private String creationDate;
    private List<FileSystemComponent> children;

    public Folder(String name, String creationDate) {
        this.name = name;
        this.creationDate = creationDate;
        this.children = new ArrayList<>();
    }

   /* @Override
    public String getStringTreeFolder() {
        StringBuilder tree = new StringBuilder(name + "\n");
        for (FileSystemComponent child : children) {
            tree.append("  " + child.getStringTreeFolder());
        }
        return tree.toString();
    }*/
    @Override
    public void getStringTreeFolder(String prefix, boolean isEnd) {
        System.out.println(prefix + (isEnd ? "└── " : "├── ") + "Folder: " + name);
        // nếu mà có hơn 2 nút thì sẽ in "    " : "│   "
        for (int i = 0; i < children.size() - 1; i++) {
            children.get(i).getStringTreeFolder(prefix + (isEnd ? "    " : "│   "), false);
        }
        if (children.size() > 0) {
            children.get(children.size() - 1).getStringTreeFolder(prefix + (isEnd ?"    " : "│   "), true);
        }
    }

    @Override
    public String getPath() {
        return name;
    }

    @Override
    public void addItem(FileSystemComponent component) {
        children.add(component);
    }

    @Override
    public void removeItem(FileSystemComponent component) {
        children.remove(component);
    }
}