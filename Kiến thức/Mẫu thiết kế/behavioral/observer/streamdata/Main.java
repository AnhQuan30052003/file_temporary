package behavioral.observer.streamdata;

public class Main {
    public static void main(String[] args) {
        Stream<MonHoc> courseStream = new Stream<>();
        Client client1 = new Client("Person 1");
        Client client2 = new Client("Person 2");
        courseStream.addListen(client1);
        courseStream.addListen(client2);

        QLMH manager = new QLMH(courseStream);
        manager.addCourse(new MonHoc("Math",3,"Vu ngu"));
        manager.addCourse(new MonHoc("Physics",2,"Vungu 2"));
    }
}