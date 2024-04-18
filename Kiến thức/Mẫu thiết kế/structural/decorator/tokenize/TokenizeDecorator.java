package structural.decorator.tokenize;

public class TokenizeDecorator implements ITokenize{
    protected ITokenize iTokenize;

    public TokenizeDecorator(ITokenize iTokenize) {
        this.iTokenize = iTokenize;
    }
/*    public String[] tokenize(String text) {
        return iTokenize.tokenize(text);
    }*/
    public String[] tokenize() {
        return iTokenize.tokenize();
    }
}
