package behavioral.template.entityDB_t;

public class MyObject {
    private int id;

    public MyObject() {
        // Constructor không tham số để khởi tạo giá trị cho id
    }

    public int getId() {
        return id;
    }

    public MyObject(int id) {
        this.id = id;
    }
}

