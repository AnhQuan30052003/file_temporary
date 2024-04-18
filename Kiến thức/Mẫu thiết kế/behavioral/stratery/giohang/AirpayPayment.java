package behavioral.stratery.giohang;

public class AirpayPayment implements IThanhToan{
    @Override
    public double thanhToan(double amount) {
        return amount >= 1000000 ? 0.03 * amount : 0;
    }
}
