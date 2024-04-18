package structural.decorator.expression;

import structural.decorator.beverage.*;

public class Main {
    public static void main(String[] args) {
        BieuThuc bieuThuc = new BieuThucDonGian(3);
        bieuThuc = new Cong(bieuThuc,2);
        bieuThuc = new Nhan(new Cong(bieuThuc,5),2);
        System.out.printf(bieuThuc.bieuThuc() +" = "+bieuThuc.giaTri());
    }
}
