import java.util.HashMap;
import java.util.Map;

public class StringProcessor {

    public StringProcessor() {
    }

    public String toUpperCase(String input) {
        return input.toUpperCase();
    }

    public String toLowerCase(String input) {
        return input.toLowerCase();
    }

    public String toggleCase(String input) {
        char[] chars = input.toCharArray();
        for (int i = 0; i < chars.length; i++) {
            chars[i] = Character.isUpperCase(chars[i])
                       ? Character.toLowerCase(chars[i])
                       : Character.toUpperCase(chars[i]);
        }
        return new String(chars);
    }

    public boolean containsSubstring(String input, String substring) {
        return input.contains(substring);
    }

    public String extractSubstring(String input, int startIndex, int endIndex) {
        return input.substring(startIndex, endIndex);
    }

    public String replaceSubstring(String input, String target, String replacement) {
        return input.replace(target, replacement);
    }
    public boolean isPalindrome(String input) {
        int left = 0;
        int right = input.length() - 1;
        while (left < right) {
            if (input.charAt(left) != input.charAt(right)) {
                return false;
            }
            left++;
            right--;
        }
        return true;
    }
    public int countWords(String input) {
        if (input == null || input.isEmpty()) {
            return 0;
        }
        String[] words = input.split("\\s+");
        return words.length;
    }

    public Map<Character, Integer> characterFrequency(String input) {
        Map<Character, Integer> frequency = new HashMap<>();
        for (char c : input.toCharArray()) {
            frequency.put(c, frequency.getOrDefault(c, 0) + 1);
        }
        return frequency;
    }

    // Main method để thử nghiệm
    public static void main(String[] args) {
        StringProcessor processor = new StringProcessor();

        String originalString = "Vu ngu nhat!";
        System.out.println("Original: " + originalString);
        System.out.println("To Upper Case: " + processor.toUpperCase(originalString));
        System.out.println("To Lower Case: " + processor.toLowerCase(originalString));
        System.out.println("Toggle Case: " + processor.toggleCase(originalString));
        System.out.println("Contains 'ngu': " + processor.containsSubstring(originalString, "ngu"));
        System.out.println("Extract Substring (0,6): " + processor.extractSubstring(originalString, 0, 6));
        System.out.println("Replace 'ngu' with 'khong thong minh': " + processor.replaceSubstring(originalString, "ngu", "khong thong minh"));
        System.out.println("Is Palindrome: " + processor.isPalindrome(originalString));
        System.out.println("Word Count: " + processor.countWords(originalString));
        System.out.println("Character Frequency: " + processor.characterFrequency(originalString));
    }
}
