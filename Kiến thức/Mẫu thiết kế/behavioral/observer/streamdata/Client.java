package behavioral.observer.streamdata;

import java.util.List;

public class Client implements Listener<MonHoc> {
    String name;
    int count=0;
    public Client(String name) {
        this.name = name;
    }
    @Override
    public void onEvent(MonHoc event) {
        System.out.println(name);
        System.out.println("\tReceived event: " + event);
    }

}
