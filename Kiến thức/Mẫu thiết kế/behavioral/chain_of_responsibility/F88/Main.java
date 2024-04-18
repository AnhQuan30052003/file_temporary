package behavioral.chain_of_responsibility.F88;

public class Main {
    public static void main(String[] args) {
        IXulyKhoanVay gacCong=new NhanVienF88("Vũ","Gác cổng",100);
        IXulyKhoanVay giuXe=new NhanVienF88("Trọng","Giữ xe",200);
        IXulyKhoanVay thuKy=new NhanVienF88("Thịnh","Thư ký",800);
        IXulyKhoanVay giamDoc=new GiamDocF88("Thái",1000);
        gacCong.capCaoHon(giuXe).capCaoHon(thuKy).capCaoHon(giamDoc);
        System.out.println(gacCong.xuLyVay(150));

    }
}
