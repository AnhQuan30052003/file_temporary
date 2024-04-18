package creational.factory.geometry;

public class ShapeFactory {
    public Shape createShape(ShapeType shapeType){
        if (shapeType.equals(ShapeType.CIRCLE)) {
            return new Circle();
        } else if (shapeType.equals(ShapeType.RECTANGLE)) {
            return new Rectangle();
        } else if (shapeType.equals(ShapeType.TRIANGLE)) {
            return new Triangle();
        } else {
            return null;
        }
    }
    private static ShapeFactory mySingleTon;

    public static ShapeFactory Instance() {
        if (mySingleTon == null)
            mySingleTon = new ShapeFactory();
        return mySingleTon;
    }
}
