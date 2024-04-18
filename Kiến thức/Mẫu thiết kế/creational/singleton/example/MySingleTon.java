package creational.singleton.example;

public class MySingleTon {
    private static MySingleTon mySingleTon;
    int count = 0;

    protected MySingleTon() {
    }

    // Methods
    public static MySingleTon Instance() {
        if (mySingleTon == null)
            mySingleTon = new MySingleTon();
        return mySingleTon;
    }
    public void print(){
        System.out.println(++count);
    }
}
