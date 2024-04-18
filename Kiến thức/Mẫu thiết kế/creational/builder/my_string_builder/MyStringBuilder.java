package creational.builder.my_string_builder;

public class MyStringBuilder {
    private String str="";
    public MyStringBuilder addString(String s){
        str+=s;
        return this;
    }
    public MyStringBuilder addFloat(float f){
        str+=f;
        return this;
    }
    public MyStringBuilder addBool(boolean b){
        str+=b;
        return this;
    }
    @Override
    public String toString(){
        return str;
    }
}
