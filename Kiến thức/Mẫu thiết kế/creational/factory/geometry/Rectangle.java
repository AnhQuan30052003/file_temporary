package creational.factory.geometry;


public class Rectangle extends Shape{

    @Override
    String draw() {
        return this.getClass().getSimpleName();
    }
}
