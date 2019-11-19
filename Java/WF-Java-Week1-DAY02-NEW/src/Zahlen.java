import java.util.Scanner;

public class Zahlen {
    public static void main(String[] args) {

        Scanner scan = new Scanner(System.in);
        System.out.print("Enter a number: ");

        while (!(scan.hasNextInt())) {
            System.out.println("Plese enter a number!");
            System.out.print("Number: ");
            scan.next();
        }
        int number = scan.nextInt();

        if(number > 0){
            System.out.print(number+ " is positiv ");
        } else {
            System.out.print(number+ " is negativ ");
        }

        if(number > 100) {
            System.out.println("and large number");
        } else if(number < 1) {
            System.out.println("and small number");
        }
    }
}
