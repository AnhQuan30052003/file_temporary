package creational.builder.personalcomputer;

public class Computer {
    String CPU,RAM,Storage,screen;

    public Computer(Builder builder) {
        this.CPU = builder.CPU;
        this.RAM = builder.RAM;
        this.Storage = builder.Storage;
        this.screen = builder.screen;

    }

    @Override
    public String toString() {
        return "CPU='" + CPU +
                "\n RAM='" + RAM +
                "\n Storage='" + Storage +
                "\n screen='" + screen ;
    }

    public static class Builder{
        String CPU,RAM,Storage,screen;
        Builder addCPU(String cpu){
            this.CPU=cpu;
            return this;
        }
        Builder addRAM(String ram){
            this.RAM=ram;
            return this;
        }
        Builder addStorage(String storage){
            this.Storage=storage;
            return this;
        }
        Builder addscreen(String screen){
            this.screen=screen;
            return this;
        }
        //...
        public Computer build(){
            return new Computer(this);
        }
    }
}
