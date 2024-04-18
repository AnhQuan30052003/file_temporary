package behavioral.observer.streamdatanew;

import java.util.List;

public class Main {
    public static void main(String[] args) {
        MyStream<List<MonHoc>> stream = new MyStream<>();

        DataAccess dataAccess = DataAccess.getInstance(stream);
        Client client = new Client(stream);

        dataAccess.add(new MonHoc("007", 3, "vũ ngu"));
        dataAccess.add(new MonHoc("008", 3, "vũ ngu"));
    }
}
