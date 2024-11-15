namespace DenombrementLettres
{
    internal class Program
    {
        static void Main(string[] args)
        {
            string saisie;

            Console.WriteLine("Saisir la phrase :");
            saisie = Console.ReadLine();

            for (int i = 0; i < saisie.Length; i++)
            {

                char character = saisie[i];
                int count = 0;

                foreach (char c in saisie)
                {

                    if (c == character)
                    {
                        count++;
                    }

                }

                Console.WriteLine("La phrase contient " + character + " : " + count);
            }

        }
    }
}