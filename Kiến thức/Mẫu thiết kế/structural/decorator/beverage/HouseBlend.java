package structural.decorator.beverage;

public class HouseBlend extends Beverage {
    public HouseBlend(String description) {
        this.description = description;
    }
    public double cost() {
        return 0.89;
    }
}
