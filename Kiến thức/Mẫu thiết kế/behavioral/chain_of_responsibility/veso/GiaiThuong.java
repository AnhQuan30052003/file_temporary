package behavioral.chain_of_responsibility.veso;

public class GiaiThuong implements IDoVeSo{
    IDoVeSo giaiKeTiep;
    String tenGiai;
    String[] daySoTrungThuong;

    public GiaiThuong(String tenGiai, String[] daySoTrungThuong) {
        this.tenGiai = tenGiai;
        this.daySoTrungThuong = daySoTrungThuong;
    }

    @Override
    public IDoVeSo SetSuccessor(IDoVeSo successor) {
        giaiKeTiep=successor;
        return giaiKeTiep;
    }

    @Override
    public String result(String veSo) {
        for(String b:daySoTrungThuong){
            if(veSo.endsWith(b)){
                return "Bạn đã trúng giải "+tenGiai;
            }
        }
        return giaiKeTiep.result(veSo);
    }
}
