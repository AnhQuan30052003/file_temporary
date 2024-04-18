package structural.composite.b3;

public class File implements FileSystemComponent {
    private String name;
    private String creationDate;

    public File(String name, String creationDate) {
        this.name = name;
        this.creationDate = creationDate;
    }

    @Override
    public void getStringTreeFolder(String prefix, boolean isEnd) {
        System.out.println(prefix + (isEnd ? "└── " : "├── ") + "File: " + name);
    }

    @Override
    public String getPath() {
        return name;
    }

    @Override
    public void addItem(FileSystemComponent component) {
    }

    @Override
    public void removeItem(FileSystemComponent component) {
    }
}