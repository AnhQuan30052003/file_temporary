package behavioral.observer.tigia;

public class Main {
    public static void main(String[] args) {
        TiGia tiGia = new TiGia();
        NhaDauTuA nhaDauTuA = new NhaDauTuA(tiGia);
        NhaDauTuB nhaDauTuB = new NhaDauTuB(tiGia);
        System.out.println("Lan 1");
        tiGia.notifyTiGia(2.0f);
        nhaDauTuA.huyDangKy();
        System.out.println("Lan 2");
        tiGia.notifyTiGia(-2f);


    }
}
