namespace Fourchette
{
    internal class Program
    {
        static void Main(string[] args)
        {
            int numTest;
            Random rnd = new Random();
            int numRandomJoueur = rnd.Next(0, 101);
            int enter = 0;
            int intervalle;
            int min = 0;
            int max = 100;
            string saisie;

            do
            {
                Console.WriteLine("Entrez un nombre compris entre 0 et 100");
                saisie = Console.ReadLine();
                numTest = int.Parse(saisie);
                enter++;
                intervalle = numTest;

                if (numTest > 100 || numTest < 0)
                {
                    Console.WriteLine("Invalide. Le nombre doit etre comprise entre 0 et 100");
                }

                else if (numTest == numRandomJoueur)
                {
                    Console.WriteLine("Bravo vous avez devine le bon numero en " + enter + " coups !");
                    break;
                }

                else if (numTest > numRandomJoueur)
                {
                    Console.WriteLine("Choisir un numero plus petit (entre " + intervalle + " et " + min + ")");
                    max = intervalle;
                }

                else
                {
                    Console.WriteLine("Choisir un numero plus grand (entre " + max + " et " + intervalle + ")");
                    min = intervalle;
                }
            }

            while (numTest <= 100 || numTest >= 0);

            }
        }
    }
