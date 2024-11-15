using System.ComponentModel;
using System.Diagnostics.Metrics;

namespace Pendu
{
    internal class Program
    {
        public static void Pendu()
        {
            string mot1, mot2;
            char lettre;
            int essais1 = 0, essais2 = 0;
            bool test;

            do
            {
                Console.WriteLine("Entrer un mot");
                mot1 = Console.ReadLine();
            } while (mot1.Length < 5);

            char[] tabChar1 = mot1.ToCharArray();
            char[] tabChar2 = mot1.ToCharArray();

            for (int i = 0; i < tabChar2.Length; i++)
            {
                if (i != 0 && i != tabChar2.Length - 1)
                {
                    tabChar2[i] = '_';
                }
            }
            mot2 = new String(tabChar2);
            Console.WriteLine(mot2);

            do
            {
                test = false;
                Console.WriteLine("Supposez une lettre.");
                lettre = char.Parse(Console.ReadLine());

                for (int i = 1; i < tabChar1.Length - 1; i++)
                {
                    if (lettre == tabChar1[i])
                    {
                        tabChar2[i] = lettre;
                        test = true;
                    }
                }

                if (!test)
                {
                    essais1++;
                }
                essais2++;

                mot2 = new string(tabChar2);
                Console.WriteLine(mot2);
            }
            while (!mot1.Equals(mot2) && essais1 != 6);

            if (mot1.Equals(mot2))
            {
                Console.WriteLine("Vous avez trouvé en " + essais2 + " lettres.");
            }
            else
            {
                Console.WriteLine("Vous avez dépassé le nombre d'essais autorisés : 6.Le mot était " + mot1 + ".");
            }

        }
        static void Main(string[] args)
        {
            Pendu();
        }
    }
}