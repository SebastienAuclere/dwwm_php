using System.Runtime.InteropServices;

namespace Diviseurs
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

            Console.WriteLine("Les diviseurs de " + nombre + " sont :");
            for(int i = 1; i <= nombre; i++)
                if(nombre % i == 0)
                    Console.Write(i + ", ");

        }
    }
}