package behavioral.chain_of_responsibility.F88;

public class GiamDocF88 implements  IXulyKhoanVay{
    String ten;
    int hanMucVay;

    public GiamDocF88(String ten, int hanMucVay) {
        this.ten = ten;
        this.hanMucVay = hanMucVay;
    }

    @Override
    public IXulyKhoanVay capCaoHon(IXulyKhoanVay xulyKhoanVay) {
        return null;
    }

    @Override
    public String xuLyVay(int tienvay) {
        if(tienvay<=hanMucVay)
            return "Giám đốc "+ten+" Xử lý khoản vay";
        else
            return "Ra ngân hàng vay";
    }
}
