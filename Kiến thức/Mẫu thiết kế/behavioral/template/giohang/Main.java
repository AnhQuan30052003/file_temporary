package behavioral.template.giohang;

import java.util.ArrayList;
import java.util.List;

public class Main {
    /*public static float tinhTien(List<MatHang> dsHangHoa) {
        float tongTien = 0;
        for (MatHang mh : dsHangHoa) {
            tongTien += mh.getSoLuong() * mh.getDonGia();
        }
        return (float) tongTien;
    }*/

    /*public static void hienThiGioHang(List<MatHang> dsHangHoa, KhachHang hoaDon) {
        System.out.println("Danh sách mặt hàng:");
        for (MatHang mh : dsHangHoa) {
            System.out.println(mh);
        }
        float tongTien = tinhTien(dsHangHoa);
        System.out.println("Tổng tiền: " + tongTien);
        float chietKhau = hoaDon.tinhChietKhau(tongTien);
        System.out.println("Chiết khấu: " + chietKhau);
        System.out.println("Thành tiền: " + (tongTien - chietKhau));
    }*/

    public static void main(String[] args) {
        List<MatHang> dsHangHoa = new ArrayList<>();
        dsHangHoa.add(new MatHang("Banh", 10, 50000));
        dsHangHoa.add(new MatHang("Nuoc", 5, 20000));

        KhachHang hoaDon = new KhachHangVang(dsHangHoa);
        hoaDon.hienThiGioHang();
    }
}
