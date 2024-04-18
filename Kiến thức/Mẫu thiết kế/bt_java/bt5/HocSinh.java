package bt_java.bt5;

public class HocSinh extends CaNhan{
    String lop,nangKhieu;

    @Override
    public String HienThiTT() {
        return "họ tên: " +super.hoTen +"\nĐịa chỉ: "+super.diaChi+"\nSố điện thoại: "+super.sdt+"\ntuổi: "+super.tuoi ;
    }
}
