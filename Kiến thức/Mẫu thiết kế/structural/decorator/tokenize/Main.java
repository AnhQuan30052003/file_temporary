package structural.decorator.tokenize;

import java.util.Arrays;

public class Main {
    static void inKQ(String[] kq){
        Arrays.stream(kq).forEach(s -> {
            System.out.println(s+"\t");
        });
        System.out.println();
    }
    public static void main(String[] args) {
        ITokenize tachTu = new TachTu("Hôm nay vũ óc chó quá và lại còn ngu nữa!");
        tachTu=new LoaiBoDauCau(tachTu);
        tachTu=new LoaiBoTuDung(tachTu);
        inKQ(tachTu.tokenize());


        /*String text = "Hôm nay vũ óc chó quá, lại còn ngu nữa!";
        tachTu = new LoaiBoDauCau(tachTu);

        String[] tokens1 = tachTu.tokenize(text);
        System.out.println(Arrays.toString(tokens1));*/

    }
}
