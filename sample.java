public class Main {
    public static void main(String[] args) {
        Car car1;
        Car car2;
        car1 = new Car("ABC111", "Volvo V70");
        car2 = new Car("DEF222", "Saab 9-5");
        car1.setSpeed(100.0);
        System.out.println("The speed of car1 is " + car1.getSpeed());
    }
}