using System.Collections;

namespace TriNumero
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int taille;
            string saisie;
            int temp = 0;

            Console.WriteLine("Saisir la taille du tableau : ");
            saisie = Console.ReadLine();
            taille = int.Parse(saisie);

            int[] tableau = new int[taille];

            Console.WriteLine("Saisir les numeros du tableau : ");

            for (int i = 0; i < tableau.Length; i++)
            {
                saisie = Console.ReadLine();
                tableau[i] = int.Parse(saisie);

            }

            for (int i = 0; i < tableau.Length; i++)
            {
                Console.Write(tableau[i] + ", ");
            }

            for (int i = 0; i <= tableau.Length - 1; i++)
            {
                for (int j = i + 1; j < tableau.Length; j++)
                {
                    if (tableau[i] < tableau[j])
                    {
                        temp = tableau[i];
                        tableau[i] = tableau[j];
                        tableau[j] = temp;
                    }
                }
            }
            Console.WriteLine("Tableau triee dans l'ordre decroissant : ");
            foreach (var item in tableau)
            {
                Console.Write(item + ", ");
            }
        }
    }
}