package structural.decorator.beverage;

public abstract class CondimentDecorator extends Beverage {
    public abstract String getDescription();
}
// Đầu tiên, chúng ta kế thừa Beverage class, vì Espresso là một loại đồ uống.
