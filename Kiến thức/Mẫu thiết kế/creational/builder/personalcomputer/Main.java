package creational.builder.personalcomputer;

public class Main {

    public static void main(String[] args) {
        Computer computer = new Computer.Builder()
                .addCPU("Ultra core")
                .addRAM("DDR5 6400")
                .addStorage("2TB")
                .addscreen("Ultra core").build();
        System.out.println(computer.toString());
    }
}
