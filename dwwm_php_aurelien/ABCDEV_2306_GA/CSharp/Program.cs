namespace BarnabeCourse
{
    internal class Program
    {
        static void Main(string[] args)
        {
            double somme;
            string saisie;

            Console.WriteLine("Saisir la somme S : ");
            saisie = Console.ReadLine();
            somme = double.Parse(saisie);

            Console.WriteLine("Barnabe peut visiter jusqu'a " + visite(somme) + " magasin(s) avec une somme de " + somme + " euros. ");
        }

        private static double visite(double somme)
        {
            int nbMagasin = 0;

            if (somme <= 1)
            {
                Console.WriteLine("La somme utilisee est trop petite");
            }

            else
            {

                do
                {

                    somme = somme/2 - 1;
                    nbMagasin++;


                } while (somme > 0);
            }

            return nbMagasin;
        }
    }
}