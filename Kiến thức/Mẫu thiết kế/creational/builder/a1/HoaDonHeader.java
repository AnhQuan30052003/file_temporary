package creational.builder.a1;

public class HoaDonHeader {
    String maHoaDon,tenKH,ngay;

    public HoaDonHeader(String maHoaDon, String tenKH, String ngay) {
        this.maHoaDon = maHoaDon;
        this.tenKH = tenKH;
        this.ngay = ngay;
    }

    @Override
    public String toString() {
        return "HoaDonHeader{" +
                "maHoaDon='" + maHoaDon + '\'' +
                ", tenKH='" + tenKH + '\'' +
                ", ngay='" + ngay + '\'' +
                '}';
    }
}
