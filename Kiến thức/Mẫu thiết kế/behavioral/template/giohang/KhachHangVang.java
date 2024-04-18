package behavioral.template.giohang;

import java.util.List;

public class KhachHangVang extends KhachHang{
    public KhachHangVang(List<MatHang> dsHangHoa) {
        super(dsHangHoa);
    }

    @Override
    protected float tinhChietKhau(float tong) {
        return tong >= 1000000 ? (float) (tong * 0.05) : (float) (tong * 0.03);
    }
}
