package creational.factory.geometry;

public class Circle extends Shape{
/*    private static Circle mySingleTon;

    public static Circle Instance() {
        if (mySingleTon == null)
            mySingleTon = new Circle();
        return mySingleTon;
    }*/
    @Override
    String draw() {
        return this.getClass().getSimpleName();
    }
}
