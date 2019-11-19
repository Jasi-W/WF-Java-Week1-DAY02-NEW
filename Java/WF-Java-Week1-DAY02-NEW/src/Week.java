
import java.lang.reflect.Array;
import java.util.Arrays;
import java.util.Scanner;

public class Week {

    public static void main(String[] args) {

        Scanner scan = new Scanner(System.in);
        System.out.print("Enter a number: ");

        while (!(scan.hasNextInt())) {
            System.out.println("Plese enter a number!");
            System.out.print("Number: ");
            scan.next();
        }
        int number = scan.nextInt();


        String[] array = new String[]{"Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag", "Sonntag"};

        // Traversing the array - Array.get method Note : typecasting is essential as the return type in Object.
        String x = (String) Array.get(array, number-1);

        // Printing the values
        System.out.print(x + " ");
    }
}
