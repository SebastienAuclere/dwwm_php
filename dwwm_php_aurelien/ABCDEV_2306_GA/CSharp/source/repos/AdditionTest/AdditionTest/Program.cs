namespace AdditionTest
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Saisir un nombre A:");
            double n1 = Convert.ToDouble(Console.ReadLine());

            Console.WriteLine("Saisir un nombre B:");
            double n2 = Convert.ToDouble(Console.ReadLine());

            Console.WriteLine("La moyenne des deux nombres vaut: " + (n1 + n2)/2 );
        }
    }
}