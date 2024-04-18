package bt_java.a6;

public class Main {
    public static void main(String[] args) {
        SanPham sp1 = new SanPham("SP001", "Sản phẩm 1", 10, 1000.0);
        SanPham sp2 = new SanPham("SP002", "Sản phẩm 2", 20, 2000.0);

        DataAccess daUI1 = DataAccess.Instance("UI1");
        daUI1.themSanPham(sp1);
        daUI1.themSanPham(sp2);

        SanPham sp1Updated = new SanPham("SP001", "Sản phẩm 1 cập nhật", 15, 1100.0);
        daUI1.capNhatSanPham(sp1Updated);

        //daUI1.xoaSanPham("SP002");
        daUI1.print();
    }
}
