package bt_java.a6;

public class UIFactory {
    public static UI getUI(String tag) {
        DataAccess da = DataAccess.Instance(tag);
        switch (tag) {
            case "UI1":
                return new UI1(da);
            case "UI2":
                return new UI2(da);
            default:
                throw new IllegalArgumentException("No such UI");
        }
    }
}
