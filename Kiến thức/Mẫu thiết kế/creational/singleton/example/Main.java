package creational.singleton.example;

public class Main {
    public static void main(String[] args) {
        MySingleTon s = MySingleTon.Instance();
        MySingleTon s1 = MySingleTon.Instance();

        s.print();
        s.print();
        s.print();
        s1.print();
    }
}
