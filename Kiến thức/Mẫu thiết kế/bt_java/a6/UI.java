package bt_java.a6;

public interface UI {
    void execute();
}
class UI1 implements UI {
    private DataAccess dataAccess;

    public UI1(DataAccess da) {
        this.dataAccess = da;
    }

    @Override
    public void execute() {
        // Thực hiện các thao tác với dataAccess
    }
}

class UI2 implements UI {
    private DataAccess dataAccess;

    public UI2(DataAccess da) {
        this.dataAccess = da;
    }

    @Override
    public void execute() {
        // Thực hiện các thao tác với dataAccess
    }
}

