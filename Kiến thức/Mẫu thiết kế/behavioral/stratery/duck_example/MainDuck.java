package behavioral.stratery.duck_example;

public class MainDuck {
    public static void main(String[] args) {
        Duck duck = new VitQuay();
        duck.setFlyBehavior(new FlyWithWings());
        duck.setQuackBehavior(new SQuack());
        duck.display();

        Duck duck1 = new Vitvu();
        duck1.setFlyBehavior(new FlyNoWay());
        duck1.setQuackBehavior(new SQuack());
        duck1.display();
    }
}
