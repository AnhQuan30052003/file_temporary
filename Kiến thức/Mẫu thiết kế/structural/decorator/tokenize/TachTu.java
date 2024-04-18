package structural.decorator.tokenize;

public class TachTu implements ITokenize{
    String s;

    public TachTu(String s) {
        this.s = s;
    }

    @Override
    public String[] tokenize() {
        return s.split(" ");
    }
   /* public String[] tokenize(String text) {
        return text.split("\\s+");
    }*/
}
