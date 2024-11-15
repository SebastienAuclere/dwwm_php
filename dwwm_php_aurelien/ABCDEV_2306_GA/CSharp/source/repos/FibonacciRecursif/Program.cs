using System.Security.Cryptography.X509Certificates;

namespace FibonacciRecursif
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int nombre;
            string saisie;

            Console.WriteLine("Saisir un nombre");

            saisie = Console.ReadLine();
            nombre = int.Parse(saisie);

            for (int i = 0; i <= nombre; i++)
            {
                Console.WriteLine(Fibonacci(i));
            }
        }
        public static int Fibonacci(int nombre) {

            if (nombre == 0)  {
                return 0;
                }

            else if (nombre == 1)
            {
                return 1;
            }
            else
            {
                 return Fibonacci(nombre - 1) + Fibonacci(nombre - 2);
            }
        }
    }
}