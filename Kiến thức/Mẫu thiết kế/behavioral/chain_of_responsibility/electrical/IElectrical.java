package behavioral.chain_of_responsibility.electrical;


public interface IElectrical {
    IElectrical capCaoHon(IElectrical electrical);
    float xuLyDien(int soKW);
}
