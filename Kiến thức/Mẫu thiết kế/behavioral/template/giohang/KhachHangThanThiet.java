package behavioral.template.giohang;

import java.util.List;

public class KhachHangThanThiet extends KhachHang{
    public KhachHangThanThiet(List<MatHang> dsHangHoa) {
        super(dsHangHoa);
    }

    @Override
    protected float tinhChietKhau(float tong) {
        return tong >= 500000 ? (float) (tong * 0.02) : 0;
    }
}
