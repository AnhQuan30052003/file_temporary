package behavioral.stratery.giohang;

public class KhuyenMai10Max100 implements IKhuyenMai{
    @Override //500.000
    public double tinhToanKM(double amount) {
        return amount*0.1<100?amount*0.1:100;
    }
}
