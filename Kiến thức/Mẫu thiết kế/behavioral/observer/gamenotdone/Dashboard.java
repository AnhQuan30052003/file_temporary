package behavioral.observer.gamenotdone;

public class Dashboard implements IPlayerData {
    @Override
    public void update(long thoiGian, int countdown, int grade) {
        System.out.println("Thời Gian Còn Lại: " + thoiGian);
        System.out.println("Số Lượt Chơi Còn Lại: " + countdown);
        System.out.println("Điểm Số Đạt Được: " + grade);
       /* System.out.println("Level Hiện Tại: " );
        System.out.println("Mức Thưởng Bổ Sung: " );*/
    }
}
