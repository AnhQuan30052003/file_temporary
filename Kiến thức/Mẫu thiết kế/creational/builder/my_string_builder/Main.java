package creational.builder.my_string_builder;

public class Main {
    public static void main(String[] args) {
        MyStringBuilder string=new MyStringBuilder()
                .addString("vũ ngu")
                .addBool(true)
                .addFloat(3);
        System.out.println(string.toString());
        StringBuilder string2 = new StringBuilder("vũ ngu");
        string2.append(" ngu quá");
        System.out.println(string2);
    }
}
