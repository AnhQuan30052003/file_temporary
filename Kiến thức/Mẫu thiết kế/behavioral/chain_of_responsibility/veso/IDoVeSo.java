package behavioral.chain_of_responsibility.veso;

public interface IDoVeSo {
    IDoVeSo SetSuccessor (IDoVeSo successor);
    String result(String veSo);

}
