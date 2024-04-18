package behavioral.template.beverage;

public class Coffee extends CaffeineBeverage {
    @Override
    protected void brewCoffeeGrinds() {
        System.out.println("Brew the coffee grinds");
    }

    @Override
    protected void pourInCup() {
        System.out.println("Pour coffee in a cup");
    }

    @Override
    protected void addCondiments() {
        System.out.println("Add sugar and milk");
    }
}
