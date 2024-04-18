package bt_java.bt4;



import java.util.ArrayList;
import java.util.List;

public class QuanLyChuyenXe {
    List<ChuyenXe> chuyenXeList = new ArrayList<>();
    public void them(ChuyenXe cx){
        chuyenXeList.add(cx);
    }
    public void inDS() {
        for(ChuyenXe cx :chuyenXeList ){
            System.out.println(cx.toString()+"\n");
        }
    }
    int doanhThuXeNoiThanh(){
        int tong=0;
        for(ChuyenXe cx :chuyenXeList ){
            if(cx instanceof XeNoiThanh)
                tong+=cx.doanhThu;
        }
        return tong;
    }
    int doanhThuXeNgoaiThanh(){
        int tong=0;
        for(ChuyenXe cx :chuyenXeList ){
            if(cx instanceof XeNgoaiThanh)
                tong+=cx.doanhThu;
        }
        return tong;
    }
    int doanhThu2xe(){
        int tong=0;
        for(ChuyenXe cx :chuyenXeList ){
            tong+=cx.doanhThu;
        }
        return tong;
    }
}
