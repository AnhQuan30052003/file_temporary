package structural.decorator.beverage;

public class DarkRoast extends Beverage {
    public DarkRoast() {
        description = "Dark Roast Coffee";
    }
    public double cost() {
        return 0.94;
    }
}