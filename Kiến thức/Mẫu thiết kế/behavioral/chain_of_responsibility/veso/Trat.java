package behavioral.chain_of_responsibility.veso;

public class Trat implements IDoVeSo{
    @Override
    public IDoVeSo SetSuccessor(IDoVeSo successor) {
        return null;
    }

    @Override
    public String result(String veSo) {
        return "Chúc bạn may mắn lần sau "+veSo+" Vé số bị trật rồi";
    }
}
