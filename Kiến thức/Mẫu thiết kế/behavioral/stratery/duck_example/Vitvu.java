package behavioral.stratery.duck_example;

public class Vitvu extends Duck{
    @Override
    public void display() {
        System.out.println("vu ngu");
        this.swim();
        this.performFly();
        this.performQuack();
    }
}
