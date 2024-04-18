package creational.factory.geometry;



public class Main {
    public static void main(String[] args) {
        ShapeFactory shapeFactory = ShapeFactory.Instance();

        Shape rectangle = shapeFactory.createShape(ShapeType.RECTANGLE);
        System.out.println(rectangle.draw());

        Shape triangle = shapeFactory.createShape(ShapeType.TRIANGLE);
        System.out.println(triangle.draw());

        Shape circle = shapeFactory.createShape(ShapeType.CIRCLE);
        System.out.println(circle.draw());

    }
}
