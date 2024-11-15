using System;

namespace Tableau3_3
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int nombre;
            int numsearch;
            string saisie;

            Console.WriteLine("Saisir la taille du tableau");
            saisie = Console.ReadLine();
            nombre = int.Parse(saisie);

            int[] tableau = new int[nombre];

            Console.WriteLine("Entrer les valeurs dans le tableau: ");


            for (int i = 0; i < nombre; i++)
            {
                tableau[i] = int.Parse(Console.ReadLine());
            }

            for (int i = 0; i < nombre; i++)
            {
                Console.Write(tableau[i] + " ,");
            }

            Console.WriteLine("Saisir le numero à chercher");
            saisie = Console.ReadLine();
            numsearch = int.Parse(saisie);

            int index = Array.IndexOf(tableau, numsearch);

            if (index >= 0)
            {
                Console.WriteLine("The value" + numsearch +  "was found at index " + index);
            }
            else
            {
                Console.WriteLine("The value " + numsearch + " was not found in the array");
            }

        }
    }
}