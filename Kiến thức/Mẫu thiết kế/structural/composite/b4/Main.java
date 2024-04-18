package structural.composite.b4;

import java.sql.SQLOutput;

public class Main {
    public static void main(String[] args) {
        KeHoachChung khoahoc = new KeHoachChung();
        KeHoachChung nam1 = new KeHoachChung();
        KeHoachChung nam2 = new KeHoachChung();
        KeHoachChung ky1 = new KeHoachChung();
        KeHoachChung ky2 = new KeHoachChung();
        KeHoachChung ky3 = new KeHoachChung();
        KeHoachChung ky4 = new KeHoachChung();

        MonHoc toan = new MonHoc("Vũ ngu",3,500);
        MonHoc van = new MonHoc("Ma thuật",3,100);
        MonHoc mythuat = new MonHoc("Ma thuật",3,100);
        MonHoc vatly = new MonHoc("Ma thuật",3,100);
        MonHoc trongngu = new MonHoc("Ma thuật",3,100);
        MonHoc vungu = new MonHoc("Ma thuật",3,100);
        MonHoc blabla = new MonHoc("Ma thuật",3,100);

        khoahoc.add(nam1);
        khoahoc.add(nam2);
        nam1.add(ky1);
        nam1.add(ky2);
        nam2.add(ky3);
        nam2.add(ky4);

        ky1.add(van);
        ky1.add(toan);
        ky2.add(toan);
        System.out.println("Các môn học của năm 1:\n");
        nam1.print();
        System.out.println("\n\tHọc phí: "+nam1.getHocPhi());
        System.out.println("\tTổng số tín chỉ: "+nam1.getSoTC());
        System.out.println("Các môn học của năm 2:\n");
        nam2.print();
        System.out.println("\n\tHọc phí: "+nam2.getHocPhi());
        System.out.println("\tTổng số tín chỉ: "+nam2.getSoTC());
        System.out.println("Các môn học của khóa học:\n");
        khoahoc.print();
        System.out.println("\n\tHọc phí: "+khoahoc.getHocPhi());
        System.out.println("\tTổng số tín chỉ: "+khoahoc.getSoTC());

    }
}
