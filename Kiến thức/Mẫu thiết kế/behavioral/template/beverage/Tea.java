package behavioral.template.beverage;

public class Tea extends CaffeineBeverage {
    @Override
    protected void brewCoffeeGrinds() {
        System.out.println("Steep the teabag in the water");
    }

    @Override
    protected void pourInCup() {
        System.out.println("Pour tea in the water");
    }

    @Override
    protected void addCondiments() {
        System.out.println("Add Lemon");
    }
}
