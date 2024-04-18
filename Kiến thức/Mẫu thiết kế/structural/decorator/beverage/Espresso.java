package structural.decorator.beverage;

// Đầu tiên, chúng ta kế thừa Beverage class, vì Espresso là một loại đồ uống.
public class Espresso extends Beverage {
    public Espresso() {
        description = "Espresso";
    }
    // Tính giá của một cốc Espresso. Chúng ta không cần lo lắng đến việc thêm
    // các thành phần đồ uống khác vào class này, chỉ đơn giản là trả về giá của
    // một cốc Espresso.
    public double cost() {
        return 1.99;
    }
}