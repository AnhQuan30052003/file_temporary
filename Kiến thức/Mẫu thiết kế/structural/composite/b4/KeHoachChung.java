package structural.composite.b4;

import structural.composite.example.Department;

import java.util.ArrayList;
import java.util.List;

public class KeHoachChung extends KeHoachHocTap {

    List<KeHoachHocTap> list=new ArrayList<>();
    public KeHoachChung() {

    }

    @Override
    public void add(KeHoachHocTap k) {
        list.add(k);
    }

    @Override
    public void remove(KeHoachHocTap k) {
        list.remove(k);
    }

    @Override
    public int getHocPhi() {
        int tong=0;
        for(KeHoachHocTap k:list){
            tong+=k.getHocPhi();
        }
        return tong;
    }

    @Override
    public int getSoTC() {
        int tongTc=0;
        for(KeHoachHocTap k:list){
            tongTc+=k.getSoTC();
        }
        return tongTc;
    }
    public void print(){
        list.forEach(KeHoachHocTap::print);
    }
}
