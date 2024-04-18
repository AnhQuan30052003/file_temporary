package structural.decorator.beverage;

// Mocha là một decorator, vì thế chúng ta kế thừa từ CondimentDecorator class
public class Mocha extends CondimentDecorator {
    // Một biến instance để giữ lại loại beverage mà chúng ta sẽ "gói" lại
    Beverage beverage;

    public Mocha(Beverage beverage) {
        this.beverage = beverage;
    }

    public String getDescription() {
        return beverage.getDescription() + ", Mocha";
    }

    public double cost() {
        // Chúng ta cần tính giá của đồ uống dùng thêm Mocha. Trước hết, chúng ta
        // gọi đến phương thức tính giá của loại đồ uống mà chúng ta "gói" vào, sau đó
        // cộng thêm giá của Mocha
        return 0.20 + beverage.cost();
    }
}
