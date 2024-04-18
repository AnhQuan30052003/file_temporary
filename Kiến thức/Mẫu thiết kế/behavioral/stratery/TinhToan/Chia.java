package behavioral.stratery.TinhToan;

public class Chia implements Tinh{
    @Override
    public float tinh(float a, float b) {
        if(b!=0)
            return a/b;
        return 0;
    }
}
