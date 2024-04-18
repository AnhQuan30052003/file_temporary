package structural.decorator.expression;

public class BieuThucDonGian extends BieuThuc{
    //khoi tao ban dau cua bieu thuc
    float toanHang;

    public BieuThucDonGian(float toanHang) {
        this.toanHang = toanHang;
    }

    @Override
    public float giaTri() {
        return toanHang;
    }

    @Override
    public String bieuThuc() {
        return toanHang +"";
    }
}
