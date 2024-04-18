package bt_java.bt4;

public class ChuyenXe {
    String maSoChuyen,hoTenTX;
    int soXe;
    double doanhThu;

    public ChuyenXe(String maSoChuyen, String hoTenTX, int soXe, double doanhThu) {
        this.maSoChuyen = maSoChuyen;
        this.hoTenTX = hoTenTX;
        this.soXe = soXe;
        this.doanhThu = doanhThu;
    }

    @Override
    public String toString(){
        return "Mã số chuyến:"+maSoChuyen+"\nhọ tên Tài xế:"+hoTenTX;
    }
}
class XeNoiThanh extends ChuyenXe{
    int soTuyen, soKmDiDuoc;

    public XeNoiThanh(String maSoChuyen, String hoTenTX, int soXe, double doanhThu, int soTuyen, int soKmDiDuoc) {
        super(maSoChuyen, hoTenTX, soXe, doanhThu);
        this.soTuyen = soTuyen;
        this.soKmDiDuoc = soKmDiDuoc;
    }
    @Override
    public String toString(){
        return super.toString()+"\nSố tuyến: "+soTuyen+"\nSố Km đi được: "+soKmDiDuoc;
    }
}
class XeNgoaiThanh extends ChuyenXe{
    int soNgayDi;
    String noiDen;

    public XeNgoaiThanh(String maSoChuyen, String hoTenTX, int soXe, double doanhThu, int soNgayDi, String noiDen) {
        super(maSoChuyen, hoTenTX, soXe, doanhThu);
        this.soNgayDi = soNgayDi;
        this.noiDen = noiDen;
    }

    @Override
    public String toString(){
        return super.toString()+"\nSố ngày đi: "+soNgayDi+"\nNơi đến: "+noiDen;
    }
}
