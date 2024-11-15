using System.ComponentModel;
using System.Diagnostics.Metrics;

namespace Pendu
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string saisie;
            int essai = 0;
            char saisie2;
            string chercher = "";



            Console.WriteLine("Saisir le mot a deviner");
            saisie = Console.ReadLine();

            for (int counter = 0; counter < saisie.Length; counter++)
            {
                if (counter == 0 || counter == saisie.Length - 1)
                {

                    Console.Write(saisie[counter]);
                }

                else
                {
                    Console.Write("_");
                }
            }

            do {

                Console.WriteLine("Saisir une lettre");
                saisie2 = Console.ReadLine()[0];

                foreach (char i in saisie)
                {
                    if (i.Equals(saisie2))
                    {
                        chercher += saisie2 + "";
                        Console.WriteLine(chercher);
                    }
                    else
                    {
                        Console.Write("_");
                    }
                }

                essai++;
            }
            while (essai < 7);

        }
    }
}