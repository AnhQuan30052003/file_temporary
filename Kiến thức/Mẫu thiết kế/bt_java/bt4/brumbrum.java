package bt_java.bt4;


public class brumbrum {
    public static void main(String[] args) {
        QuanLyChuyenXe ds = new QuanLyChuyenXe();
        ds.them(new XeNgoaiThanh("1","vũ",1,50000,1,"phu yen"));
        ds.them(new XeNgoaiThanh("2","vú",2,1561651,1,"nha trang"));
        ds.them(new XeNgoaiThanh("3","vù",3,4654246,1,"ha noi"));
        ds.them(new XeNoiThanh("4","vủ",4,4653231,1,5));
        ds.them(new XeNoiThanh("5","vụ",5,732131,1,10));
        ds.them(new XeNoiThanh("6","vục",6,434842,1,15));
        ds.inDS();
        System.out.println("Doanh thu: "+ds.doanhThuXeNgoaiThanh());
        System.out.println("Doanh thu: "+ds.doanhThuXeNoiThanh());
        System.out.println("Doanh thu: "+ds.doanhThu2xe());
    }
}
