using System.Security.Cryptography.X509Certificates;

namespace Fibonacci
{
    public class Program
    {
        static void Main(string[] args)
        {
            int numero;
            string saisie;

            Console.WriteLine("Saisir le nombre");
            saisie = Console.ReadLine();
            numero = int.Parse(saisie);

            Console.WriteLine(LeFibonacci(numero));
        }
        public static int LeFibonacci(int numero) {

                int temp = 0;

                int[] tableau = new int[numero];
                tableau[0] = 0;
                tableau[1] = 1;

                for (int i = 2; i < numero; i++)
                {
                    tableau[i] = tableau[i - 1] + tableau[i - 2];
                    temp = tableau[i] + tableau[i - 1];
                }

                return temp;
        }
    }
}