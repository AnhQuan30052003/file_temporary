package creational.factory.geometry;

public class Triangle extends Shape{
    @Override
    String draw() {
        return this.getClass().getSimpleName();
    }
}
