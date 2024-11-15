using System.Globalization;

namespace NombreParfaits
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int nombre;
            string saisie;
            int j = 0;

            Console.WriteLine("Saisir un nombre");
            saisie = Console.ReadLine();
            nombre = int.Parse(saisie);



            do
            {

                for (int i = 2; i < Math.Pow(2, nombre) - 1; i++)

                    if ((Math.Pow(2, nombre) - 1) % i == 0)

                        j++;

                if (j < 1)

                    Console.WriteLine((Math.Pow(2, nombre) - 1) * Math.Pow(2, nombre - 1) + " est un nombre parfait");

                else
                    Console.WriteLine((Math.Pow(2, nombre) - 1) * Math.Pow(2, nombre - 1) + " est pas un nombre parfait");

                nombre++;

                j = 0;

            }
            while (nombre < 61);

        }
    }
}