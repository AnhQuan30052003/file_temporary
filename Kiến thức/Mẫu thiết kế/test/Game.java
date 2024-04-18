package test;

import java.util.ArrayList;
import java.util.List;

interface Observer {
    void update(PlayerData data);
}

interface Observable {
    void addObserver(Observer o);
    void removeObserver(Observer o);
    void notifyObservers();
}

// Lớp PlayerData
class PlayerData implements Observable {
    private int thoiGian;
    private int countdown;
    private int grade;
    private List<Observer> observers;

    public PlayerData() {
        observers = new ArrayList<>();
    }

    public void setThoiGian(int thoiGian) {
        this.thoiGian = thoiGian;
        notifyObservers();
    }

    public void setCountdown(int countdown) {
        this.countdown = countdown;
        notifyObservers();
    }

    public void setGrade(int grade) {
        this.grade = grade;
        notifyObservers();
    }

    @Override
    public void addObserver(Observer o) {
        observers.add(o);
    }

    @Override
    public void removeObserver(Observer o) {
        observers.remove(o);
    }

    @Override
    public void notifyObservers() {
        for (Observer observer : observers) {
            observer.update(this);
        }
    }

    public int getThoiGian() {
        return thoiGian;
    }

    public int getCountdown() {
        return countdown;
    }

    public int getGrade() {
        return grade;
    }
}

// Lớp Dashboard
class Dashboard implements Observer {
    @Override
    public void update(PlayerData data) {
        System.out.println("Thời gian còn lại: " + data.getThoiGian() +
                ", Số lượt chơi còn lại: " + data.getCountdown() +
                ", Điểm số: " + data.getGrade());
    }
}

// Lớp chính để thực thi
public class Game {
    public static void main(String[] args) {
        PlayerData playerData = new PlayerData();
        Dashboard dashboard = new Dashboard();

        playerData.addObserver(dashboard);

        // Thay đổi dữ liệu và quan sát kết quả
        playerData.setThoiGian(30);
        playerData.setCountdown(5);
        playerData.setGrade(100);
    }
}
