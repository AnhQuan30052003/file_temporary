package behavioral.stratery.giohang;

public class CODPayment implements IThanhToan{
    @Override
    public double thanhToan(double amount) {
        return amount >= 2000.000 ? 0.02 * amount : 0;
    }
}
