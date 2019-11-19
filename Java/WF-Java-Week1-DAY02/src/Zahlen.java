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



/*
        if(number > 0){
            System.out.print("Your nunber is positiv ");
        } else {
            System.out.print("Your nunber is negativ ");
        }

        if(number > 1000000) {
            System.out.println("large");
        } else if(number < 1) {
            System.out.println("small");
        }

                String s = "5.4";
        // Testet nur auf positive ganzzahlige Werte
        if (s.matches("\\d+"))
            System.out.println("positive ganze Zahl!");

            // Testet nur auf negative ganzzahlige Werte
        else if(s.matches("-\\d+"))
            System.out.println("negative ganze Zahl!");

        // Testet nur auf positive oder negative ganzzahlige Werte
        if(s.matches("-?\\d+"))
            System.out.println("positive oder negative ganze Zahl!");
        else
            System.out.println("keine ganze Zahl!");

        // Testet auf positive oder negative Dezimalzahlen
        if (s.matches("-?\\d+([.]{1}\\d+){1}"))
            System.out.println("positive oder negative Dezimalzahl!");
        else
            System.out.println("keine Dezimalzahl!");

        // Testet auf positive oder negative  Dezimal- und ganze Zahlen
        if (s.matches("-?\\d+([.]{1}\\d+)?"))
            System.out.println("positive oder negative Dezimalzahl oder ganze Zahl!");
        else
            System.out.println("weder Dezimal- noch ganze Zahl!");

*/
