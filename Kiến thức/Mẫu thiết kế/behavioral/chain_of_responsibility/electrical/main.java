package behavioral.chain_of_responsibility.electrical;

public class main {
    public static void main(String[] args) {
        IElectrical b1= new Electrical(0,50, (float) 1.806);
        IElectrical b2= new Electrical(50,100, (float) 1.866);
        IElectrical b3= new Electrical(100,200, (float) 2.167);
        IElectrical b4= new Electrical(200,300, (float) 2.729);
        IElectrical b5= new Electrical(300,400, (float) 3.051);
        IElectrical b6= new Electrical(400,Integer.MAX_VALUE, (float) 3.151);
        b1.capCaoHon(b2).capCaoHon(b3).capCaoHon(b4).capCaoHon(b5).capCaoHon(b6);
        System.out.println("Tính tiền điện: "+ b1.xuLyDien(175));


    }
}
