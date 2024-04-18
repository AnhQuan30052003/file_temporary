package behavioral.template.beverage;

public abstract class CaffeineBeverage {
    public void prepareCoffee() {
        boilWater();
        brewCoffeeGrinds();
        pourInCup();
        addCondiments();
    }
    protected void boilWater() {
        System.out.println("Boil some water");
    }

    protected abstract void brewCoffeeGrinds();

    protected abstract void pourInCup();

    protected abstract void addCondiments();
}
